@extends('Admin.app')

@section('content')
    
<form action="{{ route('topic.form.submit') }}" method="post">
    @csrf

    <div class="form-group">
        <label for="topic_name">Topic Name</label>
        <input type="text" class="form-control" name="name">
    </div>

    <div class="form-group">
        <select name="course_id" id="course_id">
            @foreach ($course as $courses)
                <option value="{{ $courses->id}} ">{{ $courses->name}}</option>
            @endforeach
        </select>
    </div>


    <button type="submit">Add</button>

</form>  


@endsection
