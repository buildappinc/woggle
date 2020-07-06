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

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>

    .footer{
        background: #3f3f3f;
        height: 40vh;
        position: relative;
    }       

    li{
        padding: 5px 20px
    }

    .nav-link{
        font-size: 15px;
        font-family: 'PT Sans', sans-serif;
        font-weight: 400px;
        font-style: normal;
        color: #fff !important;
        float: right;
        text-align: center;
    }
    .nav-link.nav-text-color{
        color: #000 !important;
    }

    .nav-link:hover{
    border: 0;
    border-bottom: 1px solid rgba(255, 0, 64, 0.986);
    color: blue;
    transition: all ease-in .7s;
    
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

    /* .carousel{
        height: 724px;
    }

    .carousel-inner{
        height: 724px;
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
    } */
    .main_section{
        position: relative
    }

    /* .about{
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
    } */

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
       margin-top: 4%;
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

    .ind_courses{
        border-bottom: 3px solid red;
        -webkit-box-shadow: 0px 12px 49px -10px rgba(41, 44, 61, 0.15);
        -moz-box-shadow: 0px 12px 49px -10px rgba(41, 44, 61, 0.15);
        box-shadow: 0 3px 5px rgba(0,0,0,.2);
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
    .homeImage{
        position: relative;
        width: 100%;
        height: 100vh;
        background-attachment: fixed;
        background-image: url('{{asset('images/man-in-yellow-crew-neck-t-shirt-while-using-tablet-4144096.jpg')}}');
        background-size: cover;
    }

    .color_overlay{
        position: absolute;
        width: 100%;
        height: 100%;
        background: linear-gradient(to right top, #595b06, #573d0d, #452515, #281514, #000000);
        opacity: .7;
    }

    .wavy{
        position: absolute;
        width: 100%;
        height: 193px;
        left: 0;
        bottom: 0;
        background: url('{{asset('images/2.png')}}');
        animation: animate 70s linear infinite;
    }

    @keyframes animate{
        0%{
            background-position: 0;
        }
        100%{
            background-position: 1360px;
        }

    }
   
    </style>
</head>
<body>
    <div id="app">
        <div>
            <nav class="nav navbar navbar-expand-md navbar-light bg-light fixed-top">
                <div class="container-fluid">
                    <a class="navbar-brand animated fadeInLeft slow-4s" href="{{ url('/') }}">
                        <div class="grid grid-cols-3 gap-4">
                            <div>
                                <img src="{{asset('svg/logo1.svg')}}" style="object-fit: cover; height: 60px; margin-left: 40px">
                            </div>
                            <div>
                                <img src="{{asset('svg/logo2.svg')}}" style="height: 40px; margin-left: -40px; margin-top: 8px">
                            </div>
                        </div>
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>
    
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="nav navbar-nav mr-auto">
                            
                        </ul>
    
                        <!-- Right Side Of Navbar -->
                        <ul class="nav-l navbar-nav ml-auto animated fadeInRight slow-4s">
                            <li class="nav-item">
                                <a href="/" class="nav-link">Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="/study" class="nav-link">Courses</a>
                            </li>
                            <li class="nav-item">
                                <a href="/contact" class="nav-link">Contact</a>
                            </li>
    
                             <!-- Authentication Links -->
                             @guest
                             <li class="nav-item">
                                 <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                             </li> 
                             @if (Route::has('register'))
                                 <li class="nav-item register animated tada delay-5s animate__repeat-2">
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
            <div class="homeImage animate__fadeInLeft">
                <div class="color_overlay"></div>
                <div class="wavy"></div>
            </div>
            {{-- <div class="startImage">
                <img class="imageas object-contain sm:object-cover md:object-fill lg:object-none xl:object-scale-down .bg-fixed" src="{{ asset('images/image4.jpg')}}" class="img">
            </div> --}}
            {{-- <div class="carousel">
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
        </div> --}}

        <main class="py-4">
            

            <!-- quick review -->
            <div class="container quick">
                <div class="grid grid-cols-3 gap-4">
                    <div>
                        <div class="grid grid-cols-3 gap-4">
                            <div class="">
                                <img src="{{ asset('images/book.svg') }}"  style="width: 18vh" alt="">
                            </div>
                            <div class="status_text">
                                    Study Online
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="grid grid-cols-3 gap-4">
                            <div class="">
                                    <img src="{{ asset('images/exam.svg') }}"  style="width: 18h " alt="">
                                </div>
                                <div class="status_text">
                                    Take Quizes 
                                </div>
                            </div>
                        </div>
                    <div>
                        <div class="grid grid-cols-3 gap-4">
                            <div class="">
                                <img src="{{ asset('images/goal.svg') }}"  style="width: 16vh" alt="">
                            </div>
                            <div class="status_text">
                                Check Progress
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- popular courses -->
            <br>

            <div class="pb-3">
                <div class="container">
                    <div class="sec_section">
                        <div class="text-5xl">
                            Our Featured Courses
                        </div>
                        <div>
                            <p>Our Featured Courses are selected through a rigorous process and uniquely created for each semester.</p>
                        </div>
                    </div>
                    {{-- course display --}}
                    <div class="m-5">
                        <div class="flex flex-wrap">
                           @foreach ($courses as $course)
                           <div class="w-2/6 p-2 mt-3">
                                <div class="ind_courses">
                                    <div class="h-full w-full">
                                        <img src="/storage/{{$course->image}}" class="course max-h-full w-full max-w-full" style="height:20rem" alt="">
                                    </div>
                                    <div class="text-center text-3xl mt-3 pb-3">
                                        {{$course->name}}
                                    </div>
                                </div>   
                            </div>
                           @endforeach 
                        </div>
                    </div>
                </div>
            </div>

            
        
        </main>

        <!-- pre footer -->
        {{-- <div class="main_section">
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
            </div> --}}
        <!-- footer -->
        <div class="footer ">
            <div class="container-fluid footer-content">
                <div class="grid grid-cols-3 gap-4">
                    <div style="margin-top: -6px">
                        <img src="{{asset('svg/logo1.svg')}}" class="" style="height: 12rem; width: 10rem">
                        <img src="{{asset('svg/logo2.svg')}}" class="" style="height: 2.5rem; width: 10rem">
                    </div>
                    <div class="leading-2" style="margin-top: -6px">
                        <div>
                            <p>Related Links</p>
                        </div>
                        <div>
                            <div>Related Links</div>
                            <div>Related Links</div>
                            <div>Related Links</div>
                        </div>
                    </div>
                    <div class="leading-2"  style="margin-top: -6px">
                        <div>
                            <p>Related Links</p>
                        </div>
                        <div>
                            <div>Related Links</div>
                            <div>Related Links</div>
                            <div>Related Links</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    {{----------------------------- script ---------------------------------------------------}}
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script>
        $(window).scroll(function(){
            $('nav').toggleClass('scrolled', $(this).scrollTop() > 500)

            $('.nav-link').toggleClass('nav-text-color', $(this).scrollTop() > 500)

        });


        $(document).ready(function(){
            $(window).scroll(function(){
                var posTop = $(document).scrollTop()
                console.log(posTop)

                if (posTop > 200) {
                    $('.quick').addClass('animated bounceIn slower 4s')
                } 
            })
        })


    </script>
</body>

</html>
