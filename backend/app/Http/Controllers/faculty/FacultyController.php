<?php

namespace App\Http\Controllers\faculty;

use App\Http\Controllers\Controller;
use App\Models\Faculty;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FacultyController extends Controller
{
    public function index()
{
    $faculties = Faculty::all(); // Retrieve faculties from the database
    return view('content.faculty.list', ['faculties' => $faculties]); // Pass faculties to the view
}

    public function store(Request $request)
{
        // Validate the request data
        $request->validate([
            'faculty_name' => 'required|string|max:255',
            'faculty_id' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            // Add validation rules for other fields as needed
        ]);

        // Create a new instance of faculty model with the validated data
        $faculty = new faculty();
        $faculty->faculty_id = $request->input('faculty_id');
        $faculty->faculty_name = $request->input('faculty_name');
        $faculty->description = $request->input('description');
        // Assign other fields from the request as needed

        // Save the faculty to the database
        $faculty->save();

        // Redirect to a relevant page, e.g., show the newly created faculty or a listing of faculties
        return redirect()->route('faculty.index')->with('success', 'faculty created successfully.');
    }
//     public function edit($id)
// {
//     // Find the faculty by its ID
//     $faculty = Faculty::findOrFail($id);

//     // Return the edit view with the found faculty
//     return view('content.faculty.list', compact('faculty'));
// }
    public function update(Request $request, $id)
    {
        // Find the faculty by its ID
        $faculty = Faculty::findOrFail($id);

        // Validate the request data
        $request->validate([
          'faculty_name' => 'required|string|max:255',
          'faculty_id' => 'required|string|max:255',
          'description' => 'required|string|max:255',
            // Add validation rules for other fields as needed
        ]);

        // Update the faculty model with the validated data
        $faculty->update([
            'faculty_id' => $request->input('faculty_id'),
            'faculty_name' => $request->input('faculty_name'),
            'description' => $request->input('description'),
            // Update other fields from the request as needed
        ]);

        // Redirect back to the faculty edit page with a success message
        return redirect('/faculty')->with('success', 'faculty updated successfully.');
    }
  public function destroy($id)
{
    DB::beginTransaction();
    
    try {
        $faculty = faculty::findOrFail($id); // Find the faculty record
        $faculty->delete(); // Delete the faculty record
        DB::commit(); // Commit the transaction

        // Redirect with a success message
        return redirect('/faculty')->with('success', 'faculty deleted successfully');
    } catch (\Exception $e) {
        DB::rollBack(); // Roll back the transaction if an error occurs

        // Redirect with an error message
        return redirect('/faculty')->with('error', 'Failed to delete faculty');
    }
}

}
