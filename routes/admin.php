




<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminCntroller;


Route::group([ 'middleware' => ['admin']], function() {
    Route::get('dashboard',[AdminCntroller::class,'dashboard'])->name('dashboard');
});

?>
