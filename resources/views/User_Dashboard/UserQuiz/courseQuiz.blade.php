@extends('layouts.app')

@section('content')
    <div>
       <div class="grid grid-cols-5 gap-4">
           <div class="col-span-1 bg-red-400 w-full h-full hidden lg:block xl:block">dasdadasda</div>
           <div class="col-span-4">
               <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 my-6">
                   <div>dnkadnjasd</div>
                   <div>sadadadada</div>
                   <div>adsdadsdad</div>
               </div>
               {{-- questions --}}
               <div>
                    <div>Questions <em>all the best </em></div>
                    <div>
                        @foreach ($course->questions as $question)
                            <div>
                                {{$question->name}}
                            </div>
                        @endforeach
                    </div>  
               </div>
           </div>
       </div>
    </div>
@endsection