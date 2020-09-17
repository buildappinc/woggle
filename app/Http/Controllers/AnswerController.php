<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnswerController extends Controller
{
    //
    public function create(Request $request, Course $course)
    {   
        dd($request->all());
    }
}
