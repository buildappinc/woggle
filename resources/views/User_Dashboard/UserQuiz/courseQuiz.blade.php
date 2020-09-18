@extends('layouts.app')

@section('content')
    <div>
       <div class="grid grid-cols-5 gap-4">
           <div class="col-span-1 hidden lg:block xl:block shadow-lg" style="background: #416bb4">
                <div>sdasdasdasd</div>
           </div>
           <div class="col-span-4 p-10">
               <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 my-6">
                   <div class="rounded shadow p-5">
                       <div>Time</div>
                       <div>3 Hrs</div>
                   </div>
                   <div class="rounded shadow p-5">
                       <div>CountDown</div>
                       <div>T - 3:00:00</div>
                   </div>
                   <div class="rounded shadow p-5">
                       <div>Questions</div>
                       <div>
                           {{$course->questions->count()}}
                       </div>
                    </div>
               </div>
               {{-- questions --}}
               <div>
                    <div>Questions <em>all the best </em></div>
                    <div class="px-4">
                        @foreach ($course->questions as $question)
                            <div class="shadow my-10 p-4 rounded">
                                {{-- question div --}}
                                <div>
                                  Question:  {{$question->name}}
                                </div>
                                {{-- possible solu div --}}
                                <div class="px-2 my-4 ">
                                    @foreach ($question->answers as $answer)
                                        <div class="p-2">
                                            <input type="radio" name="{{$answer->options}}"> {{$answer->options}}
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endforeach
                    </div>  
               </div>
           </div>
       </div>
    </div>
@endsection
