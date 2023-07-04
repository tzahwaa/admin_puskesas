<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Puskesmas;
use App\Models\Posyandu;
use App\Models\Balita;
use App\Exports\BalitaExport;
use Maatwebsite\Excel\Facades\Excel;

class DataBalitaController extends Controller
{
    public function index(Request $request)
{
    $puskesmasList = Puskesmas::all();
    $keyword = $request->keyword;
    $databalita = Balita::where('nama_anak', 'LIKE', '%'.$keyword.'%')
        ->paginate(10);
    $databalita->appends($request->all());
    if ($databalita->isEmpty()) {
        $message = "Data balita tidak ditemukan.";
        return redirect('databalita')->with('search_message', $message);
    }
    return view('databalita.index', compact('puskesmasList','databalita','keyword'));
}
     public function getPosyandu(Request $request){
        $posyanduList = Posyandu::where("puskesmas_id", $request->id_puskesmas)->pluck('id','nama_posyandu');

        // dd($posyanduList);
        return response()->json($posyanduList);

    }
//     public function getPosyandu(Request $request, $puskesmasId)
// {
//     $posyanduList = Posyandu::where('puskesmas_id', $puskesmasId)->get();
    
//     return response()->json($posyanduList);
// }
    public function getBalitaByPosyandu(Request $request)
    {
        $puskesmasId = $request->input('puskesmas_id');
        $posyanduId = $request->input('posyandu_id');

        $balitaList = Balita::where('puskesmas_id', $puskesmasId)
            ->where('posyandu_id', $posyanduId)
            ->get();

        return response()->json($balitaList);
    }
    public function getPosyanduByPuskesmas(Request $request)
    {
        $puskesmasId = $request->input('puskesmas_id');

        $posyanduList = Posyandu::where('puskesmas_id', $puskesmasId)->get();

        return response()->json($posyanduList);
    }
    public function exportExcel(Request $request)
    {
        $puskesmasId = $request->input('puskesmas_id');
        $posyanduId = $request->input('posyandu_id');

        $balitaList = Balita::where('puskesmas_id', $puskesmasId)
            ->where('posyandu_id', $posyanduId)
            ->get();

            return Excel::download(new BalitaExport($balitaList), 'balita.xlsx');
    }
}
