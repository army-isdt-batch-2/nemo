<?php

use Illuminate\Support\Facades\Route;



Route::get('/timekeeping', [
    App\http\Controllers\TimekeepingController::class,
    'timekeeping'
    
 ])->name('timekeeping');

 
Route::get('/timekeeping/create', [
    App\http\Controllers\TimekeepingController::class,
    'timekeeping_create'
    
 ])->name('timekeeping.create');

 Route::post('/timekeeping/create/save', [
    App\http\Controllers\TimekeepingController::class,
    'create.save'
    
 ])->name('timekeeping.create.save');