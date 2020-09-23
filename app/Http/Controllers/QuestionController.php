<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question; 
use App\Course;

class QuestionController extends Controller
{
    //

    public function create(Request $request, Course $course)
    {   
        $validator = $request->validate([
            'name' => ['required'],
            'options1' => ['required'],
            'options2' => ['required'],
            'options3' => ['required'],
            'options4' => ['required'], 
            'answer' => ['required']
        ]);

        if ($validator->passes()) {

            $question = new Question(); 
            $question->course_id = $course->id;
            $question->name = $request->name;
            $question->answer = $request->answer;
            $question->options = json_encode(array('options1'=>$request->options1, 'options2'=>$request->options2, 'options3'=>$request->options3, 'options4'=>$request->options4));
            $question->save();   

            return redirect('/admin/courses/'. $course->id .'/edit')->with("answer", "Question Added");

        } else {
            return redirect('/admin/courses/'. $course->id .'/edit')->with("error", "Problem  Encounted");
        }

    }
}
