<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Student;

class StudentsController extends Controller
{
    public function index()
    {
        return view('app');
    }
}
