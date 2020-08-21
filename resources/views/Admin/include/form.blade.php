@csrf
<div>
    <div class="relative">
        <div class="">
            <img src="{{$course->courseImage()}}" class="object-cover" style=" height: 350px; width:100%; cursor: pointer" onclick="triggerImage()" id="imageDisplay" alt="">
            <div>
                <input id="image" type="file" class="hidden  @error('image') is-invalid @enderror" name="image" value="{{ old('image') ??  $course->image }}" required autocomplete="image" autofocus>
            </div>
        </div>
      
        <div class="absolute" style="top: 20vh; left: 3vw;">
            <div class="mx-40">
                <img src="{{asset('images/camera.png')}}" class="h-10 w-10" alt="">
            </div>
            <div class="text-4xl text-white">
                Click to add/change image
            </div>
        </div>
        
          {{-- number of enrolled students --}}
        <div class="absolute" style="top: 35vh; left: 80vw">
            <div class="bg-red-400 h-40 w-40 rounded-full flex justify-center items-center text-white text-4xl font-bold" style="background: linear-gradient(225deg, #666666 0%, #151522 100%);">
                {{$course->users()->count()}}
            </div>
        </div>
    </div>

    {{-- form --}}
    <div class="container mt-10">
        <div class="px-3">
            @if ($course->name == null)
                <div class="text-5xl font-bold py-10">
                    Add New Course 
                </div>
            @else
                <div class="text-5xl font-bold py-10">
                    Edit Course 
                </div>
            @endif
            <div class="text-2xl font-bold my-4">
                Course Details
            </div>
        </div>
        <div class="w-full px-3">
            <label class="block tracking-wide text-black text-sm mb-2" for="course_name">
                {{ __('Course Name') }}
            </label>
            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500  @error('name') is-invalid @enderror" id="Course_name" type="text" placeholder="HTML" name="name" value="{{ old('name') ?? $course->name  }}" required autocomplete="name" autofocus>

            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="w-full px-3">
            <label class="block tracking-wide text-black text-sm mb-2" for="course_name">
                {{ __('Course Decription') }}
            </label>
            <textarea name="description" id="description" cols="30" rows="10" class="form-control @error('description') is-invalid @enderror"  required autocomplete="description" autofocus>{{ old('description') ??  $course->description }}</textarea>

            @error('description')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="w-full px-3 py-3">
            <label class="block tracking-wide text-black text-sm mb-2" for="course_name">
                {{ __('Course Introduction') }}
            </label>
            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500  @error('introduction') is-invalid @enderror" id="introduction" type="text" placeholder="Lorem hello just a brief text" name="introduction" value="{{ old('introduction') ?? $course->introduction  }}" required autocomplete="introduction" autofocus>

            @error('introduction')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="w-full px-3">
            <label class="block tracking-wide text-black text-sm mb-2" for="course_name">
                {{ __('Course Price') }}
            </label>
            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500  @error('price') is-invalid @enderror" id="price" type="text" placeholder="200" name="price" value="{{ old('price') ?? $course->price  }}" required autocomplete="price" autofocus>

            @error('price')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

</div>

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

</script>

