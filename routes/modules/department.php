<?php

use Illuminate\Support\Facades\Route;


Route::get('/department', [
    App\http\Controllers\DepartmentController::class,
    'department'
    
 ])->name('department');

 Route::get('/department/create', [
    App\http\Controllers\DepartmentController::class,
    'department'
    
 ])->name('department.create');

 Route::post('/department/create/save', [
    App\http\Controllers\DepartmentController::class,
    'save'
    
 ])->name('department.create.save');
 