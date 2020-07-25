<?php

namespace App\Http\Controllers;


use App\Http\Requests;
use App\Http\Controllers\Controller;
use Paystack;
use App\Payment;

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
    public function index(Course $course, Payment $payment)
    {

        // $paymentUser_id = $payment->user_id;
        // $authUser = \Auth::user()->id;
        // $customer_code = $payment->customer_id;

        // // $hello =  Paystack::fetchTransaction($customer_code);
        // // dd($hello);

        // $curl = curl_init();        
  
        // curl_setopt_array($curl, array(
        //   CURLOPT_URL => "https://api.paystack.co/transaction/26873282",
        //   CURLOPT_RETURNTRANSFER => true,
        //   CURLOPT_ENCODING => "",
        //   CURLOPT_MAXREDIRS => 10,
        //   CURLOPT_TIMEOUT => 30,
        //   CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        //   CURLOPT_CUSTOMREQUEST => "GET",
        //   CURLOPT_HTTPHEADER => array(
        //     "Authorization: Bearer sk_test_1c10736e255f69efc685e426aecbf894c355a2bd",
        //     "Cache-Control: no-cache",
        //   ),
        // ));
        
        // $response = curl_exec($curl);
        // $err = curl_error($curl);
        // curl_close($curl);

        // if ($err) {
        //   echo "cURL Error #:" . $err;
        // } else {
        //   echo $response;
        // }
       
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
