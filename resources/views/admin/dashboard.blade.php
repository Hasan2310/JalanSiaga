@extends('components.sidebar')

@section('title', 'Admin | Dashboard')

@section('content')
<h1 class="text-black text-2xl font-bold">Dashboard</h1>
<div class="flex flex-col items-center">
    <div class="m-0 sm:m-10 sm:rounded-lg flex flex-wrap justify-center gap-6">
        <!-- Card 1: Jumlah User -->
        <div class="bg-gradient-to-r from-blue-400 to-blue-600 p-6 rounded-lg shadow-lg flex-1 max-w-xs text-center transform transition-transform hover:scale-105">
            <div class="flex justify-center items-center mb-4">
                <i class="fas fa-users text-4xl text-white"></i>
            </div>
            <h2 class="text-lg font-semibold text-white mb-2">Jumlah User</h2>
            <p class="text-3xl font-bold text-white">{{ $userCount }}</p>
        </div>

        <!-- Card 2: Jumlah Laporan -->
        <div class="bg-gradient-to-r from-orange-400 to-orange-600 p-6 rounded-lg shadow-lg flex-1 max-w-xs text-center transform transition-transform hover:scale-105">
            <div class="flex justify-center items-center mb-4">
                <i class="fas fa-file-alt text-4xl text-white"></i>
            </div>
            <h2 class="text-lg font-semibold text-white mb-2">Jumlah Laporan</h2>
            <p class="text-3xl font-bold text-white">{{ $laporanCount }}</p>
        </div>
        
        <!-- Card 3: Jumlah Laporan Belum Selesai -->
        <div class="bg-gradient-to-r from-red-400 to-red-600 p-6 rounded-lg shadow-lg flex-1 max-w-xs text-center transform transition-transform hover:scale-105">
            <div class="flex justify-center items-center mb-4">
                <i class="fas fa-clock text-4xl text-white"></i>
            </div>
            <h2 class="text-lg font-semibold text-white mb-2">Laporan Belum Selesai</h2>
            <p class="text-3xl font-bold text-white">{{ $laporanBelumSelesaiCount }}</p>
        </div>

        <!-- Card 4: Jumlah Laporan Selesai -->
        <div class="bg-gradient-to-r from-green-400 to-green-600 p-6 rounded-lg shadow-lg flex-1 max-w-xs text-center transform transition-transform hover:scale-105">
            <div class="flex justify-center items-center mb-4">
                <i class="fas fa-check-circle text-4xl text-white"></i>
            </div>
            <h2 class="text-lg font-semibold text-white mb-2">Laporan Selesai</h2>
            <p class="text-3xl font-bold text-white">{{ $laporanSelesaiCount }}</p>
        </div>
    </div>
</div>


<!-- Statistik Laporan -->
<div class="mt-10 text-center">
    <h3 class="text-2xl font-semibold text-blue-600 mb-8">Statistik Laporan</h3>
    <div class="flex justify-center">
        <canvas id="statistikLineChart" class="w-full sm:w-2/3"></canvas>
    </div>
</div>
<script>
    // Animasi CSS tambahan
    document.querySelectorAll('.animate-spin-slow').forEach(icon => {
        icon.style.animation = 'spin 5s linear infinite';
    });

var ctx = document.getElementById('statistikLineChart').getContext('2d');
var statistikLineChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'], 
        datasets: [
            {
                label: 'Laporan Selesai',
                data: @json($laporanSelesaiData), // Data dari controller
                backgroundColor: 'rgba(54, 162, 235, 0.2)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 2,
                tension: 0.4,
            },
            {
                label: 'Laporan Belum Selesai',
                data: @json($laporanBelumSelesaiData), // Data dari controller
                backgroundColor: 'rgba(255, 99, 132, 0.2)',
                borderColor: 'rgba(255, 99, 132, 1)',
                borderWidth: 2,
                tension: 0.4,
            }
        ]
    },
    options: {
        responsive: true,
        plugins: {
            legend: {
                display: true,
                position: 'top'
            },
        },
        scales: {
            x: {
                title: {
                    display: true,
                    text: 'Bulan'
                }
            },
            y: {
                beginAtZero: true,
                title: {
                    display: true,
                    text: 'Jumlah Laporan'
                }
            }
        }
    }
});
</script>

@endsection
