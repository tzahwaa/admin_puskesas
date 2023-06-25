<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->keyword;
        $datauser = User::where('name', 'LIKE', '%'.$keyword.'%')
            ->paginate(10);
        $datauser->appends($request->all());
        return view('datauser.index', compact('datauser','keyword'));
    }
}
