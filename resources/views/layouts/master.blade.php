<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

        <title>
            @yield('title')
        </title>
    </head>

    <body>
        @section('navbar')
            <nav class="navbar navbar-expand-lg bg-light pb-3">
                <div class="container-fluid">

                    <img class="img-thumbnail me-5"
                         src="{{ asset('assets/img/navbar-image.png') }}"
                         alt="navbar icon"
                         style="width: 80px; height: 80px; border-radius: 50%"
                    >
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="/">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('tasks.todo') }}">ToDo</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Pricing</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled">Disabled</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        @show

        <div class="container">
            @yield('content')
        </div>
    </body>

    <script src="{{asset('bootstrap/js/bootstrap.bundle.min.js')}}"></script>
</html>
