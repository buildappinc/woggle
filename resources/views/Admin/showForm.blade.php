<style>
    .btn-primary{
        background: linear-gradient(184.38deg, #779FDD 7.68%, #406AB4 106.58%);
        border-radius: 5px;
    }
</style>
@extends('Admin.app')

@section('content')

<div class="" style="margin-top: -23px;">
    

    <form action="{{ route('admin.store')}}" method="post" enctype="multipart/form-data">
        

        @include('Admin.include.form')

        <div class="container w-11/12 mx-10 py-6 ">
            <button type="submit" class="btn btn-primary h-12  ml-3" style="width: 97%">Create</button>
        </div>
    </form>   

    <div class="container">
        <div class="text-2xl font-bold mx-3">
            Course content
            
        </div>
    </div>
</div>
@endsection