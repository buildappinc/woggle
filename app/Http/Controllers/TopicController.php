<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Topic;
use App\Course;
use App\Section;

class TopicController extends Controller
{
    // public function topicForm(Topic $topic){
    //     $course = Course::all();

    //     return view('Topics.topicForm', compact('course', 'topic'));
    // }

    // public function store(Request $request){
    //     //validation for the topics 
       
    //    $data =  $request->validate([
    //         'name' => 'required',
    //         'course_id' => 'required'
    //     ]);

    //     Topic::create($data);

    //     return redirect()->route('section.form')->with('message', 'Topic Added. Add new section for particular topic');
       
    // }

    public function editTopic(Topic $topic){
        $course = Course::all();

        return view('Topics.editTopic', compact('course', 'topic'));
    }

    public function updateTopic(Topic $topic){
        $data =  request()->validate([
            'name' => 'required',
            'course_id' => 'required'
        ]);

        $topic->update($data);

        return redirect('/admin/courses');
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

        return redirect('/admin/courses/'. $course->id .'/edit')->with('message', 'Topic Added. Add new section for particular topic');
    }
}
