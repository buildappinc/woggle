<style>
    .btns{
        display: flex;
        justify-content: center; 
        margin: 2%;
    }
    .button{
        border: 1px solid #020026; 
        height: 50px; 
        width: 200px; 
        border-radius: 3px ;    
    }
    
    .material-icons.orange600 { color: #fff; }
</style>
@extends('Admin.app')


@section('content')

<div>
    @if (session()->has('message'))
        <div class="alert alert-success" role="alert">
            <strong>Success</strong> {{ session()->get('message') }}
        </div>
    @endif
</div>

<div class="container py-4">
        <div class="flex flex-row justify-between border-l-8" style="border-color: #F9B629">
            <div class="p-2 ml-3 text-xl font-bold">
                Published Courses
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

        <div>
            @foreach ($course as $courses)
            
            <div class="flex flex-col md:flex-row lg:flex-row xl:flex-row mt-5 rounded-lg shadow-md border border-gray-200">
                
                <div class="md:w-2/6 lg:w-2/6 md:h-64">
                    <img src="/storage/{{$courses->image}}" class="lg:h-full md:h-full md:w-11/12 md:object-cover sm:w-full sm:object-cover rounded-lg lg:w-11/12 lg:object-cover"  alt="">
                </div>
                <div class="md:w-4/6 m-3 flex flex-col justify-between">
                    <div class="flex flex-row justify-between">
                        <div>
                            <div class="text-4xl font-bold">{{$courses->name}}</div> 
                            <div> Enrolled Student</div> 
                        </div>
                        <div>
                            <div class="w-full p-2 px-3 text-white mb-3" style="background: linear-gradient(199.04deg, #666666 0%, #151522 100%); border-radius: 5px;">
                               <button class=""> Deactivate</button>
                            </div> 
                            <div>
                                {{-- <form action="/admin/courses/{{$courses->id}}" method="post">
                                    @method('DELETE')
                                    @csrf
                                    <div class="flex flex-row w-full p-2 px-3 justify-between" style="background: linear-gradient(199.33deg, #BD001D 0%, #FF3756 100%); border-radius: 5px;">
                                        <div>
                                            <img src="{{asset('images/delete.png')}}" alt="">
                                        </div>
                                        <button type="submit" class="text-white deleteBtn">Delete</button>
                                    </div>
                                </form>     --}}
                                <div class="flex flex-row w-full p-2 px-3 justify-between" style="background: linear-gradient(199.33deg, #BD001D 0%, #FF3756 100%); border-radius: 5px;">
                                    <input type="hidden" class="deletevalue" value="{{$courses->id}}">
                                    <div>
                                        <img src="{{asset('images/delete.png')}}" alt="">
                                    </div>
                                    <button type="submit" class="text-white deleteBtn">Delete</button>
                                </div>
                            </div> 
                        </div>
                    </div>
                    <div class="flex flex-row justify-between">
                        <div>Price: <span class="text-lg font-bold">  GHc {{$courses->price}}.00</span> </div>
                        <div>
                            <a style="color: #717171;" href="/admin/courses/{{$courses->id}}/edit">Click to edit</a>
                        </div>
                     </div>                   
                </div>
            </div>
            @endforeach  
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
        $('.deleteBtn').click(function(e){
            e.preventDefault()

            var delete_val = $(this).closest("div").find(".deletevalue").val();
            // alert(delete_val)

            swal({
            title: "Are you sure?",
            text: "Note: This action cannot be reversed",
            icon: "warning",
            buttons: ["Cancel", "Delete Anyway"],
            dangerMode: true,
            })
            .then((willDelete) => {
            if (willDelete) {

                var data = {
                    "_token": $('input[name=_token').val(),
                    "id": delete_val,
                }

                $.ajax({
                    type: "DELETE",
                    url: "/admin/courses/" + delete_val, 
                    data: data, 
                    success: function(response){
                        swal(response.status, {
                              icon: "success",
                        })
                        .then((result) =>{
                            location.reload()
                        })
                    }
                })
            } else {
                swal("Course Deletion failed");
            }
            });
        })
    })
</script>
@endsection


