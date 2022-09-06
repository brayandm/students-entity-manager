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
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="/home">Home</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">

                    @php
                        $url = Request::path();
                    @endphp

                    @if($url == "addstudent")
                        <a class="nav-link active" aria-current="page" href="/addstudent">Add student</a>
                    @else
                        <a class="nav-link" href="/addstudent">Add student</a>
                    @endif

                    @if($url == "listofstudents")
                        <a class="nav-link active" aria-current="page" href="/listofstudents">List of students</a>
                    @else
                        <a class="nav-link" href="/listofstudents">List of students</a>
                    @endif

                </div>
            </div>
        </div>
    </nav>
    @yield('content')
</body>

</html>
