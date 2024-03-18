<?php

// namespace App\Http\Controllers\Admin;
namespace App\Http\Controllers\Admin;
// Controllers\Controller;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Models\AdminModel;
use Illuminate\Http\Requset;

class AdminController extends Controller
{
    //
    public function index()
    {
        // Assuming Admin is the name of your model
        //$admins = AdminModel::all(); // Example of fetching all admin data from the database

        // return view('Admin.AdminDashboardView', ['admins' => $admins]);
        return view('Admin.AdminDashboardView');
    }

}
// namespace App\Http\Controllers\Admin;

// use App\Http\Controllers\Controller;
// use Illuminate\Support\Facades\Route;

// class AdminController extends Controller
// {
//     public static function index()
//     {
//         // Define the route directly in the web.php file
//         Route::get('/', function () {
//             return view('Admin.AdminDashboardView'); // Adjust the view path as needed
//         });
//     }
// }