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
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Tamma+2&family=Raleway:ital,wght@0,300;0,400;1,455&family=Recursive:wght@500;600&display=swap" rel="stylesheet">

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
        font-family: Open Sans;
        font-weight: 600px;
        line-height: 25px;
        font-style: normal;
        color: #fff !important;
    }
    .nav-link.nav-text-color{
        color: #000 !important;
    }

    .footer-content{
        padding: 3%;    
        padding-left: 14%;
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
        z-index: 1
    }

    .color_overlay{
        width: 100%;
        height: 100%;
        background: linear-gradient(to right top, #595b06, #573d0d, #452515, #281514, #000000);
        opacity: .2;
        z-index: 2;
    }

    .colortext {
        position: absolute;
        z-index: 3
    }

    .font{
        font-family: 'Baloo Tamma 2', cursive;
        font-family: 'Raleway', sans-serif;
        font-family: 'Recursive', sans-serif;
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

    .subimage {
        position: relative;
        background-attachment: fixed;
        background-image: url('{{asset('images/sub.jpg')}}');
        background-size: cover;
        z-index: 1;
    }

    .subimagecover{
        position: absolute;
        width: 100%; 
        height: 100%;
        background: #f9b629;
        opacity: .2;
        z-index: 2;
    }

    .subtext{
        position: absolute;
        z-index: 3;
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
            <nav class="flex items-center bg-gray-800 p-3 flex-wrap bg-light fixed-top ">
                <a href="/" class="inline-flex flex-row items-center -ml-12 animated fadeInLeft slow-4s">
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
                    class="lg:inline-flex lg:flex-row lg:ml-auto lg:w-auto w-full lg:items-center items-start flex flex-col lg:h-auto animated fadeInRight slow-4s"
                    >
                    <a
                        href="/"
                        class="nav-link lg:inline-flex lg:w-auto w-full px-3 py-2 rounded text-black-800 items-center "
                    >
                        <span>Home</span>
                    </a>
                    <a
                        href="/study"
                        class="nav-link lg:inline-flex lg:w-auto w-full px-3 py-2 rounded text-black-800 items-center "
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
                        class="nav-link lg:inline-flex lg:w-auto w-full px-3 py-2 rounded text-black-800 items-center "
                    >
                        <span>Contact</span>
                    </a>
                    @guest
                        <a class="nav-link lg:inline-flex lg:w-auto w-full px-3 py-2 rounded text-black-800 items-center " href="{{ route('login') }}">{{ __('Login') }}</a>
                    @if (Route::has('register'))
                            <a class="nav-link lg:inline-flex lg:w-auto w-full px-3 py-2 rounded text-black-800 items-center  animated tada delay-5s animate__repeat-2" href="{{ route('register') }}">{{ __('Register') }}</a>
                    @endif
                    @else
                        <a id="navbarDropdown" class="nav-link lg:inline-flex lg:w-auto w-full px-3 py-2 rounded text-black-800 items-center  dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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
           
            <div class="homeImage animate__fadeInLeft">
                <div class="colortext font hidden md:block lg:block xl:block text-3xl py-64 w-full" style="height: 70%">
                    <div class="text-xl uppercase text-black flex justify-center items-center lg:mt-12 xl:mt-12" style="color: #fff">the best online education <span style="color: #000" class="mx-3">in the world</span></div>
                    <div class="text-5xl uppercase text-black flex justify-center items-center font-bold mt-3" style="color: #000">one <span style="color: #000" class="mx-3"> steps </span> ahead this season</div>
                    <div class="flex justify-center mt-8">
                        <div class="text-base uppercase mx-2 h-12 w-40 flex justify-center items-center rounded" style="background: #f9b629">see course</div>
                        <div class="text-base uppercase mx-2 h-12 w-40 flex justify-center items-center rounded" style="background: #000; color: #f9b629">Contact Us</div>
                    </div>
                </div>
                <div class="color_overlay"></div>
                <div class="wavy"></div>
            </div>
           
        <main class="py-4">
            

            <!-- quick review -->
            <div class="container quick py-6">
                <div class="grid grid-cols-3 gap-4 ">
                    <div>
                        <div class="grid grid-cols-3 gap-4 flex flex-row sm:flex-col">
                            <div class="">
                                <img src="{{ asset('images/book.svg') }}" class="h-full w-full"  alt="">
                            </div>
                            <div class="status_text">
                                    Study Online
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="grid grid-cols-3 gap-4">
                            <div class="">
                                <img src="{{ asset('images/exam.svg') }}" class="h-full w-full" style="width: 18h " alt="">
                            </div>
                            <div class="status_text">
                                Take Quizes 
                            </div>
                         </div>
                    </div>
                    <div>
                        <div class="grid grid-cols-3 gap-4">
                            <div class="">
                                <img src="{{ asset('images/goal.svg') }}" class="h-full w-full" style="width: 16vh" alt="">
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
                    <div class="sec_section py-16">
                        <div class="font lg:text-5xl xl:text-5xl md:text-4xl text-2xl ">
                            Our Featured Courses
                        </div>
                        <div>
                            <p class="font">Our Featured Courses are selected through a rigorous process and uniquely created for each semester.</p>
                        </div>
                    </div>
                    
                    {{-- course display --}}
                    <div class="m-5 pb-10">
                        <div class="flex flex-no-wrap flex-col sm:flex-no-wrap sm:flex-col md:flex-wrap md:flex-row lg:flex-wrap lg:flex-row Xl:flex-wrap xl:flex-row">
                            @foreach ($courses as $course)
                                @if ($course->status == 1 )
                                    <div class="w-full sm:w-full md:w-2/6 lg:w-2/6 xl:w-2/6 p-2 mt-3">
                                        <div class="ind_courses">
                                            <div class="h-full w-full">
                                                <img src="{{asset('images/courses/'.$course->image)}}" class="course max-h-full w-full max-w-full object-cover" style="height:20rem" alt="">
                                            </div>
                                            <div class="text-center text-3xl mt-3 pb-3">
                                               <a href="/study/{{$course->id}}" class="text-black">{{$course->name}}</a>
                                            </div>
                                        </div>   
                                    </div>
                                @endif
                            @endforeach 
                        </div>
                    </div>
                   
                </div>
            </div>


            {{-- second section --}}
            <div class="subimage w-full my-8" style="height: 24rem">
                <div class="subtext w-full h-full flex justify-center">
                    <div class="font text-4xl font-bold text-white">
                        <div>Education is the foundation upon which we build our future</div> 
                    </div>
                    <div>Register now to get full experience</div>
                </div>
                <div class="subimagecover"></div>
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
                        <img src="{{asset('svg/logo1.svg')}}" class="" style="height: 11rem; width: 10rem">
                        <img src="{{asset('svg/logo2.svg')}}" class="" style="height: 2.2rem; width: 10rem">
                    </div>
                    <div class="leading-2 flex items-baseline mt-4">
                        <div class="">
                            <div class="border-b text-lg text-white font-bold">
                                Related Links
                            </div>
                            <div>
                                <div class="py-1 font-thin text-white">Related Links</div>
                                <div class="py-1 font-thin text-white">Related Links</div>
                                <div class="py-1 font-thin text-white">Related Links</div>
                            </div>
                        </div>
                    </div>
                    <div class="leading-2 flex items-baseline mt-4">
                        <div>
                            <div class="border-b text-lg text-white font-bold">
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
