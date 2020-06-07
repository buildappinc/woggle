@extends('Study.lesson')

@section('lesson')
    <div>
        @foreach ($topic->sections as $item)
            <h2>{{$item->header}}</h2>
            <p>{{$item->content}}</p>
        @endforeach
        
    </div>
@endsection
 