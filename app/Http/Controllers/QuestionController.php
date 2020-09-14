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

        $data = $request->validate([
            'question' => ["required"], 
            'course_id' => ["required"]
        ]);

        $question = new Question(); 
        $question->course_id = $course->id;
        $question->question = $request->question;
        $question->save();

        return redirect()->back()->with("message", "Question Added");

        // $data = $request->validate([
        //     'question' => "required", 
        //     'course_id' => 'required'
        // ]);

        // dd($data);

        // dd(Question::create($data));
    }
}
