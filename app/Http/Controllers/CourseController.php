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

    public function destroy(Course $course){
        //dealing with status and updating it 
        //auth user
        $authUser = auth()->user();
        $user_payment = Payment::where('user_id', $authUser->id)->where('course', $course->name)->first();
        $user_course = $authUser->courses->first();

        // updating courses and payment instead of deleting them
        if ($user_course->status == true || $user_payment->status_delete == false) {
            //updating the user course section
            $user_course->status = true;
            $user_payment->status_delete = true;
            $user_payment->update([
                'status_delete' => $user_payment->status_delete
            ]);
            $authUser->courses()->update([
                'status' => $user_course->status
            ]);
            return redirect('/mycourses');
            // return response()->json(['status', "Course has been deleted from your account successfully \n Note: to retake the course payment has to be made again"]);        
        } else {
            $user_course->status = false;
            $user_payment->status_delete = false;
            $user_payment->update([
                'status_delete' => $user_payment->status_delete
            ]);
            $authUser->courses->update([
                'status' => $user_course->status
            ]);
            return redirect('/mycourses');
            // return response()->json(['status', "Course has been deleted from your account successfully \n Note: to retake the course payment has to be made again"]);        
        }
    }

}
