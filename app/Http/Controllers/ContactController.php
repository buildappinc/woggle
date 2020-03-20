<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function create(){
        return view('contact');
    }

    public function store(Request $request){

        $request->validate([
            'First_Name'=> 'required | max:225',
            'Last_name'=> 'required | max:225',
            'email'=>'required | email',
            'msg'=> 'required | max: 1000'
        ]);

        Mail::to('test@test.com')->send(new ContactMail());
        
    }
}
