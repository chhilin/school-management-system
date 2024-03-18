<?php

namespace App\Http\Controllers\student;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public static function index()
    {
        $students = Student::orderBy('created_at', 'desc')->paginate(10);
        return view('content.student.list', compact('students'));
    }
    public function create()
    {
        $students = new Student();
        return view('content.student.create', compact('students'));
    }
    public function destroy($id)
  {
    DB::beginTransaction();
    $student = Student::find($id);
    DB::commit();
    return redirect('/student');
  }
}
