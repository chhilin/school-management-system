<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTeacherRequest;
use App\Models\Image;
use App\Models\Teachers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class TeachersController extends Controller
{
    // =========== get teachers ===========
    public function index()
    {
        $teachers = Teachers::all();
        // $response = response()->json($teachers);
        return view('content.teachers.list', compact('teachers'));
        // return view('content.teachers.list', ['teachers' => $teachers]);
        // return response()->json($teachers);
    }

    // ========== create teacher ==========

    // ...

    public function store(StoreTeacherRequest $request)
    {
        $teacher = Teachers::store($request);


        if ($request->hasFile('image')) {
            $image = $request->file('image');
            // $image = Image::store($request, $teacher->id);
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $path = $image->storeAs('public/assets/img/images', $filename);

            $imageData = [
                'image' => $image,
                'filename' => $filename,
                // 'teacher_id' => $teacher->id,
                'file_path' => $path,
            ];
            // dd($imageData);
            Image::create($imageData);
        }


        return redirect()->route('teachers.index')->with('success', 'Teacher created successfully.');
    }

    public function create()
    {
        return view('content.teachers.create');
    }

    
    // ===== update teacher =====
    public function update(Request $request, $id)
    {
        if ($request->isMethod('get')) {
            $teacher = Teachers::findOrFail($id);
            return view('content.teachers.edit', compact('teacher'));
        }
        if ($request->isMethod('post')) {
            try {
                $teacher = Teachers::findOrFail($id);
                $teacher->update($request->all());
                return redirect('/teachers')->with('success', 'teacher has been updated successfully.');
            } catch (\Exception $e) {
                // Log or display the error message
                Log::error($e->getMessage());
                return redirect()->back()->withInput()->withErrors(['error' => 'Failed to update teacher.']);
            }
        }
    }


    // ======= reseach ========

    public function search()
    {
        $search_text = $_GET['query'];

        $teachers = Teachers::where('teacher_id', 'LIKE', '%' . $search_text . '%')
            ->orWhere('khmer_name', 'LIKE', '%' . $search_text . '%')
            ->orWhere('english_name', 'LIKE', '%' . $search_text . '%')
            ->get();
        // dd($teachers);
        return view('content.teachers.list', compact('teachers'));
    }

    // ======= delete ==========
    public function destroy(string $id)
    {
        $teachers = Teachers::find($id);
        if (!$teachers) {
            return redirect()->back()->with('error', 'Teacher not found');
        }

        $teachers->delete();

        return redirect()->back()->with('success', 'Teacher deleted successfully');
    }
}
