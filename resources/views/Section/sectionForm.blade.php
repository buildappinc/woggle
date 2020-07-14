@extends('Admin.app')

@section('content')

<div>
    @if (session()->has('message'))
        <div class="alert alert-success" role="alert">
            <strong>Success</strong> {{ session()->get('message') }}
        </div>
    @endif
</div>

<div class="hello w-full h-screen -mt-6" style="background: #383838;">
    <div class="container bg-white w-full h-screen shadow-md p-3">
        <form action="{{ route('Topic.section.submit', ['course' => $course->id, 'topic' => $topic->id])}}" method="post">
        
            @include('Section.include.form')
            <button type="submit">Add section</button>
        </form>
    </div>
</div>
@endsection