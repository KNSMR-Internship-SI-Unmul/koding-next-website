<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;

Route::get('/', function () {
    return view('layouts.main');
})->name('beranda');

Route::get('/kursus', function () {
    return view('pages.kursus');
})->name('kursus');

Route::get('/kegiatan', function () {
    return view('pages.kegiatan');
})->name('kegiatan');

Route::get('/lokasi', function () {
    return view('pages.lokasi');
})->name('lokasi');

Route::get('/tentangkami', function () {
    return view('pages.tentang');
})->name('tentang');

Route::get('/little-koders', function () {
    return view('pages.little-koders');
});

Route::get('/junior-koders', function () {
    return view('pages.junior-koders');
});

Route::get('/robonext', function () {
    return view('pages.robonext');
});

Route::prefix('admin')->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])
        ->name('admin.dashboard');

});

