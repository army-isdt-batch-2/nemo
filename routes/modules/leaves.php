<?php

use Illuminate\Support\Facades\Route;


Route::get('/leaves', [
    App\http\Controllers\LeavesController::class,
    'leaves'
    
 ])->name('leaves');

 Route::get('/leaves/create', [
    App\http\Controllers\LeavesController::class,
    'leaves_create'
    
 ])->name('leaves.create');

 
 Route::post('/leaves/create/save', [
    App\http\Controllers\LeavesController::class,
    'create.save'
    
 ]);

