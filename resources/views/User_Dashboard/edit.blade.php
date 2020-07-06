@extends('layouts.app')


@section('content')

<div class="container">

    <form action="" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PATCH')

        <div class=" rounded-full h-32 w-32 mt-2">
            <img src="{{asset('images/noPhoto.png')}}" class="h-32 w-32" alt="">
       </div>

        <div class="row">
            <div class="col-4">
                    <div class="form-group">
                            <label  for="fname">{{ __('First Name') }}</label>    

                            <div class="col-md-12 input">
                                <input id="fname" type="text" placeholder="Kenneth" class="form-control @error('name') is-invalid @enderror" name="fname" value="{{ old('fname') }}" required autocomplete="fname" autofocus>
                            
                                @error('fname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        
                    </div>
            </div>
            <div class="col-4">
                    <div class="form-group">
                            <label for="lname">{{ __('Last Name') }}</label>      
                    
                            <div class="col-md-12 input">
                                <input id="lname" type="text" placeholder="Lartey" class="form-control @error('lname') is-invalid @enderror" name="lname" value="{{ old('lname') }}" required autocomplete="lname" autofocus>

                                @error('lname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        
                    </div>
            </div>
            <div class="col-4">
                    <div class="form-group">
                            <label for="oname">{{ __('Other Name') }}</label>

                            <div class="col-md-12 input">
                                <input id="oname" type="text" placeholder="Abrahams" class="form-control @error('oname') is-invalid @enderror" name="oname" value="{{ old('oname') }}" required autocomplete="oname" autofocus>

                                @error('oname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            
                    </div>
            </div>
            </div>
            <div class="row">
                <div class="col-6">
                            <div class="form-group">
                                <label for="email">{{ __('E-Mail Address') }}</label>  


                                <div class="col-md-12 input">
                                    <input id="email" type="email" placeholder="xxxx@gmail.com" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                
                            </div>
                </div>
                <div class="col-6">
                            <div class="form-group">
                                <label for="gender">{{ __('Gender') }}</label>  

                                <div class="col-md-12 input">
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
                </div>
            </div>

    </form>

</div>
    
@endsection