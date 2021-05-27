<?php

use Illuminate\Support\Facades\Route;




Route::get('/loans', [
    App\http\Controllers\LoansController::class,
    'loans'
    
 ])->name('loans');

Route::get('/loans/create', [
    App\http\Controllers\LoansController::class,
    'loans_create'
    
 ])->name('loans.create');

 Route::post('/loans/create/save', [
    App\http\Controllers\LoansController::class,
    'create.save'
    
 ]);