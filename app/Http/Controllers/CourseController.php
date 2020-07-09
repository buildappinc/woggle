<?php

namespace App\Http\Controllers;

use App\Course;
use App\Topic;
use App\User;
use Illuminate\Http\Request;

class CourseController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }

    public function addCourse(Course $course, Topic $topic)
    {
        $user = \Auth::user();
        
        $user->courses()->attach($course);

        return redirect('/study/lesson/'. $course->id);
    }

    // public function showIndividualCourse(Course $course){
    //     return view('Study.lesson', compact('course'));
    // }

    // public function lessonContent(Course $course, Topic $topic){
        
    //     return view('Study.courseContent', compact('course', 'topic'));
    // }

    public function Topics(Course $course){
        return view('lessons.index', compact('course'));

    }

    public function LessonContent(Course $course, Topic $topic){
        return view('lessons.showLessons', compact('course', 'topic'));
    }



}
