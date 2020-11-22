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
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Tamma+2&family=Raleway:ital,wght@0,300;0,400;1,455&family=Recursive:wght@500;600&display=swap" rel="stylesheet">

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
        color: #fff !important;
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
        margin-top: 5%;
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
        max-width: 100%;
        height: 100vh;
        background-attachment: fixed;
        background-image: url('{{asset('images/man-in-yellow-crew-neck-t-shirt-while-using-tablet-4144096.jpg')}}');
        background-size: cover;
        z-index: 1
    }

    /* phone/mobile mode */
    @media screen and (max-width:430px) {
        .homeImage{
            position: relative;
            max-width: 100%;
            height: 100vh;
            background-attachment: fixed;
            background-image: url('{{asset('images/pexels-julia-m-cameron-4144174.jpg')}}');
            background-size: cover;
            z-index: 1
        }
    }

    /* tablet mode */
    @media screen and (max-width: 768px) {
        .homeImage{
            position: relative;
            max-width: 100%;
            height: 100vh;
            background-attachment: fixed;
            background-image: url('{{asset('images/pexels-julia-m-cameron-4144174.jpg')}}');
            background-size: cover;
            z-index: 1
        }
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

    .btnText:hover{
        -webkit-box-shadow: 0px 12px 49px -10px rgba(41, 44, 61, 0.15);
        -moz-box-shadow: 0px 12px 49px -10px rgba(41, 44, 61, 0.15);
        box-shadow: 0px 12px 49px -10px rgba(41, 44, 61, 0.15);
        -webkit-transition: .3s ease-in-out;
        -moz-transition: .3s ease-in-out;
        transition: .4s ease-in-out ;
    }

    @keyframes animate{
        0%{
            background-position: 0;
        }
        100%{
            background-position: 1360px;
        }

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
        {{-- desktop view --}}
        <div class="homeImage object-cover animate__fadeInLeft">
            <div class="colortext hidden md:block lg:block xl:block font py-56 w-full" style="height: 70%">
                <div data-aos="fade-up" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="800" class="text-xl uppercase text-black flex justify-center items-center lg:mt-8 xl:mt-12" style="color: #fff">the best online education <span style="color: #000" class="mx-3">in the world</span></div>
                <div data-aos="fade-up" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="800" class="text-5xl uppercase text-black flex justify-center items-center font-bold mt-3" style="color: #000">one <span style="color: #000" class="mx-3"> steps </span> ahead this season</div>
                <div class="flex justify-center mt-8">
                    <a href="/study" style="color: #000; text-decoration: none">
                        <div data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="2000" class="hover:shadow-2xl transition duration-700 ease-in-out text-base uppercase mx-2 h-12 w-40 flex justify-center items-center rounded" style="background: #f9b629">see course</div>
                    </a>
                    <a href="/contact" style="color: #f9b629; text-decoration: none">
                        <div data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="2000" class="hover:shadow-2xl transition duration-700 ease-in-out text-base uppercase mx-2 h-12 w-40 flex justify-center items-center rounded" style="background: #000; ">Contact Us</div>
                    </a>
                </div>
            </div>
            <div class="colortext md:hidden lg:hidden xl:hidden font py-40 w-full" style="height: 70%">
                <div data-aos="fade-up" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="800" class="uppercase text-black flex justify-center items-center text-center" style="color: #fff">the best online education <span style="color: #000" class="mx-3">in the world</span></div>
                <div data-aos="fade-up" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="800" class="text-2xl uppercase text-black flex justify-center items-center text-center font-bold mt-3" style="color: #000">one <span style="color: #000" class="mx-3"> steps </span> ahead this season</div>
                <div class="grid justify-content-center">
                    <div class="mt-8">
                        <a href="/study" style="color: #000; text-decoration: none">
                            <div data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="2000" class="hover:shadow-2xl transition duration-700 ease-in-out text-sm uppercase mx-2 h-10 w-32 flex justify-center items-center rounded" style="background: #f9b629">see course</div>
                        </a>
                    </div>
                    <div class="my-3">
                        <a href="/contact" style="color: #f9b629; text-decoration: none">
                            <div data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="2000" class="hover:shadow-2xl transition duration-700 ease-in-out text-sm uppercase mx-2 h-10 w-32 flex justify-center items-center rounded" style="background: #000; ">Contact Us</div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="color_overlay"></div>
            <div class="wavy"></div>
        </div>

        <main class="py-4">
            <!-- quick review -->
            <div class="my-8 hidden lg:block xl:block text-center">
                <h1 data-aos="fade-up" data-aos-duration="800" class="font lg:text-5xl xl:text-5xl">Welcome to woogle e-Learning</h1>
                <div data-aos="fade-up" data-aos-duration="900" class="font" style="margin-left: 26rem; margin-right: 26rem">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni impedit voluptas soluta autem molestiae inventore, ea, incidunt ipsum sequi iusto quis! Totam veniam</div>
            </div>
            <div class="container quick py-6">
                <div class="grid grid-cols-3 gap-4 ">
                    <div>
                        <div class="grid grid-cols-3 gap-4 flex flex-row sm:flex-col">
                            <div class="">
                                <img src="{{ asset('images/book.svg') }}" class="h-full w-full"  alt="">
                            </div>
                            <div class="font status_text">
                                    Study Online
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="grid grid-cols-3 gap-4">
                            <div class="">
                                <img src="{{ asset('images/exam.svg') }}" class="h-full w-full" style="width: 18h " alt="">
                            </div>
                            <div class="font status_text">
                                Take Quizes 
                            </div>
                         </div>
                    </div>
                    <div>
                        <div class="grid grid-cols-3 gap-4">
                            <div class="">
                                <img src="{{ asset('images/goal.svg') }}" class="h-full w-full" style="width: 16vh" alt="">
                            </div>
                            <div class="font status_text">
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
                        <div data-aos="fade-up" data-aos-duration="800" class="font lg:text-5xl xl:text-5xl md:text-4xl text-2xl ">
                            Our Featured Courses
                        </div>
                        <div>
                            <p data-aos="fade-up" data-aos-duration="900" class="font">Our Featured Courses are selected through a rigorous process and uniquely created for each semester.</p>
                        </div>
                    </div>
                    
                    {{-- course display --}}
                    <div class="m-5 pb-10">
                        <div class="flex flex-no-wrap flex-col sm:flex-no-wrap sm:flex-col md:flex-wrap md:flex-row lg:flex-wrap lg:flex-row Xl:flex-wrap xl:flex-row">
                            @foreach ($courses as $course)
                                @if ($course->status == 1 )
                                    <div data-aos="fade-up" data-aos-duration="800" class="w-full sm:w-full md:w-2/6 lg:w-2/6 xl:w-2/6 p-2 mt-3">
                                        <div class="ind_courses">
                                            <div class="h-full w-full">
                                                <img src="{{asset('images/courses/'.$course->image)}}" class="course max-h-full w-full max-w-full object-cover" style="height:20rem" alt="">
                                            </div>
                                            <div class="text-center text-3xl mt-3 pb-3">
                                               <a href="/study/{{$course->id}}" class="font text-black">{{$course->name}}</a>
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
            <div class="subimage hidden lg:block xl:block w-full my-8" style="height: 27rem">
                <div class="subtext w-full h-full flex justify-center p-32">
                    <div class="font w-1/2">
                        <div data-aos="fade-up" data-aos-duration="800" class="leading-tight text-4xl font-bold text-white">
                            <div>Education is the foundation upon</div>
                            <div>which we build our future</div> 
                        </div>
                        <div data-aos="fade-up" data-aos-duration="800" class="text-sm py-6 text-white">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officia quam fugiat velit ex magnam mollitia iusto ratione id facilis hic deserunt eos corporis asperiores, sapiente a quaerat perferendis sunt repellendus!
                        </div>
                    </div>
                    <a href="{{ route('register') }}" style="color: #f9b629; text-decoration: none">
                        <div data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1500" class="hover:shadow-2xl transition duration-700 ease-in-out font text-base uppercase mx-20 my-16 h-12 w-64 flex justify-center items-center rounded" style="background: #000">create an account</div>
                    </a>
                </div>
                <div class="subimagecover"></div>
            </div>
        </main>
        <div class="footer ">
            <div class="container-fluid footer-content">
                <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 gap-4">
                    <div class="items" style="margin-top: -6px">
                        <img src="{{asset('svg/logo1.svg')}}" class="" style="height: 11rem; width: 10rem">
                        <img src="{{asset('svg/logo2.svg')}}" class="" style="height: 2.2rem; width: 10rem">
                    </div>
                    <div class="font leading-2 flex flex items-baseline mx-8 md:mx-0 lg:mx-0 xl:mx-0 mt-4">
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
                    <div class="font leading-2 flex flex items-baseline mx-8 md:mx-0 lg:mx-0 xl:mx-0 mt-4">
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
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
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
