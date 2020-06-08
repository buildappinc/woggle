@extends('Admin.app')

@section('content')

<div>
    @if (session()->has('message'))
        <div class="alert alert-success" role="alert">
            <strong>Success</strong> {{ session()->get('message') }}
        </div>
    @endif
</div>

<div class="container">   
    <form action="{{ route('topic.form.submit') }}" method="post">
        @include('Topics.include.form')

        <button type="submit">Add</button>

    </form>  
</div>


@endsection
