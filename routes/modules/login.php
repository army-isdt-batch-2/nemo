<?php

use Illuminate\Support\Facades\Route;


Route::get('/login', [
    App\http\Controllers\LoginController::class,
    'index'
 ])->name('login');