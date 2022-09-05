<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Student;

class StudentsController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);

        $student = new Student;

        $student->name = $request->name;

        $student->save();

        return redirect()->route('main')->with('success', 'Student added');
    }

    public function index()
    {
        $students = Student::all();

        return view('app', ['students' => $students]);
    }

    public function clear()
    {
        $students = Student::all();

        foreach($students as $student)
        {
            $student->delete();
        }

        return redirect()->route('main')->with('success', 'Students deleted');
    }
}
