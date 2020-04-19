<?php

namespace App\Http\Controllers;

use App\Course;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
   public function index(){
        $courses = Course::all()->take(3);

       return view('welcome', compact('courses'));
   }
}
