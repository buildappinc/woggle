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
        $courses = Course::all()->take(3);
        return view('Admin.admin', compact('Admin', 'course', 'courses'));
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

        if ($request->hasFile('image')){
            $image = $request->file('image');
            $file_name = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/courses/'.$file_name);
            
            Image::make($image)->resize(400,300)->save($location, 80);
        } 

    //    if ($request->hasfile('image')) {
    //         $image = request()->image;
    //         $imagePath = $image->store('uploads', 'public');

    //         $Image = Image::make(public_path("storage/{$imagePath}"))->resize(109, 80);
    //         $Image->save(80);
    //    }

        Course::create([
            'name' => $data['name'],
            'price' => $data['price'], 
            'introduction' => $data['introduction'], 
            'image' =>  $file_name, 
            'description' => $data['description']
        ]);

        return redirect('/admin/courses')->with('message', "Course added successfuly. Add new topic based on course");

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

        if (request()->hasFile('image')){
            $image = request()->file('image');
            $file_name = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/courses/'.$file_name);
            
            Image::make($image)->resize(400,300)->save($location, 80);
        } 

        // $imagePath = request()->image->store('uploads', 'public');

        // $Image = Image::make(public_path("storage/{$imagePath}"))->resize(109, 80);
        // $Image->save(80);
 
         $course->update([
             'name' => $data['name'],
             'price' => $data['price'], 
             'introduction' => $data['introduction'], 
             'image' =>  $file_name, 
             'description' => $data['description']
         ]);
        return redirect('/admin/courses/'. $course->id.'/edit')->with('message', "Course has been updated");
    }

    public function destroyCourse(Course $course){

        $course->delete();

        // return redirect()->route('course.view')->with("message", "Course Delete");
        return response()->json(['status'=> 'course deleted successfully']);
    }

    public function changeStatus(Course $course){
        if ($course->status == true) {

            $course->status = false;
            $course->update(['status'=> $course->status]);

            return redirect()->back();
        } else {

            $course->status = true;
            $course->update(['status'=> $course->status]);

            return redirect()->back();
        }
       
    }


   
}
