<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


class AuthController extends Controller
{
public function showLoginForm()
{
    return view('auth.login');
}

public function login(Request $request)
{
    $credentials = $request->only('email', 'password');
    
    if (Auth::attempt($credentials)) {
        // Login berhasil
        return redirect()->intended('/dashboard');
    } else {
        // Login gagal
        return redirect()->back()->withErrors(['message' => 'Login gagal. Silakan cek kembali email dan password Anda.']);
    }
}

public function logout()
{
    Auth::logout();
    return redirect('/');
}
}
