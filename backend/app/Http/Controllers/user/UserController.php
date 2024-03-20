<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
  public function index()
  {
    $users = User::orderBy('created_at', 'desc')->paginate(10);
    return view('content.user.list', compact('users'));
  }
  public function create()
  {
    $student = Student::all();
    return view('content.user.create', compact('student'));
  }
  public function store(Request $request)
  {
    DB::beginTransaction();
    User::store($request);
    DB::commit();
    return redirect('/user');
  }
  public function show(User $user)
  {
    return view('show', compact('user'));
  }
  public function edit($id)
  {
    $user = User::find($id);
    return view('content.user.edit', compact('user'));
  }
  public function update(Request $request, $id)
  {
    DB::beginTransaction();
    User::store($request, $id);
    DB::commit();
    return redirect('/user');
  }
  public function destroy($id)
  {
    DB::beginTransaction();
    // Find user and media by id and delete it 
    $user = User::find($id);
    DB::commit();
    // Redirect back to the User list or a success page
    return redirect('/user');
  }
  public function profile()
    {
      // Assuming you have access to the user data
      $user = auth()->user(); // You might need to adjust this based on your authentication setup

      return view('content.user.profile', ['user' => $user]);
    }
}