<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Admin/AdminDashboardView');
});
// Route::get('/', function () {
//     return view('welcome');
// });