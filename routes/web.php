<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;

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

Route::get('/', function () {
    return view('auth.login');
});


Route::resource('producto', ProductoController::class);
Auth::routes(['register'=>false, 'reset'=>false]);

Route::get('/home', [App\Http\Controllers\ProductoController::class, 'index'])->name('home');



Route::group(['middleware'=>'auth'], function(){
    Route::get('/home', [App\Http\Controllers\ProductoController::class, 'index'])->name('home');

});