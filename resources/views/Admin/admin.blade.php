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


</style>

@extends('Admin.app')


@section('content')
<div>
    <div class="container">
       <div>
            @foreach($Admin as $admins)
              <h4>Welcome Mr {{$admins->name}} </h4>
            @endforeach
       </div>
       <div class="body">
            <!-- first row of data -->
            <div class="row">
                <div class="col-5 data">
                   <a href="{{ route('admin.details')}}">View All Students</a>
                </div>
                <div class="col-5 data">
                    <a href="{{ route('admin.show') }}">Add New Course</a>
                </div>
            </div>
            <div class="row">
               <div class="col-5 data">
                    <a href="{{ route('admin.register')}}">Register New Admin</a>
               </div>
                <div class="col-5 data">
                    <a href="{{ route('course.view') }}">View Courses</a>
                </div>
            </div>
       </div>

    </div>
</div>
@endsection
