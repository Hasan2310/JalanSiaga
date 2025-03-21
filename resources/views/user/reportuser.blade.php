@extends('components.navbarL')

@section('title', 'Laporan Saya')

@section('content')
    <div class="container mx-auto mt-20 px-4">
        <h1 class="text-center text-2xl font-bold text-gray-800 mb-6">Laporan Saya</h1>

        @if ($reports->isEmpty())
            <p class="text-center text-gray-600 h-[100vh]">Belum ada laporan.</p>
        @else
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($reports as $report)
                    <div
                        class="bg-white shadow-lg rounded-lg overflow-hidden hover:scale-105 transition-transform duration-200">
                        <!-- Gambar -->
                        <div class="h-40 bg-gray-200">
                            <img src="{{ $report->image ? asset('storage/' . $report->image) : 'https://via.placeholder.com/400x200?text=No+Image' }}"
                                alt="Laporan Gambar" class="object-cover w-full h-full">
                        </div>
                        <div class="p-4">
                            <h2 class="text-xl font-semibold text-gray-800 mb-2 flex items-center">
                                <span class="material-icons text-orange-500 mr-2">Laporan</span>
                                {{ $report->title }}
                            </h2>
                            <p class="text-gray-600 mb-4">
                                <strong>Deskripsi:</strong> {{ Str::limit($report->description, 100) }}
                            </p>
                            <p class="text-gray-600 mb-4">
                                <strong>Lokasi:</strong> {{ $report->location }}
                            </p>
                            <p class="text-gray-500 text-sm">
                                <small>Dilaporkan pada: {{ $report->created_at->format('d-m-Y') }}</small>
                            </p>
                        </div>
                        <div class="p-4 border-t border-gray-200 flex items-center justify-between">
                            <span
                                class="bg-{{ $report->status === 'diproses' ? 'yellow' : ($report->status === 'selesai' ? 'green' : 'red') }}-100 text-{{ $report->status === 'diproses' ? 'yellow' : ($report->status === 'selesai' ? 'green' : 'red') }}-600 px-3 py-1 rounded-full text-sm font-medium">
                                {{ ucfirst($report->status) }}
                            </span>
                            <!-- Form untuk menghapus laporan -->
                            <form action="{{ route('report.destroy', $report->id) }}" method="POST"
                                onsubmit="return confirm('Apakah Anda yakin ingin menghapus laporan ini?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 hover:underline text-sm">Hapus</button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
@endsection
