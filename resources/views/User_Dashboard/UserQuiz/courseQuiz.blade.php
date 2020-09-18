@extends('layouts.app')

@section('content')
    <div>
       <div class="grid grid-cols-5 gap-4">
           <div class="col-span-1 bg-red-400 w-full h-full hidden lg:block xl:block">dasdadasda</div>
           <div class="col-span-4">
               <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 my-6">
                   <div>
                       <div>Time</div>
                       <div>3 Hrs</div>
                   </div>
                   <div>
                       <div>CountDown</div>
                       <div>T - 3:00:00</div>
                   </div>
                   <div>
                       <div>Questions</div>
                       <div>
                           {{$course->questions->count()}}
                       </div>
                    </div>
               </div>
               {{-- questions --}}
               <div>
                    <div>Questions <em>all the best </em></div>
                    <div>
                        @foreach ($course->questions as $question)
                            <div class="shadow">
                                {{-- question div --}}
                                <div>
                                    {{$question->name}}
                                </div>
                                {{-- possible solu div --}}
                                <div>
                                    @foreach ($question->answers as $answer)
                                        <div>
                                            {{$answer->options}}
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