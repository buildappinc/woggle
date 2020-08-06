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
<div class=" w-full" style="background-color: #f2f2f2">
    <div class="header w-full h-20 items-center flex justify-center">
        <div class="text-2xl text-white">
            {{$topic->name}}
        </div>
    </div>
    <div class="container shadow-md pt-20 ">
        <div class="mx-32">
            @foreach ($topic->sections as $item)
                <h2>{{$item->header}}</h2>
                <p>{{$item->content}}</p>
            @endforeach
        </div>
        <div class="px-32 py-10 flex justify-between">     
            <div>
                @if ($prev !== null)
                    <a class="text-white text-xs" href="{{ route('lesson.content', ['course'=>$course->id, 'topic'=>$prev])}}">
                        <div class="flex justify-center items-center h-12 w-24" style="background: linear-gradient(225deg, #f1ce08 3.26%, #F7B728 100%);; border-radius: 5px;">
                                Prev
                        </div>   
                    </a> 
                @endif
            </div>   

            <div>
                @if ($next !== null)
                    <a class="text-white text-xs" href="{{ route('lesson.content', ['course'=>$course->id, 'topic'=>$next])}}">
                        <div class="h-12 w-24 bg-red-600 flex justify-evenly items-center" style="background: linear-gradient(225deg, #00D361 3.26%, #21A659 100%); border-radius: 5px;">
                            <div>
                                Next
                            </div>
                            <div>
                                <img src="{{asset('images/log-out.svg')}}" alt="">
                            </div>
                        </div>
                    </a>    
                @endif  
            </div>
        </div>  
    </div>
    
</div>
@endsection  