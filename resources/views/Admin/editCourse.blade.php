<style>
    .btn-primary{
        background: linear-gradient(184.38deg, #779FDD 7.68%, #406AB4 106.58%);
        border-radius: 5px;
    }
    /*Global*/
html, body {
    width: 100%;
    margin: 0;
    padding: 0;
    font-family: helvetica, sans-serif;
}

/*Func*/

.multi-level, .item ul, .nav input[type="checkbox"] {
    display: none;
}
#menu:checked ~ .multi-level, .item input:checked ~ ul {
    display: block;
}

/*Arrow*/

.arrow {
    width: 12px;
    height: 12px;
    vertical-align: middle;
    float: left;
    z-index: 0;
    margin: 17px 1em 0 2em;
}
.item input + .arrow {
    transform: rotate(-90deg);
    transition: 0.1s;
}
.item input:checked + .arrow {
    transform: rotate(0deg);
    transition: 0.1s;
}



/*Styles*/

label:hover {
    cursor: pointer;
}
label {
    width: 100%;
    display: block;
    z-index: 3;
    position: relative;
}
.nav {
    width: 100%;
    background-color: white;
    overflow-x: hidden;
    border-bottom: 1px solid #CFD8DC;
}

#nav-icon {
    font-size: 28px;
    line-height: 50px;
    padding-left: 1em;
    color: white;
    background-color: #F44336;
}

.nav ul, .nav li, label {
    line-height: 50px;
    margin: 0;
    padding: 0 2em;
    list-style: none;
    text-decoration: none;
    color: #90A4AE;
    font-weight: 100;
    width: 100%;
}
.item ul {
    padding: 0 0.25em;
}
.nav li a {
    line-height: 50px;
    margin: 0;
    padding: 0 4em;
    list-style: none;
    text-decoration: none;
    color: #90A4AE;
    font-weight: 100;
}


</style>
@extends('Admin.app')

@section('content')

<div class="" style="margin-top: -23px;">

<form action="/admin/courses/{{$course->id}}" method="post" enctype="multipart/form-data">
    
    @method('PATCH')
    @include('Admin.include.form')

    <div  class="container w-11/12 mx-10 py-6 ">
        <button type="submit" class="btn btn-primary h-12  ml-3" style="width: 97%">Save Course</button>
    </div>
    
    <div class="container">
        <div class="text-2xl font-bold mx-3">
            Course content
        </div>

        {{-- adding section and lessons for courses  --}}
        <div>
            {{-- sections display  --}}
            <div>
                <div class="col-md-12 input">
                    <select name="course_id" class="form-control" id="course_id">
                            <option value="">hello</option>
                            <option value="">hello</option>
                            <option value="">hello</option>
                    </select>
                </div>

                <div class="col-md-12 input mt-4">
                    <select name="course_id" class="form-control" id="course_id">
                            <option value="">hello</option>
                            <option value="">hello</option>
                            <option value="">hello</option>
                    </select>
                </div>
                


               @foreach ($course->topics as $topic)
               <div class="item">
                    <input type="checkbox" id="A"/>
                    <img src="images/Arrow.png" class="arrow"><label for="A"> Section: {{$topic->name}}</label>
                    
                    <ul>
                        @foreach ($topic->sections as $section)
                        <li><a href="#">{{$section->header}}</a></li>
                        @endforeach
                        <div class="mt-6">
                            <a href="{{ route('Course.topic', ['course' => $course->id])}}">
                                <div class=" h-10 mx-3 py-6 flex flex-row items-center border-dashed border-2 rounded-md" style=" background: #F7F7F7; width:97%; border-color: #2b2b2b">
                                    <div>
                                        <span class="material-icons md-18">
                                            add
                                        </span>
                                    </div> 
                                    <div>Add New Section</div> 
                                </div>
                            </a>
                        </div>
                    </ul>
                </div>
               {{-- <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Section: {{$topic->name}}
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  @foreach ($topic->sections as $section)
                    <a class="dropdown-item" href="#">{{$section->header}}</a>
                  @endforeach
                  
                </div>
              </div> --}}
               @endforeach
            </div>

            {{-- section input  --}}
            <div class="mt-6">
                <a href="{{ route('Course.topic', ['course' => $course->id])}}">
                    <div class=" h-10 mx-3 py-6 flex flex-row items-center border-dashed border-2 rounded-md" style=" background: #F7F7F7; width:97%; border-color: #2b2b2b">
                        <div>
                            <span class="material-icons md-18">
                                add
                            </span>
                        </div> 
                        <div>Add New Section</div> 
                    </div>
                </a>
            </div>
        </div>
    </div>

</form>    
</div>
@endsection