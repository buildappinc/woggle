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
    <form action="{{ route('section.form.submit') }}" method="post">
    
        @include('Section.include.form')
        <button type="submit">Add section</button>
    </form>
</div>
@endsection