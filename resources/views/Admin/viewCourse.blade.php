@extends('Admin.app')


@section('content')

<div>
    @if (session()->has('message'))
        <div class="alert alert-success" role="alert">
            <strong>Success</strong> {{ session()->get('message') }}
        </div>
    @endif
</div>
    
@foreach ($course as $courses)
    <li>{{$courses->id}} - 
        <a href="/admin/courses/{{$courses->id}}">
            {{$courses->name}}
        </a>----------- 
        @foreach ($courses->topics as $item)
         {{$item->name}}
        @endforeach 
    </li> 
@endforeach

    <a href="{{ route('topic.form')}}">Add new Topic</a> 
    <br>
    <a href="{{ route('section.form') }}">Add new sections for Topics</a>

    
@endsection
