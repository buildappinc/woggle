    <style>
          .body{
        padding: 0;
        height: 800px;
        position: relative; 
    }

    .box{
        height:  264px;
        background-size: cover;
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-image: url('{{asset('images/person-writing-on-notepad-3803962.jpg')}}');
    }

    .box-2{
        width: 70vw;
        height: 75vh;  
        background: #F5F5F5;
        position: absolute;
        top: 20vh;
        left: 15vw;
    }

    .btn-primary{
        background: linear-gradient(184.38deg, #779FDD 7.68%, #406AB4 106.58%);
        border-radius: 5px;
    }
    </style>

@extends('layouts.app')

@section('title', 'Register ')

@section('content')
<div class="body">
    <div class="box flex justify-center">
        <div class="text-white text-3xl italic mt-20 font-extrabold">Welcome to Woggle Africa</div>
    </div>

    <div class="box-2 rounded-md shadow-sm p-16">
        {{-- sign up name --}}
        <div class="flex justify-center">
            <div class="text-2xl text-black font-bold">
                Sign Up
            </div>
        </div>
        {{-- register form --}}
        <div class="mt-16">
            <form method="POST" action="{{ route('register') }}">
                @csrf
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
            <div class="row">
                <div class="col-6">
                            <div class="form-group">
                                <label for="p_email">{{ __('Parent/Guardian\'s E-Mail Address') }}</label>  


                                <div class="col-md-12 input">
                                    <input id="p_email" type="email" placeholder="xxxx@gmail.com" class="form-control @error('p_email') is-invalid @enderror" name="p_email" value="{{ old('p_email') }}"  autocomplete="p_email">

                                    @error('p_email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                
                            </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label for="phone">{{ __('Parent/Guardian\'s contact') }}</label>  


                        <div class="col-md-12 input">
                            <input id="phone" type="text" placeholder="020*******" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone">

                            @error('phone')
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
                                        <label for="password">{{ __('Password') }}</label>

                                        <div class="col-md-12 input">
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                        </div>
                        <div class="col-6">
                                <div class="form-group">
                                        <label for="password-confirm">{{ __('Confirm Password') }}</label>

                                        <div class="col-md-12 input">
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                        </div>
                                </div>
                        </div>
                </div>
                <div class="row flex justify-center">
                    <div class="form-group row mb-0 ml-3 mr-0 mt-8">
                                <div class="col-md-12 ">
                                    <button type="submit" class="btn btn-primary h-12 w-56">
                                        {{ __('Sign Up') }}
                                    </button>
                                </div>
                    </div>
            </div>


            </form>
        </div>

    </div>
</div>

@endsection
