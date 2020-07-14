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
  background: #525861;
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

<form action="/admin/courses/{{$course->id}}" method="post" enctype="multipart/form-data">
    
    @method('PATCH')
    @include('Admin.include.form')

    <div  class="container w-11/12 mx-10 py-6 ">
        <button type="submit" class="btn btn-primary h-12  ml-3" style="width: 97%">Save Course</button>
    </div>
    
    <div class="container">
        <div class="text-2xl font-bold mx-3">
            Course content
        </div>

        {{-- adding section and lessons for courses  --}}
        <div>
            {{-- sections display  --}}
            <div>
                
                <div class="container">
                    
                
               @foreach ($course->topics as $topic)

                    <div class="select-box mt-4">
                      <div class="options-container -mt-3">  
                        <div class="option">
                          <input type="radio" class="radio" id="automobiles" name="category"/>
                          <label for="automobiles">
                            @foreach ($topic->sections as $section)
                                <li><a href="#">{{$section->header}}</a></li>
                            @endforeach
                            <div class="mt-6">
                                <a href="{{ route('Topic.section', ['course' => $course->id, 'topic' => $topic->id])}}">
                                    <div class=" h-10 mx-3 py-6 flex flex-row items-center border-dashed border-2 rounded-md" style=" background: #F7F7F7; width:97%; border-color: #2b2b2b">
                                        <div>
                                            <span class="material-icons md-18">
                                                add
                                            </span>
                                        </div> 
                                        <div>Add lesson</div> 
                                    </div>
                                </a>
                            </div>
                          </label>
                        </div>
                      </div>
                      <div class="selected flex flex-row justify-between">
                        <div>
                            Section: {{$topic->name}}
                        </div>
                        <div class="mr-4 flex flex-row">
                            <div>
                              <a href="{{ route('Course.topic.edit', ['course'=>$course->id , 'topic'=>$topic->id])}}"><img src="{{asset('images/edit.png')}}" alt=""></a>
                            </div>
                            <div class="px-4">
                              <form action="{{route('Course.topic.delete', ['course'=>$course->id, 'topic'=>$topic->id])}}" method="post">
                                @method('DELETE')
                                @csrf
                                    <button type="submit" class="text-white"><img src="{{asset('images/bdelte.png')}}" alt=""></button>
                              </form>   
                            </div>
                        </div>
                      </div>
                    </div>
               @endforeach
            </div>
            </div>

            {{-- section input  --}}
            <div class="mt-6">
                <a href="{{ route('Course.topic', ['course' => $course->id])}}">
                    <div class=" h-10 mx-3 py-6 flex flex-row items-center border-dashed border-2 rounded-md" style=" background: #F7F7F7; width:97%; border-color: #2b2b2b">
                        <div>
                            <span class="material-icons md-18">
                                add
                            </span>
                        </div> 
                        <div>Add New Section</div> 
                    </div>
                </a>
            </div>
        </div>
    </div>

</form>    
</div>

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
</script>
@endsection