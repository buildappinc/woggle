<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Paystack;
use App\Payment;

class PaymentController extends Controller
{
    public function index(){
        return view('payment.index');
    }

     /**
     * Redirect the User to Paystack Payment Page
     * @return Url
     */
    public function redirectToGateway()
    {
        return Paystack::getAuthorizationUrl()->redirectNow();
    }

    /**
     * Obtain Paystack payment information
     * @return void
     */
    public function handleGatewayCallback()
    {
        $paymentDetails = Paystack::getPaymentData();
        $database_details  = $paymentDetails['data']['customer'];
        // dd($database_details);

        // Auth::user()->id;
        // dd(\Auth::user()->fname);
        $authUser = \Auth::user()->id;

        $userData = new Payment();
        $userData->user_id = $authUser;
        $userData->customer_id = $database_details['id'];
        $userData->email = $database_details['email'];
        $userData->customer_code = $database_details['customer_code'];

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
