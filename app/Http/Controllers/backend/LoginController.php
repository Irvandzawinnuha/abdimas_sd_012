<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\User;

class LoginController extends Controller
{
    /**
     * Display the login form.
     *
     * @return \Illuminate\View\View
     */
    public function html()
    {
        return view('backend.login');
    }

    /**
     * Handle login request.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function login(Request $request)
    {
        // Validasi input
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Cek email dan password
        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return redirect()->back()->withErrors(['error' => 'Email tidak ditemukan.'])->withInput();
        }

        if (!$user->is_active) {
            return redirect()->back()->withErrors(['error' => 'Akun belum diverifikasi. Silakan cek email Anda.'])->withInput();
        }

        if (!Hash::check($request->password, $user->password)) {
            return redirect()->back()->withErrors(['error' => 'Password salah.'])->withInput();
        }

        // Login berhasil
        Auth::login($user);
        return redirect()->route('backend.dashboard')->with('success', 'Login berhasil!');
    }

    /**
     * Handle logout request.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout()
    {
        Auth::logout();
        return redirect()->route('backend.login')->with('success', 'Anda berhasil logout.');
    }
}
