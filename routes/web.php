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

Route::get('/test', function () {
    return view('pppk_2023.dashboard-lokal');
});

Route::get('/cek-pppk', function () {
    return view('pppk_2023.dashboard');
});


Route::post('cek-pppk/search', 'pencarian_controller@get_pppk_2023')->name('get-pppk-2023');
Route::get('cek-pppk/search', 'pencarian_controller@get_pppk_2023')->name('get-pppk-2023');