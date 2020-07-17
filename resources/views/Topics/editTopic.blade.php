@extends('Admin.app')

@section('content')
    
<div class="container h-full px-64 py-40">   
    <form action="{{route('Course.topic.edit.submit', ['course'=> $course->id, 'topic'=>$topic->id])}}" method="post">

        @method('PATCH')
        @include('Topics.include.form')

        <div class="my-3">
            <button type="submit" style="background: linear-gradient(184.38deg, #779FDD 7.68%, #406AB4 106.58%); width: 97%" class="btn btn-primary h-12 ml-3">Update Section</button>
        </div>

    </form>  
</div>


@endsection
