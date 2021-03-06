@extends('layouts.app')

@section('content')

<div class="container my-5">

    <form action="{{route('profile.submit', [Auth::user()->id])}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PATCH')

        <div class="mx-24">
            <div class="h-32 w-32 mt-2 mb-8 w-full flex justify-center">
                <img src="{{Auth::user()->userImage()}}" class="h-32 w-32 rounded-full object-cover" onclick="triggerImage()" id="imageDisplay" alt="">
            </div>
            <div class="flex flex-wrap -mx-3 mb-2">
                <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-city">
                        {{ __('First Name') }}
                    </label>
                    <input class="@error('fname') is-invalid @enderror appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="fname" type="text" placeholder="Kenneth"  name="fname" value="{{ old('fname') ?? Auth::user()->fname }}" required autocomplete="fname" autofocus>
                    @error('fname')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                    @enderror
                </div>
                <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-zip">
                        {{ __('Last Name') }}
                    </label>
                    <input class="@error('lname') is-invalid @enderror appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="lname" type="text" placeholder="Lartey" name="lname" value="{{ old('lname') ?? Auth::user()->lname }}" required autocomplete="lname" autofocus>
                    @error('lname')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                    @enderror
                </div>
                <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-zip">
                        {{ __('Other Name') }}
                    </label>
                    <input class="@error('oname') is-invalid @enderror appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="oname" type="text" placeholder="Abrahams"  name="oname" value="{{ old('oname') ?? Auth::user()->oname}}" required autocomplete="oname" autofocus>
                    @error('oname')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                    @enderror
                </div>
          </div>
          <div class="flex flex-wrap -mx-3 mb-2">
            <div class="w-full md:w-full px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-city">
                    {{ __('E-Mail Address') }}
                </label>
                <input class="@error('email') is-invalid @enderror appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="email" type="text" placeholder="Kenneth"  name="email" value="{{ old('email') ?? Auth::user()->email }}" required autocomplete="email" autofocus>
                @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                @enderror
            </div>
         </div>
          <div class="flex flex-wrap -mx-3 mb-2">
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                    {{ __('Gender') }}
                </label>
                <div class="relative">
                  <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="gender" id="gender" required autocomplete="gender">
                    <option value="" disabled>Select Gender</option>\
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                  </select>
                  <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                  </div>
                </div>
                @error('gender')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-zip">
                    {{ __('Add an Image') }}
                </label>
                <input class="@error('image') is-invalid @enderror appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="image" type="file" placeholder="Lartey" name="image" value="{{ old('image') ?? Auth::user()->image }}" required autocomplete="image" autofocus>
                @error('image')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                @enderror
            </div>
          </div>
      </div>
             {{-- button  --}}
        <div class="mb-4 ml-0 mr-0 mt-10">
            <div class="flex justify-center">
                <button type="submit" style="background: linear-gradient(190.57deg, #96FFC6 3.26%, #21A659 100%);" class="btn btn-primary h-12 w-1/2">
                    {{ __('Update profile') }}
                </button>
            </div>
        </div>
    </div>
    </form>

    {{-- button  --}}
    
    <div class="mb-4 mt-12 ml-0 mr-0">
        <div class="flex justify-center">
            <input type="hidden" class="delete_value" value="{{Auth::user()->id}}">
            <a class="deleteSection h-12 rounded flex justify-center text-white" style="background: linear-gradient(190.3deg, #666666 0%, #151522 100%); width: 37%; cursor: pointer" >
                <div class="flex flex-row justify-center items-center">
                    <div class="mx-2">
                        <img src="{{asset('/images/reset.png')}}" alt="">
                    </div>
                    <div class="mx-2">
                        {{ __('Delete Account') }}
                    </div>
                </div>
            </a>
        </div>
    </div>

</div>

<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script>
    function triggerImage(){
        document.querySelector("#image").click()
    }

    const image = document.querySelector("#image")

    image.addEventListener("change", function(){
        const file = this.files[0]

        console.log(file)

        if (file) {
            const reader = new FileReader();

            reader.addEventListener("load", function(){
                console.log(this)
                document.querySelector("#imageDisplay").setAttribute("src", this.result);
            })

            reader.readAsDataURL(file);
        }
    })

    $(document).ready(function(){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('.deleteSection').click(function(e){
            e.preventDefault()

            var delete_val = $(this).closest("div").find(".delete_value").val();
            console.log(delete_val)

            swal({
            title: "Delete!!!",
            text: "Do you really want to delete this account? Note: \n This action deletes this account and all it's data. It cannot be reversed",
            icon: "warning",
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
                    url: "/mycourses/" + delete_val, 
                    data: data, 
                    success: function(response){
                        swal(response.status, {
                            icon: "success",
                        })
                        .then((result) =>{
                           window.location.href = "http://www.wooglelearn.com"
                        })
                    }
                })
            } else {
                swal("Almost Lost a Woogle Account Phew. Account deletion aborted");
            }
            });
        })
})

</script>

@endsection

