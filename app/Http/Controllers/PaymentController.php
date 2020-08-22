<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Paystack;
use App\Payment;
use App\Course;

class PaymentController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }

    public function index(Course $course){
        return view('payment.index', compact('course'));
    }

     /**
     * Redirect the User to Paystack Payment Page
     * @return Url
     */
    public function redirectToGateway(Course $course)
    {        
        dd(request()->amount);

        // $user = \Auth::user();
        // $user->courses()->attach($course);

        return Paystack::getAuthorizationUrl()->redirectNow();
    }

    /**
     * Obtain Paystack payment information
     * @return void
     */
    public function handleGatewayCallback($course)
    {        
        $paymentDetails = Paystack::getPaymentData();
        
        $database_details  = $paymentDetails['data'];
        $hello = $database_details['customer'];
        $transaction_id = $paymentDetails['data']['id'];

        // Auth::user()->id;
        // dd(\Auth::user()->fname);
        $authUser = auth()->user()->id;        

        $userData = new Payment();
        $userData->user_id = $authUser;
        $userData->customer_id = $transaction_id;
        $userData->reference = $database_details['reference'];
        $userData->amount = $database_details['amount'];
        $userData->channel = $database_details['channel'];
        $userData->status = $database_details['status'];
        $userData->currency = $database_details['currency'];
        $userData->email = $hello['email'];
        $userData->customer_code = $hello['customer_code'];

        // saving the details into the database
        $userData->save();

        
        // checking if the status is either true or false
        if ($paymentDetails['status'] === false) {
            return redirect()->back()->with('error', $paymentDetails['message']);
        } else {
            return redirect("/mycourses")->with('success', $paymentDetails['message']);
        }

        // dd($paymentDetails);
        // Now you have the payment details,
        // you can store the authorization_code in your db to allow for recurrent subscriptions
        // you can then redirect or do whatever you want
    }
    
}
