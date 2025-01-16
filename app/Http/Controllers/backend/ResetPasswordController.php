<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class ResetPasswordController extends Controller
{
    public function showResetForm($token)
    {
        return view('backend.reset_password', ['token' => $token]);
    }

    public function reset(Request $request)
    {
        $request->validate([
            'token' => 'required',
            'email' => 'required|email|exists:users,email',
            'password' => 'required|min:8|confirmed',
        ], [
            'email.required' => 'Email wajib diisi',
            'email.email' => 'Format email tidak valid',
            'email.exists' => 'Email tidak terdaftar',
            'password.required' => 'Password wajib diisi',
            'password.min' => 'Password minimal 8 karakter',
            'password.confirmed' => 'Konfirmasi password tidak cocok'
        ]);

        try {
            Log::info('Attempting password reset for email: ' . $request->email);

            // Cek token reset password
            $resetRecord = DB::table('password_reset_tokens')
                ->where('token', $request->token)
                ->where('email', $request->email)
                ->first();

            if (!$resetRecord) {
                Log::warning('Invalid reset token for email: ' . $request->email);
                return back()->withErrors(['email' => 'Token reset password tidak valid.']);
            }

            // Cek apakah token masih valid (60 menit)
            if (now()->diffInMinutes($resetRecord->created_at) > 60) {
                DB::table('password_reset_tokens')->where('email', $request->email)->delete();
                Log::warning('Expired reset token for email: ' . $request->email);
                return back()->withErrors(['email' => 'Token reset password sudah kadaluarsa.']);
            }

            // Update password
            $user = User::where('email', $request->email)->first();
            $user->password = Hash::make($request->password);
            $user->save();

            // Hapus token setelah berhasil
            DB::table('password_reset_tokens')->where('email', $request->email)->delete();

            Log::info('Password successfully reset for email: ' . $request->email);

            return redirect()->route('backend.login')
                ->with('success', 'Password berhasil direset. Silakan login dengan password baru.');

        } catch (\Exception $e) {
            Log::error('Password reset error: ' . $e->getMessage());
            return back()->withErrors(['email' => 'Terjadi kesalahan saat mereset password.']);
        }
    }
}
