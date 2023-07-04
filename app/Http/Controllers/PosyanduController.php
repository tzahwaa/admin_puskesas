<?php

namespace App\Http\Controllers;

use App\Models\Posyandu;
use App\Models\Puskesmas;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;

class PosyanduController extends Controller
{
    public function index(Request $request)
{

    $puskesmasList = Puskesmas::all();
    $keyword = $request->keyword;
    $dataposyandu = Posyandu::where('nama_posyandu', 'LIKE', '%'.$keyword.'%')
        ->paginate(10);
    $dataposyandu->appends($request->all());
    if ($dataposyandu->isEmpty()) {
        $message = "Data posyandu tidak ditemukan.";
        return redirect('dataposyandu')->with('search_message', $message);
    }
    return view('dataposyandu.index', compact('puskesmasList','dataposyandu','keyword'));
}

public function getPosyanduByPuskesmas(Request $request)
{
    $puskesmasId = $request->input('puskesmas_id');
    $posyanduList = Posyandu::with('puskesmas')->where('puskesmas_id', $puskesmasId)->get();
    return response()->json($posyanduList);
}
    
    public function create()
    {
        $puskesmas = Puskesmas::all();
        $value = new Posyandu;
        return view('dataposyandu.create', compact('value','puskesmas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_posyandu' => 'required|unique:posyandu,nama_posyandu',
            'alamat' => 'required',
            'kelurahan' => 'required',
            'kecamatan' => 'required',
            'puskesmas_id' => 'required',
        ], [
            'nama_posyandu.required' => 'Nama Posyandu Tidak Boleh Kosong',
            'alamat.required' => 'Alamat Tidak Boleh Kosong',
            'kelurahan.required' => 'Nama Kelurahan Tidak Boleh Kosong',
            'kecamatan.required' => 'Nama Kecamatan Tidak Boleh Kosong',
            'puskesmas_id.required' => 'ID Puskesmas Tidak Boleh Kosong',
            'nama_posyandu.unique' => 'Posyandu Tersebut Sudah Terdaftar',
        ]); 

        $value = new Posyandu;
        $value->nama_posyandu = $request->nama_posyandu;
        $value->alamat = $request->alamat;
        $value->kelurahan = $request->kelurahan;
        $value->kecamatan = $request->kecamatan;
        $value->puskesmas_id = $request->puskesmas_id;
        $value->save();
        
        return redirect('dataposyandu')->with('success', 'Data berhasil disimpan!');
    }

    public function edit(Request $request, $id)
    {
        $puskesmas = Puskesmas::all();
        $value = Posyandu::find($id);
        return view('dataposyandu.edit', compact('value','puskesmas'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_posyandu' => [
                'required',
                Rule::unique('posyandu')->ignore($id),
            ],
            'alamat' => 'required',
            'kelurahan' => 'required',
            'kecamatan' => 'required',
            'puskesmas_id' => 'required',
        ], [
            'nama_posyandu.required' => 'Nama Posyandu Tidak Boleh Kosong',
            'alamat.required' => 'Alamat Tidak Boleh Kosong',
            'kelurahan.required' => 'Nama Kelurahan Tidak Boleh Kosong',
            'kecamatan.required' => 'Nama Kecamatan Tidak Boleh Kosong',
            'puskesmas_id.required' => 'ID Puskesmas Tidak Boleh Kosong',
            'nama_posyandu.unique' => 'Posyandu Tersebut Sudah Terdaftar',
        ]); 
        $value = Posyandu::find($id);
        $value->nama_posyandu = $request->nama_posyandu;
        $value->alamat = $request->alamat;
        $value->kelurahan = $request->kelurahan;
        $value->kecamatan = $request->kecamatan;
        $value->puskesmas_id = $request->puskesmas_id;
        $value->update();

        return redirect('dataposyandu')->with('success', 'Data berhasil diupdate!');
    }
    public function destroy($id)
    {
        $value = Posyandu::where('id', $id)->first();
        $value->delete();
        return redirect('dataposyandu')->with('success', 'Data berhasil dihapus!');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexApi($id_puskesmas)
    {
        //
        $posyandu = Posyandu::where('puskesmas_id', $id_puskesmas)->paginate(5);
          return response()->json([
          'status' => 'success',
        'message' => 'Data posyandu berdasarkan puskesmas berhasil ditemukan.',
        'data' => $posyandu->items(),
        'current_page' => $posyandu->currentPage(),
        'total' => $posyandu->total(),
        'per_page' => $posyandu->perPage(),
        'last_page' => $posyandu->lastPage(),
        'next_page_url' => $posyandu->nextPageUrl(),
        'prev_page_url' => $posyandu->previousPageUrl()
    ], 200);
        // $posyandu = Posyandu::paginate(10); // Menggunakan pagination dengan 10 item per halaman
    }

    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showApi($id)
    {
        $posyandu = Posyandu::findOrFail($id);
          return response()->json([
        'status' => 'success',
        'message' => 'Detail dari posyandu berhasil ditemukan.',
        'data' => $posyandu
    ], 200);
    }

}
