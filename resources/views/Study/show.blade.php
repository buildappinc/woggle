
@extends('layouts.app')

@section('title', 'course')

@section('content')


<div class="container-fluid">
    
    {{-- <div style="margin-top: 5%" class="row">
        <div class="col-3"> 
            <div>
                <img class="img" src="/storage/{{$course->image}}" alt="">
            </div>
            <div class="mt-4">
                <div><strong>Course Price</strong></div>
                <p>GHc {{$course->price}}</p>
            </div>
            add payment method
            <div class="mt-4">
                <div>Add payment method</div> 
                <a href="#">
                    <p class="payment_btn">Payment</p>
                </a>
            </div>
            
        </div>
        <div class="col-6 pl-4">
            <hr>
            <p style="line-height: 38px;">{{$course->description}}</p>
            <hr>
                <form action="/study/{{$course->id}}" method="post">
                    @csrf
                   <button type="submit" class="button mt-3">Enroll now</button>
                </form>
        </div>
        <div style="padding-left: 20px"  class="col-3">
           <div style="background: #06042d; height:50px; color: #fff; font-size: 20px; text-align: center; padding-top: 3%">
               Related Courses
           </div>
           <div class="mt-3">
               @foreach($courses as $ind_course)
                <div class="row">
                    <div class="col-6">
                        <li class="courses"><a style="color: #000; text-decoration: none" href="/study/{{$ind_course->id}}">{{$ind_course->name}}</a></li>
                    </div>
                    <div class="col-6 d-flex justify-content-end">
                        <img class="ind_img" src="/storage/{{$ind_course->image}}" alt="">
                    </div>
                </div>
               @endforeach
           </div>
        </div>
    </div> --}}

   
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
                                        <img class="rounded-lg h-48 max-h-full shadow-inner" src="/storage/{{$course->image}}" alt="">
                                    </div>
                                    <div>
                                        <form action="/study/{{$course->id}}" method="post">
                                            @csrf
                                           <button type="submit" class="button mt-3">Enroll now</button>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-span-3 ...">
                                    <div>
                                        <h2>
                                            {{$course->name}}
                                        </h2>
                                        <div> <p style="line-height: 38px;">{{$course->description}}</p></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row-span-2 col-span-2 ...">
                        {{-- buttom right section --}}
                        <div class="shadow-md rounded-md p-4 animated fadeInUp">
                            <div class="flex justify-between">
                                <div>Topics</div>
                                <div>Practical exercise</div>
                            </div>

                            <div class="mt-3">
                                @foreach ($course->topics as $topic)
                                 <div>
                                     <div class="pt-2 pl-3 text-base pb-2" style="background: linear-gradient(183.72deg, #666666 0%, #151522 100%); border-radius: 5px; color: #fff">
                                       Topic: {{$topic->name}}
                                     </div>
                                     <div class="mt-2">
                                     @foreach ($topic->sections as $section)
                                         <div class="p-1" style="background-color: #f7f7f7">
                                            <div class="flex justify-between">
                                                <div class="pl-3">Section - {{$section->header}}</div>
                                                <div class="pr-3">10 mins</div>
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
            <div class="col-span-1 ...">
                <div class="shadow-md rounded-md max-h-full animated fadeInRight">
                    <div>
                        <div class="pl-4 pt-2 text-2xl">Course Author</div> 
                        <hr>
                    </div>
                    <div class="pl-4 pb-4 ">
                        <div class="flex">
                            <div>dad</div>
                            <div class="mx-16">Sir John</div>
                        </div>
                        <div class="pr-4 pt-3">
                            Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto in magnam animi molestias, doloremque odio, soluta, aliquam placeat illo dignissimos quae ab tenetur perferendis fuga ipsa maiores commodi vitae dolores. consectetur adipisicing elit. Dolores explicabo blanditiis sunt placeat sapiente. Quos autem officia quae illo incidunt perspiciatis consectetur unde, eum commodi sunt nesciunt, reiciendis neque dolore!
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>


    {{-- <div class="p-3 ml-4">
        <div class="grid grid-cols-3 gap-4">
            <div class="col-span-2 ... mx-20 mr-2">
                <div class="grid grid-rows-3 grid-flow-col gap-4">
                    <div class="row-span-1 col-span-2 ... shadow-md rounded-md p-4">   
                        <div class="grid grid-cols-3 gap-4">
                            <div class="col-span-1 ...">
                                
                                <div>
                                    <img class="rounded-lg shadow-inner" src="/storage/{{$course->image}}" alt="">
                                </div>
                                
                                <div>
                                    <form action="/study/{{$course->id}}" method="post">
                                        @csrf
                                       <button type="submit" class="button mt-3">Enroll now</button>
                                    </form>
                                </div>
                            </div>
                            <div class="col-span-2 ... p-2 pl-3">
                                <h2>title</h2>
                                <div>
                                    <p style="line-height: 38px;">{{$course->description}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row-span-2 col-span-2 ... shadow-md rounded-md p-4 mt-2">asdasdsds</div>
                </div>
            </div>
            <div class="col-span-1 ... shadow-md w-16 "></div>
        </div>  
    
    </div> --}}

    
</div>
@endsection