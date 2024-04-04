<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User; 
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('content.user.list', compact('users'));
    }

    public function create()
    {
        return view('content.user.create');
    }

    public function store(Request $request)
    {
        try {
            $user = User::create($request->all());
            return redirect('/user')->with('success', 'user has been created successfully.');
        } catch (\Exception $e) {
            // Log or display the error message
            Log::error($e->getMessage());
            return redirect()->back()->withInput()->withErrors(['error' => 'Failed to create user.']);
        }
    }

    public function update(Request $request, $id)
    {
        if($request->isMethod('get')){
            $user = User::findOrFail($id);
            return view('content.user.edit', compact('user'));
        }
        if($request->isMethod('post')){
            try {
                $user = User::findOrFail($id);
                $user->update($request->all());
                return redirect('/user')->with('success', 'user has been updated successfully.');
            } catch (\Exception $e) {
                // Log or display the error message
                Log::error($e->getMessage());
                return redirect()->back()->withInput()->withErrors(['error' => 'Failed to update user.']);
            }
        }
       
    }

    public function destroy($id)
    {
        DB::beginTransaction();
    
        try {
            // Find user by id
            $user = User::findOrFail($id);
    
            // Delete the user
            $user->delete();
    
            DB::commit();
            return redirect('/user')->with('success', 'user deleted successfully.');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect('/user')->with('error', 'Failed to delete user.');
        }
    }
    public function search()
    {
        $search_text = $_GET['query'];

        $users = User::where('user_ID', 'LIKE', '%' . $search_text . '%')
            ->orWhere('Khmer_Name', 'LIKE', '%' . $search_text . '%')
            ->orWhere('English_Name', 'LIKE', '%' . $search_text . '%')
            ->get();
        return view('content.user.list', compact('users'));
    }

}
