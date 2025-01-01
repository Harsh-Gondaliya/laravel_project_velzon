<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[AuthController::class,'signup'])->name('signup');

Route::post('signup-check',[AuthController::class,'signupCheck'])->name('signup-check');

Route::get('signin',[AuthController::class,'signin'])->name('signin');

Route::post('signin-check',[AuthController::class,'signinCheck'])->name('signin-check');

Route::get('dashboard',[AuthController::class,'dashboard'])->name('dashboard');

Route::get('designation',[AuthController::class,'designation'])->name('designation');

Route::get('create-designation',[AuthController::class,'createDesignation'])->name('designation.create');

Route::post('store-designation',[AuthController::class,'storeDesignation'])->name('designation.store');




Route::get('technology',[AuthController::class,'technology'])->name('technology');

Route::get('create-technology',[AuthController::class,'createTechnology'])->name('technology.create');
Route::post('store-technology',[AuthController::class,'storeTechnology'])->name('technology.store');

Route::get('update-technology/{id}',[AuthController::class,'updateTechnology'])->name('technology.update');
Route::post('update-technology_list',[AuthController::class,'updateTech'])->name('technology.update.list');

Route::get('delete-technology/{id}',[AuthController::class,'deleteTechnology'])->name('technology.delete');




