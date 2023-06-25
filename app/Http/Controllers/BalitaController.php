<?php

namespace App\Http\Controllers;

use App\Models\Balita;
use Illuminate\Http\Request;

class BalitaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexApi($id_puskesmas, $id_posyandu)
    {
         // Dapatkan data balita berdasarkan ID puskesmas dan posyandu yang diberikan
        $balitas = Balita::where('puskesmas_id', $id_puskesmas)
            ->where('posyandu_id', $id_posyandu)
            ->paginate(5);
            if($balitas->isEmpty()){
            return response()->json([
            'status' => 'error',
            "message" => 'data balita tersebut tidak ditemukan',
            ],404);
        }
            return response()->json([
        'status' => 'success',
        'message' => 'data balita berhasil ditemukan',
        'data' => $balitas->items(),
        'current_page' => $balitas->currentPage(),
        'total' => $balitas->total(),
        'per_page' => $balitas->perPage(),
        'last_page' => $balitas->lastPage(),
        'next_page_url' => $balitas->nextPageUrl(),
        'prev_page_url' => $balitas->previousPageUrl()
    ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
      public function storeApi(Request $request, $id_puskesmas, $id_posyandu)
    {
        $validatedData = $request->validate([
            'nama_anak' => 'required',
            'nama_ibu' => 'required',
            'alamat' => 'required',
            'umur' => 'required',
            'berat_badan' => 'required',
            'panjang_badan' => 'required',
            'detak_jantung' => 'required',
            'zscore_berat_badan' => 'required',
            'zscore_panjang_badan' => 'required',
            'klasifikasi_berat_badan' => 'required',
            'klasifikasi_panjang_badan' => 'required',
            'klasifikasi_detak_jantung' => 'required',
            'jenis_kelamin' => 'required',
        ]);
        // Lakukan penyimpanan balita dengan mengakses $id_puskesmas dan $id_posyandu
        $balita = Balita::create([
            'nama_anak' => $validatedData['nama_anak'],
            'jenis_kelamin' => $validatedData['jenis_kelamin'],
            'nama_ibu' => $validatedData['nama_ibu'],
            'umur' => $validatedData['umur'],
            'alamat' => $validatedData['alamat'],
            'berat_badan' => $validatedData['berat_badan'],
            'panjang_badan' => $validatedData['panjang_badan'],
            'detak_jantung' => $validatedData['detak_jantung'],
            'zscore_berat_badan' => $validatedData['zscore_berat_badan'],
            'zscore_panjang_badan' => $validatedData['zscore_panjang_badan'],
            'klasifikasi_berat_badan' => $validatedData['klasifikasi_berat_badan'],
            'klasifikasi_panjang_badan' => $validatedData['klasifikasi_panjang_badan'],
            'klasifikasi_detak_jantung' => $validatedData['klasifikasi_detak_jantung'],
            'puskesmas_id' => $id_puskesmas,
            'posyandu_id' => $id_posyandu,
        ]);

        return response()->json([
            'message' => 'Balita berhasil ditambahkan.',
            'data' => $balita
        ], 201);
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateApi(Request $request, $id_puskesmas, $id_posyandu, $id_balita)
    {
        // Cek apakah balita terkait dengan ID puskesmas dan posyandu yang diberikan
        $balita = Balita::where('puskesmas_id', $id_puskesmas)
            ->where('posyandu_id', $id_posyandu)
            ->findOrFail($id_balita);

        // Update data balita dengan data yang diberikan dalam permintaan
        // klasifikasinya bagaimana
        $balita->update($request->only('berat_badan', 'panjang_badan', 'detak_jantung', 'klasifikasi_berat_badan', 'klasifikasi_detak_jantung' ,'klasifikasi_panjang_badan', 'zscore_berat_badan', 'zscore_panjang_badan'));

        return response()->json([
            'message' => 'Data balita berhasil diupdate.',
            'data' => $balita
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyApi($id_puskesmas, $id_posyandu, $id_balita)
    {
        // Cek apakah balita terkait dengan ID puskesmas dan posyandu yang diberikan
        $balita = Balita::where('puskesmas_id', $id_puskesmas)
            ->where('posyandu_id', $id_posyandu)
            ->findOrFail($id_balita);

        $balita->delete();

        return response()->json([
            'message' => 'Data balita berhasil dihapus.'
        ]);
    }
    // filtering api single
    public function filterByKlasifikasiPanjangBadan($id_puskesmas, $id_posyandu, $klasifikasi_panjang_badan){
        // Dapatkan data balita berdasarkan kategori yang diberikan
         $balitas = Balita::where('puskesmas_id', $id_puskesmas)
         ->where('posyandu_id', $id_posyandu)
         ->where('klasifikasi_panjang_badan', $klasifikasi_panjang_badan)
         ->paginate(5);
        if ($balitas->isEmpty()) {
        return response()->json([
            'status' => 'error',
            'message' => 'Data balita dengan filter yang diberikan tidak ditemukan.'
        ], 404);
    }
        return response()->json([
            'data' => $balitas,
            'status' => 'success',
            'message' => 'filter berdasarkan klasifikasi panjang badan berhasil'
        ], 200);
    }    
    // filtering berat,detak,panjang,create_at query params
    public function filteringQuery(Request $request){
     $query = Balita::query();

        // Filter berdasarkan query parameter puskesmas_id
        if ($request->has('puskesmas_id')) {
            $query->where('puskesmas_id', $request->input('puskesmas_id'));
        }

        // Filter berdasarkan query parameter posyandu_id
        if ($request->has('posyandu_id')) {
            $query->where('posyandu_id', $request->input('posyandu_id'));
        }

        // Filter berdasarkan query parameter klasifikasi_panjang_badan
        if ($request->has('klasifikasi_panjang_badan')) {
            $query->where('klasifikasi_panjang_badan', $request->input('klasifikasi_panjang_badan'));
        }

        // Filter berdasarkan query parameter klasifikasi_berat_badan
        if ($request->has('klasifikasi_berat_badan')) {
            $query->where('klasifikasi_berat_badan', $request->input('klasifikasi_berat_badan'));
        }

        // Filter berdasarkan query parameter klasifikasi_detak_jantung
        if ($request->has('klasifikasi_detak_jantung')) {
            $query->where('klasifikasi_detak_jantung', $request->input('klasifikasi_detak_jantung'));
        }

        // Filter berdasarkan query parameter create_at (tanggal pembuatan)
        if ($request->has('created_at')) {
            $query->whereDate('created_at', $request->input('created_at'));
        }

        // Eksekusi query dan ambil data balita

        $balitas = $query->get();
           if ($balitas->isEmpty()) {
        return response()->json([
            'status' => 'error',
            'message' => 'Data balita dengan filter yang diberikan tidak ditemukan.'
        ], 404);
        }
        return response()->json([
            'data' => $balitas,
            'status' => 'success',
            'message' => 'filter data berhasil'
        ], 200);
}

}
