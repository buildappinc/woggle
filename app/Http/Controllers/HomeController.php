<?php

namespace App\Http\Controllers;

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
        return view('mycourses');
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
