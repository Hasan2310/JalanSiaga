<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login'); // Sesuaikan path file Blade Anda
    }

    /**
     * Tampilkan form login.
     */
    public function create()
    {
        return view('auth.login'); // Sesuaikan path file Blade Anda
    }

    /**
     * Tangani proses login.
     */
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Cari user berdasarkan email
        $user = User::where('email', $request->email)->first();

        // Cek apakah user ditemukan dan password cocok
        if ($user && $user->password === $request->password) {
            Auth::login($user);

            // Redirect berdasarkan role
            if ($user->role === 'admin') {
                return redirect()->route('dashboard')->with('success', 'Selamat datang, Admin!');
            } else {
                return redirect()->route('home')->with('success', 'Selamat datang, User!');
            }
        }

        // Jika login gagal
        return back()->withErrors(['email' => 'Email atau password salah.']);
    }

    /**
     * Tangani logout pengguna.
     */
    public function logout()
    {
        Auth::logout();
        return redirect('/')->with('success', 'Anda telah keluar.');
    }

    // Fungsi lainnya (index, show, edit, update) tidak digunakan
}
