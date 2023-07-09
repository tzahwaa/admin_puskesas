<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use App\Models\Balita;


class DashboardController extends Controller
{
    public function index() {
        $balita = Balita::count();
        $stunting = DB::table('balita')->where('klasifikasi_panjang_badan', 'Stunting')->count();
        $tidakStuntingTinggi = DB::table('balita')->where('klasifikasi_panjang_badan', 'Tinggi')->count();
        $tidakStuntingNormal = DB::table('balita')->where('klasifikasi_panjang_badan', 'Normal')->count();
        $totalTidakStunting = $tidakStuntingNormal + $tidakStuntingTinggi;
  
        $beratkurang = DB::table('balita')->where('klasifikasi_berat_badan', 'Kurang')->count();
        $beratlebih = DB::table('balita')->where('klasifikasi_berat_badan', 'Lebih')->count();
        $beratnormal = DB::table('balita')->where('klasifikasi_berat_badan', 'Normal')->count();
        // $jantungnormal = DB::table('balita')->where('klasifikasi_detak_jantung', 'normal')->count();
        // $jantungtidaknormal = DB::table('balita')->where('klasifikasi_detak_jantung', 'tidak normal')->count();
        return view('dashboard/index', compact('balita','stunting','totalTidakStunting','beratkurang','beratlebih','beratnormal'));

    }
    
}
