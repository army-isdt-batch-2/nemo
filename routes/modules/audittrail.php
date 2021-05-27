<?php

use Illuminate\Support\Facades\Route;


Route::get('/audittrail', [
    App\http\Controllers\AudittrailController::class,
    'audittrail'
    
 ])->name('audittrail');

 Route::get('/audittrail/create', [
    App\http\Controllers\AudittrailController::class,
    'audittrail_create'
    
 ])->name('audittrail.save');

 Route::post('/audittrail/create/save', [
    App\http\Controllers\AudittrailController::class,
    'create.save'
    
 ])->name('audittrail.create.save');
 
