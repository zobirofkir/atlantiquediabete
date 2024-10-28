<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\InscriptionApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::post('/auth/login', [AuthController::class, 'login']);

Route::middleware('auth:api')->group(function () {
    Route::apiResource("/inscriptions", InscriptionApiController::class);
});