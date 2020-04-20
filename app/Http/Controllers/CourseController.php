<?php

namespace App\Http\Controllers;

use App\Course;
use App\Difficulty;
use Illuminate\Http\Request;

class CourseController extends Controller
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
