<?php

namespace App\Http\Controllers;

use App\Course;
use App\Topic;
use App\User;
use App\Progress;
use App\Payment;
use Illuminate\Http\Request;

class CourseController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }

    public function addCourse(Course $course, Topic $topic)
    {
        // $user = \Auth::user();
        // $user->courses()->attach($course);

        return redirect('/study/lesson/'. $course->id);
    }

    public function Topics(Course $course, Topic $topic){

        $authUser = auth()->user()->id; 

        $user_progress = Progress::where('user_id', $authUser)->where('course_id', $course->id)->get()->all();    
        
        return view('lessons.index', compact('course', 'user_progress'));

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

    public function User_course_deletion(Course $course){
        //user authentication
        $authUser = auth()->user();    
        // checking if the payment has already been made for the course
        // $user_payment = Payment::where('user_id', $authUser->id)->where('course', $course->name)->first()->delete();
        // deleting from the many to many relationship
        $user_courses = $authUser->courses->where('course_id', $course->id)->first();
        $user_courses->delete();

        return response()->json(['status', "Course has been deleted from your account successfully \n Note: to retake the course payment has to be made again"]);
    }

}
