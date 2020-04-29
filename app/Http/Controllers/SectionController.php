<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Section;
use App\Topic;


class SectionController extends Controller
{
    public function sectionForm(){

        $topics = Topic::all();

        return view("Section.sectionForm", compact('topics'));
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

    
}
