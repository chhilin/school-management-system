<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\teacher\TeacherController;

$controller_path = 'App\Http\Controllers';

Route::get('/', function () {
    return view('Admin/AdminDashboardView');
});


Route::get('/', [AdminController::class, 'index'])->name('admin.dashboard');
Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');

$controller_path = 'App\Http\Controllers';

Route::redirect("/", "/admin");

// Dashboard
Route::get('/dashboard', $controller_path . '\dashboard\AnalyticsController@index')->name('dashboard-analytics');


// Student
Route::prefix('student')->group(function () use ($controller_path) {
    Route::get('/', $controller_path . '\student\StudentController@index')->name('student.index');
    Route::get('/create', $controller_path . '\student\StudentController@create')->name('student.create');
    Route::post('/store', $controller_path . '\student\StudentController@store')->name('student.store');
    Route::any ('/edit/{id}', $controller_path . '\student\StudentController@update')->name('student.edit');
    Route::delete('/delete/{id}', $controller_path . '\student\StudentController@destroy')->name('student.destroy');
    Route::get('/search', $controller_path . '\student\StudentController@search')->name('student.search');
});


// ===============teacher====================
Route::prefix('teacher')->group(function () use ($controller_path) {
    Route::get('/', $controller_path . '\teacher\TeacherController@index')->name('teachers.index');
    Route::get('/create', $controller_path . '\teacher\TeacherController@create')->name('teachers.create');
    Route::post('/store', $controller_path . '\teacher\TeacherController@store')->name('teachers.store');
    Route::any ('/edit/{id}', $controller_path . '\teacher\TeacherController@update')->name('teachers.edit');
    Route::delete('/delete/{id}', $controller_path . '\teacher\TeacherController@destroy')->name('teachers.destroy');
    Route::get('/search', $controller_path . '\teacher\TeacherController@search')->name('teachers.search');
});
// Route::get('/teachers', [TeachersController::class, 'index'])->name('teachers.index');
// Route::get('/teachers/create', [TeachersController::class, 'create'])->name('teachers.create');
// Route::post('/teachers/store', [TeachersController::class, 'store'])->name('teachers.store');
// Route::get('/teachers/search', [TeachersController::class, 'search'])->name('teachers.search');
// Route::delete('/teachers/{id}', [TeachersController::class, 'destroy'])->name('teachers.destroy');

// Route::any('teachers/edit/{id}', [TeacherController::class, 'update'])->name('teachers.edit');


// Faculty
Route::prefix('faculty')->group(function () use ($controller_path) {
    Route::get('/', $controller_path . '\faculty\FacultyController@index')->name('faculty.index');
    Route::get('/create', $controller_path . '\faculty\FacultyController@create')->name('faculty.create');
    Route::post('/store', $controller_path . '\faculty\FacultyController@store')->name('faculty.store');
    Route::any('/edit/{id}', $controller_path . '\faculty\FacultyController@edit')->name('faculty.edit');
    Route::any('/update/{id}', $controller_path . '\faculty\FacultyController@update')->name('faculty.update');
    Route::delete('/delete/{id}', $controller_path . '\faculty\FacultyController@destroy')->name('faculty.destroy');
    Route::get('/search', $controller_path . '\faculty\FacultyController@search')->name('faculty.search');

});
