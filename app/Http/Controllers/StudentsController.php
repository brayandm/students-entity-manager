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
            'email' => 'required',
            'photo' => 'required'
        ]);

        $student = new Student;

        $student->firstname = $request->firstname;
        $student->lastname = $request->lastname;
        $student->email = $request->email;

        $student->save();

        if($request->hasFile('photo'))
        {
            $picture = $request->file('photo');
            $picture->move(public_path().'/pictures/', $student->id.'.'.$picture->getClientOriginalExtension());
            $student->photo = $student->id.'.'.$picture->getClientOriginalExtension();
        }

        $student->save();

        return redirect()->route('addstudent')->with('success', 'Student added successfully');
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

        unlink(public_path().'/pictures/'.$student->photo);

        $student->delete();

        return redirect()->route('listofstudents')->with('success', 'Student deleted successfully');
    }

    public function edit($id)
    {
        $student = Student::find($id);

        return view('editstudent', ['student' => $student]);
    }

    public function editinfo(Request $request, $id)
    {
        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required'
        ]);

        $student = Student::find($id);

        $student->firstname = $request->firstname;
        $student->lastname = $request->lastname;
        $student->email = $request->email;

        $student->save();

        return redirect()->route('listofstudents')->with('success', 'Student edited successfully');
    }
}
