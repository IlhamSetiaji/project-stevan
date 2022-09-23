<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\HomeController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [AuthController::class, 'login'])->name('login');
Route::post('/', [AuthController::class, 'postLogin']);
Route::middleware('auth')->group(function () {
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/home', [HomeController::class, 'index']);
    Route::prefix('barang')->group(function () {
        Route::get('/', [BarangController::class, 'index']);
        Route::get('/create', [BarangController::class, 'create']);
        Route::post('/create', [BarangController::class, 'store']);
        Route::get('/search-tahun', [BarangController::class, 'searchTahun']);
        Route::post('/search-tahun', [BarangController::class, 'searchTahunResult']);
        Route::get('/search-ruang', [BarangController::class, 'searchRuangan']);
        Route::post('/search-ruang', [BarangController::class, 'searchRuanganResult']);
    });
});
