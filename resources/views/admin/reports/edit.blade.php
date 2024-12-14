@extends('components.sidebar')

@section('title', 'Admin | Edit Report')

@section('content')
<div class="container mx-auto p-6">
    <h1 class="text-2xl font-semibold text-gray-800 mb-6">Edit Laporan</h1>
    <form action="{{ route('reports.update', $report->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="mb-4">
                <label for="user_id" class="block text-sm font-semibold text-gray-700">Nama Pengguna</label>
                <select name="user_id" id="user_id" class="w-full p-2 border border-gray-300 rounded-md" required>
                    <option value="" disabled selected>Pilih Pengguna</option>
                    @foreach ($users as $user)
                        <option value="{{ $user->id }}" {{ old('user_id', $report->user_id) == $user->id ? 'selected' : '' }}>
                            {{ $user->name }}
                        </option>
                    @endforeach
                </select>
                @error('user_id') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>
            <div class="mb-4">
                <label for="phone" class="block text-sm font-semibold text-gray-700">Nomor Telepon</label>
                <input type="text" name="phone" id="phone" value="{{ old('phone', $report->phone) }}" 
                       class="w-full p-2 border border-gray-300 rounded-md" required>
                @error('phone') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>
            <div class="mb-4">
                <label for="location" class="block text-sm font-semibold text-gray-700">Lokasi</label>
                <input type="text" name="location" id="location" value="{{ old('location', $report->location) }}" 
                       class="w-full p-2 border border-gray-300 rounded-md" required>
                @error('location') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>
            <div class="mb-4">
                <label for="description" class="block text-sm font-semibold text-gray-700">Deskripsi</label>
                <textarea name="description" id="description" rows="4" 
                          class="w-full p-2 border border-gray-300 rounded-md" required>{{ old('description', $report->description) }}</textarea>
                @error('description') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>
            <div class="mb-4">
                <label for="image" class="block text-sm font-semibold text-gray-700">Gambar (Optional)</label>
                <input type="file" name="image" id="image" 
                       class="w-full p-2 border border-gray-300 rounded-md" accept="image/*">
                @error('image') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>
            <div class="mb-4">
                <label for="status" class="block text-sm font-semibold text-gray-700">Status Laporan</label>
                <select name="status" id="status" class="w-full p-2 border border-gray-300 rounded-md" required>
                    <option value="diproses" {{ old('status', $report->status) == 'diproses' ? 'selected' : '' }}>Diproses</option>
                    <option value="selesai" {{ old('status', $report->status) == 'selesai' ? 'selected' : '' }}>Selesai</option>
                </select>
                @error('status') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>
        </div>
        <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded-md hover:bg-blue-700">Update Laporan</button>
    </form>
</div>
@endsection
