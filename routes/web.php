<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\RegistrasiController;

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

// Route::get('/', function () {
//     return view('tampilan.dashboard');
// });

Route::get('/menu', function () {
    return view('tampilan.menu');
})->middleware('auth');

// Route::get('/order', function () {
//     return view('tampilan.pesanan.tambah');
// });

// pemesanancontroller
route::get('/orders', [PemesananController::class, 'index' ])->middleware('auth');
route::get('/order', [PemesananController::class, 'create' ])->middleware('auth');
route::post('/order', [PemesananController::class, 'store' ])->middleware('auth');
Route::resource('orders', PemesananController::class)->middleware('auth');

// register 
Route::get('/register', [RegistrasiController::class, 'index'])->middleware('guest');
Route::post('/register', [RegistrasiController::class, 'store']);

// login
Route::get('/', [LoginController::class, 'index'])->middleware('guest');
Route::post('/', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);



