@extends('Admin.app')

@section('content')
    <div class="container h-full px-64 py-20">   
        <form action="{{route('answer.create', ['course'=>$course->id, 'question'=>$question->id])}}" method="POST">
            @csrf
            <div class="modal-body">
                <div class="w-full px-3 mb-6 md:mb-0">
                  <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-zip">
                      Option 
                  </label>
                  <textarea name="options1" id="options1" cols="15" rows="2" class="form-control @error('options1') is-invalid @enderror" required autocomplete="options1" autofocus></textarea>
                  @error('options1')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                  @enderror
                </div>
                <div class="w-full px-3 mb-6 md:mb-0">
                  <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-zip">
                      Option 
                  </label>
                  <textarea name="options2" id="options2" cols="15" rows="2" class="form-control @error('options2') is-invalid @enderror" required autocomplete="options2" autofocus></textarea>
                  @error('options2')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                  @enderror
                </div>
                <div class="w-full px-3 mb-6 md:mb-0">
                  <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-zip">
                      Option 
                  </label>
                  <textarea name="options3" id="options3" cols="15" rows="2" class="form-control @error('options3') is-invalid @enderror" required autocomplete="options3" autofocus></textarea>
                  @error('options3')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                  @enderror
                </div>
                <div class="w-full px-3 mb-6 md:mb-0">
                  <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-zip">
                      Option 
                  </label>
                  <textarea name="options4" id="options4" cols="15" rows="2" class="form-control @error('options4') is-invalid @enderror" required autocomplete="options4" autofocus></textarea>
                  @error('options4')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                  @enderror
                </div>
                <div>
                  <label for="Questions" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">{{ __('Question Confirmation') }}</label>
                  <div class="col-md-12 input">
                      <select name="question_id" class="form-control" id="question_id">
                        <option value="{{$question->id}}">{{$question->name}}</option>
                      </select>
                  </div>
                </div>
            </div>            
            <button type="submit" class="btn btn-primary btn-lg">Add Answer</button>
          </form>
    </div>
@endsection