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

    .img{
        background-size: cover;
        width: 100%; 
        height: 50%;
    }

    .ind_img{
        background-size: cover;
        width: 40%; 
        height: 70%;
    }

    .button{
        border: 1px solid #020026; 
        height: 50px; 
        width: 100%; 
        border-radius: 3px ;
        background-color: #fff
    }

    .button:hover{
        transition: all 1s ease-in-out 0s;
        border: none;
        color: #fff;    
        background: #fb0040;
    }

    .payment_btn{
        padding-top: 3%;
        text-decoration: none;
        color: #000;
        text-align: center;
        margin-top: 10px;
        border: 1px solid #020026; 
        height: 40px;
        border-radius: 2px ;
       
    }

    .courses{
        list-style-type: none;
        text-decoration: none;
        color: #000;
        height: 50px;
    }

    .courses:hover{
        border-left: 4px solid #000;
    }

     
</style>
@extends('layouts.app')

@section('title', 'course')

@section('content')


<div class="container">
    
    {{-- <div style="margin-top: 5%" class="row">
        <div class="col-3">
            <div>
                <img class="img" src="/storage/{{$course->image}}" alt="">
            </div>
            <div class="mt-4">
                <div><strong>Course Price</strong></div>
                <p>GHc {{$course->price}}</p>
            </div>
            add payment method
            <div class="mt-4">
                <div>Add payment method</div> 
                <a href="#">
                    <p class="payment_btn">Payment</p>
                </a>
            </div>
            
        </div>
        <div class="col-6 pl-4">
            <hr>
            <p style="line-height: 38px;">{{$course->description}}</p>
            <hr>
                <form action="/study/{{$course->id}}" method="post">
                    @csrf
                   <button type="submit" class="button mt-3">Enroll now</button>
                </form>
        </div>
        <div style="padding-left: 20px"  class="col-3">
           <div style="background: #06042d; height:50px; color: #fff; font-size: 20px; text-align: center; padding-top: 3%">
               Related Courses
           </div>
           <div class="mt-3">
               @foreach($courses as $ind_course)
                <div class="row">
                    <div class="col-6">
                        <li class="courses"><a style="color: #000; text-decoration: none" href="/study/{{$ind_course->id}}">{{$ind_course->name}}</a></li>
                    </div>
                    <div class="col-6 d-flex justify-content-end">
                        <img class="ind_img" src="/storage/{{$ind_course->image}}" alt="">
                    </div>
                </div>
               @endforeach
           </div>
        </div>
    </div> --}}
</div>
@endsection