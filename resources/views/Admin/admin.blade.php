<style>
    .left_side{
        width: 20%;
        background-color: red;
        padding-top: 0;
        margin-top: -23;
        height: 100vh
    }

    .text{
        font-family: Montserrat, Georgia, "Times New Roman", Times, serif;
        font-weight: 300px;
        line-height: 25px;
        font-size: 14px
    }

    .body{
        margin-top: 10%;
        margin-left: 4%;

    }

    .data{
        margin-top:3%;
        height: 150px; 
        width: 100%;
        margin-left:3%;
        background: red;
    }

    .material-icons.white{
        color: #fff
    }

    .material-icons.md-36{
        font-size: 36px;
    }


</style>

@extends('Admin.app')


@section('content')
<div>
    <div class="container-fluid">
         <!-- Modal -->
         <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                 <h5 class="modal-title" id="exampleModalLongTitle">Notifications</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                   @foreach ($activeNotification as $item)
                       <a href="">
                           <div class="w-full h-20 bg-gray-400 rounded">{{$item->data}}</div>
                       </a>
                   @endforeach
                </div>
            </div>
            </div>
        </div>

       <div class="mx-12">
            @foreach($Admin as $admins)
              <h4>Welcome Mr {{$admins->name}} </h4>
            @endforeach
       </div>
       {{-- content --}}
       <div class="mx-12">
           <div class="py-4">
               Overview
           </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 gap-6">
                <div class="h-48 shadow-md rounded-lg border border-grap-100 p-12 grid grid-cols-1 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 gap-2">
                    <div class="col-span-1 ... flex items-center justify-center">
                        <div class="h-16 w-16 rounded-circle flex items-center justify-center" style="background-color: #4A89F9">
                            <div>
                                <img src="{{asset('/images/users.png')}}" alt="" class="h-8 w-8 ">
                            </div>
                        </div>
                    </div>
                    <div class="col-span-2 ... mt-2">
                        <div class="text-3xl">Number</div>
                        <div class="text-xs">New learners this week</div>
                    </div>
                </div>
                <div class="h-48 shadow-md rounded-lg border border-grap-100 p-12 grid grid-cols-1 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 gap-2">
                    <div class="col-span-1 ... flex items-center justify-center">
                        <div class="h-16 w-16 rounded-circle flex items-center justify-center" style="background-color: #FFB547">
                            <span class="material-icons white md-36">
                                access_time
                            </span>
                        </div>
                    </div>
                    <div class="col-span-2 ... mt-2">
                        <div class="text-3xl">Number</div>
                        <div class="text-xs">Minutes engaged this week</div>
                    </div>
                </div>
                <div class="h-48 shadow-md rounded-lg border border-grap-100 p-12 grid grid-cols-1 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 gap-2">
                    <div class="col-span-1 ... flex items-center justify-center">
                        <div class="h-16 w-16 rounded-circle flex items-center justify-center" style="background-color: #04D00C">
                            <div>
                                <img src="{{asset('/images/Vector.png')}}" class="h-8 w-8 ">
                            </div>
                        </div>
                    </div>
                    <div class="col-span-2 ... mt-2">
                        <div class="text-3xl">{{$course->count()}}</div>
                        <div class="text-xs">Available Courses</div>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-2 gap-8 my-12">
                <div class="h-auto shadow-md rounded-lg border border-grap-100 p-4">
                    <div class="flex flex-row justify-between">
                        <div>
                            <div class="text-xl font-bold">Courses</div>
                            <div class="text-xs">Recently Added</div>
                        </div>
                       <a class="text-black" href="{{ route('admin.show') }}">
                            <div class="bg-gray-200 h-10 w-40 flex flex-row items-center justify-around rounded-full py-2 px-4 hover:shadow-lg">
                                <div>
                                    <span class="material-icons md-18">
                                        add
                                    </span>
                                </div> 
                                <div>Add New</div> 
                            </div>
                        </a>  
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-2 gap-6 p-3">
                        @foreach ($courses as $item)
                            {{-- <div class="w-full p-4 flex flex-col justify-around col-gap-6 ">
                                <a class="text-black" href="/admin/courses/{{$item->id}}/edit">
                                    <div class="w-11/12 h-16 bg-gray-200 rounded-lg flex flex-row justify-between px-4 p-4 hover:shadow-lg">
                                        <div>{{$item->name}}</div>
                                        <div>{{$item->price}}</div>
                                    </div>
                                </a>
                            </div> --}}
                            <a class="text-black" href="/admin/courses/{{$item->id}}/edit">
                                <div class="w-full h-64 bg-gray-200 relative" style=" -webkit-box-shadow: -1px 7px 56px -28px rgba(61,10,10,1); -moz-box-shadow: -1px 7px 56px -28px rgba(61,10,10,1); box-shadow: -1px 7px 56px -28px rgba(61,10,10,1);">
                                    <div class="h-full">
                                        <img src="{{asset('images/courses/'.$item->image)}}"  class="lg:h-full md:h-full md:object-cover sm:w-full sm:object-cover lg:object-cover" alt="">
                                    </div>
                                    <div style="position: absolute; top: 80%; left: 34%">
                                        <div class="text-3xl font-bold">{{$item->name}}</div>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    </div>
                    <div class="flex justify-center items-center">
                        <a class="text-black" href="{{ route('course.view') }}">
                            <div class="text-xl">see all</div>
                        </a>
                    </div>
                </div>
                <div class="h-auto shadow-md rounded-lg border border-grap-100">
                    <div class="p-4 text-2xl font-bold">
                        Activity
                    </div>
                    <div class="w-full p-4 flex flex-col justify-around col-gap-6 ">
                        <a class="text-black" href="{{ route('admin.register')}}">
                            <div class="w-11/12 h-16 bg-gray-200 rounded-lg flex flex-row justify-between px-4 p-4 hover:shadow-lg">
                                <div>hello</div>
                                <div>Register New Admin</div>
                            </div>
                        </a>
                    </div>
                    <div class="w-full  p-4 flex flex-col justify-around col-gap-6 ">
                        <a class="text-black" href="{{ route('admin.details')}}">
                            <div class="w-11/12 h-16 bg-gray-200 rounded-lg flex flex-row justify-between px-4 p-4 hover:shadow-lg">
                                <div>hello</div>
                                <div>View All Students</div>
                            </div>
                        </a>
                    </div>
                    <div class="w-full  p-4 flex flex-col justify-around col-gap-6 ">
                        <a class="text-black" href="{{ route('course.view') }}">
                            <div class="w-11/12 h-16 bg-gray-200 rounded-lg flex flex-row justify-between px-4 p-4 hover:shadow-lg">
                                <div>hello</div>
                                <div>View All Courses</div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
       </div>

    </div>
</div>
@endsection
