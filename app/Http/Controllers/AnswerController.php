<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\Question;

class AnswerController extends Controller
{
    //
    public function show(Course $course, Question $question)
    {
        return view('Admin.question', compact('course', 'question'));
    }

    public function create(Request $request, Course $course)
    {   
        dd($request->all());
    }
}
