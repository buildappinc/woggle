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
        box-shadow: 0 25px 30px black;
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

    .carousel{
        margin-top: -25px;
        height: 660px;
    }

    .carousel-inner{
        height: 660px;
    }

    .carousel-caption {
        position: absolute;
        right: 15%;
        bottom: 450px;
        left: 15%;
        z-index: 10;
        padding-top: 20px;
        padding-bottom: 20px;
        color: #fff;
        text-align: center;
    }
    .main_section{
        position: relative
    }

    .about{
        position: absolute;
        top: -25px;
        left: 0;
        clip-path: polygon(0 0, 95% 0, 100% 100%, 0% 100%);
        width: 50%;
        height: 100px;
        background-color:  #fb0040;
        color: #fff;
    }

    .content{
        margin-top: 10%;
        background-color: whitesmoke;
        height: 400px; 
        width: 100%;
    }

    .text_1{
        margin-top: 15%;
    }

    .text_header{
        font-size: 30px;
        margin-left: 25%;
        padding-top: 6%;
    }

    .svg_image{
        margin-top: 10%;
    }
    
    .sec_section{
       margin-top: 7%;
       text-align: center
    }

    .section_header{
        font-family: Montserrat, sans-serif;
        font-size: 42px;
    }

    .quick{
        -webkit-box-shadow: 0px 12px 49px -10px rgba(41, 44, 61, 0.15);
        -moz-box-shadow: 0px 12px 49px -10px rgba(41, 44, 61, 0.15);
        box-shadow: 0px 12px 49px -10px rgba(41, 44, 61, 0.15);
        padding-bottom: 20%;
        margin-top: 6%;
        height: 180px; 
        width: 100%;
    }

    .details{
        padding-top: 7%;
        padding-left: 5%;
    }

    .status_text{
        font-weight: bold;
        font-size: 25px;
    }

    .img{
        background-size: cover;
        width: 100%; 
    }

    .ind_courses{
        margin-left: 2%;
        border-bottom: 3px solid #fb0040;
        -webkit-box-shadow: 0px 12px 49px -10px rgba(41, 44, 61, 0.15);
        -moz-box-shadow: 0px 12px 49px -10px rgba(41, 44, 61, 0.15);
        box-shadow: 0 3px 5px rgba(0,0,0,.2);
        height: 470px;
    }

    .ind_courses:hover{
        -webkit-box-shadow: 0px 12px 49px -10px rgba(41, 44, 61, 0.15);
        -moz-box-shadow: 0px 12px 49px -10px rgba(41, 44, 61, 0.15);
        box-shadow: 0px 12px 49px -10px rgba(41, 44, 61, 0.15);
        -webkit-transition: .3s ease-in-out;
        -moz-transition: .3s ease-in-out;
        transition: .4s ease-in-out ;
    }


    </style>
</head>
<body>
    <div id="app"><div class="preHeader">
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
                              Welcome  {{ Auth::user()->fname }} <span class="caret"></span>
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
                    <ul class="navbar-nav ml-auto">
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
            <div class="carousel">
                <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{asset('images/image2.jpg')}}" class="d-block w-100" style="max-height: 100%; background-size: cover" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                            <h5>First slide label</h5>
                            <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{asset('images/image3.jpg')}}" class="d-block w-100" style="max-height: 100%; background-size: cover" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                            <h5>Second slide label</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{asset('images/image.jpg')}}" class="d-block w-100" style="max-height: 100%; background-size: cover" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                            <h5>Third slide label</h5>
                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>

            <!-- quick review -->
            <div class="container quick">
                <div class="row details">
                    <div class="col-4 row">
                        <div class="col-4">
                            <img src="{{ asset('images/book.svg') }}"  style="max-height: 100%; max-width: 100%; " alt="">
                        </div>
                        <div class="col-8 status_text">
                                Enjoy Online <br> Studies
                        </div>
                    </div>
                    <div class="col-4 row">
                        <div class="col-4">
                                <img src="{{ asset('images/exam.svg') }}"  style="max-height: 100%; max-width: 100%; " alt="">
                            </div>
                            <div class="col-8 status_text">
                                Take Quizes <br> Online
                            </div>
                        </div>
                    <div class="col-4 row">
                        <div class="col-4">
                            <img src="{{ asset('images/goal.svg') }}"  style="max-height: 100%; max-width: 100%; " alt="">
                        </div>
                        <div class="col-8 status_text">
                            Check your <br> Progress
                        </div>
                    </div>
                </div>
            </div>

            <!-- popular courses -->
            <br>
            <div style="background:#f9f9ff; padding-bottom: 5%;">
                <div class="container">
                    <div class="sec_section">
                        <div class="section_header">
                            Our Featured Courses
                        </div>
                        <div>
                            <p>Our Featured Courses are selected through a rigorous process and uniquely created for each semester.</p>
                        </div>
                        <div class="row mt-5">
                            @foreach($courses as $course)
                                        
                                    <div class="col-3  ind_courses">
                                            <div style="margin: 0px">
                                                <img src="{{ asset('images/image.jpg')}}" class="img" alt="">
                                            </div>
                                            <div style="padding: 9%">
                                                <div>
                                                    {{$course->name}}
                                                </div>
                                                <div>
                                                        {{$course->description}}
                                                </div>
                                            </div>
                                    </div>
                                    
                            @endforeach
                            <div class="col-2" style="padding-top: 18%;">
                                <a href="/study" style="text-decoration: none; color: #000">
                                    <div style="border: 1px solid #020026; height: 55px; width: 220px; border-radius: 3px;">
                                       <p style="text-align: center; padding-top: 6%;">VIEW ALL COURSES</p> 
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
        </main>

        <!-- pre footer -->
        <div class="main_section">
                <div class="about">
                    <div class="container">
                        <div class="row">
                           <div class="col-3"></div>
                           <div class="col-6"><p class="text_header">WHY WOGGLE?</p></div>
                           <div class="col-3"></div>
                        </div>
                    </div>
                </div>

                <div class="content">
                    <div class="container">
                        <div class="row">
                            <div class="col-9">
                                <p class="text_1">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quisquam quam eius ratione excepturi. Quis quia ipsum vitae unde ad illum, sunt, placeat esse laboriosam harum a. Harum nemo iusto commodi?
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellendus, modi molestiae similique veritatis incidunt placeat praesentium enim ad omnis. Non sapiente tempora mollitia, voluptatibus consequatur dolorum quam voluptatem sit vitae.
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. In debitis recusandae sint aperiam dolore nostrum hic necessitatibus, quidem ex odio, eaque qui incidunt doloribus cumque aliquam laboriosam blanditiis atque distinctio.lorem
                                </p>
                            </div>
                            <div class="col-3 svg_image">
                                <img src="{{ asset('images/question4.svg') }}" style="width: 350px; background-size: cover" class="image" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
