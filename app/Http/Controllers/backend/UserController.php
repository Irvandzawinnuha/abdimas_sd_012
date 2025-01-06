<?php
namespace App\Http\Controllers;

use Illuminate\Support\backend\Mail;
use Illuminate\Http\Request;
use App\Mail\YourMailable; // Import Mailable class (pastikan sudah dibuat)

//ini buat gmail sama bagian EmailController 

class UserController extends Controller
{
    // Fungsi untuk mengirim email dinamis
    public function sendDynamicEmail(Request $request)
    {
        $user = auth()->user(); // Ambil data user yang login

        // Pastikan user memiliki email dan nama
        if (!$user || !$user->email || !$user->name) {
            return response()->json(['error' => 'User data is incomplete'], 400);
        }

        // Atur konfigurasi email secara runtime
        config([
            'mail.from.address' => $user->email, // Gunakan email user
            'mail.from.name' => $user->name, // Gunakan nama user
        ]);

        // Kirim email menggunakan konfigurasi yang baru diatur
        Mail::to('recipient@example.com')->send(new YourMailable());

        return response()->json(['message' => 'Email sent successfully!']);
    }
}
