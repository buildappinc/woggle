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

        dd($request->all());

        // $data = $request->validate([
        //     'question' => "required", 
        //     'course_id' => 'required'
        // ]);

        // dd($data);

        // dd(Question::create($data));
    }
}
