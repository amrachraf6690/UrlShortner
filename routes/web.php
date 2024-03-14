<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Http;
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

Route::group(['middleware' => 'guest','prefix'=>'auth'], function () {

    Route::get('/login', [LoginController::class, 'login'])->name('login');
    Route::post('/login', [LoginController::class, 'auth']);

});

Route::get('/',[MainController::class, 'index'])->name('home');
Route::post('/',[MainController::class, 'store']);
Route::get('/{link}',[MainController::class, 'show']);
Route::get('/delete/{link}',[MainController::class, 'destroy']);
