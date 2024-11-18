<?php

use App\Http\Controllers\AttestationController;
use App\Http\Controllers\InscriptionController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AttestationController::class, 'index'])->name('attestation.index');
Route::post('/store', [AttestationController::class, 'store'])->name('attestation.store');