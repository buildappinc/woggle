<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Woggle</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }


            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

        </style>
    </head>

    <!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>

    .footer{
        margin-top: 15%;
        background: #06042d;
        height: 350px;
        position: relative;
    }       

     .footer-bottom{
        background: #020026;
        width: 100%;
        height: 50px;
        color: white;
        text-align: center;
        position: absolute;
        bottom: 0px;
        left: 0px;
        padding-top: 20px;
    }
    

    .nav-link:hover{
      border: 0;
      border-bottom: 1px solid blue;
      transition: all ease-in .7s;
    }

    .footer-content{
        padding: 3%;    
    }
    

    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('Woggle', 'Woggle') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav mr-auto">
                        <li class="nav-item">
                            <a href="/" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="/study" class="nav-link">Study</a>
                        </li>
                        <li class="nav-item">
                            <a href="/mycourses" class="nav-link">My Courses</a>
                        </li>
                        <li class="nav-item">
                            <a href="/contact" class="nav-link">Contact</a>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                        <div>
                            @if (Route::has('login'))
                                        <div class="top-right links">
                                            @auth
                                                <a href="{{ url('/study') }}">Study</a>
                                            @else
                                                <a href="{{ route('login') }}">Login</a>

                                                @if (Route::has('register'))
                                                    <a href="{{ route('register') }}">Register</a>
                                                @endif
                                            @endauth
                                        </div>
                                    @endif
                        </div>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            <br><br><br><br><br><br><br><br><br>
        </main>

        <!-- footer -->
        <div class="footer ">
            <div class="container footer-content row">
                <div class="col-4"></div>
                <div class="col-3 footer-section">
                    <p style="color: white">About</p> 
                </div>
                <div class="col-3 footer-section">
                   <p style="color: white">Links</p> 
                </div>
                <div class="col-2 footer-section">
                   <p style="color: white">Contact</p> 
                   <p style="color: white">Sub Contact</p> 
                </div>
            </div>
            <div class="footer-bottom">
                 <small>Copyright &copy; BuildApp</small>
            </div>
        </div>
    </div>
</body>

</html>
