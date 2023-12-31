@extends('app')

@section('content')

    <h1>Add student:</h1>

    @if (session('success'))
        <h6 class="alert alert-success"> {{ session('success')}}</h6>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('addstudent') }}" method="POST" enctype="multipart/form-data">

        @csrf

        <div class="mb-3">
            <label for="inputFirstname" class="form-label">Firstname:</label>
            <input name="firstname" type="text" class="form-control" id="inputFirstname">
        </div>

        <div class="mb-3">
            <label for="inputLastname" class="form-label">Lastname:</label>
            <input name="lastname" type="text" class="form-control" id="inputLastname">
        </div>

        <div class="mb-3">
            <label for="inputEmail" class="form-label">Email:</label>
            <input name="email" type="email" class="form-control" id="inputEmail">
        </div>

        <div class="mb-3">
            <label for="inputPhoto" class="form-label">Photo:</label>
            <input name="photo" type="file" class="form-control" id="inputPhoto">
        </div>

        <div class="mb-3">
            <label for="inputBirthdate" class="form-label">Birthdate:</label>
            <input name="birthdate" type="date" class="form-control" id="inputBirthdate">
        </div>

        <div class="mb-3">
            <label for="inputAddress" class="form-label">Address:</label>
            <input name="address" type="text" class="form-control" id="inputAddress">
        </div>

        <div class="mb-3">
            <label for="inputScore" class="form-label">Score:</label>
            <input name="score" type="number" step=0.01 class="form-control" id="inputScore">
        </div>

        <button type="submit" class="btn btn-success">Add</button>
    </form>

@endsection
