<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\User;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth/login');
    }

    public function login(Request $request)
    {
        Session::flash('email', $request->email);
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ],[
            'email.required' => 'Email wajib diisi',
            'password.required' => 'Password wajib diisi',
        ]);
        
       $infologin = [
        'email' => $request->email,
        'password' => $request->password
       ];
       if (Auth::attempt($infologin)) {
        // Authenticated as admin
        if (auth()->user()->role == 'admin') {
            return redirect('dashboard')->with('success', 'Berhasil login');
        } else {
            Auth::logout();
            return redirect()->route('login')->withErrors('Hanya Admin Yang Boleh Login!');
        }
    } else {
        return redirect()->route('login')->withErrors('email atau password salah!');
    }
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}