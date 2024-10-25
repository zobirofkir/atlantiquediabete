<?php

use App\Http\Controllers\InscriptionController;
use Illuminate\Support\Facades\Route;

Route::get('/', [InscriptionController::class, 'index'])->name('inscription.index');
Route::post('/', [InscriptionController::class, 'store'])->name('inscription.store');