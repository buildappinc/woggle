<style>
    .hello{
        font-family: 'Baloo Tamma 2', cursive;
        font-family: 'Raleway', sans-serif;
        font-family: 'Recursive', sans-serif;
    }
    .font{
        font-family: 'Baloo Tamma 2', cursive; 
        font-family: 'Recursive', sans-serif;
    }
</style>
@extends('layouts.app')

@section('content')
    <div>
       <div class="grid grid-cols-1 lg:grid-cols-5 xl:grid-cols-5 gap-4">
           <div class="col-span-1 hidden lg:block xl:block shadow-lg h-screen" style="background: #416bb4">
                <div class="font text-white p-6 mt-32">
                    <h4 class="uppercase my-10">
                        {{$course->name}} topics treated
                    </h4>
                    <div>
                        @foreach ($course->topics as $item)
                            <div class="my-3">{{$item->name}}</div>
                        @endforeach
                    </div>
                </div>
           </div>
           <div class="col-span-4 p-10 h-screen" style="overflow: auto">
               <div class="font grid grid-cols-1 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 gap-6 my-6">
                   <div class="rounded shadow-md p-5" style="background: #a8f7bf">
                       <div class="text-2xl">Time</div>
                       <div class="text-xl">1 Hour</div>
                   </div>
                   <div class="rounded shadow-md p-5" style="background: #f2c5c4">
                       <div class="text-2xl">CountDown</div>
                       <div class="text-xl">T - <span class="js-timeout">60:00</span></div>
                   </div>
                   <div class="rounded shadow-md p-5" style="background: #f2d99f">
                       <div class="text-2xl">Questions</div>
                       <div class="text-xl">
                           {{$course->questions->count()}}
                       </div>
                    </div>
               </div>
               {{-- questions --}}
               <div>
                    <div>Questions <em>all the best </em></div>
                    <form action="{{route('solutions', ['course'=>$course->id])}}" method="post">
                        @csrf
                        <div class="px-4">
                            @foreach ($course->questions as $key => $question)
                                <div class="shadow my-10 p-4 rounded">
                                    {{-- question div --}}
                                    <div>
                                      <span class="hello text-xl">Question {{$key + 1}} :</span> <span class="font font-light">{{$question->name}}</span> 
                                    </div>
                                    {{-- possible solu div --}}
                                    <div class="px-2 my-4 ">
                                        <?php $options = json_decode($question->options, true) ?>
                                        <input type="hidden" name="question{{$key + 1}}" value="{{$question->id}}">
                                        <div class="p-2">
                                            <input type="radio" name="ans{{$key + 1}}" value="{{$options['options1']}}"> {{$options['options1']}}
                                        </div>
                                        <div class="p-2">
                                            <input type="radio" name="ans{{$key + 1}}" value="{{$options['options2']}}"> {{$options['options2']}}
                                        </div>
                                        <div class="p-2">
                                            <input type="radio" name="ans{{$key + 1}}" value="{{$options['options3']}}"> {{$options['options3']}}
                                        </div>
                                        <div class="p-2">
                                            <input type="radio" name="ans{{$key + 1}}" value="{{$options['options4']}}"> {{$options['options4']}}
                                        </div>
                                        <div class="p-2 hidden">
                                            <input type="radio" value="0" checked="checked" name="ans{{$key + 1}}"> {{$options['options4']}}
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            {{-- btn --}}
                            <div>
                                <input type="hidden" name="index" value="{{$key + 1}}">
                                <button class="btn btn-primary btn-lg" type="submit">Submit Quiz</button>
                            </div>
                        </div>    
                    </form>
               </div>
           </div>
       </div>
    </div>
    
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script type="text/javascript">
    console.log("pleasse")
	var interval;
	function countdown() {
	  clearInterval(interval);
	  interval = setInterval( function() {
	      var timer = $('.js-timeout').html();
	      timer = timer.split(':');
	      var minutes = timer[0];
	      var seconds = timer[1];
	      seconds -= 1;
	      if (minutes < 0) return;
	      else if (seconds < 0 && minutes != 0) {
	          minutes -= 1;
	          seconds = 59;
	      }
	      else if (seconds < 10 && length.seconds != 2) seconds = '0' + seconds;

	      $('.js-timeout').html(minutes + ':' + seconds);

	      if (minutes == 0 && seconds == 0) { 
                clearInterval(interval); 
                swal({
                    text: "Oooopppsss!!!! Time is up. Answered questions would but submitted",
                    icon: "error",
                    dangerMode: true,
                    })
                    .then((willDelete) => {
                        swal({
                            text: "Don't worry too much, you can retake the quiz for the last time", 
                            icon: "info"
                        })
                        .then((okay)=>{
                            if (okay) {
                                $.get('mycourses', function(data){
                                    window.location.href = "http://www.wooglelearn.com/mycourses/"
                                })
                            }
                        })
                }); 
              }
	  }, 1000);
	}

	$('.js-timeout').text("60:00");
	countdown();
</script>
@endsection


