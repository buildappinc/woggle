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
                  <textarea name="option1" id="option1" cols="15" rows="2" class="form-control @error('option1') is-invalid @enderror" required autocomplete="option1" autofocus></textarea>
                  @error('option1')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                  @enderror
                </div>
                <div class="w-full px-3 mb-6 md:mb-0">
                  <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-zip">
                      Option 
                  </label>
                  <textarea name="option2" id="option2" cols="15" rows="2" class="form-control @error('option2') is-invalid @enderror" required autocomplete="option2" autofocus></textarea>
                  @error('option2')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                  @enderror
                </div>
                <div class="w-full px-3 mb-6 md:mb-0">
                  <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-zip">
                      Option 
                  </label>
                  <textarea name="option3" id="option3" cols="15" rows="2" class="form-control @error('option3') is-invalid @enderror" required autocomplete="option3" autofocus></textarea>
                  @error('option3')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                  @enderror
                </div>
                <div class="w-full px-3 mb-6 md:mb-0">
                  <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-zip">
                      Option 
                  </label>
                  <textarea name="option4" id="option4" cols="15" rows="2" class="form-control @error('option4') is-invalid @enderror" required autocomplete="option4" autofocus></textarea>
                  @error('option4')
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