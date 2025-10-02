<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kalibrasi;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        // Ambil data permohonan kalibrasi milik user yang sedang login (berdasarkan user_id)
        $kalibrasis = Kalibrasi::where('user_id', $user->id)
            ->orderByDesc('created_at')
            ->take(10)
            ->get();

        $totalKalibrasi = Kalibrasi::where('user_id', $user->id)->count();
        $totalSelesai = Kalibrasi::where('user_id', $user->id)->where('status', 'selesai')->count();
        $totalProses = Kalibrasi::where('user_id', $user->id)->where('status', 'proses')->count();

        return view('components.dashboard.dashboard', compact(
            'kalibrasis',
            'totalKalibrasi',
            'totalSelesai',
            'totalProses'
        ));
    }
}
