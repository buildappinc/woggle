@csrf

<div>

    <div class="my-6">
        <label for="topics" class="flex justify-center text-2xl font-bold py-3">{{ __('Course Confirmation') }}</label>

        <div class="col-md-12 input">
            <select name="course_id" class="form-control" id="course_id">
                    <option value="{{ $course->id}} ">{{ $course->name}}</option>
            </select>
        </div>
    </div>
    <div class="w-full md:w-full px-3 mb-6 md:mb-0 my-6">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-zip">
            {{ __('Topic Name') }}
        </label>
        <input name="name" class="@error('name') is-invalid @enderror appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-zip" type="text" placeholder="This is a topic" value="{{ old('name') ?? $topic->name  }}" required autocomplete="name" autofocus>
        @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
        @enderror
    </div>

</div>