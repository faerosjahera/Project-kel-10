<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\Detail_MenuController;
use App\Http\Controllers\PengirimanController;
use App\Http\Controllers\CodController;
use App\Http\Controllers\EwalletController;


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
    return view ('homerev');
});

Route::resource('User', UserController::class);
Route::get('User', [UserController::class, 'index'])->name('User.index');
Route::get('User/create', [UserController::class, 'create'])->name('User.create');
Route::post('User', [UserController::class, 'store'])->name('User.store');
Route::get('User/{id}/edit', [UserController::class, 'edit'])->name('User.edit');
Route::put('User/{id}', [UserController::class, 'update'])->name('User.update');
Route::delete('User/{id}', [UserController::class, 'destroy'])->name('User.destroy');

Route::resource('Role', RoleController::class);
Route::get('Role', [RoleController::class, 'index'])->name('Role.index');
Route::get('Role/create', [RoleController::class, 'create'])->name('Role.create');
Route::post('Role', [RoleController::class, 'store'])->name('Role.store');
Route::get('Role/{id}/edit', [RoleController::class, 'edit'])->name('Role.edit');
Route::put('Role/{id}', [RoleController::class, 'update'])->name('Role.update');
Route::delete('Role/{id}', [RoleController::class, 'destroy'])->name('Role.destroy');

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

Route::resource('Detail_Menu', Detail_MenuController::class);
Route::get('Detail_Menu', [Detail_MenuController::class, 'index'])->name('Detail_Menu.index');
Route::get('Detail_Menu/create', [Detail_MenuController::class, 'create'])->name('Detail_Menu.create');
Route::post('Detail_Menu', [Detail_MenuController::class, 'store'])->name('Detail_Menu.store');
Route::get('Detail_Menu/{id}/edit', [Detail_MenuController::class, 'edit'])->name('Detail_Menu.edit');
Route::put('Detail_Menu/{id}', [Detail_MenuController::class, 'update'])->name('Detail_Menu.update');
Route::delete('Detail_Menu/{id}', [Detail_MenuController::class, 'destroy'])->name('Detail_Menu.destroy');

Route::resource('Pengiriman', PengirimanController::class);
Route::get('Pengiriman', [PengirimanController::class, 'index'])->name('Pengiriman.index');
Route::get('Pengiriman/create', [PengirimanController::class, 'create'])->name('Pengiriman.create');
Route::post('Pengiriman', [PengirimanController::class, 'store'])->name('Pengiriman.store');
Route::get('Pengiriman/{id}/edit', [PengirimanController::class, 'edit'])->name('Pengiriman.edit');
Route::put('Pengiriman/{id}', [PengirimanController::class, 'update'])->name('Pengiriman.update');
Route::delete('Pengiriman/{id}', [PengirimanController::class, 'destroy'])->name('Pengiriman.destroy');

Route::resource('Cod', CodController::class);
Route::get('Cod', [CodController::class, 'index'])->name('Cod.index');
Route::get('Cod/create', [CodController::class, 'create'])->name('Cod.create');
Route::post('Cod', [CodController::class, 'store'])->name('Cod.store');
Route::get('Cod/{id}/edit', [CodController::class, 'edit'])->name('Cod.edit');
Route::put('Cod/{id}', [CodController::class, 'update'])->name('Cod.update');
Route::delete('Cod/{id}', [CodController::class, 'destroy'])->name('Cod.destroy');

Route::resource('Ewallet', EwalletController::class);
Route::get('Ewallet', [EwalletController::class, 'index'])->name('Ewallet.index');
Route::get('Ewallet/create', [EwalletController::class, 'create'])->name('Ewallet.create');
Route::post('Ewallet', [EwalletController::class, 'store'])->name('Ewallet.store');
Route::get('Ewallet/{id}/edit', [EwalletController::class, 'edit'])->name('Ewallet.edit');
Route::put('Ewallet/{id}', [EwalletController::class, 'update'])->name('Ewallet.update');
Route::delete('Ewallet/{id}', [EwalletController::class, 'destroy'])->name('Ewallet.destroy');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
