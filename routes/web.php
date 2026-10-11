<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Models\Mahasiswa;


/*
|--------------------------------------------------------------------------
| Halaman Home / Dashboard
|--------------------------------------------------------------------------
*/

Route::get('/', function () {

    $totalMahasiswa = Mahasiswa::count();

    return view('home', compact('totalMahasiswa'));

})->name('home');


/*
|--------------------------------------------------------------------------
| CRUD Mahasiswa
|--------------------------------------------------------------------------
*/

Route::resource('mahasiswa', MahasiswaController::class);