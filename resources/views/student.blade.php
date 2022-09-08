@extends('app')

@section('content')

    <h1>Student information:</h1>

    <div>
        <ul class="list-group">
            <li class="list-group-item"> <img src="{{route('linkphoto', ['photo' => $student->photo])}}" alt="picture" width="200" height="300"> </li>
            <li class="list-group-item"> <b>Firstname:</b> {{$student->firstname}} </li>
            <li class="list-group-item"> <b>Lastname:</b> {{$student->lastname}} </li>
            <li class="list-group-item"> <b>Email:</b> {{$student->email}} </li>
            <li class="list-group-item"> <b>Birthdate:</b> {{$student->birthdate}} </li>
            <li class="list-group-item"> <b>Address:</b> {{$student->address}} </li>
            <li class="list-group-item"> <b>Score:</b> {{$student->score}} </li>
            <li class="list-group-item"> <b>Created At:</b> {{$student->created_at}} </li>
            <li class="list-group-item"> <b>Updated At:</b> {{$student->updated_at}} </li>
        </ul>
    <div>

@endsection
