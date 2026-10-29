<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PraktikumOop;
use App\Http\Controllers\SapaController;
use App\Http\Controllers\KegiatanController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/profile', [ProfileController::class, 'index']);

Route::get('/praktikum-oop', [PraktikumOop::class, 'index']);

// === TAMBAHAN RUTE PRAKTIKUM MINGGU 3 (MVC) ===
Route::get('/sapa', [SapaController::class, 'index']);
Route::get('/sapa/{nama}', [SapaController::class, 'nama']);

Route::get('/kegiatan', [KegiatanController::class, 'index']);
Route::get('/kegiatan/{id}', [KegiatanController::class, 'detail'])->where('id', '[0-9]+');