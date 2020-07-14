@extends('Admin.app')

@section('content')
    
<div class="container">   
    <form action="{{route('Course.topic.edit.submit', ['course'=> $course->id, 'topic'=>$topic->id])}}" method="post">

        @method('PATCH')
        @include('Topics.include.form')

        <button type="submit">Add</button>

    </form>  
</div>


@endsection
