<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Report;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class ReportsController extends Controller
{
    public function index(Request $request)
    {
        // Ambil parameter status dari URL
        $status = $request->query('status');

        // Query data laporan
        $reports = \App\Models\Report::query(); // Gunakan query builder untuk fleksibilitas lebih

        // Filter berdasarkan status
        if ($status === 'diproses') {
            $reports->where('status', 'diproses');
        } elseif ($status === 'selesai') {
            $reports->where('status', 'selesai');
        }

        // Ambil parameter sort dari query string, default kosong
        $sort = $request->query('sort', '');

        // Terapkan pengurutan berdasarkan parameter sort
        if ($sort === 'newest') {
            $reports->orderBy('created_at', 'desc'); // Urutkan berdasarkan terbaru
        } elseif ($sort === 'oldest') {
            $reports->orderBy('created_at', 'asc'); // Urutkan berdasarkan terlama
        }

        // Ambil data dengan pagination (opsional) atau tanpa pagination
        $reports = $reports->with('user')->get(); // Gunakan paginate atau get() sesuai kebutuhan

        // Kirim data ke view
        return view('admin.reports.index', compact('reports', 'sort', 'status'));
    }

    public function edit($id)
    {
        $report = Report::findOrFail($id);
        $users = User::all(); // Untuk dropdown user
        return view('admin.reports.edit', compact('report', 'users'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'status' => 'required|string|in:diproses,selesai',
        ]);

        $report = Report::findOrFail($id);
        $report->update(['status' => $validatedData['status']]);

        return redirect()->route('reports.index')->with('success', 'Status laporan berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $report = Report::findOrFail($id);

        if ($report->image) {
            Storage::delete('public/' . $report->image);
        }

        $report->delete();

        return redirect()->route('reports.index')->with('success', 'Laporan berhasil dihapus.');
    }
}