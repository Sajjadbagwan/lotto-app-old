<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/create_lotry_step1', function () {
    return view('create_lotry_step1');
});
Route::get('/create_lotry_step2', function () {
    return view('create_lotry_step2');
});
Route::get('/fix_price_setting', function () {
    return view('fix_price_setting');
});

Route::get('/create_lotry_step3', function () {
    return view('create_lotry_step3');
});

Route::get('/create_lotry_step4', function () {
    return view('create_lotry_step4');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
