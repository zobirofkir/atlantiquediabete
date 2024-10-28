<?php

use App\Http\Controllers\InscriptionApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::apiResource("/inscriptions", InscriptionApiController::class);