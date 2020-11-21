<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posty</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="bg-secondary">

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Posty</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('dashboard')}}">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('posts')}}">Post</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                @auth
                    <a class="nav-link">{{auth()->user()->name}}</a>
                    <a class="nav-link" href="{{route('logout')}}">Logout</a>
                @endauth
                @guest
                    <a href="{{route('login')}}" class="nav-link">Login</a>
                    <a href="{{route('register')}}" class="nav-link">Register</a>
                @endguest
            </form>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-12">
                @yield("content")
            </div>

        </div>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
