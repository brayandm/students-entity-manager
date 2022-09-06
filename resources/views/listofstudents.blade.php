@extends('app')

@section('content')

    <h1>List of students</h1>

    @foreach ($students as $student)
        <div>
            <ul class="list-group">
                <li class="list-group-item"> <b>Fullname:</b> {{$student->firstname}} {{$student->lastname}} <br> <b>Email:</b> {{$student->email}}</li>
            </ul>
        <div>
    @endforeach

@endsection
