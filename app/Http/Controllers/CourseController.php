<?php

namespace App\Http\Controllers;

use App\Course;
use App\User;
use Illuminate\Http\Request;

class CourseController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }

    public function addCourse(Course $course)
    {
        $user = \Auth::user();
        
        $user->courses()->attach($course);

        return view('Study.lesson', compact('course'));
    }


}
