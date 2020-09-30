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
@extends('lessons.app')

@section('content')
        <div class="hello w-full" style="background: #383838;">
            
            <div class="container bg-white w-full">
                {{-- header --}}
                <div class="font flex justify-center text-4xl font-bold pt-5">
                    {{$course->name}}
                </div>
                
                <div class="p-5 flex flex-no-wrap flex-col sm:flex-no-wrap sm:flex-row md:flex-wrap md:flex-row lg:flex-wrap lg:flex-row xl:flex-wrap xl:flex-row">
                   
                    @foreach ($course->topics as $topic)
                        <div class="h-48 shadow-md rounded-lg m-2 border border-gray-200 p-3 flex flex-col justify-between" style="width: 31%; background: #E1E1E1">
                            <div class="flex flex-row justify-between">
                                <div class="font ">
                                    {{$topic->name}}
                                </div>
                                <div class="bg-red-400 rounded-full w-8 h-8 flex justify-center items-center" style="background: linear-gradient(225deg, #666666 0%, #151522 100%);">
                                    <div class="font text-white">
                                        {{$topic->id}}
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-row justify-between">
                                <div class="rounded-full py-1 px-4 text-white" style="background: linear-gradient(225deg, #666666 0%, #151522 100%); color: #fff">
                                    <a href="{{ route('lesson.content', ['course'=>$course->id, 'topic'=>$topic->id])}}" class="font text-white">Begin</a>
                                </div>
                                <div class="text_font items-baseline mt-2">
                                    @if ($topic->sections()->count() <= 1)
                                        {{$topic->sections()->count()}} lesson
                                    @else
                                        {{$topic->sections()->count()}} lessons 
                                    @endif 
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                {{-- deleting course from user profile --}}
                <div class="p-5">
                    <input type="hidden" class="course_value" value="{{$course->id}}">
                    <a href="" id="userCourseDeletion" class="text-white">
                        <div class="font w-full flex justify-center h-10 items-center rounded hover:shadow" style="background: #ef4538; cursor: pointer">
                        Delete Course from this account
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

        <script>
            $(document).ready(function(){
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    $('#userCourseDeletion').click(function(e){
                        e.preventDefault()

                        var course_value = $(this).closest("div").find(".course_value").val();
                        console.log(course_value)

                        swal({
                        title: "Delete!!!",
                        text: "Do you really want to delete this course? \n Note: This action deletes this course and all it's data. It cannot be reversed",
                        icon: "warning",
                        buttons: ["Cancel", "Delete Anyway"],
                        dangerMode: true,
                        })
                        .then((willDelete) => {
                        if (willDelete) {

                            var data = {
                                "_token": $('input[name=_token').val(),
                                "id": course_value,
                            }

                            $.ajax({
                                type: "POST",
                                url: "/study/lesson/" + course_value, 
                                data: data, 
                                success: function(response){
                                    console.log(response)
                                    swal(response.status, {
                                        icon: "success",
                                    })
                                    .then((result) =>{
                                        console.log(result)
                                     window.location.href = "http://www.wooglelearn.com/mycourses"
                                    })
                                }
                            })
                        } else {
                            swal("Course deletion aborted");
                        }
                        });
                    })
            })
        </script>
@endsection

