@extends('components.sidebar')

@section('title', 'Admin | Data User')

@section('content')
<div class="container mx-auto p-6">
    <!-- Tabs -->
    <div class="mb-4 border-gray-200 bg-slate-100 p-1 flex justify-center rounded-md w-40">
        <ul class="flex flex-wrap -mb-px text-sm font-medium text-center">
            <!-- Link User -->
            <li class="mr-2">
                <a href="{{ route('user.index') }}" 
                class="{{ request()->routeIs('user.*') ? 'border-orange-500 text-orange-500' : 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300' }} inline-block p-1 border-b-2 rounded-t-lg">
                    User
                </a>
            </li>
            <!-- Link Admin -->
            <li class="mr-2">
                <a href="{{ route('admin.index') }}" 
                class="{{ request()->routeIs('admin.*') ? 'border-orange-500 text-orange-500' : 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300' }} inline-block p-1 border-b-2 rounded-t-lg">
                    Admin
                </a>
            </li>
        </ul>
    </div>

    <div class="flex items-center mb-6 gap-5">
        <h1 class="text-2xl font-semibold text-gray-800">User</h1>
        <a href="{{ route('user.create') }}" 
           class="text-white px-3 py-1 rounded-lg bg-blue-600">
            Add new
        </a>
    </div>

    <!-- Table -->
    <div class="bg-white shadow-md rounded-lg overflow-x-auto">
        <table class="min-w-full bg-white">
            <thead class="bg-gray-800 text-white">
                <tr>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">No</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Nama</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Email</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Role</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Aksi</th>
                </tr>
            </thead>
            <tbody class="text-gray-700">
                @foreach ($users as $key => $user)
                <tr class="hover:bg-gray-100 border-b">
                    <td class="py-3 px-4">{{ $key + 1 }}</td>
                    <td class="py-3 px-4">{{ $user->name }}</td>
                    <td class="py-3 px-4">{{ $user->email }}</td>
                    <td class="py-3 px-4">{{ ucfirst($user->role) }}</td>
                    <td class="py-3 px-4">
                        <a href="{{ route('user.edit', $user->id) }}" 
                           class="text-blue-500 hover:text-blue-700">Edit</a>
                        <form action="{{ route('user.destroy', $user->id) }}" method="POST" class="inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500 hover:text-red-700" 
                                onclick="return confirm('Apakah Anda yakin ingin menghapus user ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
