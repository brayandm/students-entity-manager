<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Student;

class StudentsController extends Controller
{
    public function index()
    {
        return redirect()->route('home');
    }

    public function add(Request $request)
    {
        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required'
        ]);

        $student = new Student;

        $student->firstname = $request->firstname;
        $student->lastname = $request->lastname;
        $student->email = $request->email;

        $student->save();

        return redirect()->route('addstudent')->with('success', 'Student added');
    }

    public function getlist()
    {
        $students = Student::all();

        return view('listofstudents', ['students' => $students]);
    }

    public function show($id)
    {
        $student = Student::find($id);

        return view('student', ['student' => $student]);
    }

    public function delete($id)
    {
        $student = Student::find($id);

        $student->delete();

        return redirect()->route('listofstudents')->with('success', 'Student deleted');
    }
}
