
@extends('layouts.app')


@section('content')
<div class="container">
    {{-- <div class="row">
        <div>
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
        </div>
    </div> --}}

    <div class="mt-5 grid grid-cols-2 gap-1">
        <div>
            <div class="grid grid-cols-3">
                {{-- image --}}
                <div class=" col-span-1 h-32 w-32 mt-2">
                     <img src="/storage/{{Auth::user()->image}}" class="h-32 w-32 rounded-full object-cover" alt="">
                </div>
                {{-- name and others --}}
                <div class="col-span-2">
                    <div>
                        <span class="text-2xl font-bold"> Welcome {{Auth::user()->gender === "male" ? "Mr.": "Miss"}} {{ Auth::user()->lname }} </span>
                    </div>
                    {{-- experience --}}
                    <div class="mt-3">
                        Experience
                    </div>
                    
                    {{-- button --}}
                    <div class="mt-3">
                        <a href="{{ route('profile.edit', [Auth::user()->id])}}" style="text-decoration: none; color: #000">
                            <div style="background-color: #f7b728; height: 40px; width: 150px; border-radius: 3px;">
                                  <p style="text-align: center; padding-top: 6%; text-transform: uppercase">Edit Account</p> 
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            
            <div class=" mt-24">
                <div class="text-3xl font-bold">
                    Subscribed Courses
                </div>

                @if (Auth::user()->courses->count() <= 0 )
                    <div>
                        <div class="mt-12 flex justify-center">
                            <img src="{{asset('images/undraw_online_learning_ao11.svg')}}" class="h-48 w-48" alt="">
                        </div>
                        <div class="text-center text-xl">Opps No Subscribed Course!!! <a href="/study" style="color: #f7b728">Check Out Available Courses</a> </div>
                    </div>
                @else
                    <div class="flex flex-no-wrap flex-col lg:flex-wrap lg:flex-row md:flex-wrap md:flex-row mt-4 pt-3">
                        @foreach (Auth::user()->courses as $course)
                            <div class="w-2/5 pl-4 pt-4">
                                <div class="h-48 w-48 shadow-md">
                                    <img class="rounded-lg h-48 max-w-full shadow-inner" src="/storage/{{$course->image}}" alt="">
                                </div>
                                <div class="text-center">
                                    <a href="/study/lesson/{{$course->id}}" class="text-3xl">{{$course->name}}</a> 
                                </div>
                            </div>
                       @endforeach
                     </div>
                @endif
            </div>
        </div>
        {{-- statistics --}}
        <div>
            User statistics
        </div>
    </div>
</div>
@endsection
