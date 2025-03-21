@extends('components.sidebar')

@section('title', 'Admin | Edit Status Laporan')

@section('content')
<div class="container mx-auto p-6">
    <h1 class="text-2xl font-semibold text-gray-800 mb-6">Edit Status Laporan</h1>
    <form action="{{ route('reports.update', $report->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="status" class="block text-sm font-semibold text-gray-700">Status Laporan</label>
            <select name="status" id="status" class="w-full p-2 border border-gray-300 rounded-md" required>
                <option value="diproses" {{ old('status', $report->status) == 'diproses' ? 'selected' : '' }}>Diproses</option>
                <option value="selesai" {{ old('status', $report->status) == 'selesai' ? 'selected' : '' }}>Selesai</option>
            </select>
            @error('status') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>
        <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded-md hover:bg-blue-700">Update Status</button>
    </form>
</div>
@endsection
