<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Report; // Pastikan model Report sudah ada

class UserReportController extends Controller
{
    public function index()
    {
        // Pastikan pengguna sudah login
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'Silakan login terlebih dahulu.');
        }

        // Ambil laporan milik pengguna yang sedang login
        $reports = Report::where('user_id', Auth::id())->get();

        return view('user.reportuser', compact('reports'));
    }
}
