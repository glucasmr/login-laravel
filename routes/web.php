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


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::get('/dados', function () {
    return view('dados');
})->middleware(['auth'])->name('dados');


Route::get('/opcoes', function () {
    return view('opcoes');
})->middleware(['auth'])->name('opcoes');

require __DIR__.'/auth.php';
