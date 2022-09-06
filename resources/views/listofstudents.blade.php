@extends('app')

@section('content')

    <h1>List of students:</h1>

    <div class="col py-1">

        @foreach ($students as $student)

            <div class="row py-1">>

                <ul class="list-group">
                    <li class="list-group-item"> <b>Fullname:</b>

                        <a href="{{ route('showstudent', ['id' => $student->id]) }}">{{$student->firstname}} {{$student->lastname}}</a>
                        <br>
                        <b>Email:</b> {{$student->email}}</li>
                </ul>

                <div class="col-md-3 d-flex justify-content-end">
                    <form action="{{ route('deletestudent', ['id' => $student->id]) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </div>

            </div>

        @endforeach

    </div>

@endsection
