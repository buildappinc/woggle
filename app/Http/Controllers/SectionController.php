<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Section;
use App\Topic;


class SectionController extends Controller
{
    public function sectionForm(Section $section){

        $topics = Topic::all();

        return view("Section.sectionForm", compact('topics', 'section'));
    }

    public function store(Request $request){

        $data = $request->validate([
            'header' => '',
            'content' => 'required',
            'topic_id' => 'required'
        ]);

        Section::create($data);

        dd($request->all());

    }

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

    
}
