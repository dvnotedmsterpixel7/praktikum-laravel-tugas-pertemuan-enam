<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\MatakuliahController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/halo', function () {
    return 'Halo, Laravel!';
});

/*Route::get('/produk', [ProdukController::class, 'index'])
    ->name('produk.index');*/

/*Route::get('/produk/{id}', [ProdukController::class, 'show'])
    ->name('produk.show')*/

/*Route::get('/profil', [MahasiswaController::class, 'profil'])
    ->name('mahasiswa.profil');*/

Route::get('/jurusan',[JurusanController::class, 'index'])
    ->name('jurusan.create');

Route::get('/jurusan/create', [JurusanController::class, 'create'])
    ->name('jurusan.create');

Route::post('/jurusan/create', [JurusanController::class, 'store'])
    ->name('jurusan.create');

Route::get('/jurusan/{id}', [JurusanController::class, 'show']);

Route::get('/matakuliah/tambah', [MatakuliahController::class, 'create'])
    ->name('matakuliah.create');

Route::post('/matakuliah/simpan', [MatakuliahController::class, 'store'])
    ->name('matakuliah.store');

Route::get('/matakuliah', [MatakuliahController::class, 'index'])
    ->name('matakuliah.index');

Route::get('/matakuliah/{id}', [MatakuliahController::class, 'show'])
    ->name('matakuliah.show');