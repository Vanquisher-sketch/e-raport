<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // tampil form login
    public function TampilanFormLogin()
    {
        return view('auth.login', [
            'judul' => 'Login E-Raport',
        ]);
    }

    // Tangani proses login
    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Coba autentikasi
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
            // Jika berhasil, redirect ke dashboard atau halaman lain
            return redirect()->intended('/dashboard');
        }

        // Jika gagal, kembali ke halaman login dengan pesan error
        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ])->withInput($request->only('email', 'remember'));
    }

    // Tangani logout
    public function logout(Request $request)
    {
        Auth::logout();

        // Redirect ke halaman login
        return redirect('/login');
    }
}
