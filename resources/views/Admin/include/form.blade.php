<div class="row">
    <div class="form-group col-6">
        <label for="course_name">{{ __('Course Name') }}</label>

        <div class="col-md-12 input">
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') ?? $course->name  }}" required autocomplete="name" autofocus>

            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
            
    </div>

    <div class="form-group col-6">
        <label for="course_price">{{ __('Course Price') }}</label>

        <div class="col-md-12 input">
            <input id="price" type="text" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ old('price') ??  $course->price}}" required autocomplete="price" autofocus>

            @error('price')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
            
    </div>
</div>


<div class="form-group">
    <label for="introduction">{{ __('Course Introduction') }}</label>

    <div class="col-md-12 input">
        <textarea name="introduction" id="introduction" cols="10" rows="2" class="form-control @error('introduction') is-invalid @enderror" required autocomplete="introduction" autofocus>{{ old('introduction') ??  $course->introduction }}</textarea>

        @error('introduction')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
        
</div>

<div class="form-group">
    <label for="course_details">{{ __('Course Details') }}</label>

    <div class="col-md-12 input">
        <textarea name="description" id="description" cols="30" rows="10" class="form-control @error('description') is-invalid @enderror"  required autocomplete="description" autofocus>{{ old('description') ??  $course->description }}</textarea>

        @error('description')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
        
</div>

<div class="form-group">
    <label for="course_image">{{ __('Add an Image') }}</label>

    <div class="col-md-12 input">
        <input id="image" type="file" class="form-control-file @error('image') is-invalid @enderror" name="image" value="{{ old('image') ??  $course->image }}" required autocomplete="image" autofocus>

        @error('image')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
        
</div>

@csrf