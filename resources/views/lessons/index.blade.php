<style>
    
</style> 
@extends('lessons.app')

@section('content')
        <div class="hello w-full" style="background: #383838;">
            
            <div class="container bg-white w-full">
                {{-- header --}}
                <div class="flex justify-center text-4xl font-bold pt-5">
                    {{$course->name}}
                </div>
                
                <div class="p-5 flex flex-no-wrap flex-col sm:flex-no-wrap sm:flex-row md:flex-wrap md:flex-row lg:flex-wrap lg:flex-row xl:flex-wrap xl:flex-row">
                    @foreach ($course->topics as $topic)
                        <div class="h-48 shadow-md rounded-lg m-2 border border-gray-200 p-3 flex flex-col justify-between" style="width: 31%; background: #E1E1E1">
                            <div class="flex flex-row justify-between">
                                <div>
                                    {{$topic->name}}
                                </div>
                                <div class="bg-red-400 rounded-full w-8 h-8 flex justify-center items-center" style="background: linear-gradient(225deg, #666666 0%, #151522 100%);">
                                    <div class="text-white">
                                        {{$topic->id}}
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-row justify-between">
                                <div class="rounded-full py-1 px-4 text-white" style="background: linear-gradient(225deg, #666666 0%, #151522 100%); color: #fff">
                                    <a href="{{ route('lesson.content', ['course'=>$course->id, 'topic'=>$topic->id])}}" class="text-white">Locked</a>
                                </div>
                                <div class="items-baseline mt-2">
                                    {{$topic->sections()->count()}} Items 
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
@endsection