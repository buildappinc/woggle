<?php

namespace App\Http\Controllers;

use App\Course;
use Illuminate\Http\Request;

class StudyController extends Controller
{
    
    public function index(Request $request){

          
        $course = Course::all();
        return view('Study.index', compact('course'));
    }

    public function show($course){

        $courses = Course::all();
        $course = Course::find($course);

        return view('Study.show', compact('course', 'courses'));
    }
}
