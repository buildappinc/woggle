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
        padding-left: 4%;
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

     
</style>

@extends('layouts.app')

@section('title', 'study')


@section('content')
<div class="container-fluid header">
    <div >
        <div class="text">
            <p style="font-size: 30px;">Study</p>
            <p>Explore courses that are organised into difficult levels</p>
        </div>
    </div>
</div>

<div class="container-fluid ">
    <div class="row body_section">
        <div class="col-3">
            <ul>
                <li class="course_header">Courses</li>
                @foreach($course as $courses)
                 <li class="course"><a href="/study/{{$courses->id}}" class="a" >{{$courses->name}}</a></li>
                @endforeach
            </ul>
        </div>

        <div class="col-9">
             
        </div>
    </div>
</div>


@endsection