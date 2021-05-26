<?php

use Illuminate\Support\Facades\Route;


Route::get('/login', [
    App\http\Controllers\LoginController::class,
    'index'
 ])->name('login');

 Route::get('/table', [
    App\http\Controllers\LoginController::class,
    'table'

 ])->name('table');

 Route::get('/layout', [
    App\http\Controllers\LoginController::class,
    'layout'
    
 ])->name('layout');

 Route::get('/', [
    App\http\Controllers\LoginController::class,
    'index'
    
 ])->name('home');

 Route::get('/audittrail', [
    App\http\Controllers\LoginController::class,
    'audittrail'
    
 ])->name('audittrail');

 Route::get('/employees', [
    App\http\Controllers\LoginController::class,
    'employees'
    
 ])->name('employees');

 Route::get('/department', [
    App\http\Controllers\LoginController::class,
    'index'
    
 ])->name('department');

 Route::get('/loans', [
    App\http\Controllers\LoginController::class,
    'loans'
    
 ])->name('loans');

 Route::get('/leaves', [
    App\http\Controllers\LoginController::class,
    'leaves'
    
 ])->name('leaves');

 Route::get('/deduction', [
    App\http\Controllers\LoginController::class,
    'deduction'
    
 ])->name('deduction');

 Route::get('/timekeeping', [
    App\http\Controllers\LoginController::class,
    'timekeeping'
    
 ])->name('timekeeping');

 Route::get('/payslip', [
    App\http\Controllers\LoginController::class,
    'payslip'
    
 ])->name('payslip');

 Route::get('/form', [
   App\http\Controllers\LoginController::class,
   'form'
   
]);

Route::post('/department/create', [
   App\http\Controllers\LoginController::class,
   'department_create'
   
])->name('department.create');

Route::post('/audittrail/create', [
   App\http\Controllers\LoginController::class,
   'audittrail_create'
   
])->name('audittrail.create');

Route::post('/employees/create', [
   App\http\Controllers\LoginController::class,
   'employees_create'
   
])->name('employees.save');

Route::post('/loans/create', [
   App\http\Controllers\LoginController::class,
   'loans_create'
   
])->name('loans.create');

Route::post('/leaves/create', [
   App\http\Controllers\LoginController::class,
   'leaves_create'
   
])->name('leaves.create');

Route::post('/leaves/create', [
   App\http\Controllers\LoginController::class,
   'leaves_create'
   
])->name('leaves.create');

Route::post('/deduction/create', [
   App\http\Controllers\LoginController::class,
   'deduction_create'
   
])->name('deduction.create');

Route::get('/timekeeping/create', [
   App\http\Controllers\LoginController::class,
   'timekeeping_create'
   
])->name('timekeeping.create');

Route::post('/payslip/create', [
   App\http\Controllers\LoginController::class,
   'payslip_create'
   
])->name('payslip.create');



