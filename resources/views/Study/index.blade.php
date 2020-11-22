<style>
    .header{
        
    }

    .text{
        color: white;
        padding-top: 2.5%
    }   

    .body_section{
        padding-top: 2.5%;
        padding-left: 1%;
    }

    .text_font{
        font-family: 'Baloo Tamma 2', cursive;
        font-family: 'Comfortaa', cursive;
        font-family: 'Raleway', sans-serif;
        font-family: 'Recursive', sans-serif;
        font-family: 'Tajawal', sans-serif;
    }

    .font{
        font-family: 'Baloo Tamma 2', cursive;
        font-family: 'Raleway', sans-serif;
        font-family: 'Recursive', sans-serif;
    }

    ul, li{
        text-decoration: none;
        list-style-type: none;
    }
    
    .course_header{
        font-size: 17px;
        color: #fff;
        background: #06042d;
        height: 50px;
        width: 100%;
        padding-top: 12px;
        padding-left: 10px;
    }

    .course{
        font-size: 15px;
        border: 0px;
        height: 50px;
        width: 100%;
        padding-top: 10px;
        padding-left: 10px;
    }
    .course:hover{
        border-left: 2px solid #06042d;
    }

    .a {
        text-decoration: none;
        color: #000;
    }

    .a:hover{
        text-decoration: none;
        color:#06042d;
    }

    .quickNav{
        padding-top: 10%
    }

    .img{
        background-size: cover;
        width: 90%; 
        height: 100%;
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

    .btnflex{
        background-color: #f7b728; 
        height: 40px; 
        width: 150px; 
        border-radius: 3px;
    }

    @media screen and (max-width: 430px){
        .btnflex{
            background-color: #f7b728; 
            height: 35px; 
            width: 90px; 
            border-radius: 3px;
        }
    }


     
</style>

@extends('layouts.app')

@section('title', 'study')


@section('content')
<div class="container-fluid header mt-5">
    <div class="font flex text-center justify-center text-4xl tracking-wider" >
        Courses
    </div>
    <div class="font flex text-center justify-center">
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto delectus perspiciatis voluptatum similique
    </div>
</div>

<div class="container pt-5">
    <div>
        @foreach ($course as $courses)
            @if ($courses->status == 1)
            <div class="flex flex-col md:flex-row lg:flex-row xl:flex-row m-5 rounded-lg shadow-md border border-gray-200">
                <div class="md:w-2/5 lg:w-2/5 md:h-64">
                    <img src="{{asset('images/courses/'.$courses->image)}}" class="lg:h-full md:h-full md:w-11/12 md:object-cover sm:w-full sm:object-cover rounded-lg lg:w-11/12 lg:object-cover"  alt="">
                </div>
                <div class="md:w-4/6 m-3 flex flex-col justify-between">
                    <div class="font text-4xl">
                        {{$courses->name}}
                    </div>
                    <div class="text_font text-justify">
                        {{$courses->introduction}}
                    </div>
                    <div class="flex justify-between items-center">
                        <div>
                            <a href="/study/{{$courses->id}}" style="text-decoration: none; color: #000">
                                <div class="btnflex">
                                    <p style="text-align: center; padding-top: 6%; text-transform: uppercase" class="font">Details</p> 
                                </div>
                            </a>
                        </div>
                        
                        <div class="font px-4 py-2 m-2">
                            Learners: {{$courses->users()->count()}}
                        </div>
                    </div>
                </div>
            </div>
            @endif
        @endforeach  
    </div> 
   </div>
</div>


@endsection