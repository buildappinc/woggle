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
            'name' => ["required"], 
            'course_id' => ["required"]
        ]);

        $question = new Question(); 
        $question->course_id = $course->id;
        $question->name = $request->name;
        $question->save();

        return redirect('/admin/courses/'. $course->id .'/edit')->with("message", "Question Added");

    }
}
