<style>
    
</style>
@extends('lessons.app')

@section('content')
        <div class="hello bg-gray-200 w-full h-full -mt-6">
            
            <div class="container bg-red-200">
                {{-- header --}}
                <div>
                    {{$course->name}}
                </div>
                <div>
                    @foreach ($course->topics as $topic)
                        <a href="{{ route('lesson.content', ['course'=>$course->id, 'topic'=>$topic->id])}}">{{$topic->name}}</a>
                    @endforeach
                </div>
            </div>
        </div>
@endsection