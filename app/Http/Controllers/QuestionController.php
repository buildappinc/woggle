<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question; 
use App\Course;
use App\Userresult;

class QuestionController extends Controller
{
    //

    public function create(Request $request, Course $course)
    {   
        $validator = $request->validate([
            'name' => ['required'],
            'options1' => ['required'],
            'options2' => ['required'],
            'options3' => ['required'],
            'options4' => ['required'], 
            'answer' => ['required']
        ]);

        $question = new Question(); 
        $question->course_id = $course->id;
        $question->name = $request->name;
        $question->answer = $request->answer;
        $question->options = json_encode(array('options1'=>$request->options1, 'options2'=>$request->options2, 'options3'=>$request->options3, 'options4'=>$request->options4));
        $question->save();   

        return redirect('/admin/courses/'. $course->id .'/edit')->with("answer", "Question Added");

    }

    public function submit(Request $request, Course $course){
        $data = $request->all();
        $yes_ans = 0;
        $no_ans = 0;
        $result = array();
        for ($i=1; $i <= $request->index ; $i++) { 
            if (isset($data['question'.$i])) {
                $question = Question::where('id', $data['question'.$i])->get()->first();
                if ($question->answer == $data['ans'.$i]) {
                    $result[$data['question'.$i]] = "1";
                    $yes_ans++;
                } else {
                    $result[$data['question'.$i]] = "0";
                    $no_ans++;
                }
            }
        }
        
        $result = new Userresult();
        $result->user_id = auth()->user()->id;
        $result->course = $course->name; 
        $result->yes_ans = $yes_ans;
        $result->no_ans = $no_ans;
        $result->result = json_encode($result);
        $result->save();

        return redirect('/mycourses');
        
    }
}
