<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Report;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Http;

class ReportController extends Controller
{
    public function index()
    {
        // Hitung data
        $userCount = User::count(); // Total jumlah user
        $laporanCount = Report::count(); // Total jumlah laporan
        $laporanSelesaiCount = Report::where('status', 'selesai')->count(); // Jumlah laporan selesai
        $laporanBelumSelesaiCount = Report::where('status', '!=', 'selesai')->count(); // Jumlah laporan belum selesai
        $user = Auth::user(); // Mendapatkan data user yang sedang login
        return view('user.report', compact('user', 'userCount', 'laporanCount', 'laporanSelesaiCount', 'laporanBelumSelesaiCount')); 
    }

    // public function report()
    // {
    //     $user = Auth::user(); // Mendapatkan data user yang sedang login
    //     return view('user.reportuser', compact('user')); 
    // }

    // Method untuk menampilkan form laporan
    public function create()
    {
        $user = Auth::user(); // Mendapatkan data user yang sedang login
        return view('report.create', compact('user')); 
    }

    // Method untuk menyimpan laporan
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'phone' => 'required|string|max:15',
            'description' => 'required|string|max:500',
            'location' => 'required|string|max:255',
            'image' => 'nullable|file|mimes:jpg,jpeg,png', // Mendukung file gambar
        ]);

        // Simpan data ke database
        $report = new Report();
        $report->user_id = Auth::id();
        $report->name = Auth::user()->name; // Nama pengguna login
        $report->email = Auth::user()->email; // Email pengguna login
        $report->phone = $validatedData['phone'];
        $report->description = $validatedData['description'];
        $report->location = $validatedData['location'];

        // Simpan file gambar jika ada
        if ($request->has('image_url')) {
            // Ambil file dari URL
            $response = Http::get($request->input('image_url'));
            if ($response->ok()) {
                $filename = 'reports/' . uniqid() . '.jpg';
                Storage::disk('public')->put($filename, $response->body());
                $report->image = $filename;
            }
        } elseif ($request->hasFile('image')) {
            // Jika unggah langsung dari form
            $path = $request->file('image')->store('reports', 'public');
            $report->image = $path;
        }

        $report->save();

        // Redirect ke halaman laporan
    return redirect()->route('report.index')->with('success', 'Laporan berhasil dikirim!');
    }

    public function destroy($id)
    {
        $report = Report::findOrFail($id); // Temukan laporan berdasarkan ID
        if ($report->image) {
            // Hapus gambar dari storage
            Storage::disk('public')->delete($report->image);
        }

        $report->delete(); // Hapus laporan dari database

        return redirect()->route('user.reports')->with('success', 'Laporan berhasil dihapus!');
    }
}
