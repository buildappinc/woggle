<?php

namespace App\Http\Controllers;


use App\Http\Requests;
use App\Http\Controllers\Controller;
use Paystack;
use App\Payment;
use App\Progress;
use App\User;
use App\Course;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $authUser = auth()->user()->id;    
       
        $payment_user = Payment::where('user_id', $authUser)->get()->all();

        $courses = auth()->user()->courses->all();

        $progress = Progress::where('user_id', $authUser)->pluck('course_id')->all();

        return view('mycourses', compact('progress', 'courses', 'payment_user'));
       
    }

    public function edit(User $user)
    {
        return view('User_Dashboard.edit');
    }

    public function updateCourse(Request $request, User $user)
    {
        // dd($request->all());
        // validation for the user
        $data = $request->validate([
            'fname' => 'required', 
            'lname' => 'required', 
            'oname' => '', 
            'email' => 'email | required', 
            'gender' => 'required',
            'image' => 'required | image |mimes:jpeg,png,jpg'
        ]);
    

        if ($request->hasFile('image')){
            $image = $request->file('image');
            $file_name = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/profile/'.$file_name);
            
            Image::make($image)->fit(128,128)->save($location, 80);
        } 
        

        $user->update([
            'fname' => $data['fname'], 
            'lname' => $data['lname'], 
            'oname' => $data['oname'], 
            'email' => $data['email'], 
            'gender' => $data['gender'], 
            'image' => $file_name
        ]);

        return redirect('/mycourses/');
    }

    public function deleteCourse(User $user){
        dd($user);
    }

    public function QuizSection(Course $course){
        return view('User_Dashboard.UserQuiz.courseQuiz');
    }



    
}
