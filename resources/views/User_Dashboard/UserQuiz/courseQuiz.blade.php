@extends('layouts.app')

@section('content')
    <div>
        where the party dey today rock star erh  {{$course->name}}

        <div>
            @foreach ($course->questions as $item)
                <li>
                    {{$item->name}}
                    @foreach ($item->answers as $items)
                        <li>{{$items->option}}</li>
                    @endforeach
                </li>
            @endforeach
        </div>
    </div>
@endsection