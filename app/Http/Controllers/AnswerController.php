<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\Question;
use App\Answer;

class AnswerController extends Controller
{
    //

    public function create(Request $request, Course $course, Question $question)
    {
        $answer = new Answer();
        $answer->question_id = $question->id;
        $answer->option = $request->option;

        $answer->save(); 

        return redirect()->back()->with('answer', "Question options addedd successfully");
    }
}
