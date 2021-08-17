<?php

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

Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/', [\App\Http\Controllers\LoginController::class, 'index'])->name('login');
//Route::get('/{page}', [\App\Http\Controllers\LoginController::class, 'index'])->name('page');//page-rout
Route::group(['middleware' => ['auth', 'valid.role'], 'namespace' => 'App\Http\Controllers'], function() {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/admin', function () {
        return view('admin');
    })->name('admin');
    Route::get('/manager', function () {
        return view('manager');
    })->name('manager');
    Route::get('/shop', function () {
        return view('shop');
    })->name('shop');
//    ======admin==parts=======
    Route::get('/admin/profile/', [\App\Http\Controllers\UserController::class, 'index'])->name('admin-profile');
});

Route::post('/lc', [\App\Http\Controllers\LoginController::class, 'auth'])->name('auth');
Route::post('/out', [\App\Http\Controllers\LoginController::class, 'logout'])->name('out');
Route::get('/out', [\App\Http\Controllers\LoginController::class, 'logout'])->name('out');

