@extends('Admin.app')


@section('content')
<div>
    @if (session()->has('message'))
        <div class="alert alert-success" role="alert">
            <strong>{{ session()->get('message') }}</strong> 
        </div>
    @endif
</div>


<div class="container">
    <h2>Details for {{$course->name}}</h2>
    
    <div class="row pt-3">
        <div class="col-6">
            <img src="/storage/{{$course->image}}" style="width: 100%; height: 100%" alt="">
        </div>
        <div class="col-6">
            
            <div>
                <div><strong>Course introduction</strong></div>
                <p>
                    {{$course->introduction}}
                </p>

                <div class="pt-2"><strong>Course Details</strong></div>
                <p>
                    {{$course->description}}
                </p>

                <div>
                   <strong>Course was added {{$course->created_at->diffForHumans()}}</strong> 
                </div>
            </div>

            <div class="row ml-0 mt-2">
                <a href="/admin/courses/{{$course->id}}/edit">Edit Course</a>
                <div class="pl-4">
                    <form action="/admin/courses/{{$course->id}}" method="post">
                    
                        @method('DELETE')
                        @csrf

                        <button type="submit">Delete Course</button>
                    </form>
                </div>
            </div>


        </div>
    </div>

    <div class="pt-5 ml-0">
        <h3>Topics and Sections</h3>
        <div class="row ">
            @foreach ($course->topics as $item)
            <div class="col-2 mt-3">
                    {{$item->name}}
                    <hr>
                    <div class="row ml-0 mt-2">
                        <a href="">Edit Topic</a>

                        <div class="pl-3">
                            <form action="" method="post">
                                @method('DELETE')
                                @csrf
                                <button type="submit">Delete topic</button>
                            </form>
                        </div>
                        
                    </div>
            </div>
            <div class="col-10 mt-3">
                @foreach ($item->sections as $section)
                    <div><strong>Header</strong></div>
                    <hr>
                    <p>
                        {{$section->header}}
                        
                    </p>

                    <div><strong>Content</strong></div>
                    <hr>
                    <p>
                        {{$section->content}}
                    </p>
                    
                @endforeach
            </div>
            @endforeach 
        </div>
    </div>
    
</div>

@endsection
