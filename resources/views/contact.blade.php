{{-- <style>
    .header{
        
    }

    .text{
        color: white;
        padding:  7%
    }   

    .header_text{
        text-align: center;
        margin-top: 3%;

    }

    .explore{
        letter-spacing: 3px;
        color: blue
    }

    .contact{
        margin-top: 4%;
        
    }

    .address{
        padding-top: 15%;
        height: 89%;
        background: #fff;
        border: 1px solid #d8f5ff;
        padding-left: 25%;
    }

    .subAddress {
        padding-top: 10%;
        display: flex;
        justify-content: space-between;
    }
   
    .input input, .input textarea{
        border-radius: 0%;
        border-color: #d8f5ff;
    }

    .right_side_contact_info{
        font-size: 25px;
      
    }

    
</style> --}}

@extends('layouts.app')


@section('content')

<div class="p-16">
    <div>
       
            <div class="m-5 rounded-lg shadow-md border border-gray-200 p-4">
                <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-2">
                    <div>
                        <div class="flex flex-col">
                            <div class="hidden md:block lg:block xl:block" style="height: 20rem">
                                <iframe class="lg:h-full md:h-full md:w-11/12 md:object-cover sm:w-full sm:object-cover rounded-lg lg:w-11/12 lg:object-cover"  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15884.229411362181!2d-0.21818202172911574!3d5.558517935517043!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfdf909f07f99767%3A0xe565ac46eb1c9044!2sWest%20Ridge%2C%20Accra!5e0!3m2!1sen!2sgh!4v1594392710332!5m2!1sen!2sgh" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                            </div>
                            <div class="flex justify-center">
                                <div class="md:hidden lg:hidden xl:hidden">
                                    <a href="https://goo.gl/maps/AiNVc2BUR2hAtiS17">View Location</a>
                                </div>
                            </div>
                            <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-3 xl:grid-3 mt-3">
                                <div>
                                    <div class="font-bold">Geo Address</div>
                                    <div class="text-indigo-500">addreess</div>
                                </div>
                                <div>
                                    <div class="font-bold">Postal GPS</div>
                                    <div class="text-indigo-500">addreess</div>
                                </div>
                                <div>
                                    <div class="font-bold">Post Office</div>
                                    <div class="text-indigo-500">addreess</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="grid grid-cols-11">
                            <div class="hidden md:block lg:block xl:block lg:col-span-1 ...">
                                <img src="{{asset("/images/line1.png")}}" style="height: 24rem" class="bg-gray-300" alt="">
                            </div>
                            <div class="p-3 lg:col-span-10 ...">
                                <div class="text-5xl -ml-10 md:ml-0 lg:ml-0 xl:ml-0 font-bold italic py-2">
                                    Contact Us
                                </div>
                                <div class="py-2 font-bold italic">
                                    Woggle Africa. 
                                </div>
                                <div class="text-sm">
                                    4 Techiman Center, Suite 1479 <br>
                                    Accra, ML 94111
                                </div>
                                <div class="my-6">
                                    Email: <span class="text-indigo-700">learn.woogle@gmail.com</span> 
                                </div>
                                <div class="my-6">
                                    Phone Number: <span class="text-indigo-700">(+233) 24 363 3658</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="flex flex-col justify-between">
                    <div class="md:w-1/2 lg:w-1/2 md:h-64">
                        
                    </div>
                    <div>
                        hello
                    </div>
                </div>
                <div class="p-4 md:w-1/2 flex flex-col justify-between">
                    <div class="text-4xl">
                        dsadas
                    </div>
                    <div class="text-justify">
                        sadasd
                    </div>
                    <div class="flex justify-between">
                        bkjnn --}}
                        {{-- <div>
                         <a href="/study/{{$courses->id}}" style="text-decoration: none; color: #000">
                             <div style="background-color: #f7b728; height: 40px; width: 150px; border-radius: 3px;">
                                   <p style="text-align: center; padding-top: 6%; text-transform: uppercase">Details</p> 
                             </div>
                           </a>
                        </div>
                        <div class="px-4 py-2 m-2">
                            Learners: 
                         </div>
                     </div> --}}
                </div>
            </div>
    </div> 
</div>
{{-- <div class="container-fluid header">
    
</div>

<div class="container">
    <div class="header_text">
        <div style="font-size: 30px;">Get In <span class="explore">TOUCH</span> With Us. We've Got Your Back </div> 
    </div>

    <form action="/contact" method="post">

    @csrf
        <div class="row contact justify-content-center">
    
            <div class="col-8">
                <div class="row">
                            <div class="col-6">
                                        <div class="form-group">
                                            <label for="First_Name">{{ __('First Name') }}</label>  


                                            <div class="col-md-12 input">
                                                <input id="First_Name" type="text" placeholder="Kenneth" class="form-control  @error('First_Name') is-invalid @enderror" name="First_Name" value="{{ old('First_Name') }}"  autocomplete="First_Name">
                                                
                                                @error('First_Name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            
                                        </div>
                            </div>
                            <div class="col-6">
                                        <div class="form-group">
                                            <label for="Last_name">{{ __('Last Name') }}</label>  

                                            <div class="col-md-12 input">
                                            <input id="Last_name" type="text" placeholder="Lartey" class="form-control @error('Last_name') is-invalid @enderror" name="Last_name" value="{{ old('Last_name') }}"  autocomplete="Last_name">
                                            
                                                @error('Last_name')
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
                                            <label for="email">{{ __('Email') }}</label>  


                                            <div class="col-md-12 input">
                                                <input id="email" type="email" placeholder="xxx@gmail.com" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  autocomplete="email">

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
                                            <label for="msg">{{ __('Messages') }}</label>  


                                            <div class="col-md-12 input">
                                            <textarea name="msg" id="message" placeholder="Type your message here...." cols="30" rows="10" class="form-control @error('msg') is-invalid @enderror" ></textarea>

                                            @error('msg')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            
                                        </div>
                            </div>
                </div>
                <div class="row" style="margin-left: 2%">
                    <button type="submit" class="btn btn-primary btn-md">Send Message</button>
                </div>
            </div>

            <div class="col-3">
                <div class="address">
                    <div class="row subAddress">
                       <p class="right_side_contact_info">Contact Info</p> 
                    </div>
                    <div>
                        <div class="row subAddress">
                            Addresss: <br>
                        </div>
                        <div>Lorem ipsum dolor sit amet,scsdsdvadfsv adsvasfv</div>
                    </div>
                    <div>
                        <div class="row subAddress">
                            Phone: <br>
                        </div>
                        +233 *** *** ***
                    </div>
                    <div>
                        <div class="row subAddress">
                            Email: <br>
                        </div>
                        test@test.com
                    </div>
                </div>
            </div>
        
        </div>
        </form>
    </div>
</div> --}}


@endsection