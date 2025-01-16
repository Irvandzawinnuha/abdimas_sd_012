<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use App\Models\User;
use App\Mail\ResetPasswordMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class LupaPasswordController extends Controller
{
    public function showForm()
    {
        return view('backend.lupa_password');
    }

    public function sendResetLink(Request $request)
    {
        try {
            $request->validate([
                'email' => 'required|email|exists:users,email',
            ], [
                'email.required' => 'Email wajib diisi',
                'email.email' => 'Format email tidak valid',
                'email.exists' => 'Email tidak terdaftar'
            ]);

            $user = User::where('email', $request->email)->first();
            $token = Str::random(64);

            \Log::info('Generating reset password token for email: ' . $request->email);

            // Simpan token ke database
            \DB::table('password_reset_tokens')->updateOrInsert(
                ['email' => $request->email],
                [
                    'email' => $request->email,
                    'token' => $token,
                    'created_at' => now()
                ]
            );

            Mail::to($request->email)->send(new ResetPasswordMail($token));
            
            \Log::info('Reset password email sent successfully to: ' . $request->email);
            
            return back()->with('success', 'Link reset password telah dikirim ke email Anda!');
        } catch (\Exception $e) {
            \Log::error('Reset password error: ' . $e->getMessage());
            return back()->withErrors(['email' => 'Gagal mengirim email reset password.']);
        }
    }
}
