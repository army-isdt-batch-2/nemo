<?php

use Illuminate\Support\Facades\Route;



Route::get('/payslip', [
    App\http\Controllers\PayslipController::class,
    'payslip'
    
 ])->name('payslip');
 Route::get('/payslip/create', [
    App\http\Controllers\PayslipController::class,
    'payslip_create'
    
 ])->name('payslip.create');


 Route::post('/payslip/create/save', [
    App\http\Controllers\PayslipController::class,
    'create.save'
    
 ]);
 