<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('auth')->middleware('auth');
Route::get('/home', function () {
    return view('home');
})->name('home') ;
Auth::routes();
Route::get('/logout', function () {
    \Session::flush();
    auth()->logout();
    return redirect('/login');
})->name('logout');
//Admin
Route::get('/admin-panel',\App\Http\Livewire\Admin::class)->name('admin');
//verify
Route::get('/verifikasi',\App\Http\Livewire\Supervisor::class)->name('verify');
//Profile
Route::get('/profile',\App\Http\Livewire\Profile::class)->name('profile');

//presensi
Route::get('/Presensi',\App\Http\Livewire\Presensi::class)->name('presensi');

//Kabumi
Route::get('/Kabumi',\App\Http\Livewire\Kabumi::class)->name('kabumi');

//KTA
Route::get('/KTA',\App\Http\Livewire\Kta::class)->name('kta');
