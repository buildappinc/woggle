@extends('Admin.app')

@section('content')

<div class="container">   
    <form action="{{ route('topic.form.submit') }}" method="post">
        @include('Topics.include.form')

        <button type="submit">Add</button>

    </form>  
</div>


@endsection
