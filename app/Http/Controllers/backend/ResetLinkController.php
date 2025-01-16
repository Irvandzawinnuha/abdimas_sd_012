<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Mail;
use App\Models\User;
use App\Mail\ResetPasswordMail;
use Illuminate\Support\Str;

class ResetLinkController extends Controller
{
    public function showLinkRequestForm()
    {
        return view('backend.lupa_password');
    }

    public function sendResetLink(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users,email'
        ], [
            'email.required' => 'Email wajib diisi',
            'email.email' => 'Format email tidak valid',
            'email.exists' => 'Email tidak ditemukan'
        ]);

        try {
            $token = Str::random(64);
            
            // Simpan token ke database
            \DB::table('password_reset_tokens')->updateOrInsert(
                ['email' => $request->email],
                [
                    'email' => $request->email,
                    'token' => $token,
                    'created_at' => now()
                ]
            );

            // Kirim email
            Mail::to($request->email)->send(new ResetPasswordMail($token));

            \Log::info('Reset password link sent to: ' . $request->email);
            
            return back()->with('success', 'Link reset password telah dikirim ke email Anda!');
            
        } catch (\Exception $e) {
            \Log::error('Error sending reset password email: ' . $e->getMessage());
            return back()->withErrors(['email' => 'Terjadi kesalahan saat mengirim email reset password.']);
        }
    }
}
