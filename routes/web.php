<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PemesananController;
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
});
Route::get('/home', function () {
    return view ('home');
});

Route::resource('Pemesanan', PemesananController::class);

Route::get('Pemesanan', [PemesananController::class, 'index'])->name('Pemesanan.index');
Route::get('Pemesanan/create', [PemesananController::class, 'create'])->name('Pemesanan.create');
Route::post('Pemesanan', [PemesananController::class, 'store'])->name('Pemesanan.store');
Route::get('Pemesanan/{id}/edit', [PemesananController::class, 'edit'])->name('Pemesanan.edit');
Route::put('Pemesanan/{id}', [PemesananController::class, 'update'])->name('Pemesanan.update');
Route::delete('Pemesanan/{id}', [PemesananController::class, 'destroy'])->name('Pemesanan.destroy');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
