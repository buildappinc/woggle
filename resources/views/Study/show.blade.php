<style>
    .header{
        margin-top: -20 ;
        padding: 0px;
        height: 150px;
        width: 100%;
        background-size: cover;
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background: #06042d;
        background-image: url('{{asset('images/football-no-lines.png')}}');
    }

    .text{
        color: white;
        padding-top: 4%
    }   

    a {
        text-decoration: none;
        color: #000;
    }

    a:hover{
        text-decoration: none;
        color:#06042d;
    }

    .quickNav{
        padding-top: 10%
    }

    img{
        background-size: cover;
        width: 90%; 
        height: 40%;
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

@section('title', 'course')

@section('content')
<div class="container-fluid header">
    <div class="container">
        <div class="text row">
            <div class="col-8">
                <p style="font-size: 45px;">{{$course->name}}</p>
            </div>
            <div class="col-4">
                <div class="quickNav">
                    <p>You are here: <a href="/">Home</a> \ Study</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div style="margin-top: 5%" class="row">
        <div class="col-3">
            <div>
                <img src="{{ asset('images/image.jpg')}}" alt="">
            </div>
            <div>
                
            </div>
        </div>
        <div class="col-6">
            <hr>
            <p style="line-height: 38px;">{{$course->long_decription}}</p>
            <hr>
            <a href="" style="text-decoration: none; color: #000">
                 <div class="button">
                        <p style="text-align: center; padding-top: 2%; text-transform: uppercase">Enroll Now</p> 
                </div>
            </a>
        </div>
        <div style="padding-left: 20px"  class="col-3">
           <div style="background: #06042d; height:50px; color: #fff; font-size: 20px; text-align: center; padding-top: 3%">
               Related Courses
           </div>
           <div>
               @foreach($courses as $ind_course)
                <li><a href="/study/{{$course->id}}">{{$ind_course->name}}</a></li>
               @endforeach
           </div>
        </div>
    </div>
</div>
@endsection