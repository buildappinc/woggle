
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
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/material-design-icons/3.0.1/iconfont/material-icons.min.css"
      integrity="sha256-x8PYmLKD83R9T/sYmJn1j3is/chhJdySyhet/JuHnfY="
      crossorigin="anonymous"
    />

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>

    .footer-bottom{
        background:  #3f3f3f;
        width: 100%;
        height: 60px;
        color: white;
        /* position: fixed; */
        bottom: 0px;
        left: 0px;
        padding-top: 20px;
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



    </style>
</head>
<body>
    <div id="app">
        <div>
            <nav class="flex items-center bg-gray-800 p-3 flex-wrap bg-light shadow-md " style="position: relative; z-index: 1;">
            <a href="/" class="inline-flex flex-row items-center -ml-12">
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
                class="lg:inline-flex lg:flex-row lg:ml-auto lg:w-auto w-full lg:items-center items-start flex flex-col lg:h-auto"
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
                    href="/contact"
                    class="nav-link lg:inline-flex lg:w-auto w-full px-3 py-2 rounded text-black-800 items-center justify-center "
                >
                    <span>
                        <img src="{{asset('/images/Vector (Stroke).png')}}" class="h-4 w-4" alt="">
                    </span>
                </a>
                @guest
                    <a class="nav-link lg:inline-flex lg:w-auto w-full px-3 py-2 rounded text-black-800 items-center justify-center " href="{{ route('login') }}">{{ __('Login') }}</a>
                @if (Route::has('register'))
                        <a class="nav-link lg:inline-flex lg:w-auto w-full px-3 py-2 rounded text-black-800 items-center justify-center " href="{{ route('register') }}">{{ __('Register') }}</a>
                @endif
                @else
                    {{-- <a id="navbarDropdown" class="nav-link lg:inline-flex lg:w-auto w-full px-3 py-2 rounded text-black-800 items-center justify-center  dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        <img src="{{asset('/images/user.svg')}}" class="h-4 w-4" alt=""> <span class="caret"></span>
                    </a> --}}
                    <a id="navbarDropdown" class="nav-link lg:inline-flex lg:w-auto w-full px-3 py-2 rounded text-black-800 items-center justify-center  dropdown-toggle"  href="#" role="button" data-toggle="dropdown">
                        <div class="flex justify-center items-center h-6 w-6 rounded-full" style="background-color: #F5EFEF">
                            <img src="{{asset('/images/user.png')}}" class="h-4 w-4" alt="">
                        </div> 
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="">
                            {{ Auth::user()->name }}
                        </a>
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

   
        <main class="pt-4">
            @yield('content')
        </main>

        <!-- footer -->
        <div class="footer ">
                <div class="footer-bottom px-8 flex flex-row justify-between ">
                    <div class="flex flex-row">
                        <div class="flex items-center">
                            <div>
                                <img src="{{asset('svg/logo2.svg')}}" class="h-12 w-12 -mt-4">
                            </div>
                            <div>
                                <img src="{{asset('svg/logo1.svg')}}" class="-mt-3 -ml-10 h-12">
                            </div>
                        </div>
                        <div class="items-center -ml-12">
                            <div>
                                Help & Feedback
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-row">
                        <div><img class="h-5 w-5 mx-2" src="{{asset('images/linkedIn.png')}}" alt=""></div>
                        <div><img class="h-5 w-5 mx-2" src="{{asset('images/instagram.png')}}" alt=""></div>
                        <div><img class="h-5 w-5 mx-2" src="{{asset('images/twitter.png')}}" alt=""></div>
                        <div><img class="h-5 w-5 mx-2" src="{{asset('images/facebook.png')}}" alt=""></div>
                    </div>
                </div>
        </div>

    </div>

    {{----------------------------- script ---------------------------------------------------}}
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script>
    //     $(window).scroll(function(){
    //        $('nav').toggleClass('fixed', $(this).scrollTop() > 0)
    //    });

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
