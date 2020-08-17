<style>
    .body{
        margin-top: -23px;   
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
        height: 90vh;  
        background: #F5F5F5;
        position: absolute;
        top: 20vh;
        left: 14vw;
    }

    .btn-primary{
        background: linear-gradient(184.38deg, #779FDD 7.68%, #406AB4 106.58%);
        border-radius: 5px;
    }
</style>
@extends('layouts.app')

@section('title', 'Register')

@section('content')
<div class="body">
    <div class="box flex justify-center">
        <div class="text-white text-3xl italic mt-20 font-extrabold">Welcome to Woggle Africa</div>
    </div>

    <div class="box-2 rounded-md shadow-sm p-16">
        {{-- sign up name --}}
        <div class="flex justify-center">
            <div class="text-2xl text-black font-bold">
               Admin Sign Up
            </div>
        </div>
        {{-- register form --}}
        
        <form class="w-full max-w-6xl mt-16 px-12" method="POST" action="{{ route('admin.register.submit')}}">
            @csrf
            @if (Session::has('error'))
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                    <strong class="font-bold">
                        {{Session::get('error')}}
                    </strong>
                    <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                        <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
                    </span>
                </div>
            @endif
            <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                            Full Name
                        </label>
                        <input name="name" value="{{Auth::user()->name}}" class="@error('name') is-invalid @enderror appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-id" type="text" placeholder="Jason Statham">
                        @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                    </div>
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                            Job Title
                        </label>
                        <input name="job_title" value="{{Auth::user()->job_title}}" class="@error('job_title') is-invalid @enderror appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-first_name" type="text" placeholder="Jason Statham">
                        @error('job_title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                    </div>
            </div>
            <div class="flex flex-wrap -mx-3 mb-2">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-city">
                            E-Mail Address
                        </label>
                        <input name="email" value="{{Auth::user()->email}}" class="@error('email') is-invalid @enderror appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-city" type="email" placeholder="Albuquerque">
                        @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                    </div>
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
            </div>
            <div class="flex flex-wrap -mx-3 mb-2 py-16">
                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-city">
                        Password
                    </label>
                    <input name="password" class="@error('password') is-invalid @enderror appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-city" type="password" placeholder="*************">
                    @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                    @enderror
                </div>
                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-city">
                        E-Mail Address
                    </label>
                    <input name="password_confirmation" class="@error('password_confirmation') is-invalid @enderror appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-city" type="password" placeholder="************">
                    @error('password_confirmation')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                    @enderror
                </div>
                <div class="flex justify-center w-full text-3xl py-12 gap-2">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Register') }}
                        </button>
                    </div>
                </div>
                
        </div>
        </form>

    </div>

</div>


    {{-- <form action="{{ route('admin.register.submit')}}" method="post">
        @csrf

        <div class="row">
            <div class="col-8">
                <div class="row">
                        <div class="col-4">
                                <div class="form-group">
                                        <label  for="name">{{ __('Full Name') }}</label>    

                                        <div class="col-md-12 input">
                                            <input id="name" type="text" placeholder="Kenneth" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                        
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    
                                </div>
                        </div>

                        <div class="col-4">
                            <div class="form-group">
                                    <label  for="job_title">{{ __('Job Title') }}</label>    

                                    <div class="col-md-12 input">
                                        <input id="job_title" type="text" placeholder="Software ..." class="form-control @error('job_title') is-invalid @enderror" name="job_title" value="{{ old('job_title') }}" required autocomplete="job_title" autofocus>
                                    
                                        @error('job_title')
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
         </div>  
        </form>
    </div>
    </form> --}}


@endsection