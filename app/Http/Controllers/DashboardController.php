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
        $stunting = DB::table('balita')->where('klasifikasi_panjang_badan', 'stunting')->count();
        $tidakstunting = DB::table('balita')->where('klasifikasi_panjang_badan', 'normal')->count();
        $gizibaik = DB::table('balita')->where('klasifikasi_berat_badan', 'gizi baik')->count();
        $giziburuk = DB::table('balita')->where('klasifikasi_berat_badan', 'gizi buruk')->count();
        $gizilebih = DB::table('balita')->where('klasifikasi_berat_badan', 'gizi lebih')->count();
        $jantungnormal = DB::table('balita')->where('klasifikasi_detak_jantung', 'normal')->count();
        $jantungtidaknormal = DB::table('balita')->where('klasifikasi_detak_jantung', 'tidak normal')->count();
        return view('dashboard/index', compact('balita','stunting','tidakstunting','gizibaik','giziburuk','gizilebih','jantungnormal','jantungtidaknormal'));

    }
    
}
