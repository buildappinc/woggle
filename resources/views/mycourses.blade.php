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

    .font{
        font-family: 'Baloo Tamma 2', cursive; 
        font-family: 'Recursive', sans-serif;
    }

</style>

@extends('layouts.app')

@section('content')
<div class="container my-4">
    <div class="row">
        <div>
            @if (session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif
        </div>
        <div>
            @if (session('warning'))
                <div class="alert alert-warning" role="alert">
                    {{ session('warning') }}
                </div>
            @endif
        </div>
       
    </div>

    <div class="mt-5 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-2">
        <div>
            <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3">
                {{-- image --}}
                <div class=" col-span-1 h-32 w-32 mt-2">
                     <img src="{{Auth::user()->userImage()}}" class="h-32 w-32 rounded-full object-cover" alt="">
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
                    </div>

                </div>
            </div>
            
            <div class=" mt-24">
                    <div class="text-3xl font-bold">
                        Subscribed Courses
                    </div>

                    @if (Auth::user()->courses->count() <= 0 )
                        <div class="md:mt-8 lg:mt-8 xl:mt-8">
                            <div class="text-center flex justify-center items-center h-32 w-11/12 rounded hello" style="border:1px dashed #000000">
                                Opps No Subscribed Course!!! <a href="/study" style="color: #f7b728"> Check Out Available Courses</a> 
                            </div>
                        </div>
                    @else
                    <div class="flex flex-no-wrap flex-col lg:flex-wrap lg:flex-row md:flex-wrap md:flex-row mt-4 pt-3">
                        @foreach (Auth::user()->courses as $course)
                                <div class="w-2/5 pl-4 pt-4">
                                    <div class="h-48 w-48 shadow-md">
                                        <img class="rounded-lg h-48 max-w-full shadow-inner object-cover" src="images/courses/{{$course->image}}" alt="">
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
        <div class="hidden md:block lg:block xl:block">
            <div class="font-bold text-3xl">
                {{Auth::user()->fname}}'s statistics
            </div>
            <div>
                <p class="italic hello">Payment History</p>
                @if (Auth::user()->payments->count() <= 0)
                <div class="md:mt-8 lg:mt-8 xl:mt-8">
                    <div class="text-center flex justify-center items-center h-32 w-full rounded hello" style="border:1px dashed #000000">
                        No payments made yet 
                    </div>
                </div>
                @else
                <div class="flex flex-wrap gap-4">
                    @foreach ($payment_user as $item)                       
                    <div class="box2 p-4 grid grid-row-2 grid-flow-row">
                        <div>
                            <div class="flex justify-between items-baseline">
                                <div class="font font-extrabold text-2xl">
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
                                    <div class="hello uppercase font-bold">
                                    {{$item->course}}
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                @endif
            </div>
            
            <div class="mt-4">
                <p class="italic hello">Course details</p>
                @if (Auth::user()->courses->count() <= 0 )
                    <div class="md:mt-8 lg:mt-8 xl:mt-8">
                        <div class="text-center flex justify-center items-center h-32 w-full rounded hello" style="border:1px dashed #000000">
                            No courses yet
                        </div>
                    </div>
                @else
                    <div class="grid grid-rows-1 gap-6">
                        @foreach ($courses as $item)        
                                    <div class=" box hover:shadow-lg"> 
                                        <div class="p-3">
                                            <div class="hello text-xl">
                                                {{$item->name}}
                                            </div>
                                            <div class="flex flex-wrap">
                                                @foreach ($item->topics as $items)                                             
                                                    <div class="pl-1 pt-3" style="width: 24%">
                                                        <a href="{{ route('lesson.content', ['course'=>$item->id, 'topic'=>$items->id]) }}" class="text-black">
                                                            <div class="font text-center text-xs bg-blue-100 p-1 shadow-sm capitalize" style="border-radius: 10px 30px;">{{$items->name}}</div>
                                                        </a>                                                                   
                                                    </div>     
                                                @endforeach
                                            </div>
                                        </div>
                                        <div class="flex items-center justify-center">
                                            <div>
                                                <input type="hidden" id="course_id" value="{{$item->id}}">
                                                <a class="course_completion">
                                                    <p class="font text-center capitalize bg-blue-300 rounded p-2" style="font-size: 0.82rem; color:#000; background-color: #f7b728; cursor: pointer">Take Quiz</p>
                                                </a>
                                            </div>
                                        </div>
                                    </div>    
                            
                        @endforeach
                    </div>
                @endif
            </div>
            <div class="mt-4">
                <p class="italic hello">Quiz/Exam Badges</p>
                @if (Auth::user()->results->count() <= 0)
                    <div class="md:mt-8 lg:mt-8 xl:mt-8">
                        <div class="text-center flex justify-center items-center h-32 w-full rounded hello" style="border:1px dashed #000000">
                            No Badge yet
                        </div>
                    </div>
                @else
                <div>
                    @foreach (Auth::user()->results as $item)
                        @if ($item->mark < 80 )
                            <div class="box mb-4">
                                <div class="grid grid-rows-2 grid-flow-col p-3">
                                    {{-- badge header --}}
                                    <div class="grid grid-cols-4">
                                        <div class="col-span-1 flex justify-center">
                                        <div class="flex justify-center items-center" style="height: 4rem; width: 4rem; border-radius:50px; background: #000">
                                            <img src="{{asset('svg/logo1.svg')}}" style="height: 3rem; width: 3rem" alt="">
                                        </div>
                                        </div>
                                        <div class="col-span-3">
                                            <div class="text-2xl hello uppercase">Oooopssss</div>
                                            <div class="text-xs font">Nice try!! {{Auth::user()->gender === "male" ? "Mr.": "Miss"}} {{ Auth::user()->lname }}, Scored <span style="color: red">below</span> the <span style="color: red">80% </span>pass mark unfortunately</div>
                                        </div>
                                    </div>
                                    {{-- course --}}
                                    <div class="grid grid-cols-4 flex justify-center">
                                        <div class="col-span-3 pl-4 md:pl-2">
                                            <div class="text-xl hello">{{$item->course}}</div>
                                            <div class="font">Can do better. Try again</div>
                                            <div class="font text-red-700">Score: {{$item->mark}}%</div>
                                        </div>
                                        <div class="col-span-1 mt-5">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @else
                            <div class="box mb-4">
                                <div class="grid grid-rows-2 grid-flow-col p-3">
                                    {{-- badge header --}}
                                    <div class="grid grid-cols-4">
                                        <div class="col-span-1 flex justify-center">
                                        <div class="flex justify-center items-center" style="height: 4rem; width: 4rem; border-radius:50px; background: #000">
                                            <img src="{{asset('svg/logo1.svg')}}" style="height: 3rem; width: 3rem" alt="">
                                        </div>
                                        </div>
                                        <div class="col-span-3">
                                            <div class="text-2xl hello uppercase">badge of Honour</div>
                                            <div class="text-xs font">Nice work {{Auth::user()->gender === "male" ? "Mr.": "Miss"}} {{ Auth::user()->lname }}, Scored above the 80% pass mark</div>
                                        </div>
                                    </div>
                                    {{-- course --}}
                                    <div class="grid grid-cols-4 flex justify-center">
                                        <div class="col-span-3 pl-4 md:pl-2">
                                            <div class="text-xl hello">{{$item->course}}</div>
                                            <div class="font">Passed: Woogle Assessment</div>
                                            <div class="font text-green-700">Score: {{$item->mark}}%</div>
                                        </div>
                                        <div class="col-span-1 mt-5">
                                            <a href="">
                                                <div class="font text-center capitalize bg-blue-300 rounded p-2" style="font-size: 0.82rem; color:#fff; background: #406AB4; cursor: pointer">
                                                    Certificate
                                                </div>
                                                
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
                @endif
            </div>
        </div>
    </div>
</div>

{{-- scriping section  --}}
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script>
    $(document).ready(function(){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(".course_completion").click(function(e){
            e.preventDefault()

            var course_id = $(this).closest('div').find('#course_id').val();
            console.log(course_id)
            
            swal({
                title: "Irreversible Action",
                text: "Are you very certain you have completed and understood every aspect of this course. \n NB: This action cannot be reversed",
                icon: "warning",
                buttons: true,
                dangerMode: true,
                })
                .then((willDelete) => {
                if (willDelete) {
                    $.get('mycourses/'+ course_id +'/quiz', function(data){
                        window.location.href = "http://www.wooglelearn.com/mycourses/" + course_id + "/quiz"
                    })
                } else {
                    swal("Phew you almost caused yourself a certificate. Prepare very hard");
                }
            });
        })
    })
</script>
@endsection
