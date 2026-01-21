<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use App\Models\Absensi;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        $totalKaryawan = Karyawan::count();
        $hadirHariIni = Absensi::whereDate('tanggal', Carbon::today())
            ->where('status', 'Hadir')
            ->count();

        return view('dashboard', compact('totalKaryawan', 'hadirHariIni'));
    }
}