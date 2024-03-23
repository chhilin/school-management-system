<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTeacherRequest;
use App\Models\Image;
use App\Models\Teachers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TeachersController extends Controller
{
    // =========== get teachers ===========
    public function index()
    {
        $teachers = Teachers::all();
        return view('content.teachers.list', compact('teachers'));
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


        // return redirect()->route('teachers.list')->with('success', 'Teacher created successfully.');
        return redirect()->route('teachers.list')->with('success', 'Teacher created successfully.');
    }

    public function create()
    {
        return view('content.teachers.create');
    }

    public function edit($id)
    {
        $teacher = Teachers::find($id);
        return view('content.teachers.edit', compact('teacher'));
    }
    
    public function update(Request $request, $id)
    {
        $teachers = Teachers::find($id);
        // Update the teacher's information based on the request data
        $teachers= Teachers::store($teachers);
        $teachers->update();
        dd($teachers);
    
        return redirect()->route('teachers-list')->with('success', 'Teacher updated successfully');
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
        $teachers= Teachers::find($id);
        if (!$teachers) {
            return redirect()->back()->with('error', 'Teacher not found');
        }
    
        $teachers->delete();
    
        return redirect()->back()->with('success', 'Teacher deleted successfully');
    }
}
