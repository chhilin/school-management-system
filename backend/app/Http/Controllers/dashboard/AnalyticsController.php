<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;

class AnalyticsController extends Controller
{
  public static function index()
  {
    $students = Student::all();
    return view('content.dashboard.dashboards-analytics', compact('students'));
  }
}