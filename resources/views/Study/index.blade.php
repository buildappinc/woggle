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


     
</style>

@extends('layouts.app')

@section('title', 'study')


@section('content')
<div class="container-fluid header">
    <div class="flex justify-center text-4xl tracking-wider" >
        Courses
    </div>
    <div class="flex justify-center">
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto delectus perspiciatis voluptatum similique
    </div>
</div>

<div class="container pt-5">
        <div>
            @foreach($course as $courses)
                <div class="flex m-5 rounded-sm shadow-md ">
                    <div class="grid grid-cols-3 gap-4">
                        <div class="col-span-1 ...">
                            <img src="/storage/{{$courses->image}}" class="img object-cover shadow-inner" alt="">
                        </div>
                        <div class="col-span-2 ... pl-5 pr-4 p-3">
                            <div class="h-64 grid grid-rows-3 grid-flow-col gap-4">
                                <div class="text-4xl">
                                    {{$courses->name}}
                                </div>
                                  
                                <div class="">
                                    {{$courses->introduction}}
                                </div>
                                <div class="flex justify-between">
                                   <div>
                                    <a href="/study/{{$courses->id}}" style="text-decoration: none; color: #000">
                                        <div style="background-color: #f7b728; height: 40px; width: 150px; border-radius: 3px;">
                                              <p style="text-align: center; padding-top: 6%; text-transform: uppercase">Details</p> 
                                        </div>
                                      </a>
                                   </div>
                                   <div class="px-4 py-2 m-2">
                                       Learners: 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                </div>
            @endforeach
        </div> 
   </div>
</div>


@endsection