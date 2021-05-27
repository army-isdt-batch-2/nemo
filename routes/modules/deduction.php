<?php

use Illuminate\Support\Facades\Route;



Route::get('/deduction', [
    App\http\Controllers\DeductionController::class,
    'deduction'
    
 ])->name('deduction');

Route::get('/deduction/create', [
    App\http\Controllers\Deductiontroller::class,
    'deduction_create'
    
 ])->name('deduction.create');

 Route::post('/deduction/create/save', [
    App\http\Controllers\DeductionController::class,
    'create.save'
    
 ])->name('deduction.create.save');


