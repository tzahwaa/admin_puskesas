<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index(Request $request)
    {
        $data = User::where('role', 'admin')->get();
        // dd($dataadmin);
        $keyword = $request->keyword;
        $dataadmin = User::where('name', 'LIKE', '%'.$keyword.'%')
            ->paginate(10);
        if ($dataadmin->isEmpty()) {
            $message = "Data admin tidak ditemukan.";
            return redirect('dataadmin')->with('search_message', $message);
        }
        return view('dataadmin.index', compact('dataadmin','keyword','data'));
    }
    public function create()
    {
        $value = new User;
        return view('dataadmin.create', compact('value'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users,email',
            'password' => 'required',
        ], [
            'name.required' => 'Nama Tidak Boleh Kosong',
            'email.required' => 'Email Tidak Boleh Kosong',
            'password.required' => 'Password Tidak Boleh Kosong',
            'email.unique' => 'Email Tersebut Sudah Terdaftar',
        ]); 

        $value = new User;
        $value->name = $request->name;
        $value->email = $request->email;
        $value->password = Hash::make($request->password);
        $value->role = "admin";
        $value->save();
        
        return redirect('dataadmin')->with('success', 'Data berhasil disimpan!');
    }

    public function edit($id)
    {
        $value = User::find($id);
        return view('dataadmin.edit', compact('value'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => [
                'required',
                Rule::unique('users')->ignore($id),
            ],
            'password' => 'required',
        ], [
            'name.required' => 'Nama Tidak Boleh Kosong',
            'email.required' => 'Email Tidak Boleh Kosong',
            'password.required' => 'Password Tidak Boleh Kosong',
            'email.unique' => 'Email Tersebut Sudah Terdaftar',

        ]); 
        $value = User::find($id);
        $value->name = $request->name;
        $value->email = $request->email;
        $value->password = Hash::make($request->password);
        $value->role = "admin";
        $value->update();

        return redirect('dataadmin')->with('success', 'Data berhasil diupdate!');
    }
    public function destroy($id)
    {
        $value = User::where('id', $id)->first();
        $value->delete();
        return redirect('dataadmin')->with('success', 'Data berhasil dihapus!');
    }
}
