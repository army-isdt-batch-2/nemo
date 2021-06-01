<?php

use Illuminate\Support\Facades\Route;


Route::get('/', [
    App\http\Controllers\DashboardController::class,
    'index'
 ])->name('dashboard');