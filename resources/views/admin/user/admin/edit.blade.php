@extends('components.sidebar')

@section('title', 'Admin | Edit Admin')

@section('content')
<div class="container mx-auto p-6">
    <h1 class="text-2xl font-semibold text-gray-800 mb-6">Edit User</h1>
    <form action="{{ route('user.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="mb-4">
                <label for="name" class="block text-sm font-semibold text-gray-700">Nama</label>
                <input type="text" name="name" id="name" value="{{ $user->name }}" class="w-full p-2 border border-gray-300 rounded-md" required>
            </div>
            <div class="mb-4">
                <label for="email" class="block text-sm font-semibold text-gray-700">Email</label>
                <input type="email" name="email" id="email" value="{{ $user->email }}" class="w-full p-2 border border-gray-300 rounded-md" required>
            </div>
            <div class="mb-4">
                <label for="role" class="block text-sm font-semibold text-gray-700">Role</label>
                <select name="role" id="role" class="w-full p-2 border border-gray-300 rounded-md" required>
                    <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>Admin</option>
                    <option value="user" {{ $user->role == 'user' ? 'selected' : '' }}>User</option>
                </select>
            </div>
        </div>
        <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded-md hover:bg-blue-700">Update User</button>
    </form>
</div>
@endsection
