<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\pokemonController;
use App\http\Controllers\MabelController;
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
})->name('pokemon');






Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('pokemon',pokemonController::class);


Auth::routes();

Route::get('/pokemon', [App\Http\Controllers\pokemonController::class, 'index'])->name('pokemon');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

