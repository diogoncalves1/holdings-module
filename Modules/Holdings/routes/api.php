<?php

use Illuminate\Support\Facades\Route;
use Modules\Holdings\Http\Controllers\HoldingsController;

Route::middleware(['auth:sanctum'])->prefix('v1')->group(function () {
    Route::apiResource('holdings', HoldingsController::class)->names('holdings');
});
