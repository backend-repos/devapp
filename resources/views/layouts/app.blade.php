<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="http://shawnsandy.com/wp-content/uploads/2015/11/cropped-shawn.sandy@3x-32x32.png"
          sizes="32x32"/>
    <link rel="icon" href="http://shawnsandy.com/wp-content/uploads/2015/11/cropped-shawn.sandy@3x-192x192.png"
          sizes="192x192"/>
    <link rel="apple-touch-icon-precomposed"
          href="http://shawnsandy.com/wp-content/uploads/2015/11/cropped-shawn.sandy@3x-180x180.png"/>
    <title>Dev App @yield('title') </title>

    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet'
          type='text/css'>

    <!-- Styles -->

    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <style>

    </style>
</head>
<body id="app-layout">
<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#spark-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="/">
                Dev.App
            </a>
        </div>

        <div class="collapse navbar-collapse" id="spark-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                <li><a href="/">Home</a></li>
                <li><a href="{{ url('story') }}">Stories</a></li>
                <li><a href="{{ url('story/create') }}">Add Story</a></li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li><a href="/login">Login</a></li>
                    <li><a href="/register">Register</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li><a href="/logout"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                        </ul>
                @endif
            </ul>
        </div>
    </div>
</nav>
@yield('header')
@yield('content')
<footer>
    @yield('footer')
</footer>
        <!-- JavaScripts -->
{{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>
</html>
