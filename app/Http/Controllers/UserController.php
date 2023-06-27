<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $data = User::where('role', 'user')->get();
        // dd($datauser);
        $keyword = $request->keyword;
        $datauser = User::where('name', 'LIKE', '%'.$keyword.'%')
            ->paginate(10);
        if ($datauser->isEmpty()) {
            $message = "Data user tidak ditemukan.";
            return redirect('datauser')->with('search_message', $message);
        }
        return view('datauser.index', compact('datauser','keyword', 'data'));
    }
}
