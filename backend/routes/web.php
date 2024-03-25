<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;

Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');

$controller_path = 'App\Http\Controllers';

Route::redirect("/", "/dashboard");

// Dashboard
Route::get('/dashboard', $controller_path . '\dashboard\AnalyticsController@index')->name('dashboard-analytics');

// User
// Route::prefix('user')->group(function () use ($controller_path) {
//     Route::get('/', $controller_path . '\user\UserController@index')->name('user.index');
//     Route::get('/create', $controller_path . '\user\UserController@create')->name('user.create');
//     Route::post('/store', $controller_path . '\user\UserController@store')->name('user.store');
//     Route::get('/edit/{id}', $controller_path . '\user\UserController@edit')->name('user.edit');
//     Route::put('/update/{id}', $controller_path . '\user\UserController@update')->name('user.update');
//     Route::delete('/delete/{id}', $controller_path . '\user\UserController@destroy')->name('user.destroy');
//     Route::get('/search', $controller_path . '\user\UserController@search')->name('user.search');
// });

// Student
Route::prefix('student')->group(function () use ($controller_path) {
    Route::get('/', $controller_path . '\student\StudentController@index')->name('student.index');
    Route::get('/create', $controller_path . '\student\StudentController@create')->name('student.create');
    Route::post('/store', $controller_path . '\student\StudentController@store')->name('student.store');
    Route::any ('/edit/{id}', $controller_path . '\student\StudentController@update')->name('student.edit');
    Route::delete('/delete/{id}', $controller_path . '\student\StudentController@destroy')->name('student.destroy');
    Route::get('/search', $controller_path . '\student\StudentController@search')->name('student.search');
});
