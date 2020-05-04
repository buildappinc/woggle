<style>
    .left_side{
        width: 20%;
        background-color: red;
        padding-top: 0;
        margin-top: -23;
        height: 100vh
    }

    .text{
        font-family: Montserrat, Georgia, "Times New Roman", Times, serif;
        font-weight: 300px;
        line-height: 25px;
        font-size: 14px
    }


</style>

@extends('layouts.app')


@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="left_side">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
           <span class="text"> Welcome {{Auth::user()->gender === "male" ? "Mr.": "Miss"}} {{ Auth::user()->lname }} </span>
        </div>
        <div>
            @foreach (Auth::user()->courses as $course)
                {{$course->name}}
            @endforeach
        </div>
    </div>
</div>
@endsection
