<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminCntroller;
use App\Http\Controllers\TechnologyController;

Route::group([ 'middleware' => ['admin']], function() {
    Route::get('dashboard',[AdminCntroller::class,'dashboard'])->name('dashboard');

    Route::get('/designation',[AdminCntroller::class,'designation'])->name('designation');

    Route::get('/designation/create',[AdminCntroller::class,'createDesignation'])->name('create.designation');

    Route::post('/designation/store',[AdminCntroller::class,'storeDesignation'])->name('store.designation');

    Route::get('/designation/edit/{id}', [AdminCntroller::class, 'editDesignation'])->name('edit.designation');

    Route::post('/designation/update/{id}', [AdminCntroller::class, 'updatedDesignation'])->name('update.designation');

    Route::get('/designation/delete/{id}', [AdminCntroller::class, 'destroyDesignation'])->name('delete.designation');

    Route::resource('technology',TechnologyController::class);

});

?>
