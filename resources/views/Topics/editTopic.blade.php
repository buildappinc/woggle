@extends('Admin.app')

@section('content')
    
<div class="container">   
    <form action="/admin/topic/{{$topic->id}}" method="post">

        @method('PATCH')
        @include('Topics.include.form')

        <button type="submit">Add</button>

    </form>  
</div>


@endsection
