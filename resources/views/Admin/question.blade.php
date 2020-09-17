@extends('Admin.app')

@section('content')
    <div class="container h-full px-64 py-40">   
        <form action="{{route('answer.create', ['course'=>$course->id], 'question'=>$question->id)}}" method="POST">
            @csrf
            <div class="modal-body">
                <div class="w-full px-3 mb-6 md:mb-0">
                  <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-zip">
                      Option 
                  </label>
                  <textarea name="option" id="option" cols="15" rows="2" class="form-control @error('option') is-invalid @enderror" required autocomplete="option" autofocus></textarea>
                  @error('option')
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
            <div class="modal-footer">
              <button type="submit" class="btn btn-primary">Add Answer</button>
            </div>
          </form>
    </div>
@endsection