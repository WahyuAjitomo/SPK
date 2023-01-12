<?php

use App\Http\Controllers\CriteriaController;
use App\Http\Controllers\KomponenController;
use App\Http\Controllers\AlternativeController;
use App\Http\Controllers\NilaiController;
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

// Route::get('/kriteriauser', function () {
//     return view('kriteriauser');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('criteria', CriteriaController::class);
Route::resource('komponen', KomponenController::class);
Route::resource('kriteriauser', KriteriauserController::class);
Route::resource('alternative', AlternativeController::class);
Route::resource('nilai', NilaiController::class);

