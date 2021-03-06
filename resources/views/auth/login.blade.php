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

    @media screen and (max-width: 430px){
        .box-2{
            width: 75vw;
            height: 80vh;  
            background: #F5F5F5;
            position: absolute;
            top: 22vh;
            left: 13vw;
        }
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

{{-- normal section --}}
<div class="body hidden md:block lg:block xl:block">
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

                                <div class="w-full">
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

                            <div class="w-full">
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

{{-- mobile section --}}
<div class="body md:hidden lg:hidden xl:hidden">
    <div class="box flex justify-center">
        <div class="font text-white text-2xl italic mt-20 font-extrabold">Welcome to Woggle Africa</div>
    </div>

    <div class="box-2 rounded-md shadow-sm p-8">
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
                <div class="font mt-12 flex justify-center">
                    <div>Don't have an account? <a href="{{ route('register') }}">Sign Up</a></div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection


