<?php

use Illuminate\Support\Facades\Route;


Route::get('/login', [
    App\http\Controllers\LoginController::class,
    'index'
 ]);

 Route::get('/table', [
    App\http\Controllers\LoginController::class,
    'table'

 ]);

 Route::get('/layout', [
    App\http\Controllers\LoginController::class,
    'layout'
    
 ]);
 Route::get('/dashboard', [
    App\http\Controllers\LoginController::class,
    'dashboard'
    
 ]);
 Route::get('/audittrail', [
    App\http\Controllers\LoginController::class,
    'audittrail'
    
 ]);
 Route::get('/employees', [
    App\http\Controllers\LoginController::class,
    'employees'
    
 ]);
 Route::get('/department', [
    App\http\Controllers\LoginController::class,
    'department'
    
 ]);
 Route::get('/loans', [
    App\http\Controllers\LoginController::class,
    'loans'
    
 ]);
 Route::get('/leaves', [
    App\http\Controllers\LoginController::class,
    'leaves'
    
 ]);
 Route::get('/deduction', [
    App\http\Controllers\LoginController::class,
    'deduction'
    
 ]);
 Route::get('/timekeeping', [
    App\http\Controllers\LoginController::class,
    'timekeeping'
    
 ]);
 Route::get('/payslip', [
    App\http\Controllers\LoginController::class,
    'payslip'
    
 ]);
 Route::get('/form', [
   App\http\Controllers\LoginController::class,
   'form'
   
]);
Route::get('/audittrail/create', [
   App\http\Controllers\LoginController::class,
   'audittrail_create'
   
]);
Route::get('/department/create', [
   App\http\Controllers\LoginController::class,
   'department_create'
   
]);
Route::get('/employees/create', [
   App\http\Controllers\LoginController::class,
   'employees_create'
   
]);
Route::get('/loans/create', [
   App\http\Controllers\LoginController::class,
   'loans_create'
   
]);
Route::get('/leaves/create', [
   App\http\Controllers\LoginController::class,
   'leaves_create'
   
]);
Route::get('/leaves/create', [
   App\http\Controllers\LoginController::class,
   'leaves_create'
   
]);
Route::get('/deduction/create', [
   App\http\Controllers\LoginController::class,
   'deduction_create'
   
]);
Route::get('/timekeeping/create', [
   App\http\Controllers\LoginController::class,
   'timekeeping_create'
   
]);
Route::get('/payslip/create', [
   App\http\Controllers\LoginController::class,
   'payslip_create'
   
]);



