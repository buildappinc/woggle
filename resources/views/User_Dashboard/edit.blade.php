@extends('layouts.app')


@section('content')

<div class="container">

    <form action="{{route('profile.submit', [Auth::user()->id])}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PATCH')

        <div class="mx-24">
            <div class="h-32 w-32 mt-2">
                <img src="/storage/{{Auth::user()->image}}" class="h-32 w-32 rounded-full object-cover" alt="">
            </div>
            <div class="form-group">
                    <label  for="fname">{{ __('First Name') }}</label>    

                    <div class="">
                    <input id="fname" type="text" placeholder="Kenneth" class="form-control @error('name') is-invalid @enderror" name="fname" value="{{ old('fname') ?? Auth::user()->fname }}" required autocomplete="fname" autofocus>
                                
                    @error('fname')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>                
            </div>
                    
            <div class="form-group">
                <label for="lname">{{ __('Last Name') }}</label>      
                        
                <div class="">
                    <input id="lname" type="text" placeholder="Lartey" class="form-control @error('lname') is-invalid @enderror" name="lname" value="{{ old('lname') ?? Auth::user()->lname }}" required autocomplete="lname" autofocus>

                    @error('lname')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>                
            </div>    
                
            <div class="form-group">
                <label for="oname">{{ __('Other Name') }}</label>

                <div class="">
                    <input id="oname" type="text" placeholder="Abrahams" class="form-control @error('oname') is-invalid @enderror" name="oname" value="{{ old('oname') ?? Auth::user()->oname}}" required autocomplete="oname" autofocus>

                    @error('oname')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>                    
            </div>
                
            <div class="form-group">
                <label for="email">{{ __('E-Mail Address') }}</label>  

                <div class="">
                    <input id="email" type="email" placeholder="xxxx@gmail.com" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') ?? Auth::user()->email }}" required autocomplete="email">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>                        
            </div>
                
            <div class="form-group">
                <label for="gender">{{ __('Gender') }}</label>  

                <div class="">
                    <select name="gender" id="gender" class="form-control" required autocomplete="gender">
                        <option value="" disabled>Select Gender</option>\
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>

                    @error('gender')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>                                
            </div>
            <div class="form-group">
                <label for="course_image">{{ __('Add an Image') }}</label>
            
                <div class="">
                    <input id="image" type="file" class="form-control-file @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}" required autocomplete="image" autofocus>
            
                    @error('image')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                    
            </div>
             {{-- button  --}}
             <div class="form-group row mb-0 ml-0 mr-0 mt-8">
                <div class="col-md-12">
                    <button type="submit" style="background: linear-gradient(190.57deg, #96FFC6 3.26%, #21A659 100%);" class="btn btn-primary h-12 w-full">
                        {{ __('Login') }}
                    </button>
                </div>
            </div>
        </div>
    </form>

</div>
    
@endsection