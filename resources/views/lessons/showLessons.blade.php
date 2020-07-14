<style>
    .header{
        background-color: hsl(218, 48%, 48%);
    }
    .container{
        background-color: #fff;
    }
</style>
@extends('lessons.app')

@section('content')
<div class=" w-full h-full" style="background-color: #f2f2f2">
    <div class="header w-full h-20 items-center -mt-6 flex justify-center">
        <div class="text-2xl text-white">
            {{$topic->name}}
        </div>
    </div>
    <div class="container shadow-md py-24 h-full">
        <div class="mx-32">
            @foreach ($topic->sections as $item)
                <h2>{{$item->header}}</h2>
                <p>{{$item->content}}</p>
            @endforeach
        </div>
    </div>
    
</div>
@endsection