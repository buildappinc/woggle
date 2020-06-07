@extends('Admin.app')

@section('content')
<form action="{{ route('admin.register.submit')}}" method="post">
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

    </form>
@endsection