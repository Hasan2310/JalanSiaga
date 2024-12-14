<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Report;

class DashboardController extends Controller
{
    public function index()
    {
        $laporanSelesaiData = Report::selectRaw('MONTH(created_at) as bulan, COUNT(*) as jumlah')
            ->where('status', 'selesai')
            ->groupBy('bulan')
            ->pluck('jumlah', 'bulan')->toArray();

        $laporanBelumSelesaiData = Report::selectRaw('MONTH(created_at) as bulan, COUNT(*) as jumlah')
            ->where('status', 'diproses')
            ->groupBy('bulan')
            ->pluck('jumlah', 'bulan')->toArray();

        // Isi data 0 untuk bulan yang tidak ada laporan
        $dataSelesai = [];
        $dataBelumSelesai = [];
        for ($i = 1; $i <= 12; $i++) {
            $dataSelesai[] = $laporanSelesaiData[$i] ?? 0;
            $dataBelumSelesai[] = $laporanBelumSelesaiData[$i] ?? 0;
        }



        // Hitung data
        $userCount = User::count(); // Total jumlah user
        $laporanCount = Report::count(); // Total jumlah laporan
        $laporanSelesaiCount = Report::where('status', 'selesai')->count(); // Jumlah laporan selesai
        $laporanBelumSelesaiCount = Report::where('status', '!=', 'selesai')->count(); // Jumlah laporan belum selesai

        // Kirim data ke view
        return view('admin.dashboard', [
            'userCount' => User::count(),
            'laporanCount' => Report::count(),
            'laporanSelesaiCount' => Report::where('status', 'selesai')->count(),
            'laporanBelumSelesaiCount' => Report::where('status', 'diproses')->count(),
            'laporanSelesaiData' => $dataSelesai,
            'laporanBelumSelesaiData' => $dataBelumSelesai,
        ]);
    }
}
