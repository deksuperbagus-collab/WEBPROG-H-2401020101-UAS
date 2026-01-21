<?php

namespace App\Http\Controllers;

use App\Models\Absensi;
use App\Models\Karyawan;
use Illuminate\Http\Request;
use Carbon\Carbon;

class AbsensiController extends Controller
{
    public function index()
    {
        $karyawan = Karyawan::all();
        $absensi = Absensi::with('karyawan')->orderBy('tanggal','desc')->get();

        return view('absensi.index', compact('karyawan','absensi'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'karyawan_id' => 'required',
            'status' => 'required'
        ]);

        Absensi::create([
            'karyawan_id' => $request->karyawan_id,
            'tanggal' => Carbon::today(),
            'status' => $request->status
        ]);

        return redirect('/absensi')->with('success','Absensi berhasil disimpan');
    }
}