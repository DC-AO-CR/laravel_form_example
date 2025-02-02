<?php

namespace App\Http\Controllers;

use App\Models\Student;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class StudentController extends Controller {

    /**
     * Show a webpage with all the students in the database.
     */
    public function showAll() {
       $students = Student::all();

       return view('showAll', ['students' => $students]);
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
    public function giveCreateForm() {
        return view('createSingle');
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
    public function giveDeleteForm($id) {
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
    public function giveUpdateForm($id) {
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
