@extends('Admin.app')

@section('content')

<div class="container">

<form action="{{ route('admin.store')}}" method="post" enctype="multipart/form-data">
    

    @include('Admin.include.form')

    <button type="submit">Add</button>

</form>    
</div>
@endsection