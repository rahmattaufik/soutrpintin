<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/layanan', [HomeController::class, 'services'])->name('services');
Route::get('/portofolio', [HomeController::class, 'portfolio'])->name('portfolio');
Route::get('/alur-kerja', [HomeController::class, 'about'])->name('about');
Route::get('/faq', [HomeController::class, 'faq'])->name('faq');
Route::get('/kontak', [HomeController::class, 'contact'])->name('contact');

Route::post('/contact', [HomeController::class, 'submitContact'])->name('contact.submit');

// Utility Route untuk Shared Hosting / InfinityFree (karena tidak ada akses terminal SSH)
Route::get('/clear-app-cache', function () {
    \Illuminate\Support\Facades\Artisan::call('optimize:clear');
    return '<h3>Semua Cache Laravel berhasil dibersihkan! (Cache, Views, Routes, Config)</h3><p><a href="/">Kembali ke Beranda</a></p>';
});
