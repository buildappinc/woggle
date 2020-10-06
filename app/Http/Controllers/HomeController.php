<?php

namespace App\Http\Controllers;


use App\Http\Requests;
use App\Http\Controllers\Controller;
use Paystack;
use App\Payment;
use App\Progress;
use App\User;
use App\Course;
use App\CourseUser;
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

        $user = auth()->user();

        $user->notify(new App\Notifications\UserStatus(User::findOrFail($authUser)));

        // looping through
        foreach ($courses as $key => $value) {
            $user_course = CourseUser::where('user_id', $authUser)->where('course_id', $value->id)->first();            
        }

        $progress = Progress::where('user_id', $authUser)->pluck('course_id')->all();

        return view('mycourses', compact('progress', 'courses', 'payment_user', 'user_course'));
       
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

    public function deleteUser(User $user){

        // deleting the user and all the relationships
        //course progress deletion
        $user_course_deletion = Progress::where("user_id", $user->id)->get()->first();
        if ($user_course_deletion) {
            $user_course_deletion->delete();
        } else {
            $user_payment_deletion = Payment::where("user_id", $user->id)->get()->first();
            if ($user_payment_deletion) {
                $user_payment_deletion->delete();
            }
            $user->delete();
            return response()->json(['status' => $user->name . "'s account has successfully been deleted"]);
        }

    }

    public function QuizSection(Course $course){
        return view('User_Dashboard.UserQuiz.courseQuiz', compact('course'));
    }



    
}
