<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SUPDFController;
use App\Http\Controllers\PrintSPPController;

Route::get('/', function () {
    // return view('welcome');
    return redirect(route('filament.user.auth.login'));
});

// Route::get('download', function () {
//     return 'Latihan Laporan PDF';
// })->name('download.tes');

Route::get('viewsupdf', [SUPDFController::class, 'viewsupdf'])->name('viewsupdf');

Route::get('/berkas/print-spp/{id}', [PrintSPPController::class, 'cetakSPP'])->name('berkas.print-spp');

Route::get('/berkas/print-sbp/{id}', [PrintSPPController::class, 'cetakSBP'])->name('berkas.print-sbp');
