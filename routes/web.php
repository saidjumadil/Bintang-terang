<?php

use App\Http\Controllers\Beranda;
use App\Http\Controllers\karyawan;
use App\Http\Controllers\Login;
use Illuminate\Support\Facades\Route;

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
    return redirect()->route('login');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

Route::middleware('auth')->group(function() {
    Route::prefix('/dashboard')->group(function () {
        Route::get('/', [Beranda::class, 'index'])->name('index');
        Route::post('/pesan', [Beranda::class, 'pesan'])->name('pesan');
        Route::post('/bayar', [Beranda::class, 'bayar'])->name('bayar');
        Route::post('/edit', [Beranda::class, 'edit'])->name('edit');
        Route::post('/hapus', [Beranda::class, 'hapus'])->name('hapus');
    });
    
    Route::prefix('/karyawan')->group(function () {
        Route::get('/', [karyawan::class, 'index'])->name('karyawan');
        Route::post('/tambah', [karyawan::class, 'tambah'])->name('karyawan.tambah');
        Route::post('/edit', [karyawan::class, 'edit'])->name('karyawan.edit');
        Route::post('/hapus', [karyawan::class, 'hapus'])->name('karyawan.hapus');
    });

    Route::post('gantiPassword', [Login::class, 'gantiPassword'])->name('password.update');
});

require __DIR__.'/auth.php';
