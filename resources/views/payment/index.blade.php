<style>
    .body{
        margin-top: -23px;   
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

    .tabContainer .tabPanel{
        max-height: 100%;
        color: #000;
        text-align: center;
        box-sizing: border-box;
        display: none;
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
        <div class="text-white text-3xl italic mt-20 font-extrabold">Payment and Billing </div>
    </div>

    <div class="box-2 rounded-md shadow-sm p-3">
        <div class="tabContainer">
            <div class="buttonContainer">
                <button onclick="showPanel(0, '#e9e9e9')">Credit & Debit Cards</button>
                <button onclick="showPanel(1, '#e9e9e9')">Cardless Payment</button>
            </div>
            <div class="tabPanel">
                <form class="w-full max-w-6xl mt-16 px-12">
                     <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                                    Card Number
                                </label>
                                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="Jane">
                            </div>
                            <div class="w-full md:w-1/4 px-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                                    Expiry Date
                                </label>
                                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="Doe">
                            </div>
                            <div class="w-full md:w-1/4 px-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-zip">
                                    Phone Number
                                </label>
                                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-zip" type="text" placeholder="90210">
                            </div>
                      </div>
                      <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full px-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                                    Card Holder Name
                                </label>
                                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-password" type="password" placeholder="******************">
                            </div>
                      </div>
                      <div class="flex flex-wrap -mx-3 mb-2">
                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-city">
                                    Address
                                </label>
                                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-city" type="text" placeholder="Albuquerque">
                            </div>
                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-zip">
                                    Phone Number
                                </label>
                                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-zip" type="text" placeholder="90210">
                            </div>
                      </div>
                      <div class="flex flex-wrap -mx-3 mb-2 py-16">
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
                            <a href=""><img src="{{asset('images/1f636a94a1254e1896cb1aabcd926aa1.jpeg')}}" class="h-32 w-32 rounded-full" alt=""></a>
                        </div>
                        <div class="px-2">
                            <a href=""><img src="{{asset('images/2018_AP_2018_075_hero_1.jpg')}}" class="h-32 w-32 rounded-full" alt=""></a>
                        </div>
                        <div class="px-2">
                            <a href=""><img src="{{asset('images/068dcf665c0043618f4adb6e440d3014.jpeg')}}" class="h-32 w-32 rounded-full" alt=""></a>
                        </div>
                    </div>
                    <div class="imgDisplay">Airtel-Tigo</div>
                    <div class="imgDisplay">Vodafone</div>
                    <div class="imgDisplay">MTN</div>
                </div>
                <div>
                    <form action="" class="w-full max-w-6xl mt-8 px-12">
                        <div class="flex flex-wrap -mx-3 mb-6 justify-center">
                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                                    Phone Number
                                </label>
                                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="Jane">
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



