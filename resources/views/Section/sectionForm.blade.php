<style>
    .btn-primary{
        background: linear-gradient(184.38deg, #779FDD 7.68%, #406AB4 106.58%);
        border-radius: 5px;
    }
</style>
@extends('Admin.app')

@section('content')

<div>
    @if (session()->has('message'))
        <div class="alert alert-success" role="alert">
            <strong>Success</strong> {{ session()->get('message') }}
        </div>
    @endif
</div>

<div class="hello w-full h-full -mt-6" style="background: #383838;">
    <div class="container bg-white w-full h-full shadow-md p-3">
        <form action="{{ route('Topic.section.submit', ['course' => $course->id, 'topic' => $topic->id])}}" method="post">
        
            @include('Section.include.form')
            <button type="submit" class="btn btn-primary h-12  ml-3" style="width: 97%">Add section</button>
        </form>
    </div>
</div>
@endsection