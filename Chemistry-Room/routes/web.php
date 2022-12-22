<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ErabiltzaileController;

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

Route::get('/web', function () {
return view('web.login', );
})->name('web.inicio');


Route::get('/registro', function () {
    return view('web.registro');
})->name('web.registro');

Route::get('/froga1', function () {
    return view('web.froga1');
})->name('web.froga1');



Route::get('/adminKarpeta', [ErabiltzaileController::class, 'adminmode'])->name('adminKarpeta.admin');
Route::get('/crear', [ErabiltzaileController::class, 'store'])->name('web.store');
Route::get('/login', [ErabiltzaileController::class, 'login'])->name('web.login');

