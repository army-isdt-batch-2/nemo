<?php

use Illuminate\Support\Facades\Route;


Route::get('/employees', [
    App\http\Controllers\EmployeesController::class,
    'employees'
    
 ])->name('employees');

 Route::get('/employees/create', [
    App\http\Controllers\EmployeesController::class,
    'employees_create'
    
 ])->name('employees.save');

 Route::post('/employees/create/save', [
    App\http\Controllers\EmployeesController::class,
    'create.save'
    
 ])->name('employees.create.save');