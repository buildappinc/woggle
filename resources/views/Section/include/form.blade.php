@csrf
        <div class="form-group">
            <label for="header">{{ __('Section header') }}</label>

            <div class="col-md-12 input">
                <input id="header" type="text" class="form-control @error('header') is-invalid @enderror" name="header" value="{{ old('header') ?? $section->header }}" required autocomplete="header" autofocus>

                @error('header')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
                
        </div>

        <div class="form-group">
            <label for="content">{{ __('Section Content') }}</label>

            <div class="col-md-12 input">
                <textarea name="content" id="content" cols="10" rows="2" class="form-control @error('content') is-invalid @enderror" required autocomplete="content" autofocus>{{ old('content') ?? $section->content }}</textarea>

                @error('content')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
                
        </div>

        <div class="form-group">
            <label for="topics">{{ __('Select Topic') }}</label>

            <div class="col-md-12 input">
                <select class="form-control" name="topic_id" id="topic_id">
                    @foreach ($topics as $topic)
                        <option value="{{$topic->id}}">{{$topic->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
