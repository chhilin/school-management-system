<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student; 
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('content.student.list', compact('students'));
    }

    public function create()
    {
        return view('content.student.create');
    }

    public function store(Request $request)
    {
        try {
            $student = Student::create($request->all());
            return redirect('/student')->with('success', 'Student has been created successfully.');
        } catch (\Exception $e) {
            // Log or display the error message
            Log::error($e->getMessage());
            return redirect()->back()->withInput()->withErrors(['error' => 'Failed to create student.']);
        }
    }

    public function update(Request $request, $id)
    {
        if($request->isMethod('get')){
            $student = Student::findOrFail($id);
            return view('content.student.edit', compact('student'));
        }
        if($request->isMethod('post')){
            try {
                $student = Student::findOrFail($id);
                $student->update($request->all());
                return redirect('/student')->with('success', 'Student has been updated successfully.');
            } catch (\Exception $e) {
                // Log or display the error message
                Log::error($e->getMessage());
                return redirect()->back()->withInput()->withErrors(['error' => 'Failed to update student.']);
            }
        }
       
    }

    public function destroy($id)
    {
        DB::beginTransaction();
    
        try {
            // Find student by id
            $student = Student::findOrFail($id);
    
            // Delete the student
            $student->delete();
    
            DB::commit();
            return redirect('/student')->with('success', 'Student deleted successfully.');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect('/student')->with('error', 'Failed to delete student.');
        }
    }
    

//     public function destroy(string $id)
//     {
//     try {
//         $student = Student::find($id);
        
//         if (!$student) {
//             return redirect()->back()->with('error', 'Student not found');
//         }

//         $student->delete();

//         return redirect()->back()->with('success', 'Student deleted successfully');
//     } catch (\Exception $e) {
//         // Log or display the error message
//         Log::error($e->getMessage());
//         return redirect()->back()->with('error', 'Failed to delete student');
//     }
// }

}
