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

    img{
        background-size: cover;
        width: 90%; 
        height: 100%;
    }
     
</style>

@extends('layouts.app')

@section('title', 'study')


@section('content')
<div class="container-fluid header">
    <div class="container">
        <div class="text row">
            <div class="col-8">
                <p style="font-size: 30px;">Study</p>
                <p>Explore courses that are organised into difficult levels</p>
            </div>
            <div class="col-4">
                <div class="quickNav">
                    <p>You are here: <a href="/">Home</a> / Study</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div>
        bfgdf
    </div>
    <div class="row">
        <div class="col-8">
            @foreach($course as $courses)
                <div style="height: 350px; margin-bottom: 10px" class="row">
                    <div class="col-7">
                        <img src="{{ asset('images/image.jpg')}}" alt="">
                    </div>
                    <div class="col-5">
                        <div>
                            {{$courses->name}}
                        </div>
                        <hr>
                        <div>
                            {{$courses->description}}
                        </div><br>
                        <div>
                            <div>Select difficulty</div>
                            @foreach($courses->difficulties as $difficulty)
                                {{$difficulty->name}}
                            @endforeach
                        </div><br>
                        <div>
                            <button class="btn btn-primary btn-sm">View Course</button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="col-4">
        dadadad
        </div>
   </div>
</div>


@endsection