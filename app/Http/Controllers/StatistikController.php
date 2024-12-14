<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class StatistikController extends Controller
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
    $monthlyReports = \App\Models\Report::whereDate('created_at', [now()->subDays(30)])
        ->orderBy('created_at', 'desc')
        ->first();

    return view('home', compact('weeklyReports', 'newReports', 'monthlyReports'));
}


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
