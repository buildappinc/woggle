<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\Section;
use App\Topic;


class SectionController extends Controller
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
    // public function sectionForm(Section $section){

    //     $topics = Topic::all();

    //     return view("Section.sectionForm", compact('topics', 'section'));
    // }

    // public function store(Request $request){

    //     $data = $request->validate([
    //         'header' => '',
    //         'content' => 'required',
    //         'topic_id' => 'required'
    //     ]);

    //     Section::create($data);

    //     return redirect('/admin/courses');

    // }

    public function editSection(Section $section){
        $topics = Topic::all();

        return view('Section.editSection', compact('topics', 'section'));
    }

    public function updateSection(Section $section){
        $data = request()->validate([
            'header' => '',
            'content' => 'required',
            'topic_id' => 'required'
        ]);

       $section->update($data);   

       return redirect('/admin/courses');
    }

    public function destroySection(Section $section){

        $section->delete();

        return redirect('/admin/courses');
    }

    public function GetLesson(Course $course, Topic $topic, Section $section){
    
        return view("Section.sectionForm", compact('topic', 'section', 'course'));
    }

    public function PostLesson(Request $request, Course $course){
        $data = $request->validate([
            'header' => '',
            'content' => 'required',
            'topic_id' => 'required'
        ]);

        Section::create($data);

        return redirect('/admin/courses/'. $course->id .'/edit')->with('success', "Lesson has been added successfully");
    }

    public function EditLessonForm(Topic $topic, Section $section){

        return view('Section.editSection', compact('topic', 'section'));
    }

    public function EditLesson(Topic $topic, Section $section){
        $data = request()->validate([
            'header' => '',
            'content' => 'required',
            'topic_id' => 'required'
        ]);

       $section->update($data);   

       return redirect('/admin/courses');
    }

    public function DeleteLesson(Section $section){
        $section->delete();

        return response()->json(['status'=> 'Section deleted successfully']);
    }
    
}
