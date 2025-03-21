<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    /**
     * Tampilkan halaman pendaftaran.
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Tangani proses pendaftaran.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);

        return redirect()->route('login.index')->with('success', 'Pendaftaran berhasil! Silakan masuk.');
    }
}
