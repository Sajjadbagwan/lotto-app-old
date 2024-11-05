<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Auth\Login;
use App\Http\Controllers\Admin\Auth\Forgot;


Route::get('/', function () {
    return view('welcome');
});



Route::group(['prefix' => 'auth'], function () {
    Route::get('login', [Login::class,'create'])->name('login');
    Route::post('login', [Login::class,'store'])->name('login.store');

    Route::get('forgot', [Forgot::class,'create'])->name('forgot');
    Route::post('forgot', [Forgot::class,'store'])->name('forgot.store');

    //Route::get('reset', 'Auth\Reset@create');
    // Route::get('reset/{token}', 'Auth\Reset@create')->name('reset');
    // Route::post('reset', 'Auth\Reset@store')->name('reset.store');

    // Route::get('register/{token}', 'Auth\Register@create')->name('register');
    // Route::post('register', 'Auth\Register@store')->name('register.store');
});

