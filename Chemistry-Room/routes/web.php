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

Route::get('/', [ErabiltzaileController::class, 'index'])->name('web.login');

Route::get('/profila', function () {
    return view('web.profila', );
    })->name('web.profila');

Route::get('/kodea', function () {
    return view('web.kodeSartu');
})->name('web.kodeSartu');

Route::get('/registro', function () {
    return view('web.registro');
})->name('web.registro');

Route::get('/orriNagusi', function () {
    return view('web.orriNagusi');
})->name('web.orriNagusi');

Route::get('/froga1', function () {
    return view('web.froga1');
})->name('web.froga1');

Route::get('/froga2', function () {
    return view('web.froga2');
})->name('web.froga2');

Route::get('/froga3', function () {
    return view('web.froga3');
})->name('web.froga3');

Route::get('/froga4', function () {
    return view('web.froga4');
})->name('web.froga4');

Route::get('/froga5', function () {
    return view('web.froga5');
})->name('web.froga5');

Route::get('/froga6', function () {
    return view('web.froga6');
})->name('web.froga6');

Route::get('/irabaziOrria', function () {
    return view('web.irabaziOrria');
})->name('web.irabaziOrria');

// Erabiltzaile Guztiak
Route::get('/crear', [ErabiltzaileController::class, 'store'])->name('web.store');
Route::post('/login', [ErabiltzaileController::class, 'login'])->name('web.logeo');
Route::get('/logout', [ErabiltzaileController::class, 'logout'])->name('web.logout');
Route::put('/update/{id}', [ErabiltzaileController::class, 'update'])->name('web.update');

// Admin
Route::get('/adminKarpeta', [ErabiltzaileController::class, 'adminmode'])->name('adminKarpeta.admin');
Route::delete('/Erabiltzaileak/{id}', [ErabiltzaileController::class, 'destroy'])->name('Erabiltzaileak.destroy');
Route::post('/argazkiUpload',  [ErabiltzaileController::class, 'argazki'])->name('web.storeFotos');

// Middleware
Route::group(['Middleware' => 'middlewareSesion'], function(){
    Route::get('/infoErab', function () {
        return view('web.infoErab');
    })->name('web.infoUsu');
});
