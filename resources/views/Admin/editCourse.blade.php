<style>
    .btn-primary{
        background: linear-gradient(184.38deg, #779FDD 7.68%, #406AB4 106.58%);
        border-radius: 5px;
    }

    * {
  margin: 0;
  box-sizing: border-box;
}

body {
  font-family: "Roboto", sans-serif;
  background: #f7f6ff;
}

h2 {
  margin: 16px;
}

.container {
  
  padding: 32px;
}

.select-box {
  display: flex;
  width: 100%;
  flex-direction: column;
}

.select-box .options-container {
  background: #FFF;
  border: 1px solid #ccc;
  color: #000;
  max-height: 0;
  width: 100%;
  opacity: 0;
  transition: all 0.4s;
  overflow: hidden;

  order: 1;
}

.selected {
  background: #ECECEC;
  border-radius: 4px;
  margin-bottom: 8px;
  color: #000;
  position: relative;

  order: 0;
}

.selected::after {
  content: "";
  background: url('{{asset('images/down.png')}}');
  background-size: contain;
  background-repeat: no-repeat;

  position: absolute;
  height: 60%;
  width: 10px;
  right: 18px;
  top: 18px;

  transition: all 0.4s;
}

.select-box .options-container.active {
  max-height: 240px;
  opacity: 1;
  overflow-y: scroll;
}

.select-box .options-container.active + .selected::after {
  transform: rotateX(180deg);
  top: -6px;
}

.select-box .options-container::-webkit-scrollbar {
  width: 2px;
  background: #3f3f3f;
  
}

.select-box .options-container::-webkit-scrollbar-thumb {
  /* background: #525861; */
  border-radius: 0 8px 8px 0;
}

.select-box .option,
.selected {
  padding: 12px 24px;
  cursor: pointer;
}

.select-box label {
  cursor: pointer;
}

.select-box .option .radio {
  display: none;
}


</style>
@extends('Admin.app')

@section('content')

<div class="" style="margin-top: -23px;">
  <form action="{{route('course.edit.submit', ['course'=>$course->id])}}" method="post" enctype="multipart/form-data">
      @method('PATCH')
      @include('Admin.include.form')
      <div  class="container w-11/12 mx-10 py-6 ">
          <button type="submit" class="btn btn-primary h-12  ml-3" style="width: 97%">Save Course</button>
      </div>
  </form> 
  <div class="container">
    <div class="text-2xl font-bold mx-3">
        Course content
    </div>
      {{-- adding section and lessons for courses  --}}
      <div>
        {{-- sections display  --}}
        <div>    
          <div class="container">       
              @if (Session::has('success'))
                    <div class="alert alert-success">
                      {{Session::get('success')}}
                    </div>
              @endif
              @if (Session::has('message'))
                    <div class="alert alert-success">
                      {{Session::get('message')}}
                    </div>
              @endif
                
              @foreach ($course->topics as $topic)
                <div class="select-box mt-4">
                      <div class="options-container -mt-3">  
                        <div class="option">
                          <input type="radio" class="radio" id="automobiles" name="category"/>
                          <label for="automobiles">
                            @foreach ($topic->sections as $section)
                                <div class="flex flex-col p-2 ml-3">
                                  <a href="{{route('Topic.section.edit', ['topic'=>$topic->id, 'section'=>$section->id])}}" class="text-black"><span class="font-bold">Lesson: </span> {{$section->header}}</a>
                                </div>
                            @endforeach
                          </label>
                          <div class="mt-6">
                            <a class="text-black" href="{{ route('Topic.section', ['course' => $course->id, 'topic' => $topic->id])}}">
                                <div class=" h-10 mx-3 py-6 flex flex-row items-center rounded-md" style="width: 97%; border:1px dashed #000000" >
                                    <div class="pl-2">
                                        <span class="material-icons md-18">
                                            add
                                        </span>
                                    </div> 
                                    <div class="pl-3">Add lesson</div> 
                                </div>
                            </a>
                        </div>
                        </div>
                      </div>
                      <div class="selected bg-gray-200 flex flex-row justify-between">
                        <div>
                            Section:{{$topic->id}} {{$topic->name}}
                        </div>
                        <div class="mr-4 flex flex-row">
                            <div>
                              <a href="{{ route('Course.topic.edit', ['course'=>$course->id , 'topic'=>$topic->id])}}"><img src="{{asset('images/edit.png')}}" alt=""></a>
                            </div>
                            <div class="px-4">
                              <input type="hidden" class="delete_value" value="{{$topic->id}}">
                              {{-- <form action="{{route('Course.topic.delete', ['course'=>$course->id, 'topic'=>$topic->id])}}" method="post">
                                @method('DELETE')
                                @csrf
                                    <button type="submit" class="text-white"><img src="{{asset('images/bdelte.png')}}" alt=""></button>
                              </form>    --}}
                              <button type="submit" class="text-white deleteSection"><img src="{{asset('images/bdelte.png')}}" alt=""></button>
                            </div>
                        </div>
                      </div>
                </div>
               @endforeach
          </div>
        </div>
        {{-- section input  --}}
        <div class="mt-6">
                <a class="text-black" href="{{ route('Course.topic', ['course' => $course->id])}}">
                    <div class=" h-10 mx-3 py-6 flex flex-row items-center rounded-md" style=" background: #F7F7F7; width:97%; border:1px dashed #000000">
                        <div class="pl-2">
                            <span class="material-icons md-18">
                                add
                            </span>
                        </div> 
                        <div class="pl-3">Add New Section</div> 
                    </div>
                </a>
            </div>
        </div>



        <div class="text-2xl font-bold mx-3 mt-10">
          Course Exam Questions 
        </div>
        <div>
          {{-- question display  --}}
          <div> 
              <div class="container">
              @if (Session::has('answer'))
                    <div class="alert alert-success">
                      {{Session::get('answer')}}
                    </div>
              @endif
                
            @foreach ($course->questions as $question)
                <div class="select-box mt-4">
                  <div class="options-container -mt-3">  
                    <div class="option">
                      <input type="radio" class="radio" id="automobiles" name="category"/>
                      <label for="automobiles">
                        <?php $options = json_decode($question->options, true) ?>
                        <div class="flex flex-col p-2 ml-3">
                          <a class="text-black"><span class="font-bold">Solutions: </span> {{$options['options1']}}</a>
                        </div>
                        <div class="flex flex-col p-2 ml-3">
                          <a class="text-black"><span class="font-bold">Solutions: </span> {{$options['options2']}}</a>
                        </div>
                        <div class="flex flex-col p-2 ml-3">
                          <a class="text-black"><span class="font-bold">Solutions: </span> {{$options['options3']}}</a>
                        </div>
                        <div class="flex flex-col p-2 ml-3">
                          <a class="text-black"><span class="font-bold">Solutions: </span> {{$options['options4']}}</a>
                        </div>
                        
                        <div class="flex flex-col p-2 ml-3">
                          <a class="text-black"><span class="font-bold">Right solution: </span> {{$question->answer}}</a>
                        </div>
                      </label>
                      <div class="mt-6">
                        <a href="{{route('answer.show', ['course'=>$course->id, 'question'=>$question->id])}}" class="text-black">
                            <div class=" h-10 mx-3 py-6 flex flex-row items-center rounded-md" style="width: 97%; border:1px dashed #000000" >
                              <div class="pl-2">
                                <span class="material-icons md-18">
                                    add
                                </span>
                              </div> 
                              <div class="pl-3">Add Answer Options</div> 
                            </div>
                        </a>
                    </div>
                  </div>
                </div>
                <div class="selected bg-gray-200 flex flex-row justify-between">
                  <div> Question: {{$question->name}}</div>
                    <div class="mr-4 flex flex-row">
                      <div>
                        <a><img src="{{asset('images/edit.png')}}" alt=""></a>
                      </div>
                      <div class="px-4">
                        <input type="hidden" class="delete_value">       
                        <button type="submit" class="text-white deleteSection"><img src="{{asset('images/bdelte.png')}}" alt=""></button>
                      </div>
                    </div>
                </div>
              </div>
                      {{-- modal for answers --}}
              {{-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Answer</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <form action="{{route('answer.create', ['course'=>$course->id])}}" method="POST">
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
                        <button type="submit" class="btn btn-primary">Send message</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div> --}}
          @endforeach
        </div>
      </div>
           <!-- Modal -->
           <div class="modal fade bd-example-modal-lg" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Quiz Question</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <form action="{{route('question.create', ['course'=>$course->id])}}" method="POST">
                    @csrf
                    <div class="modal-body">
                      <div class="w-full px-3 mb-6 md:mb-0">
                          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-zip">
                              Question
                          </label>
                          <textarea name="name" id="name" cols="16" rows="8" class="form-control @error('name') is-invalid @enderror" required autocomplete="name" autofocus></textarea>
                          @error('name')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                          @enderror
                      </div>
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
                      <div class="w-full px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-zip">
                            Accurate Answer
                        </label>
                        <textarea name="answer" id="answer" cols="16" rows="3" class="form-control @error('answer') is-invalid @enderror" required autocomplete="answer" autofocus></textarea>
                        @error('answer')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                    </div>
                    
                    </div>    
                    <div class="modal-footer">
                      <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
                </div>
            </div>
          </div>
          {{-- section input  --}}
          <div class="mt-6">
              <a class="text-black" href="{{ route('Course.topic', ['course' => $course->id])}}" data-toggle="modal" data-target="#exampleModalCenter">
                  <div class=" h-10 mx-3 py-6 flex flex-row items-center rounded-md" style=" background: #F7F7F7; width:97%; border:1px dashed #000000">
                      <div class="pl-2">
                          <span class="material-icons md-18">
                              add
                          </span>
                      </div> 
                      <div class="pl-3">Add New Question</div> 
                  </div>
              </a>
          </div>
         
      </div>
    </div>

   
</div>
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script>
    const selectedAll = document.querySelectorAll(".selected");

    selectedAll.forEach((selected) =>{
        const optionsContainer = selected.previousElementSibling;

        const optionsList = optionsContainer.querySelectorAll(".option");

        selected.addEventListener("click", () => {
            
        optionsContainer.classList.toggle("active");
        });

        optionsList.forEach(o => {
        o.addEventListener("click", () => {
            selected.innerHTML = o.querySelector("label").innerHTML;
            optionsContainer.classList.remove("active");
        });
        });
    })

    $(document).ready(function(){

          $.ajaxSetup({
              headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
          });
          $('.deleteSection').click(function(e){
              e.preventDefault()

              var delete_val = $(this).closest("div").find(".delete_value").val();
              // console.log(delete_val)

              swal({
              title: "Delete!!!",
              text: "Note: This action cannot be reversed",
              // icon: "warning",
              buttons: ["Cancel", "Delete Anyway"],
              dangerMode: true,
              })
              .then((willDelete) => {
              if (willDelete) {

                  var data = {
                      "_token": $('input[name=_token').val(),
                      "id": delete_val,
                  }

                  $.ajax({
                      type: "DELETE",
                      url: "/admin/topic/" + delete_val, 
                      data: data, 
                      success: function(response){
                          swal(response.status, {
                                icon: "success",
                          })
                          .then((result) =>{
                              location.reload()
                          })
                      }
                  })
              } else {
                  swal("Section Deletion aborted");
              }
              });
          })
      })
</script>
@endsection