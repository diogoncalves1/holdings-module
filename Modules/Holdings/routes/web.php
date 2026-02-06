<?php

use Illuminate\Support\Facades\Route;
use Modules\Holdings\Http\Controllers\HoldingsController;

Route::middleware(['auth', 'verified'])->group(function () {
    Route::resource('holdings', HoldingsController::class)->names('holdings');
});
