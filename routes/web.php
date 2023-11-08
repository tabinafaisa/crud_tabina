<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\GudangController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TokoController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index']);
Route::get('/toko', [TokoController::class, 'index']);
Route::get('/gudang', [GudangController::class, 'index']);
Route::get('/barang', [BarangController::class, 'index']);
Route::delete('/delete/toko/{id}', [TokoController::class, 'delete']);
Route::post('/edit/toko/{id}', [TokoController::class, 'edit']);
Route::get('/toko/create', [TokoController::class, 'store']);
Route::post('/toko', [TokoController::class, 'create']);
Route::get('/toko/update/{id}', [TokoController::class, 'update']);
Route::get('/gudang/create/{id}', [GudangController::class, 'store']);
Route::post('/gudang', [GudangController::class, 'create']);
