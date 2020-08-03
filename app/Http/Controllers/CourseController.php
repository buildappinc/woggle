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

        $popCourse = $course->topics; 
        $array = $popCourse->toArray();

        // declaring function for index of section element 
        function searchBykey($id, $array){
            foreach ($array as $key => $value) {
                if ($value['id'] == $id) {
                    $resultSet['key'] = $key;
                    $resultSet['id'] = $value['id'];
                    return $resultSet;
                }
            }
            return null;
        }
        
        $authenticatedUser = \Auth::user()->id;
        $course_id = $course->id;

        // finding the user_id in the progress table
        $User_idProgress = Progress::where('user_id', $authenticatedUser)->get(); 
        $course_check = Progress::where('course_id', $course_id )->get();
        
        
        if (count($User_idProgress) > 0) {
             // checking for user's existence
             if ($authenticatedUser == $User_idProgress[0]->user_id) {
                // dd($authenticatedUser);
                // array check
                if (count($course_check) > 0) {
                    // checking if course already exists in db 
                    if ($course_id == $course_check[0]->course_id) {

                        //getting progress report
                        $progress = Progress::all()->toArray();
                        $section =  $progress[count($progress) - 1]["section_id"];

                        // getting the current section id from the database
                        $section_check = Progress::where('section_id', $section)->get();
                        $section_id = $section_check[0]->section_id;

                        // checking for array index of section element 
                        $searchValue = searchBykey($section_id, $array); 
                        // dd($searchValue["key"]);
                        
                        //finding the next section for a user
                        for ($i=$searchValue["key"]; $i<count($popCourse); $i++) { 

                            $result = $popCourse[$i + 1];
                            // inserting the section id into the database for that user and the course
                            $progress = new Progress();
                            $progress->user_id = $authenticatedUser; 
                            $progress->course_id = $course_id; 
                            $progress->section_id = $result->id;
                
                            $progress->save();
                            

                            return view('lessons.showLessons', compact('course', 'topic'));
                            dd($result->id);
                        }
                        
                    }                     
                }
                else {
                    $progress = new Progress();
                    $progress->user_id = $authenticatedUser; 
                    $progress->course_id = $course->id; 
                    $progress->section_id = $popCourse[0]->id;

                    $progress->save();

                    return view('lessons.showLessons', compact('course', 'topic'));
                }  
            } else {
                dd("hello");
            }
        } else {
            $progress = new Progress();
            $progress->user_id = $authenticatedUser; 
            $progress->course_id = $course->id; 
            $progress->section_id = $popCourse[0]->id;

            $progress->save();

            return view('lessons.showLessons', compact('course', 'topic'));
        }
        
    }

    public function checkCourseExistence(Course $course, Section $section){
        $authenticatedUser = \Auth::user()->id;

        dd($course);
    }



}
