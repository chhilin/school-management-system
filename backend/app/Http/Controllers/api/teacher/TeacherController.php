<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Resources\TeacherResources;
use App\Models\Teachers;
// use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index(){
        $data = Teachers::list();
        $data = TeacherResources::collection($data);

        return response()->json(['success' => true, 'data' => $data], 200);

    }
}
