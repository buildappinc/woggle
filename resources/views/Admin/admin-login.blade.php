
<style>
    .container-fluid{
        margin-top: -23;
        padding: 0px;
        height: 200px;
        width: 100%;
        background-size: cover;
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-image: url('{{asset('images/image.jpg')}}');
    }

    .input input, label{
       transition: all 0.2s;
       touch-action: manipulation
    }

    .input{
        display: flex;
        flex-flow: column-reverse;
        margin-bottom: 1em;
        
    }

    .input input{
        font-size:  1,5em;
        border: 0;
        box-shadow: none;
        border-bottom: 1px solid #ccc;
        font-family: inherit;
        -webkit-appearance: none;
        border-radius: 0;
        padding: 0;
        cursor: text
    }

    .input select{
        border: 0;
        box-shadow: none;
        border-bottom: 1px solid #ccc;
        border-radius: 0;
    }

    
    .input input:focus{
        outline: 0;
        box-shadow: none;
        border-bottom: 1px solid red;
        transition: ease-in 1s;
    }

    .reg_header{
        margin-top: 5%
    }

    .image{
        background-size: cover; 
        width:  100%;
        height: 155%;
    }

    .explore{
        letter-spacing: 3px;
        color:  rgba(255, 0, 64, 0.986)
    }
    .forgot{
        margin-left: 30%;
        color: red
    }
    .btn btn-link{
        color: red
    }

    #forgot{
        color: red;
    }

    #forgot:hover{
        color: blue;
        transition: ease-in 1s;

    }

    .text{
        color: white;
        padding:  7%
    }
    
</style>
@extends('layouts.app')

@section('title', 'Login')

@section('content')
<div class="container-fluid">
    <div class="container">
        <div class="text">
            <p>You are here: <a href="/">Home</a> / Admin-Login</p>
        </div>
    </div>
</div>
<div class="container">

        <div class="row">
            <div class="reg_header col-12">
                <div style="font-size: 30px">On a <span class="explore">QUEST</span> for knowlegde? Login to have a <span class="explore">FEEL</span></div>
            </div>
            
        </div><br>

        <form method="POST" action="/admin/login">
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
    </div>
@endsection

