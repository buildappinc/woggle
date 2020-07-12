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

<div class="container">
        <div class="flex flex-row justify-between border-l-8" style="border-color: #F9B629">
            <div class="p-2 ml-3 text-xl font-bold">
                Published Courses
            </div>
            <a href="{{ route('admin.show') }}">
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
                            <div class="w-full p-2 px-3 text-white mb-3 " style="background: linear-gradient(199.04deg, #666666 0%, #151522 100%); border-radius: 5px;">
                                Deactivate
                            </div> 
                            <div>
                                <form action="/admin/courses/{{$courses->id}}" method="post">
                                    @method('DELETE')
                                    @csrf
                                    <div class="flex flex-row w-full p-2 px-3 justify-between" style="background: linear-gradient(199.33deg, #BD001D 0%, #FF3756 100%); border-radius: 5px;">
                                        <span class="material-icons orange600">
                                            delete
                                        </span>
                                        <button type="submit" class="text-white">Delete</button>
                                    </div>
                                </form>    
                            </div> 
                        </div>
                    </div>
                    <div class="flex flex-row justify-between">
                        <div>Price: <span class="text-lg font-bold">  GHc {{$courses->price}}.00</span> </div>
                        <div>
                            <a href="">Click to edit</a>
                        </div>
                     </div>                   
                </div>
            </div>
            @endforeach  
        </div>

   
        {{-- <div class="container">
            <div class="table-responsive-md">
                <table class="table table-striped table-responsive-md table-borderless table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Course ID</th>
                            <th scope="col">Course Image</th>
                            <th scope="col">Course Name</th>
                            <th scope="col">Course Price</th>
                            <th scope="col">Time created</th>
                        </tr>
                    </thead>
                        <tbody>
                            @foreach ($course as $courses)
                                <tr>
                                    <td> {{$courses->id}}</td>
                            
                                    <td>  <img src="/storage/{{$courses->image}}" class="rounded" style="height: 50px; width: 50px" alt=""></td>
                            
                                    <td> <a href="/admin/courses/{{$courses->id}}">
                                        {{$courses->name}}
                                    </a>
                                    </td>
                            
                                    <td> GHc {{$courses->price}}</td>
                            
                                    <td>{{$courses->created_at->diffForHumans()}}</td> 
                                </tr>
                            @endforeach
                        </tbody>
                </table>
            </div>
        </div> --}}
                

   

    <div class="row ml-4 btns">
        <div class="btn">
            <a style="text-decoration: none; color: #000" href="{{ route('admin.show') }}">
                <div class="button">
                    <p style="text-align: center; padding-top: 7%;">ADD NEW COURSE</p> 
                 </div>
            </a>
        </div>
        <div class="btn">
            <a style="text-decoration: none; color: #000" href="{{ route('topic.form')}}">
                <div class="button">
                    <p style="text-align: center; padding-top: 7%;">ADD NEW TOPIC</p> 
                 </div>
            </a> 
        </div>
        <div class="btn">
            <a style="text-decoration: none; color: #000" href="{{ route('section.form') }}">
                <div class="button">
                    <p style="text-align: center; padding-top: 7%;">ADD SECTION FOR TOPIC</p> 
                 </div>
            </a>
        </div>
       
    </div>

</div>
    
@endsection
