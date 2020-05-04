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

<div class="container-fluid">
    
   
        <div class="container">
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
        </div>
                

   

    <div class="row ml-4 btns">
       
        <div class="btn">
            <a style="text-decoration: none; color: #000" href="{{ route('topic.form')}}">
                <div class="button">
                    <p style="text-align: center; padding-top: 7%;">ADD NEW COURSE</p> 
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
