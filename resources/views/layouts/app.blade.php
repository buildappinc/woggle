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
        background:  rgba(255, 0, 64, 0.986);
        width: 100%;
        height: 50px;
        color: white;
        text-align: center;
        position: absolute;
        bottom: 0px;
        left: 0px;
        padding-top: 20px;
    }

    li{
        padding: 5px 20px
    }

    .nav-link{
        font-size: 15px;
        font-family: montserratregular;
        font-weight: 400px;
        font-style: normal;
        color: #f05a66;

    }

    .nav-link:hover{
      border: 0;
      border-bottom: 1px solid rgba(255, 0, 64, 0.986);
      color: blue;
      transition: all ease-in .7s;
    }

    .footer-content{
        padding: 3%;    
    }
    
    .preHeader{
        padding-top: .8%; 
        padding-bottom: .8%;
        width: 100%;
        color: #fff;
        background: #020026
    }

    .preHeader-2{
        position: absolute;
        top: 10px;
        left: 0;
        z-index: 4;
        margin-left: 60%;
        width: 40%;
        padding-left: 10%;
    }

    .preHeader-2:before {
        content: '';
        line-height: 0;
        font-size: 0;
        width: 0;
        height: 0;
        border-top: 50px solid transparent;
        border-bottom: 50px solid rgba(255, 0, 64, 0.986);
        border-left: 50px solid transparent;
        border-right: 0px solid rgba(255, 0, 64, 0.986);
        position: absolute;
        top: -50px;
        left: -50px;
     }

    .nav{
        height: 11%;
    }
    

    </style>
</head>
<body>
    <div id="app">
        <div class="preHeader">
            <div class=" container">
                 
                        Any Questions? +233 *** *** ***
                 
            </div>
        </div>
            <nav class="preHeader-2 navbar-expand-md navbar-dark bg-dark shadow-sm">
                
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
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->fname }} <span class="caret"></span>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </nav>

        <nav class="nav navbar navbar-expand-md navbar-light bg-white shadow-sm">
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
                        
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav-l navbar-nav ml-auto">
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
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
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
