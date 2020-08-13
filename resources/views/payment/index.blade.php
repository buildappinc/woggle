<style>
    .body{  
        padding: 0;
        height: 950px;
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
        display: none;
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

</style>

@extends('lessons.app')

@section('title', 'Login')

@section('content')

<div class="body">
    <div class="box flex justify-center">
        <div class="text-white text-3xl italic mt-20 font-extrabold">Payment and Billing </div>
    </div>

    <div class="box-2 rounded-md shadow-sm p-3">
        <div class="tabContainer">
            <div class="buttonContainer">
                <button onclick="showPanel(0, '#e9e9e9')">Credit & Debit Cards</button>
                <button onclick="showPanel(1, '#e9e9e9')">Cardless Payment</button>
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
                      <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full md:w-1/5 px-3 mb-6 md:mb-0 px-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                                    User ID
                                </label>
                                <input name="id" value="{{Auth::user()->id}}" class="@error('id') is-invalid @enderror appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-id" type="text" placeholder="Jason Statham">
                                @error('id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                            <div class="w-full md:w-2/5 px-3 mb-6 md:mb-0 px-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                                    First Name
                                </label>
                                <input name="first_name" value="{{Auth::user()->fname}}" class="@error('first_name') is-invalid @enderror appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-first_name" type="text" placeholder="Jason Statham">
                                @error('first_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                            <div class="w-full md:w-2/5 px-3 mb-6 md:mb-0 px-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
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
                      <div class="flex flex-wrap -mx-3 mb-2">
                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-city">
                                    Email Address
                                </label>
                                <input name="email" value="{{Auth::user()->email}}" class="@error('email') is-invalid @enderror appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-city" type="email" placeholder="Albuquerque">
                                @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-zip">
                                    Phone Number
                                </label>
                                <input name="phone" class="@error('phone') is-invalid @enderror appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-zip" type="text" placeholder="0234*****">
                                @error('phone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                             <input type="hidden" name="quantity" value="100">
                            <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}"> {{-- required --}}
                            <input type="hidden" name="metadata" value="{{ json_encode($array = ['key_name' => 'value',]) }}" > {{-- For other necessary things you want to add to your payload. it is optional though --}}
                      </div>
                      <div class="flex flex-wrap -mx-3 mb-2 py-16">
                        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                            <div class="text-lg font-bold">
                                Amount: <span class="text-xl font-bolder">GHC</span> <input class="border pl-2" name="amount" type="text">
                            </div>
                        </div>
                        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0 ">
                            <button type="submit" class="btn btn-primary h-12 w-full">
                                {{ __('Check Payment') }}
                            </button>
                        </div>
                        <div class="flex justify-center w-full text-3xl py-12 gap-2">
                            {{$course->name}} costs  GHC
                             <span class="font-bold"> {{$course->price}}</span>
                        </div>
                        
                  </div>
                </form>
            </div>
            <div class="tabPanel mt-10">
                <div class="text-xl">
                    Select Mobile Carrier
                </div>
                <div class="ImageContainer">
                    <div class="ImageSelect flex flex-row mt-6 justify-center">
                        <div class="px-2">
                            <button onclick="showText(0)"><img src="{{asset('images/1f636a94a1254e1896cb1aabcd926aa1.jpeg')}}" class="h-32 w-32 rounded-full" alt=""></button>
                        </div>
                        <div class="px-2">
                            <button onclick="showText(1)"><img src="{{asset('images/2018_AP_2018_075_hero_1.jpg')}}" class="h-32 w-32 rounded-full" alt=""></button>
                        </div>
                        <div class="px-2">
                            <button onclick="showText(2)"><img src="{{asset('images/068dcf665c0043618f4adb6e440d3014.jpeg')}}" class="h-32 w-32 rounded-full" alt=""></button>
                        </div>
                    </div>
                    <div class="imgDisplay mt-4 text-2xl font-bold">Airtel-Tigo</div>
                    <div class="imgDisplay mt-4 text-2xl font-bold">Vodafone</div>
                    <div class="imgDisplay mt-4 text-2xl font-bold">MTN</div>
                </div>
                <div>
                    <form action="" class="w-full max-w-6xl mt-8 px-12">
                        <div class="flex flex-wrap -mx-3 mb-6 justify-center">
                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                                    Phone Number
                                </label>
                                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="023*******">
                            </div>
                        </div>
                        <div class="flex flex-wrap -mx-3 mb-2 py-2">
                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                <div class="text-lg font-bold">
                                    Total Cost: <span class="text-3xl font-bolder">GHC</span>
                                </div>
                            </div>
                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0 ">
                                <button type="submit" class="btn btn-primary h-12 w-full">
                                    {{ __('Make Payment') }}
                                </button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
{{-- script --}}
<script>
    var tabButtons=document.querySelectorAll(".tabContainer .buttonContainer button");
    var tabPanels=document.querySelectorAll(".tabContainer  .tabPanel");

    var imageButtons=document.querySelectorAll(".ImageContainer .ImageSelect button");
    var imgDisplay=document.querySelectorAll(".ImageContainer  .imgDisplay");

    function showText(panelIndex,colorCode) {
        imgDisplay.forEach(function(node){
            node.style.display="none";
        });
        imgDisplay[panelIndex].style.display="block";
    }
    showText(0, "#e6e6e6");

    function showPanel(panelIndex,colorCode) {
        tabButtons.forEach(function(node){
            node.style.backgroundColor="";
            node.style.color="";
        });
        tabButtons[panelIndex].style.backgroundColor=colorCode;
        tabButtons[panelIndex].style.color="#000";
        tabPanels.forEach(function(node){
            node.style.display="none";
        });
        tabPanels[panelIndex].style.display="block";
    }
    showPanel(0, "#e6e6e6");
</script>
@endsection



