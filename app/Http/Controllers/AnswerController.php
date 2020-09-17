<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\Question;
use App\Answer;

class AnswerController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function show(Course $course, Question $question)
    {
        return view('Admin.question', compact('course', 'question'));
    }

    public function create(Request $request, Course $course, Question $question)
    {   
        $data = $request->validate([
            'options' => ['required'], 
            'question_id' => ['required']
        ]);

        Answer::create($data);

        return redirect('admin/courses/'. $course->id .'/edit')->with("answer", "Answer Added");
    }
}
