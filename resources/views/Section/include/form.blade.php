@csrf

        <div class="form-group">
            <label for="topics" class="flex justify-center text-2xl font-bold py-3">{{ __('Section Confirmation') }}</label>

            <div class="col-md-12 input">
                <select class="form-control" name="topic_id" id="topic_id">
                        <option value="{{$topic->id}}">{{$topic->name}}</option>
                </select>
            </div>
        </div>
        
        @if ($section->header == null)
            <div class="grid grid-cols-12 gap-4 lg:ml-64 mt-5">
                <div class="col-span-2">
                    <label for="header" class="text-2xl font-bold">{{ __('Lesson:') }}</label>
                </div>
                <div class="col-span-10">
                    <input class="@error('header') is-invalid @enderror appearance-none block w-1/2 bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="header" type="text" placeholder="header" name="header" value="{{ old('header') ?? $section->header }}" required autocomplete="header" autofocus>
                    {{-- <input id="header" type="text" class="@error('header') is-invalid @enderror" name="header" value="{{ old('header') ?? $section->header }}" required autocomplete="header" autofocus> --}}
                    @error('header')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    
                </div>
            </div>
        @else
            <div class="grid grid-cols-11 gap-4 lg:ml-56 mt-5">
                <div class="col-span-2">
                    <label for="header" class="text-2xl font-bold">{{ __('Lesson:') }}</label>
                </div>
                <div class="col-span-7">
                    <input class="@error('header') is-invalid @enderror appearance-none block w-1/2 bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="header" type="text" placeholder="header" name="header" value="{{ old('header') ?? $section->header }}" required autocomplete="header" autofocus>
                    {{-- <input id="header" type="text" class="@error('header') is-invalid @enderror" name="header" value="{{ old('header') ?? $section->header }}" required autocomplete="header" autofocus> --}}
                    @error('header')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-span-2">
                    <input type="hidden" class="delete_value" value="{{$section->id}}">
                    <button class="deleteSec h-12 w-32" style="background: linear-gradient(199.81deg, #FF8094 0%, #FF3756 100%);">Delete Lesson</button>
                </div>
            </div>
        @endif
            

        <div class="form-group">
            <label for="content">{{ __('Section Content') }}</label>

            <div class="col-md-12 input">
                <textarea name="content" id="content" cols="10" rows="18" class="form-control @error('content') is-invalid @enderror" required autocomplete="content" autofocus>{{ old('content') ?? $section->content }}</textarea>

                @error('content')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

       
