@extends('Admin.app')

@section('content')

<div>
    @if (session()->has('message'))
        <div class="alert alert-success" role="alert">
            <strong>Success</strong> {{ session()->get('message') }}
        </div>
    @endif
</div>

<div class="container h-full px-64 py-40">   
    <form action="{{ route('Course.topic.submit', ['course' => $course]) }}" method="post">
        @include('Topics.include.form')

        <div class="py-3">
            <button type="submit" style="background: linear-gradient(184.38deg, #779FDD 7.68%, #406AB4 106.58%);; width: 97%" class="btn btn-primary h-12  ml-3">Create</button>
        </div>
    </form>  
</div>


@endsection
