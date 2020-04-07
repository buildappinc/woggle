<?php

namespace App\Http\Controllers;

use App\Course;
use App\Difficulty;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index(Request $request){

          
            $course = Course::all();

            return view('study', compact('course'));
    }


}
