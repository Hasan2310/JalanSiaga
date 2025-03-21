@extends('components.sidebar')

@section('title', 'Admin | Data Laporan')

@section('content')
<div class="container mx-auto p-6">
<div class="mb-4 border-gray-200 bg-slate-100 p-1 flex justify-center rounded-md w-64">
    <ul class="flex flex-wrap -mb-px text-sm font-medium text-center">
        <!-- Link Diproses -->
        <li class="mr-2">
            <a href="{{ route('reports.index', ['status' => '']) }}" 
               class="{{ request('status') == '' ? 'border-orange-500 text-orange-500' : 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300' }} inline-block p-2 border-b-2 rounded-t-lg">
                Semua
            </a>
        </li>
        <li class="mr-2">
            <a href="{{ route('reports.index', ['status' => 'diproses']) }}" 
               class="{{ request('status') == 'diproses' ? 'border-orange-500 text-orange-500' : 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300' }} inline-block p-2 border-b-2 rounded-t-lg">
                Diproses
            </a>
        </li>
        <!-- Link Selesai -->
        <li class="mr-2">
            <a href="{{ route('reports.index', ['status' => 'selesai']) }}" 
               class="{{ request('status') == 'selesai' ? 'border-orange-500 text-orange-500' : 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300' }} inline-block p-2 border-b-2 rounded-t-lg">
                Selesai
            </a>
        </li>
    </ul>
</div>


    <!-- Sort and Heading -->
    <div class="flex items-center justify-between mb-6 gap-5">
        <h1 class="text-2xl font-semibold text-gray-800">Data Laporan</h1>

        <!-- Dropdown Sortir -->
        <form action="{{ route('reports.index') }}" method="GET">
            <select name="sort" id="sort" onchange="this.form.submit()" 
                class="bg-gray-100 border border-gray-300 rounded px-3 py-2 text-sm">
                <option value="" {{ request('sort') == '' ? 'selected' : '' }}>Default</option>
                <option value="newest" {{ request('sort') == 'newest' ? 'selected' : '' }}>Terbaru</option>
                <option value="oldest" {{ request('sort') == 'oldest' ? 'selected' : '' }}>Terlama</option>
            </select>
        </form>
    </div>

    <!-- Table -->
    <div class="bg-white shadow-md rounded-lg overflow-x-auto">
        <table class="min-w-full bg-white">
            <thead class="bg-gray-800 text-white">
                <tr>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">No</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Nama</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Gambar</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Nomor telp</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Email</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Lokasi</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Deskripsi</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Status</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Aksi</th>
                </tr>
            </thead>
            <tbody class="text-gray-700">
                @forelse ($reports as $key => $report)
                <tr class="hover:bg-gray-100 border-b">
                    <td class="py-3 px-4">{{ $key + 1 }}</td>
                    <td class="py-3 px-4">{{ $report->user->name ?? 'Tidak Ada' }}</td>
                    <td class="py-3 px-4">
                        @if ($report->image)
                            <img src="{{ asset('storage/' . $report->image) }}" alt="Gambar Laporan" 
                                class="h-16 w-16 object-cover cursor-pointer"
                                onclick="showImage('{{ asset('storage/' . $report->image) }}')">
                        @else
                            <span class="text-gray-500">Tidak ada gambar</span>
                        @endif
                    </td>
                    <td class="py-3 px-4">{{ $report->phone }}</td>
                    <td class="py-3 px-4">{{ $report->email }}</td>
                    <td class="py-3 px-4">{{ $report->location }}</td>
                    <td class="py-3 px-4">{{ $report->description }}</td>
                    <td class="py-3 px-4">{{ ucfirst($report->status) }}</td>
                    <td class="py-3 px-4">
                        <a href="{{ route('reports.edit', $report->id) }}" 
                           class="text-blue-500 hover:text-blue-700">Edit</a>
                        <form action="{{ route('reports.destroy', $report->id) }}" method="POST" class="inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500 hover:text-red-700" 
                                onclick="return confirm('Apakah Anda yakin ingin menghapus laporan ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="9" class="py-3 px-4 text-center text-gray-500">Tidak ada laporan ditemukan.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
