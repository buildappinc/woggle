@extends('Admin.app')

@section('content')

<div class="container">

<form action="/admin/courses/{{$course->id}}" method="post" enctype="multipart/form-data">
    
    @method('PATCH')
    @include('Admin.include.form')

    <button type="submit">Save Course</button>
    

</form>    
</div>
@endsection