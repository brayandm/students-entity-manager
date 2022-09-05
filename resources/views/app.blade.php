<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Students Entity Manager</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>
    <h1>Students Entity Manager</h1>

    <form action="{{ route('main-add') }}" method="POST">
        @csrf


        @php
            $something = FALSE
        @endphp

        @if (session('success'))
            <h6 class="alert alert-success"> {{ session('success')}}</h6>
            @php
                $something = TRUE
            @endphp
        @endif

        @error ('name')
            <h6 class="alert alert-danger"> {{ $message }}</h6>
            @php
                $something = TRUE
            @endphp
        @enderror

        @if ($something == FALSE)
            <h6>&nbsp</h6>
            <h6>&nbsp</h6>
        @endif

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" id="exampleInputEmail1"
                aria-describedby="emailHelp">
        </div>
        <button type="submit" class="btn btn-primary">Add</button>
    </form>
    <form action="{{ route('main-clear') }}" method="POST">
       @method('DELETE')
       @csrf

       <button type="submit" class="btn btn-primary">Clear</button>
   </form>

    <h1>&nbsp</h1>
    <h3>Students:</h3>

    <div>
        @foreach ($students as $student)

        <div>
            <ul class="list-group">
                <li class="list-group-item">{{$student->name}}</li>
            </ul>
        <div>

        @endforeach
    <div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
</body>

</html>
