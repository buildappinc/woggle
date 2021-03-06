<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Woggle</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdn.boomcdn.com/libs/animate-css/3.7.0/animate.css">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Tamma+2&family=Recursive:wght@500;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Tamma+2&family=Raleway&family=Recursive:wght@500;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Tamma+2&family=Raleway:ital,wght@0,400;1,455&family=Recursive:wght@500;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Tamma+2&family=Comfortaa:wght@300&family=Raleway:ital,wght@0,300;0,400;1,455&family=Recursive:wght@500;600&family=Tajawal&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>

    .footer{
        background: #3f3f3f;
        /* height: 40vh; */
        position: relative;
    }       

    li{
        padding: 5px 20px
    }

    .nav-link{
        font-size: 15px;
        font-family: Open Sans;
        font-weight: 600px;
        line-height: 25px;
        font-style: normal;
        color: #000 !important;
    }
    .nav-link.nav-text-color{
        color: #000 !important;
    }

    .footer-content{
        padding: 3%;    
        padding-left: 14%;
    }

    @media screen and (max-width: 430px){
        .footer-content{
            padding: 3%;    
            padding-left: 8%;
            padding-right: 8%;
        }   
    }

    .nav{
        height: 9%;
        width: 100%;
        background-color: red;
    }


    .main_section{
        position: relative
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
        margin-top: 3.5%;
        padding: 4%;
        padding-left: 10%;
    }

    .status_text{
        margin-top: 4%;
        font-weight: lighter;
        font-size: 2.5vh;
    }

    .img{
        background-size: cover; 
        width: 100%; 
        object-fit: cover;
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
    }

    .course{
        background-size: cover;
        width: 100%
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

    .button{
        border: 1px solid #020026; 
        height: 50px; 
        width: 100%; 
        border-radius: 3px ;
    }

    .button:hover{
        transition: all 1s ease-in-out 0s;
        border: none;
        color: #fff;
        background: #fb0040;
    }

    .bg-light{
        background: transparent !important;
        -moz-transition: 0.7s ease-in-out;
        -o-transition: 0.7s ease-in-out;
        -webkit-transition: 0.7s ease-in-out;
    }
    .bg-light.scrolled{
        background: #ffffff !important;
        -moz-box-shadow: 0px 12px 49px -10px rgba(41, 44, 61, 0.15);
        -o-box-shadow: 0px 12px 49px -10px rgba(41, 44, 61, 0.15);
        -webkit-box-shadow: 0px 12px 49px -10px rgba(41, 44, 61, 0.15);
        box-shadow: 0px 12px 49px -10px rgba(41, 44, 61, 0.15);
    }

    @media screen and (max-width: 430px){
        .items{
            display: flex; 
            justify-content: center; 
            align-items: center
        }
    }



    </style>
</head>
<body>
    <div id="app">
        <div>
            <nav class="flex items-center bg-gray-800 p-3 flex-wrap bg-light shadow-md" style="position: relative; z-index: 1">
                <a href="/" class="inline-flex flex-row items-center -ml-12 animated fadeIn slow-4s">
                        <div>
                            <img src="{{asset('svg/logo1.svg')}}">
                        </div>
                        <div>
                            <img src="{{asset('svg/logo2.svg')}}" class="-ml-12 h-12">
                        </div>
                </a>
                <button
                    class="text-white inline-flex p-3 hover:bg-gray-900 bg-gray-400 rounded lg:hidden ml-auto hover:text-white outline-none nav-toggler"
                    data-target="#navigation"
                >
                    <i class="material-icons">menu</i>
                </button>
                <div
                    class="hidden top-navbar w-full lg:inline-flex lg:flex-grow lg:w-auto"
                    id="navigation"
                >
                    <div
                    class="lg:inline-flex lg:flex-row lg:ml-auto lg:w-auto w-full lg:items-center items-start flex flex-col lg:h-auto animated fadeIn slow-4s"
                    >
                    <a
                        href="/"
                        class="nav-link lg:inline-flex lg:w-auto w-full px-3 py-2 rounded text-black-800 items-center justify-center "
                    >
                        <span>Home</span>
                    </a>
                    <a
                        href="/study"
                        class="nav-link lg:inline-flex lg:w-auto w-full px-3 py-2 rounded text-black-800 items-center justify-center "
                    >
                        <span>Courses</span>
                    </a>
                    <a
                        href="{{route('home')}}"
                        class="nav-link lg:inline-flex lg:w-auto w-full px-3 py-2 rounded text-black-800 items-center justify-center "
                    >
                        <span>My Course</span>
                    </a>
                    <a
                        href="/contact"
                        class="nav-link lg:inline-flex lg:w-auto w-full px-3 py-2 rounded text-black-800 items-center justify-center "
                    >
                        <span>Contact</span>
                    </a>
                    @guest
                        <a class="nav-link lg:inline-flex lg:w-auto w-full px-3 py-2 rounded text-black-800 items-center justify-center " href="{{ route('login') }}">{{ __('Login') }}</a>
                    @if (Route::has('register'))
                            <a class="nav-link lg:inline-flex lg:w-auto w-full px-3 py-2 rounded text-black-800 items-center justify-center  animated tada delay-5s animate__repeat-2" href="{{ route('register') }}">{{ __('Register') }}</a>
                    @endif
                    @else
                        <a id="navbarDropdown" class="nav-link lg:inline-flex lg:w-auto w-full px-3 py-2 rounded text-black-800 items-center justify-center  dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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
                    @endguest
                    
                    </div>
                </div>
        </nav>
           
        <main class="">
            @yield('content')
        </main>

        <!-- footer -->
        <div class="footer ">
            <div class="container-fluid footer-content">
                <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 gap-4">
                    <div class="items" style="margin-top: -6px">
                        <img src="{{asset('svg/logo1.svg')}}" class="" style="height: 11rem; width: 10rem">
                        <img src="{{asset('svg/logo2.svg')}}" class="" style="height: 2.2rem; width: 10rem">
                    </div>
                    
                    <div class="font leading-2 flex items-baseline mx-8 md:mx-0 lg:mx-0 xl:mx-0 mt-4">
                        <div class="">
                            <div class="border-b text-3xl text-white font-bold">
                                Related Links
                            </div>
                            <div>
                                <div class="py-1 font-thin text-white">Related Links</div>
                                <div class="py-1 font-thin text-white">Related Links</div>
                                <div class="py-1 font-thin text-white">Related Links</div>
                            </div>
                        </div>
                    </div>
                    <div class="font leading-2 flex items-baseline mx-8 md:mx-0 lg:mx-0 xl:mx-0 mt-4">
                        <div>
                            <div class="border-b text-3xl text-white font-bold">
                                Contact
                            </div>
                            <div>
                                <div class="py-1 font-thin text-white">Related Links</div>
                                <div class="py-1 font-thin text-white">Related Links</div>
                                <div class="py-1 font-thin text-white">Related Links</div>
                                <div class="flex flex-row mt-3 -ml-2">
                                    <div><img class="h-5 w-5 mx-2" src="{{asset('images/linkedIn.png')}}" alt=""></div>
                                    <div><img class="h-5 w-5 mx-2" src="{{asset('images/instagram.png')}}" alt=""></div>
                                    <div><img class="h-5 w-5 mx-2" src="{{asset('images/twitter.png')}}" alt=""></div>
                                    <div><img class="h-5 w-5 mx-2" src="{{asset('images/facebook.png')}}" alt=""></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    {{----------------------------- script ---------------------------------------------------}}
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script>

    $(document).ready(function () {
            $(".nav-toggler").each(function (_, navToggler) {
                var target = $(navToggler).data("target");
                $(navToggler).on("click", function () {
                $(target).animate({
                    height: "toggle",
                });
                });
            });
        });
       
   </script>
</body>

</html>
