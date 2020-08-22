<?php

namespace App\Http\Controllers\Auth;

use App\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class AdminRegisterController extends Controller
{

    public function __construct(){
        $this->middleware('guest:admin');
    }

    public function showRegisterForm(){
        return view('Admin.admin-register');
    }

    public function register(Request $request){

        $data = $request->validate([
            'name' => 'required | string', 
            'job_title' => 'required | string',
            'email' => 'required | email | max:255 | unique:admins',
            'gender' => 'required | string',
            'password' => 'required | string  | min:8 | confirmed', 
        ]);

        Admin::create([
            'name' => $data['name'], 
            'job_title' => $data['job_title'],
            'email' => $data['email'], 
            'gender' => $data['gender'], 
            'password' => Hash::make($data['password'])
        ]);

        return redirect()->intended(route('admin.dashboard'));
    }
}
