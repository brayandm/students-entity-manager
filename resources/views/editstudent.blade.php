@extends('app')

@section('content')

    <h1>Edit student:</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('editinfostudent', ['id' => $student->id]) }}" method="POST"  enctype="multipart/form-data">
        @method('PUT')
        @csrf

        <div class="mb-3">
            <label for="inputFirstname" class="form-label">Firstname:</label>
            <input name="firstname" type="text" class="form-control" id="inputFirstname" value="{{$student->firstname}}">
        </div>

        <div class="mb-3">
            <label for="inputLastname" class="form-label">Lastname:</label>
            <input name="lastname" type="text" class="form-control" id="inputLastname" value="{{$student->lastname}}">
        </div>

        <div class="mb-3">
            <label for="inputEmail" class="form-label">Email:</label>
            <input name="email" type="email" class="form-control" id="inputEmail" value="{{$student->email}}">
        </div>

        <div class="mb-3">
            <label for="inputPhoto" class="form-label">Photo:</label>
            <input name="photo" type="file" class="form-control" id="inputPhoto" src="/pictures/{{$student->photo}}">
        </div>

        <div class="mb-3">
            <label for="inputBirthdate" class="form-label">Birthdate:</label>
            <input name="birthdate" type="date" class="form-control" id="inputBirthdate" value="{{$student->birthdate}}">
        </div>

        <div class="mb-3">
            <label for="inputAddress" class="form-label">Address:</label>
            <input name="address" type="text" class="form-control" id="inputAddress" value="{{$student->address}}">
        </div>

        <div class="mb-3">
            <label for="inputScore" class="form-label">Score:</label>
            <input name="score" type="number" step=0.01 class="form-control" id="inputScore" value="{{$student->score}}">
        </div>

        <button type="Edit" class="btn btn-warning">Edit</button>
    </form>

@endsection
