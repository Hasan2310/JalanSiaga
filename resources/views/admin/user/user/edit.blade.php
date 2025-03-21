@extends('components.sidebar')

@section('title', 'Admin | Edit User')

@section('content')
<div class="container mx-auto p-6">
    <h1 class="text-2xl font-bold text-gray-800 mb-6">Edit User</h1>
    <form action="{{ route('user.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label class="block text-gray-700">Nama</label>
            <input type="text" name="name" value="{{ $user->name }}" class="w-full p-2 border border-gray-300 rounded" required>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700">Email</label>
            <input type="email" name="email" value="{{ $user->email }}" class="w-full p-2 border border-gray-300 rounded" required>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700">Role</label>
            <select name="role" class="w-full p-2 border border-gray-300 rounded" required>
                <option value="admin" {{ $user->role === 'admin' ? 'selected' : '' }}>Admin</option>
                <option value="user" {{ $user->role === 'user' ? 'selected' : '' }}>User</option>
            </select>
        </div>
        <button type="submit" class="bg-orange-500 text-white py-2 px-4 rounded">Simpan</button>
    </form>
</div>
@endsection
