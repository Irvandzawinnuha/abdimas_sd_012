<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Mail\VerificationEmail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class DaftarController extends Controller
{
    /**
     * Display the daftar form.
     *
     * @return \Illuminate\View\View
     */
    public function html()
    {
        return view('backend.daftar');
    }

    /**
     * Handle user registration.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'first_name' => 'required|string|max:100',
            'last_name' => 'required|string|max:100',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8',
            'gender' => 'required|in:Laki-Laki,Perempuan',
        ], [
            'first_name.required' => 'Nama depan wajib diisi',
            'last_name.required' => 'Nama belakang wajib diisi',
            'email.required' => 'Email wajib diisi',
            'email.email' => 'Format email tidak valid',
            'email.unique' => 'Email sudah terdaftar',
            'password.required' => 'Password wajib diisi',
            'password.min' => 'Password minimal 8 karakter',
            'gender.required' => 'Jenis kelamin wajib dipilih',
            'gender.in' => 'Pilihan jenis kelamin tidak valid',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $user = User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'gender' => $request->gender,
            'is_active' => false,
            'verification_token' => Str::random(64),
        ]);

        try {
            Mail::to($user->email)->send(new VerificationEmail($user));
            return redirect()->route('backend.login')
                ->with('success', 'Pendaftaran berhasil! Silakan cek email Anda untuk verifikasi.');
        } catch (\Exception $e) {
            $user->delete();
            return redirect()->back()
                ->with('error', 'Gagal mengirim email verifikasi. Silakan coba lagi.')
                ->withInput();
        }
    }

    public function verifyEmail($token)
    {
        \Log::info('Verifying email with token: ' . $token);
        
        $user = User::where('verification_token', $token)->first();
        
        if (!$user) {
            \Log::warning('Invalid verification token: ' . $token);
            return redirect()->route('backend.login')
                ->with('error', 'Token verifikasi tidak valid.');
        }

        try {
            $user->is_active = true;
            $user->email_verified_at = now();
            $user->verification_token = null;
            $user->save();

            \Log::info('User verified successfully: ' . $user->email);
            
            return redirect()->route('backend.login')
                ->with('success', 'Email berhasil diverifikasi. Silakan login.');
        } catch (\Exception $e) {
            \Log::error('Error verifying user: ' . $e->getMessage());
            return redirect()->route('backend.login')
                ->with('error', 'Terjadi kesalahan saat verifikasi. Silakan coba lagi.');
        }
    }

    public function checkVerificationStatus($email)
    {
        if (app()->environment('local')) {
            $user = User::where('email', $email)->first();
            if ($user) {
                return response()->json([
                    'email' => $user->email,
                    'is_active' => $user->is_active,
                    'verification_token' => $user->verification_token,
                    'email_verified_at' => $user->email_verified_at
                ]);
            }
            return response()->json(['error' => 'User not found'], 404);
        }
        return abort(404);
    }
}
