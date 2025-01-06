<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Mail;

class ResetLinkController extends Controller
{
    /**
     * Mengirimkan email link reset password.
     */
    public function sendResetLink(Request $request)
    {
        $request->validate(['email' => 'required|email']);

        $status = Password::sendResetLink(
            $request->only('email')
        );

        if ($status === Password::RESET_LINK_SENT) {
            return back()->with('status', 'Link reset password telah dikirim!');
        }

        return back()->withErrors(['email' => 'Terjadi kesalahan atau email tidak ditemukan.']);
    }

        public function showLinkRequestForm()
    {
        logger('Method showLinkRequestForm accessed');
        return view('backend.lupa_password');
    }
}
