<style>
    .container-fluid{
        margin-top: -23;
        padding: 0px;
        height: 200px;
        width: 100%;
        background-size: cover;
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-image: url('{{asset('images/image.jpg')}}');
    }

    .text{
        color: white;
        padding:  7%
    }   
</style>

@extends('layouts.app')


@section('content')
<div class="container-fluid">
    <div class="container">
        <div class="text">
            <p>You are here: <a href="/">Home</a> / study</p>
        </div>
    </div>
</div>


@endsection