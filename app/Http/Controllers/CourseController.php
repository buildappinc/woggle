<?php

namespace App\Http\Controllers;

use App\Course;
use App\Topic;
use App\User;
use App\Progress;
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

    public function Topics(Course $course, Topic $topic){
        
        return view('lessons.index', compact('course'));

    }

    public function LessonContent(Course $course, Topic $topic){

        $check_section_id = Progress::where('section_id', $topic->id)->where('user_id', auth()->user()->id)->where('course_id', $course->id)->first();
        
        if (!$check_section_id) {
            $progress = new Progress();
            $progress->section_id = $topic->id;
            $progress->user_id = auth()->user()->id;
            $progress->course_id = $course->id;

            $progress->save();
        }

        $next = Topic::where('id', '>', $topic->id)->min("id");
        $prev = Topic::where('id', '<', $topic->id)->max("id");        
        
        return view('lessons.showLessons', compact('course', 'topic', 'next', 'prev'));

    }

}
