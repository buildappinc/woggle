<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class AdminLoginController extends Controller
{
    //
    public function __construct(){
        $this->middleware('guest:admin');
    }

    public function showLoginForm(){
        return view('Admin.admin-login');
    }

    public function login(Request $request){
        //validation for the input
        $request->validate([
            'email' => 'required | email',
            'password' => 'required | min:8 '
        ]);

        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password'=> $request->password], $request->remember)) {
            return redirect()->intended(route('admin.dashboard'));
        }

        return back()->withErrors(['email'=>'wrong or invalid email address'], ['password', 'password do not match our records']);
    }

    
}
