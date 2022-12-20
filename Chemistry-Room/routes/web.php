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
return view('web.index');

});
Route::get('/adminKarpeta', [ErabiltzaileController::class, 'index'])->name('adminKarpeta.admin');

