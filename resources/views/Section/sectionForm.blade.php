@extends('Admin.app')

@section('content')
<div class="container">
    <form action="{{ route('section.form.submit') }}" method="post">
    
        @include('Section.include.form')
        <button type="submit">Add section</button>
    </form>
</div>
@endsection