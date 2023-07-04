<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataBalitaController;
use App\Http\Controllers\PuskesmasController;
use App\Http\Controllers\PosyanduController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('dashboard');
});

// Confirm Email
Route::get('/confirm-email/{token}', [AuthController::class, 'confirm'])->name('confirm');

// User Auth
Route::get('/', [LoginController::class, 'index'])->name('login');
Route::post('login', [LoginController::class, 'login'])->name('login.action');
Route::get('password', [LoginController::class, 'password'])->name('password');
Route::post('password', [LoginController::class, 'password_action'])->name('password.action');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/dashboard', [DashboardController::class,'index'])->name('dashboard');

Route::get('/databalita', [DataBalitaController::class,'index'])->name('databalita');
Route::get('/databalita/search', [DataBalitaController::class,'search'])->name('databalita.search');
Route::get('/getposyandu',[DataBalitaController::class, 'getPosyandu']);
Route::get('/databalita/{puskesmasId}/getPosyandu', [PosyanduController::class, 'getPosyandu'])->name('posyandu.getPosyandu');
Route::get('/databalita/getBalitaByPosyandu', [DataBalitaController::class, 'getBalitaByPosyandu'])->name('balita.getBalitaByPosyandu');
Route::get('/databalita/getPosyanduByPuskesmas', [PosyanduController::class, 'getPosyanduByPuskesmas'])->name('posyandu.getPosyanduByPuskesmas');

Route::get('/datauser', [UserController::class,'index'])->name('datauser');

//routing data puskesmas

Route::get('/datapuskesmas', [PuskesmasController::class,'index'])->name('datapuskesmas');

Route::get('/puskesmas/create', [PuskesmasController::class,'create'])->name('puskesmas.create');

Route::post('/puskesmas/store', [PuskesmasController::class,'store'])->name('puskesmas.store');

Route::get('/puskesmas/edit/{id}', [PuskesmasController::class,'edit'])->name('puskesmas.edit');

Route::post('/puskesmas/update/{id}', [PuskesmasController::class,'update'])->name('puskesmas.update');

Route::post('/puskesmas/delete/{id}', [PuskesmasController::class,'destroy'])->name('puskesmas.destroy');

Route::get('/puskesmas/search', [PuskesmasController::class,'search'])->name('puskesmas.search');

//route untuk data posyandu

Route::get('/dataposyandu', [PosyanduController::class,'index'])->name('dataposyandu');

Route::get('/posyandu/create', [PosyanduController::class,'create'])->name('posyandu.create');

Route::post('/posyandu/store', [PosyanduController::class,'store'])->name('posyandu.store');

Route::get('/posyandu/edit/{id}', [PosyanduController::class,'edit'])->name('posyandu.edit');

Route::post('/posyandu/update/{id}', [PosyanduController::class,'update'])->name('posyandu.update');

Route::post('/posyandu/delete/{id}', [PosyanduController::class,'destroy'])->name('posyandu.destroy');

Route::get('/posyandu/search', [PosyanduController::class,'search'])->name('posyandu.search');

Route::get('/posyandu/getPosyanduByPuskesmas', [PosyanduController::class, 'getPosyanduByPuskesmas'])->name('posyandu.getPosyanduByPuskesmasOnly');

Route::get('/datauser', [UserController::class,'index'])->name('datauser');

Route::get('/datauser/search', [UserController::class,'search'])->name('datauser.search');

Route::get('/dataadmin', [AdminController::class,'index'])->name('dataadmin');

Route::get('/admin/create', [AdminController::class,'create'])->name('admin.create');

Route::post('/admin/store', [AdminController::class,'store'])->name('admin.store');

Route::get('/admin/edit/{id}', [AdminController::class,'edit'])->name('admin.edit');

Route::post('/admin/update/{id}', [AdminController::class,'update'])->name('admin.update');

Route::post('/admin/delete/{id}', [AdminController::class,'destroy'])->name('admin.destroy');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
