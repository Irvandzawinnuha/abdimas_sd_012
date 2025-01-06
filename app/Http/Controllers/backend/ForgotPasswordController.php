<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;

class ForgotPasswordController extends Controller
{
    /**
     * Menampilkan form untuk request reset password.
     */
    public function showForm()
    {
        return view('backend.lupa_password'); // Blade file untuk form reset password
    }

        public function sendResetLinkEmail(Request $request)
    {
        $request->validate(['email' => 'required|email']);

        $status = Password::sendResetLink(
            $request->only('email')
        );

        return $status === Password::RESET_LINK_SENT
            ? back()->with(['status' => __($status)]) // Kirim status berhasil
            : back()->withErrors(['email' => __($status)]); // Kirim error
    }

}
