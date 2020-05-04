@csrf

    <div class="form-group">
        <label for="topic_name">{{ __('Topic Name') }}</label>

        <div class="col-md-12 input">
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') ?? $topic->name  }}" required autocomplete="name" autofocus>

            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
            
    </div>

    <div class="form-group">
        <label for="topics">{{ __('Select Course') }}</label>

        <div class="col-md-12 input">
            <select name="course_id" class="form-control" id="course_id">
                @foreach ($course as $courses)
                    <option value="{{ $courses->id}} ">{{ $courses->name}}</option>
                @endforeach
            </select>
        </div>
    </div>