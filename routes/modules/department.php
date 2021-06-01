<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepartmentController;

/**
 * Department Data Lists
 */
Route::get('/department', [ DepartmentController::class, 'index' ])->name('department');


/** 
 * Create New Deartment Form
*/
Route::get('/department/create', [ DepartmentController::class, 'create' ])->name('department.create');


/** 
 * Save New Department to Database
*/
Route::post('/department/create/save', [ DepartmentController::class, 'store' ])->name('department.create.save');


/** 
 * Edit Departmetn Record Form
*/
Route::get('/department/edit/{id}', [ DepartmentController::class, 'edit' ])->name('department.edit');


/** 
 * Update Departmetn Record to Database
*/
Route::post('/department/update/{id}', [ DepartmentController::class, 'update' ])->name('department.update');


/** 
 * Delete Departmetn Record to Database
*/
Route::get('/department/delete/{id}', [ DepartmentController::class, 'delete' ])->name('department.delete');





