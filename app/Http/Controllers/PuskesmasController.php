<?php

namespace App\Http\Controllers;

use App\Models\Puskesmas;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Session;

class PuskesmasController extends Controller
{
    // api
     public function all()
    {
        //semua data
        $all = Puskesmas::with('posyandu.balita')->paginate(5);
        // return response()->json(['data' => $all]);
      
        if($all->isEmpty()){
            return response()->json([
            'status' => 'error',
            "message" => 'data tidak ditemukan',
            ],404);
        }
            return response()->json([
            'status' => 'success',
            'message' => 'seluruh data berhasil ditemukan',
            'data' => $all->items(),
            'current_page' => $all->currentPage(),
            'total' => $all->total(),
            'per_page' => $all->perPage(),
            'last_page' => $all->lastPage(),
            'next_page_url' => $all->nextPageUrl(),
            'prev_page_url' => $all->previousPageUrl()
        ]);
    }
   
    public function storeApi(Request $request)
    {
        $validatedData = $request->validate([
            'nama_puskesmas' => 'required',
            'alamat' => 'required',
            'telepon' => 'required',
            'sms_wa' => 'required',
        ]);

        $puskesmas = Puskesmas::create([
            'nama_puskesmas' => $validatedData['nama_puskesmas'],
            'alamat' => $validatedData['alamat'],
            'telepon' => $validatedData['telepon'],
            'sms_wa' => $validatedData['sms_wa'],
        ]);

        return response()->json([
            'message' => 'Puskesmas created successfully',
            'data' => $puskesmas
        ], 201);
    }
     public function indexApi()
    {
        //
        $puskesmas = Puskesmas::paginate(5);
            return response()->json([
        'status' => 'success',
        'message' => 'data puskesmas berhasil ditemukan',
        'data' => $puskesmas->items(),
        'current_page' => $puskesmas->currentPage(),
        'total' => $puskesmas->total(),
        'per_page' => $puskesmas->perPage(),
        'last_page' => $puskesmas->lastPage(),
        'next_page_url' => $puskesmas->nextPageUrl(),
        'prev_page_url' => $puskesmas->previousPageUrl()
        ]);
    }
    public function showApi($id)
    {
        //
        $puskesmas = Puskesmas::findOrFail($id);
        return response()->json($puskesmas);
    
    
    }

    // end api
     public function index(Request $request)
{
    $keyword = $request->keyword;
    $datapuskesmas = Puskesmas::where('nama_puskesmas', 'LIKE', '%'.$keyword.'%')
        ->paginate(10);
    $datapuskesmas->appends($request->all());
    if ($datapuskesmas->isEmpty()) {
        $message = "Data puskesmas tidak ditemukan.";
        return redirect('datapuskesmas')->with('search_message', $message);
    }
    return view('datapuskesmas.index', compact('datapuskesmas','keyword',));
}
    public function create()
    {
        $value = new Puskesmas;
        return view('datapuskesmas.create', compact('value'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'nama_puskesmas' => 'required|unique:puskesmas,nama_puskesmas',
            'alamat' => 'required',
            'telepon' => 'required|numeric',
            'sms_wa' => 'required|numeric',
        ], [
            'nama_puskesmas.required' => 'Nama Puskesmas Tidak Boleh Kosong',
            'alamat.required' => 'Alamat Tidak Boleh Kosong',
            'telepon.required' => 'Nomor Telepon Tidak Boleh Kosong',
            'sms_wa.required' => 'Nomor WA Tidak Boleh Kosong',
            'nama_puskesmas.unique' => 'Puskesmas Tersebut Sudah Terdaftar',
            'telepon.numeric' => 'Nomor Telepon Harus Berupa Angka',
            'sms_wa.numeric' => 'Nomor WA Harus Berupa Angka'
        ]); 

        $value = new Puskesmas;
        $value->nama_puskesmas = $request->nama_puskesmas;
        $value->alamat = $request->alamat;
        $value->telepon = $request->telepon;
        $value->sms_wa = $request->sms_wa;
        $value->save();
        
        return redirect('datapuskesmas')->with('success', 'Data berhasil disimpan!');
    }

    public function edit($id)
    {
        $value = Puskesmas::find($id);
        return view('datapuskesmas.edit', compact('value'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_puskesmas' => [
                'required',
                Rule::unique('puskesmas')->ignore($id),
            ],
            'alamat' => 'required',
            'telepon' => 'required|numeric',
            'sms_wa' => 'required|numeric',
        ], [
            'nama_puskesmas.required' => 'Nama Puskesmas Tidak Boleh Kosong',
            'alamat.required' => 'Alamat Tidak Boleh Kosong',
            'telepon.required' => 'Nomor Telepon Tidak Boleh Kosong',
            'sms_wa.required' => 'Nomor WA Tidak Boleh Kosong',
            'telepon.numeric' => 'Nomor Telepon Harus Berupa Angka',
            'sms_wa.numeric' => 'Nomor WA Harus Berupa Angka',
            'nama_puskesmas.unique' => 'Puskesmas Tersebut Sudah Terdaftar'
        ]);
        $value = Puskesmas::find($id);
        $value->nama_puskesmas = $request->nama_puskesmas;
        $value->alamat = $request->alamat;
        $value->telepon = $request->telepon;
        $value->sms_wa = $request->sms_wa;
        $value->update();

        return redirect('datapuskesmas')->with('success', 'Data berhasil diupdate!');
    }
    public function destroy($id)
    {
        $value = Puskesmas::where('id', $id)->first();
        $value->delete();
        return redirect('datapuskesmas')->with('success', 'Data berhasil dihapus!');
    }
 
   

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
}
