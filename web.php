<?php

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

Route::get('/dashboard', function () {
    return view('petugas.dashboard');
});

Route::get('/from', function () {
    return view('barang.from');
});

Route::get('/Login', function () {
    return view('auth.login');
});

Route::get('/Register', function () {
});