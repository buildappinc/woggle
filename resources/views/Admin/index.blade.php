@extends('Admin.app')

@section('content')

    @foreach($registeredStudents as $students)
        <li>{{$students->fname}}</li>
    @endforeach    
    sdsffsdfsad
@endsection

