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
        
        $question = new Question(); 
        $question->course_id = $course->id;
        $question->name = $request->name;
        $question->save();

        dd($course);

        return redirect('/admin/courses/'. $course->id .'/edit')->with("message", "Question Added");

    }
}
