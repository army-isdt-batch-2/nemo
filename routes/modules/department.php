<?php

use Illuminate\Support\Facades\Route;


Route::get('/department', [
    App\http\Controllers\DepartmentController::class,
    'index'
    
 ])->name('department');

 Route::get('/department/create', [
    App\http\Controllers\DepartmentController::class,
    'create'
    
 ])->name('department.create');

 Route::post('/department/create/save', [
    App\http\Controllers\DepartmentController::class,
    'create.save'
    
 ])->name('department.create.save');
 