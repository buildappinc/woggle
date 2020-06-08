
<style>
      .container-fluids{
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
        margin-top: 7%
    }

    .image{
        background-size: cover; 
        width:  130%;
        height: 155%;
    }

    .explore{
        letter-spacing: 3px;
        color: blue
    }

    .text{
        color: white;
        padding:  7%
    }
    
</style>

@extends('layouts.app')

@section('title', 'Register ')

@section('content')
<div class="container-fluids">
    <div class="container">
        <div class="text">
            <p>You are here:  <a href="/">Home</a> / Register</p>
        </div>
    </div>
</div>
    <div class="container">

        <div class="row">
            <div class="reg_header col-12">
                <div style="font-size: 30px">Register to <span class="explore">EXPLORE</span> </div>
            </div>
        </div><br>

        <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="row">
            <div class="col-8">
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
                <div class="row">
                        <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Register') }}
                                        </button>
                                    </div>
                        </div>
                </div> 
            </div>
            <div class="col-4">
                <img src="{{ asset('images/reg4.svg') }}" class="image" alt="">
            </div>
         </div>  
        </form>
    </div>
@endsection
