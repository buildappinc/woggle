@extends('Admin.app')

@section('content')
<div class="container">
    <form action="/admin/topics/section/{{$section->id}}" method="POST">
    
        @method('PATCH')

        @include('Section.include.form')
        <button type="submit">Save section</button>
    </form>
</div>
@endsection