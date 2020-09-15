<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\Question;

class AnswerController extends Controller
{
    //

    public function create(Request $request, Course $course, Question $question)
    {
        dd($question);
    }
}
