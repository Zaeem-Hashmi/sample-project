<?php

use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/repo',[UserController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/submit/{id?}',[\App\Http\Controllers\DataController::class, 'index']);
Route::get('/edit/{id}',[\App\Http\Controllers\DataController::class, 'edit']);
Route::get('/del/{id}',[\App\Http\Controllers\DataController::class, 'del']);
