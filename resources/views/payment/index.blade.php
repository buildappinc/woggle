<style>
    .body{  
        padding: 0;
        height: 950px;
        position: relative; 
    }

    @media screen and (max-width: 430px){
        .body{  
            padding: 0;
            height: 230vh;
            position: relative; 
        }   
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

    @media screen and (max-width: 430px){
        .box-2{
            width: 70vw;
            height: 180vh;  
            background: #F5F5F5;
            position: absolute;
            top: 20vh;
            left: 14vw;
        }   
    }

    .btn-primary{
        background: linear-gradient(184.38deg, #779FDD 7.68%, #406AB4 106.58%);
        border-radius: 5px;
    }

    .tabContainer{
        width: 100%;
        height: 350px
    }

    .tabContainer .buttoncontainer{
        height: 15%;
    }

    .tabContainer .buttoncontainer button{
        width: 50%;
        height: 100%;
        float: left;
        border: none;
        outline: none;
        cursor: pointer;
        padding: 10px;
        font-size: 25px;
        
    }

    .tabContainer .buttoncontainer button:hover{
        background-color: #e9e9e9;
    }

    .tabContainer .tabPanel {
        max-height: 100%;
        color: #000;
        text-align: center;
        box-sizing: border-box;
        
    }
    .ImageContainer .imgDisplay{
        max-height: 100%;
        color: #000;    
        box-sizing: border-box;
        display: none;
    }
    .btn-primary{
        background: linear-gradient(184.38deg, #779FDD 7.68%, #406AB4 106.58%);
        border-radius: 5px;
    }

    .font{
        font-family: 'Baloo Tamma 2', cursive;
        font-family: 'Raleway', sans-serif;
        font-family: 'Recursive', sans-serif;
    }

</style>

@extends('lessons.app')

@section('title', 'Login')

@section('content')

<div class="body">
    <div class="box flex justify-center">
        <div class="font text-white text-3xl italic mt-20 font-extrabold">Payment and Billing </div>
    </div>

    <div class="box-2 rounded-md shadow-sm p-3">
        <div class="tabContainer">
            <div class="buttonContainer">
                <div class="font text-3xl flex justify-center text-center items-center">Credit & Debit Cards</div> 
            </div>
            <div class="tabPanel">
                <form class="w-full max-w-6xl mt-16 px-12" method="POST" action="{{route('pay', ['course'=>$course->id])}}">
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
                    
                      <div class="flex flex-wrap -mx-6 mb-6">
                            <div class="w-full md:w-1/5 lg:px-3 xl:px-3 mb-6 md:mb-0 lg:px-3 xl:px-3">
                                <label class="font block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                                    User ID
                                </label>
                                <input name="id" value="{{Auth::user()->id}}" class="@error('id') is-invalid @enderror appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-id" type="text" placeholder="Jason Statham">
                                @error('id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                            <div class="w-full md:w-2/5 lg:px-3 xl:px-3 mb-6 md:mb-0 lg:px-3 xl:px-3">
                                <label class="font block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                                    First Name
                                </label>
                                <input name="first_name" value="{{Auth::user()->fname}}" class="@error('first_name') is-invalid @enderror appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-first_name" type="text" placeholder="Jason Statham">
                                @error('first_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                            <div class="w-full md:w-2/5 lg:px-3 xl:px-3 mb-6 md:mb-0 lg:px-3 xl:px-3">
                                <label class="font block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                                    Last Name
                                </label>
                                <input name="last_name" value="{{Auth::user()->lname}}" class="@error('last_name') is-invalid @enderror appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last_name" type="text" placeholder="Jason Statham">
                                @error('last_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                      </div>
                      <div class="flex flex-wrap -mx-6 mb-2">
                            <div class="w-full md:w-1/2 lg:px-3 xl:px-3 mb-6 md:mb-0">
                                <label class="font block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-city">
                                    Email Address
                                </label>
                                <input name="email" value="{{Auth::user()->email}}" class="@error('email') is-invalid @enderror appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-city" type="email" placeholder="Albuquerque">
                                @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                            <div class="w-full md:w-1/2 lg:px-3 xl:px-3 mb-6 md:mb-0">
                                <label class="font block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-zip">
                                    Phone Number
                                </label>
                                <input name="phone" value="{{Auth::user()->phone}}" class="@error('phone') is-invalid @enderror appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-zip" type="text" placeholder="0234*****">
                                @error('phone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                            
                            <input type="hidden" name="quantity" value="100">
                            <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}"> {{-- required --}}
                            <input type="hidden" name="metadata" value="{{ json_encode($array = ['course_user' => $course->id]) }}" > {{-- For other necessary things you want to add to your payload. it is optional though --}}
                            <input type="hidden" name="currency" type="text" value="GHS">
                      </div>
                      <div class="flex flex-wrap -mx-6 mb-2 py-16">
                        <div class="w-full md:w-1/2 lg:px-3 xl:px-3 mb-6 md:mb-0">
                            <div class="font text-lg font-bold">
                                Amount: <span class="text-xl font-bolder">GHC</span><input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"  name="amount" type="text">
                            </div>
                        </div>
                                                
                        <div class="w-full md:w-1/2 lg:px-3 xl:px-3 mb-6 md:mb-0 flex-none lg:flex lg:items-end xl:flex xl:items-end">
                            <button type="submit" class="btn btn-primary h-12 lg:h-16 xl:h-16 w-full">
                                {{ __('Check Payment') }}
                            </button>
                        </div>
                        <div class="font font-bold text-center flex justify-center w-full text-2xl md:text-3xl lg:text-3xl xl:text-3xl py-8 md:py-12 xl:py-12 lg:py-12 gap-2">
                            {{$course->name}} costs  GHC {{$course->price}}
                        </div>      
                  </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection



