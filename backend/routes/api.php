<?php

use App\Http\Controllers\TeachersController;
use Illuminate\Routing\Route;

Route::prefix('teacher')->group(function () {
    Route::get('/list', [TeachersController::class, 'index']);
});
