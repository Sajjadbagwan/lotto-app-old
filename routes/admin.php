<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\Admin\Auth\Login;
use App\Http\Controllers\Admin\Auth\Forgot;
use App\Http\Controllers\Admin\Auth\Users;
use App\Http\Controllers\Admin\DashboardController;



Route::group(['prefix' => 'auth'], function () {
    Route::get('login', [Login::class,'create'])->name('login');
    Route::post('login', [Login::class,'store'])->name('login.store');

    Route::get('logout', [Login::class,'destroy'])->name('logout');

    Route::get('forgot', [Forgot::class,'create'])->name('forgot');
    Route::post('forgot', [Forgot::class,'store'])->name('forgot.store');
    
    //Route::get('reset', 'Auth\Reset@create');
    // Route::get('reset/{token}', 'Auth\Reset@create')->name('reset');
    // Route::post('reset', 'Auth\Reset@store')->name('reset.store');

    // Route::get('register/{token}', 'Auth\Register@create')->name('register');
    // Route::post('register', 'Auth\Register@store')->name('register.store');
});
//Route::middleware('role:Super Admin')->group(function () {
    Route::group(['middleware' => ['role:super_admin']], function () {    
    Route::get('dashboard', [DashboardController::class,'index'])->name('dashboard');

    Route::get('users/index', [Users::class,'index'])->name('users.index');
    Route::get('users/create', [Users::class,'create'])->name('users.create');
    Route::post('users/store', [Users::class,'store'])->name('users.store');
});



