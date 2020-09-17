<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\Question;
use App\Answer;

class AnswerController extends Controller
{
    //
    public function show(Course $course, Question $question)
    {
        return view('Admin.question', compact('course', 'question'));
    }

    public function create(Request $request, Course $course)
    {   
        $data = $request->validate([
            'option' => ['required'], 
            'question_id' => ['required']
        ]);

        Answer::create($data);

        return redirect()->back()->with("answer", "Answer Added");
    }
}
