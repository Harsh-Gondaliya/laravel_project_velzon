<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('signup',[AuthController::class,'signup'])->name('signup');

Route::post('signup-check',[AuthController::class,'signupCheck'])->name('signup-check');

Route::get('signin',[AuthController::class,'signin'])->name('signin');

Route::post('signin-check',[AuthController::class,'signinCheck'])->name('signin-check');

Route::get('dashboard',[AuthController::class,'dashboard'])->name('dashboard');

Route::get('designation',[AuthController::class,'designation'])->name('designation');

Route::get('create-designation',[AuthController::class,'createDesignation'])->name('designation.create');

Route::post('store-designation',[AuthController::class,'storeDesignation'])->name('designation.store');





