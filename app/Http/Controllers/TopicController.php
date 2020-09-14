<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Topic;
use App\Course;
use App\Section;

class TopicController extends Controller
{
    
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function destroyTopic(Topic $topic){

        $topic->delete();
        return redirect('/admin/courses');
    }

    public function playground(Request $request, Course $course, Topic $topic){

        return view('Topics.topicForm', compact('course', 'topic'));
    }

    public function playgroundStore(Request $request, Course $course){
        $data =  $request->validate([
            'name' => 'required',
            'course_id' => 'required'
        ]);

        Topic::create($data);

        return redirect('/admin/courses/'. $course->id .'/edit')->with('message', 'Topic: '.$request->name.' Added Successfully');
    }

    public function editTopicPlayground(Course $course, Topic $topic){

        return view('Topics.editTopic', compact('course', 'topic'));
    }

    public function editTopicPlaygroundUpdate(Course $course, Topic $topic){

        $data =  request()->validate([
            'name' => 'required',
            'course_id' => 'required'
        ]);


        $topic->update($data);

        return redirect('/admin/courses');
    }

    public function destroyPlaygroundTopic(Topic $topic ){
        $topic->delete();
        // return redirect('/admin/courses');
        return response()->json(['status'=> 'Section deleted successfully']);
    }
}
