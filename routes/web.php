<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\MenuController;
use app\Http\Controllers\Detail_MenuController;

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

Route::resource('Pemesanan', PemesananController::class);
Route::get('Pemesanan', [PemesananController::class, 'index'])->name('Pemesanan.index');
Route::get('Pemesanan/create', [PemesananController::class, 'create'])->name('Pemesanan.create');
Route::post('Pemesanan', [PemesananController::class, 'store'])->name('Pemesanan.store');
Route::get('Pemesanan/{id}/edit', [PemesananController::class, 'edit'])->name('Pemesanan.edit');
Route::put('Pemesanan/{id}', [PemesananController::class, 'update'])->name('Pemesanan.update');
Route::delete('Pemesanan/{id}', [PemesananController::class, 'destroy'])->name('Pemesanan.destroy');

Route::resource('Pembayaran', PembayaranController::class);
Route::get('Pembayaran', [PembayaranController::class, 'index'])->name('Pembayaran.index');
Route::get('Pembayaran/create', [PembayaranController::class, 'create'])->name('Pembayaran.create');
Route::post('Pembayaran', [PembayaranController::class, 'store'])->name('Pembayaran.store');
Route::get('Pembayaran/{id}/edit', [PembayaranController::class, 'edit'])->name('Pembayaran.edit');
Route::put('Pembayaran/{id}', [PembayaranController::class, 'update'])->name('Pembayaran.update');
Route::delete('Pembayaran/{id}', [PembayaranController::class, 'destroy'])->name('Pembayaran.destroy');

Route::resource('Menu', MenuController::class);
Route::get('Menu', [MenuController::class, 'index'])->name('Menu.index');
Route::get('Menu/create', [MenuController::class, 'create'])->name('Menu.create');
Route::post('Menu', [MenuController::class, 'store'])->name('Menu.store');
Route::get('Menu/{id}/edit', [MenuController::class, 'edit'])->name('Menu.edit');
Route::put('Menu/{id}', [MenuController::class, 'update'])->name('Menu.update');
Route::delete('Menu/{id}', [MenuController::class, 'destroy'])->name('Menu.destroy');

Route::resource('Detail_Menu', MenuController::class);
Route::get('Menu', [MenuController::class, 'index'])->name('Menu.index');
Route::get('Menu/create', [MenuController::class, 'create'])->name('Menu.create');
Route::post('Menu', [MenuController::class, 'store'])->name('Menu.store');
Route::get('Menu/{id}/edit', [MenuController::class, 'edit'])->name('Menu.edit');
Route::put('Menu/{id}', [MenuController::class, 'update'])->name('Menu.update');
Route::delete('Menu/{id}', [MenuController::class, 'destroy'])->name('Menu.destroy');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
