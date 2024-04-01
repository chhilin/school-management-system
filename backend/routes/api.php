<?php
use App\Http\Controllers\TeachersController;
use Illuminate\Routing\Route;


Route::get('/teachers', [TeachersController::class, 'index']);

