<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Laporan Minggu Lalu (1 Laporan)
        $weeklyReports = \App\Models\Report::whereDate('created_at', [now()->subWeek()])
            ->orderBy('created_at', 'desc')
            ->first();

        // Laporan Terbaru (1 Laporan dari Hari Ini)
        $newReports = \App\Models\Report::whereDate('created_at', Carbon::today())
            ->orderBy('created_at', 'desc')
            ->first();

        // Laporan Bulanan (1 Laporan dari 30 Hari Terakhir)
        $monthlyReports = \App\Models\Report::whereDate('created_at', [now()->subDays()])
            ->orderBy('created_at', 'desc')
            ->first();

        return view('user.home', compact('weeklyReports', 'newReports', 'monthlyReports'));
    }
}
