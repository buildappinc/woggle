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
        width: 35vw;
        height: 75vh;  
        background: #F5F5F5;
        position: absolute;
        top: 20vh;
        left: 32vw;
    }

    .font{
        font-family: 'Baloo Tamma 2', cursive;
        font-family: 'Raleway', sans-serif;
        font-family: 'Recursive', sans-serif;
    }

    .btn-primary{
        background: linear-gradient(184.38deg, #779FDD 7.68%, #406AB4 106.58%);
        border-radius: 5px;
    }
</style>

@extends('layouts.app')

@section('title', 'Login')

@section('content')

<div class="body">
    <div class="box flex justify-center">
        <div class="font text-white text-3xl italic mt-20 font-extrabold">Welcome to Woggle Africa</div>
    </div>

    <div class="box-2 rounded-md shadow-sm p-16">
        {{-- sign in name --}}
        <div class="flex justify-center">
            <div class="font text-2xl text-black font-bold">
                Sign In
            </div>
        </div>
        {{-- login form --}}
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="mt-16">
                
                <div class="row">
                    <div class="col-12">
                            <div class="form-group">
                                <label class="font" for="email">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-12 input">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                    
                            </div>
                    </div>
            </div>
            <div class="row">
                <div class="col-12">
                            <div class="form-group">
                                <label class="font" for="password" >{{ __('Password') }}</label>

                                <div class="col-md-12 input">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                
                            </div>
                </div>
            </div>

                {{-- button  --}}
                <div class="form-group row mb-0 ml-0 mr-0 mt-8">
                    <div class="col-md-12">
                        <button type="submit" class="font btn btn-primary h-12 w-full">
                            {{ __('Login') }}
                        </button>
                    </div>
                </div>
                {{-- remember me  --}}
                <div class="form-group">
                    <div class="col-md-6">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="font" class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                    </div>
                </div> 
                {{-- sign up --}}
                <div class="font mt-32 flex justify-center">
                    <div>Don't have an account? <a href="#">Sign Up</a></div>
                </div>


            </div>


        </form>
    </div>

</div>

{{-- <div class="container-fluid header">
    <div class="container">
        <div class="text">
            <p>You are here: <a href="/">Home</a> / Login</p>
        </div>
    </div>
</div>
<div class="container">

        <div class="row">
            <div class="reg_header col-12">
                <div style="font-size: 30px">On a <span class="explore">QUEST</span> for knowlegde? Login to have a <span class="explore">FEEL</span></div>
            </div>
            
        </div><br>

        <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="row">
            <div class="col-6">
                <img src="{{ asset('images/login.svg') }}" class="image" alt="">
                <div class="forgot">
                    @if (Route::has('password.request'))
                            <a class="btn btn-link " id="forgot" href="{{ route('password.request') }}">
                                    {{ __('Oops!!! Forgot My Password?') }}
                            </a>
                    @endif
                 </div>
            </div>
            <div class="col-6">
                <div class="row">
                        <div class="col-12">
                                <div class="form-group">
                                    <label for="email">{{ __('E-Mail Address') }}</label>

                                    <div class="col-md-12 input">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                        
                                </div>
                        </div>
                </div>
                <div class="row">
                    <div class="col-12">
                                <div class="form-group">
                                    <label for="password" >{{ __('Password') }}</label>

                                    <div class="col-md-12 input">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    
                                </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                       <div class="form-group">
                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
                <div class="row">
                        <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Login') }}
                                        </button>
                                    </div>
                        </div>
                </div> 
            </div>
         </div>  
        </form>
    </div> --}}
@endsection


