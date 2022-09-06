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

        return view('/listofstudents', ['students' => $students]);
    }
}
