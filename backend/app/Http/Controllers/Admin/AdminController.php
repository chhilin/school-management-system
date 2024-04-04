<?php


namespace App\Http\Controllers\Admin;
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
        return view('Admin.AdminDashboardView');
    }

}
