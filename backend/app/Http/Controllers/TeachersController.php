<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTeacherRequest;
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
        $teacherData = $request->validated();

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/images', $imageName);
            $teacherData['image'] = $imageName;
        }

        $teacher = Teachers::create($teacherData);
        dd($teacher);
        return redirect()->route('teachers.list')->with('success', 'Teacher created successfully.');
    }

    public function create()
    {
        return view('content.teacher.create');
    }

    public function update(StoreTeacherRequest $request, string $id)
    {
        $teacher = Teachers::store($request,$id);
        return response()->json(['updated success' => true,'data' =>$teacher],200);
    }

}
