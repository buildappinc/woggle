@extends('lessons.app')

@section('content')
        <div class="container-fluid">
            @foreach ($course->topics as $topic)
            <a href="{{ route('lesson.content', ['course'=>$course->id, 'topic'=>$topic->id])}}">{{$topic->name}}</a>
            @endforeach
        </div>
@endsection