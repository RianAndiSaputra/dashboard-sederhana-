<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;

class PegawaiController extends Controller
{
    public function index()
    {
        // Ambil data pegawai dari database
        $pegawai = Pegawai::select('divisi', \DB::raw('COUNT(*) as jumlah'))
            ->groupBy('divisi')
            ->orderBy('jumlah', 'desc')
            ->get();

        // Kirim data ke view
        return view('pegawai.index', compact('pegawai'));
    }
}
