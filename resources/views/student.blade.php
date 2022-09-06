@extends('app')

@section('content')

    <h1>Student information:</h1>

    <div>
        <ul class="list-group">
            <li class="list-group-item"> <b>Firstname:</b> {{$student->firstname}} </li>
            <li class="list-group-item"> <b>Lastname:</b> {{$student->lastname}} </li>
            <li class="list-group-item"> <b>Email:</b> {{$student->email}} </li>
        </ul>
    <div>

@endsection
