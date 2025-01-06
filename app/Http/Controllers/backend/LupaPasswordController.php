<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\backend\Password;

class LupaPasswordController extends Controller
{
    public function showRequestForm()
    {
        return view('lupa_password');
    }

    public function sendResetLink(Request $request)
    {
        $request->validate(['email' => 'required|email']);

        $status = Password::sendResetLink(
            $request->only('email')
        );

        return $status === Password::RESET_LINK_SENT
            ? back()->with(['status' => __($status)])
            : back()->withErrors(['email' => __($status)]);
    }
}
