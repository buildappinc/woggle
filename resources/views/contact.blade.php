<style>
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

    
</style>

@extends('layouts.app')


@section('content')
<div class="container-fluid header">
    
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
</div>


@endsection