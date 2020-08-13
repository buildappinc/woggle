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
    public function index(Course $course)
    {
        $authUser = auth()->user()->id;    
        // todo
        // get all the courses the user has subscribed for 
        // find the total number of topics in a course
        // divide 100 by the total number of topics 

        // assign the divided cost to an individual course in he sections part {i'll bab}

        // first try fetching the sections the user has visited

        //working on the payment stuff
        //getting payment user
        $payment_user = Payment::where('user_id', $authUser)->get()->all();

        foreach ($payment_user as $key => $value) {
            $hello = Paystack::fetchTransaction($value->customer_id);
            
        }

        $courses = auth()->user()->courses->all();
        

       foreach (auth()->user()->courses as $key => $value) {
        $CheckUserSection = Progress::where('user_id', $authUser)->where('course_id', $value->id)->get()->all();
       }

        return view('mycourses', compact('payment_id', 'CheckUserSection', 'courses', 'payment_user'));
       
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
            'image' => 'image | mimes:jpeg,png,jgp'
        ]);
        
            // specifying image path
        $imagePath = $request->image->store('profile', 'public');

        $Image = Image::make(public_path("storage/{$imagePath}"))->resize(70, 70);
        $Image->save(80);
        

        $user->update([
            'fname' => $data['fname'], 
            'lname' => $data['lname'], 
            'oname' => $data['oname'], 
            'email' => $data['email'], 
            'gender' => $data['gender'], 
            'image' => $imagePath
        ]);

        return redirect('/mycourses/');
    }



    
}
