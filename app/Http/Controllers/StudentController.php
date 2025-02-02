<?php

namespace App\Http\Controllers;

use App\Models\Student;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

// QUESTION: What does each function have in common with one another?
// QUESTION: Where do the values of the parameters of the functions come from?
// QUESTION: What does each function return and where does it end up?

class StudentController extends Controller {

    /**
     * Show a webpage with all the students in the database.
     */
    public function showAll() {
       $students = Student::all();

       return view('overview', ['students' => $students]);
    }

    /**
     * Show a webpage with a single student with a specific id.
     */
    public function showSingle($id) {
        $student = Student::findOrfail($id);

        return view('showSingle', ['student' => $student]);
    }

    /**
     * Show the form to create a single student.
     */
    public function showCreateForm() {
        return view('createStudent');
    }

    public function createSingle(Request $request) {
        $payload = [
            'firstName' => $request->input('firstName'),
            'lastName' => $request->input('lastName')
        ];

        $student = Student::create($payload);

        return Redirect::route('student.toAll');
    }

    /**
     * Show the form to delete a single student.
     */
    public function showDeleteForm($id) {
        $student = Student::findOrfail($id);

        return view('deleteSingle', ['student' => $student]);
    }

    public function deleteSingle($id) {
        $student = Student::findOrFail($id);
        $student->delete();

        return Redirect::route('student.toAll');
    }

    /**
     * Show the form to update a single student.
     */
    public function showUpdateForm($id) {
        $student = Student::findOrfail($id);

        return view('updateSingle', ['student' => $student]);
    }

    public function updateSingle($id, Request $request) {
        $original = Student::findOrFail($id);

        $payload = [
            'firstName' => $request->input('firstName'),
            'lastName' => $request->input('lastName')
        ];

        $original->update($payload);

        return Redirect::route('student.toAll');
    }
}
