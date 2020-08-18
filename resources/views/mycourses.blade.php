<style>
    .box{
        box-shadow: 0 20px 25px -20px rgba(49, 2, 2, 0.205), 0 10px 10px -5px rgba(0, 0, 0, 0.04); 
        border-radius: 0px 0px 34px 0px;
        border: 1px solid rgb(238, 238, 238)
    }

    .box2{
        background: #e5e5fa46;
        box-shadow: 0 20px 25px -20px rgba(22, 3, 73, 0.205), 0 10px 10px -10px rgba(0, 0, 0, 0.04); 
        width: 48%;
        border-radius: 3px;
        border-left: 3px solid #9e1e1e;
        border-right: 1px dashed rgba(179, 177, 177, 0.171);
        border-top: 1px dashed rgba(179, 177, 177, 0.171);
        border-bottom: 1px dashed rgba(179, 177, 177, 0.171);
    }
    .hello{
        font-family: 'Baloo Tamma 2', cursive;
        font-family: 'Raleway', sans-serif;
        font-family: 'Recursive', sans-serif;
    }

</style>

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div>
            @if (session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif
        </div>
    </div>

    <div class="mt-5 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-2">
       
        <div>
            <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3">
                {{-- image --}}
                <div class=" col-span-1 h-32 w-32 mt-2">
                     <img src="{{dd(Auth::user()->userImage())}}" class="h-32 w-32 rounded-full object-cover" alt="">
                </div>
                {{-- name and others --}}
                <div class="col-span-2">
                    <div>
                        <span class="text-2xl font-bold"> Welcome {{Auth::user()->gender === "male" ? "Mr.": "Miss"}} {{ Auth::user()->lname }} </span>
                    </div>
                    {{-- experience --}}
                    <div class="mt-3 hello">
                        Experience
                    </div>
                    
                    {{-- button --}}
                    <div class="mt-3 flex flex-row gap-3">
                        <a href="{{ route('profile.edit', [Auth::user()->id])}}" style="text-decoration: none; color: #000">
                            <div style="background-color: #f7b728; height: 40px; width: 150px; border-radius: 3px;">
                                  <p style="text-align: center; padding-top: 6%; text-transform: uppercase" class="hello">Edit Account</p> 
                            </div>
                        </a>
                        {{-- <a href="{{ route('payment.index')}}" style="text-decoration: none; color: #000">
                            <div style="background: linear-gradient(190.57deg, #96FFC6 3.26%, #21A659 100%); height: 40px; width: 150px; border-radius: 3px;">
                                  <p style="text-align: center; padding-top: 6%; text-transform: uppercase">Payment</p> 
                            </div>
                        </a> --}}
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
                                    <img class="rounded-lg h-48 max-w-full shadow-inner object-cover" src="/storage/{{$course->image}}" alt="">
                                </div>
                                <div class="text-center">
                                    <a href="/study/lesson/{{$course->id}}" class="hello text-3xl text-black">{{$course->name}}</a> 
                                </div>
                            </div>
                       @endforeach
                     </div>
                @endif
            </div>
        </div>
        {{-- statistics --}}
        <div class="hidden sm:hidden md:block lg:block xl:block">
            <div class="font-bold text-3xl">
                {{Auth::user()->fname}}'s statistics
            </div>
            <div>
                <p class="italic hello">Payment History</p>
                <div>
                    {{-- @foreach ( dd($CheckUserSection) as $item)
                        {{$item}}
                    @endforeach --}}
                </div>
                <div class="flex flex-wrap gap-4">
                    @foreach ($payment_user as $item)
                       <div class="box2 p-4 grid grid-row-2 grid-flow-row">
                            <div>
                                <div class="flex justify-between items-baseline">
                                    <div class="font-extrabold text-2xl">
                                        {{$item->currency}}
                                        {{$item->amount *.01 }}
                                    </div>
                                    <div class="font-semibold">
                                        {{$item->created_at->diffForHumans()}}
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div>
                                <div class="text-xs text-center bg-blue-100 p-1 shadow-sm" style="border-radius: 10px 30px;">
                                    <div style="font-family: 'Baloo Tamma 2', cursive; font-family: 'Recursive', sans-serif;">
                                        Ref Id: 
                                    </div>
                                    <div class="font-bold">
                                        {{$item->reference}}
                                    </div>
                                </div><br>
                                <div class="flex justify-between">
                                    <div class="text-xs">
                                        <div style="font-family: 'Baloo Tamma 2', cursive; font-family: 'Recursive', sans-serif;">
                                            Status
                                        </div>
                                        <div class="hello text-green-700 uppercase">{{$item->status}}</div> 
                                    </div>
                                    <div class="text-xs">
                                        <div style="font-family: 'Baloo Tamma 2', cursive; font-family: 'Recursive', sans-serif;">
                                            Type 
                                        </div>
                                        <div class="hello uppercase">{{$item->channel}}</div> 
                                    </div>
                                    <div class="text-xs">
                                        <div style="font-family: 'Baloo Tamma 2', cursive; font-family: 'Recursive', sans-serif;">
                                            Course 
                                        </div>
                                        <div class="hello uppercase font-bold">HTML</div> 
                                    </div>
                                </div>
                            </div>
                       </div>
                    @endforeach
                </div>
            </div>
            <div class="mt-4">
                <p class="italic hello">Course progress</p>
                <div class="grid grid-rows-2 gap-6">
                    @foreach ($courses as $item)        
                            <div class=" box hover:shadow-lg"> 
                                <div class="p-3">
                                    <div>
                                        {{$item->name}}
                                    </div>
                                    <div class="flex flex-wrap">
                                        @foreach ($item->topics as $items)                                             
                                            <div class="pl-1 pt-3" style="width: 24%">
                                                <div class="text-center text-xs bg-blue-100 p-1 shadow-sm capitalize" style="border-radius: 10px 30px; font-family: 'Baloo Tamma 2', cursive; font-family: 'Recursive', sans-serif;">{{$items->name}}</div>
                                            </div>                                            
                                        @endforeach
                                    </div>
                                </div>
                            </div>                        
                     @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
