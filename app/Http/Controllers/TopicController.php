<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Topic;
use App\Course;

class TopicController extends Controller
{
    public function topicForm(){
        $course = Course::all();

        return view('Topics.topicForm', compact('course'));
    }

    public function store(Request $request){
        //validation for the topics 
       
       $data =  $request->validate([
            'name' => 'required',
            'course_id' => 'required'
        ]);

        Topic::create($data);

        return redirect('/admin');
       
    }
}
