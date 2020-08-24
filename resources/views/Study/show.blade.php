<style>
    .text_font{
        font-family: 'Baloo Tamma 2', cursive;
        font-family: 'Comfortaa', cursive;
        font-family: 'Raleway', sans-serif;
        font-family: 'Recursive', sans-serif;
        font-family: 'Tajawal', sans-serif;
    }

    .font{
        font-family: 'Baloo Tamma 2', cursive;
        font-family: 'Raleway', sans-serif;
        font-family: 'Recursive', sans-serif;
    }
</style>
@extends('layouts.app')

@section('title', 'course')

@section('content')


<div class="container-fluid">

    <div class="px-32 py-10">
        <div class="grid grid-cols-4 gap-4">
            <div class="col-span-3 ... ">
                <div class="grid grid-rows-3 grid-flow-col gap-4">
                    <div class="row-span-1 col-span-2 ...">
                        {{-- top-left section --}}
                        <div class="shadow-md rounded-md p-4 animated fadeInLeft slower-4s">
                            {{-- inner top left section  --}}
                            <div class="grid grid-cols-4 gap-4">
                                <div class="col-span-1 ...">
                                    <div class="h-48">
                                        <img class="rounded-lg h-48 max-h-full shadow-inner object-cover" src="{{asset('images/courses/'.$course->image)}}" alt="">
                                    </div>
                                    {{-- {{route('course.get', ['course'=>$course->id])}} --}}
                                    <div class="mt-3">
                                        <a href="{{ route('payment.index', ['course'=>$course->id])}}" style="text-decoration: none; color: #000">
                                            <div style="background-color: #f7b728; height: 40px; width: 100%; border-radius: 3px;">
                                                  <p style="font text-align: center; padding-top: 6%; text-transform: uppercase">Enroll now</p> 
                                            </div>
                                        </a>
                                        {{-- <form action="{{route('course.get', ['course'=>$course->id])}}" method="post">
                                            @csrf
                                           <button type="submit" class="button mt-3" style="background-color: #f7b728">Enroll now</button>
                                        </form> --}}
                                    </div>
                                </div>
                                <div class="col-span-3 ...">
                                    <div>
                                        <h2 class="font">
                                            {{$course->name}}
                                        </h2>
                                        <div> <p style="line-height: 30px;" class="tect_font text-justify">{{$course->description}}</p></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row-span-2 col-span-2 ...">
                        {{-- buttom right section --}}
                        <div class="shadow-md rounded-md p-4 animated fadeInUp">
                            <div class="flex justify-between">
                                <div class="font">Topics</div>
                                <div class="font">Practical exercise</div>
                            </div>

                            <div class="mt-3">
                                @foreach ($course->topics as $topic)
                                 <div>
                                     <div class="font pt-2 pl-3 text-base pb-2" style="background: linear-gradient(183.72deg, #666666 0%, #151522 100%); border-radius: 5px; color: #fff">
                                       Topic: {{$topic->name}}
                                     </div>
                                     <div class="mt-2">
                                     @foreach ($topic->sections as $section)
                                         <div class="p-1" style="background-color: #f7f7f7">
                                            <div class="flex justify-between">
                                                <div class="text_font pl-3">Section - {{$section->header}}</div>
                                                <div class="font pr-3">10 mins</div>
                                            </div>
                                            <hr>
                                         </div>
                                     @endforeach
                                    </div>
                                </div>   
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-span-1 hidden sm:hidden md-block lg:block xl:block">
                <div class="shadow-md rounded-md max-h-full animated fadeInRight">
                    <div>
                        <div class="font pl-4 pt-2 text-2xl">Course Author</div> 
                        <hr>
                    </div>
                    <div class="pl-4 pb-4 ">
                        <div class="flex">
                            <div class="font">dad</div>
                            <div class="font mx-16">Sir John</div>
                        </div>
                        <div class="font pr-4 pt-3 text-justify">
                            Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto in magnam animi molestias, doloremque odio, soluta, aliquam placeat illo dignissimos quae ab tenetur perferendis fuga ipsa maiores commodi vitae dolores. consectetur adipisicing elit. Dolores explicabo blanditiis sunt placeat sapiente. Quos autem officia quae illo incidunt perspiciatis consectetur unde, eum commodi sunt nesciunt, reiciendis neque dolore!
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    
</div>
@endsection