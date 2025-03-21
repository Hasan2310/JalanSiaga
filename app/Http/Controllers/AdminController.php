<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    // Menampilkan data admin
    public function index()
    {
        $users = User::where('role', 'admin')->get(); // Filter hanya admin
        return view('admin.user.admin.index', compact('users'));
    }

    // Menampilkan form untuk create user
    public function create()
    {
        return view('admin.user.admin.create');
    }

    // Menyimpan data user baru
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'role' => 'admin',
        ]);

        return redirect()->route('admin.index')->with('success', 'User berhasil ditambahkan.');
    }

    // Menampilkan form untuk edit user
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('admin.user.admin.edit', compact('user'));
    }

    // Mengupdate data user
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $id,
            'role' => 'required|in:user,admin',
        ]);

        $user = User::findOrFail($id);
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
        ]);

        return redirect()->route('admin.index')->with('success', 'User berhasil diperbarui.');
    }

    // Menghapus data user
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('admin.index')->with('success', 'User berhasil dihapus.');
    }
}
