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

Route::get('/', function () {
    return view('bagiDua');
})->name('bagidua');

Route::get('/regulafalsi', function () {
    return view('regulaFalsi');
})->name('regulafalsi');

Route::get('/titiktetap', function () {
    return view('titikTetap');
})->name('titiktetap');

Route::get('/newtonrapshon', function () {
    return view('newtonRapshon');
})->name('newtonrapshon');

Route::get('/secant', function () {
    return view('secant');
})->name('secant');
