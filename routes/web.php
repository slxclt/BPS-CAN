<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeritaController;

// PERBAIKAN: Halaman utama (/) harus melewati Controller 
// supaya data berita dari API BPS bisa ikut dimuat ke dalam view 'can-bps'
Route::get('/', [BeritaController::class, 'index']);

// Jika Anda ingin memajang halaman statis lain (tanpa berita API):
Route::get('/budaya-bps', function () {
    return view('budaya-bps');
});