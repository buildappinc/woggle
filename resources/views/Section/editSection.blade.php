<style>
    .btn-primary{
        background: linear-gradient(184.38deg, #779FDD 7.68%, #406AB4 106.58%);
        border-radius: 5px;
    }
</style>
@extends('Admin.app')

@section('content')

<div class="hello w-full h-full -mt-6" style="background: #383838;">
    <div class="container bg-white w-full h-full shadow-md p-3">
        <form action="{{route('Topic.section.edit.submit', ['topic'=>$topic->id, 'section'=>$section])}}" method="POST">
        
            @method('PATCH')

            @include('Section.include.form')
            <button type="submit" class="btn btn-primary h-12  ml-3" style="width: 97%">Save section</button>
        </form>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
        $(document).ready(function(){

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('.deleteSec').click(function(e){
            e.preventDefault()

            var delete_val = $(this).closest("div").find(".delete_value").val();
            // console.log(delete_val)

            swal({
            title: "Lesson Deletion!!!",
            text: "Note: This action cannot be reversed",
            // icon: "warning",
            buttons: ["Cancel", "Delete Anyway"],
            dangerMode: true,
            })
            .then((willDelete) => {
            if (willDelete) {

                var data = {
                    "_token": $('input[name=_token').val(),
                    "id": delete_val,
                }

                $.ajax({
                    type: "DELETE",
                    url: "/admin/topics/section/" + delete_val, 
                    data: data, 
                    success: function(response){
                        swal(response.status, {
                            icon: "success",
                        })
                        .then((result) =>{
                           location.href = "{{url('/admin')}}"
                        })
                    }
                })
            } else {
                swal("Deletion aborted");
            }
            });
        })
        })
</script>

@endsection