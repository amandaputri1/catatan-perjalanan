<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CatatanController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ExportController;





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

Route::controller(AuthController::class)->group(function() {
    Route::get('/register', 'register')->name('auth.register');
    Route::post('/store', 'store')->name('auth.store');
    Route::get('/login', 'login')->name('auth.login');
    Route::post('/auth', 'authentication')->name('auth.authentication');
    Route::get('/dashboard', 'dashboard')->name('auth.dashboard');
    Route::post('/logout', 'logout')->name('auth.logout');
    Route::get('/user/{id}', 'show')->name('user.show');
});

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/catatan', CatatanController::class)->middleware('auth');
Route::get('/pdf', [ExportController::class, 'cetakpdf'])->name('cetak.pdf');

Route::get('/pengguna/{id}', [UserController::class, 'show'])->name('user.show');
Route::get('/pengguna', [UserController::class, 'index'])->name('user.index');



