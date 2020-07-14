<?php

namespace App\Http\Controllers;

use App\Admin;
use App\User;
use App\Course;
use App\Topic;
use App\Section;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;


class AdminController extends Controller
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function viewAdmin(Course $course)
    {
        $Admin = Admin::all()->take(1);
        return view('Admin.admin', compact('Admin', 'course'));
    }

    public function index(){

        $registeredStudents = User::all();

        return view('Admin.index', compact('registeredStudents'));
    }

    public function show(Course $course){

        return view('Admin.showForm', compact('course'));
    }

    public function store(Request $request){
        // validation for the courses
        $data = $request->validate([
            'name' => 'required', 
            'price' => 'required', 
            'introduction' => 'required', 
            'image' => 'required | image |mimes:jpeg,png,jpg',
            'description' => 'required | max:1000'
        ]);

       if ($request->hasfile('image')) {
            $imagePath = request()->image->store('uploads', 'public');

            $Image = Image::make(public_path("storage/{$imagePath}"))->resize(109, 80);
            $Image->save(80);
       }

        Course::create([
            'name' => $data['name'],
            'price' => $data['price'], 
            'introduction' => $data['introduction'], 
            'image' => $imagePath, 
            'description' => $data['description']
        ]);

        return redirect()->route('topic.form')->with('message', "Course added successfuly. Add new topic based on course");

    }

    public function viewCourses(){

        $course = Course::all();

        return view('Admin.viewCourse', compact('course'));
    }

    public function showCourse(Course $course){
        
        return view('Admin.showCourse', compact('course') );
    }

    public function editCourse(Course $course){
         
        return view('Admin.editCourse', compact('course'));
    }

    public function updateCourse(Course $course){
            // validation for the courses
        $data = request()->validate([
            'name' => 'required', 
            'price' => 'required', 
            'introduction' => 'required', 
            'image' => 'required | image |mimes:jpeg,png,jpg',
            'description' => 'required | max:1000'
        ]);


        $imagePath = request()->image->store('uploads', 'public');

        $Image = Image::make(public_path("storage/{$imagePath}"))->resize(109, 80);
        $Image->save(80);
 
         $course->update([
             'name' => $data['name'],
             'price' => $data['price'], 
             'introduction' => $data['introduction'], 
             'image' => $imagePath, 
             'description' => $data['description']
         ]);
        return redirect('/admin/courses/'. $course->id)->with('message', "Course has been updated");
    }

    public function destroyCourse(Course $course){

        $course->delete();

        return redirect()->route('course.view')->with("message", "Course Delete");
    }


   
}
