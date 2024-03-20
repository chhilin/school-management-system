<?php

use App\Http\Controllers\TeachersController;
use Illuminate\Support\Facades\Route;

$controller_path = 'App\Http\Controllers';

Route::get('/', function () {
    return view('Admin/AdminDashboardView');
});
Route::get('/teachers/list', function () {
    return view('content/teachers/list');
});
Route::get('/teachers/create', function () {
    return view('content/teachers/update');
});

Route::get('/teachers/update', function () {
    return view('content/teachers/update');
});

Route::get('/teachers/list', [TeachersController::class, 'index'])->name('teachers.list');
Route::post('teachers/create', [TeachersController::class, 'store']);
Route::view('teachers/create', 'content/teachers/create')->name('teachers.create');
Route::put('teachers/update/{id}', [TeachersController::class, 'update']);


// Route::post('/teachers/create', [TeachersController::class, 'store'])->name('teachers.create');
// Route::prefix('teachers')->group(function () use ($controller_path) {
//     Route::get('/list', $controller_path . '\TeachersController@index')->name('teachers');
//     Route::get('/create', $controller_path . '\TeachersController@create')->name('teachers');
 
//   });