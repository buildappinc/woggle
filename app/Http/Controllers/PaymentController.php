<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Paystack;
use App\Payment;
use App\Course;
use App\AdminNotification;

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
        // checking if the user already has a course
        $user = \Auth::user();
        $course_check = $user->courses;
        $course_user_check =  $course_check->where('id', $course->id)->first();
        
        if (!$course_user_check) {
            if (request()->amount < $course->price) {
                return redirect()->back()->with('error', "Amount entered is less than the price of the course");
            }
            
            return Paystack::getAuthorizationUrl()->redirectNow();
        }
        return redirect()->route('home')->with("warning", "Course has already been registered for");
        
    }

    /**
     * Obtain Paystack payment information
     * @return void
     */
    public function handleGatewayCallback()
    {        
        $paymentDetails = Paystack::getPaymentData();        
        
        $database_details  = $paymentDetails['data'];
        $hello = $database_details['customer'];
        $transaction_id = $paymentDetails['data']['id'];

         // get course based on the id 
        $course = Course::findOrFail($database_details['metadata']['course_user']);

        $authUser = auth()->user()->id;    
        
        $DATADECLARATION = auth()->user()->lname." ".auth()->user()->fname." ". " just made payment and has successfully enrolled for the course ".$course->name;
        $adminNotice = new AdminNotification(); 
        $adminNotice->data = $DATADECLARATION; 
        $adminNotice->save();

        $userData = new Payment();
        $userData->user_id = $authUser;
        $userData->customer_id = $transaction_id;
        $userData->reference = $database_details['reference'];
        $userData->amount = $database_details['amount'];
        $userData->channel = $database_details['channel'];
        $userData->status = $database_details['status'];
        $userData->currency = $database_details['currency'];
        $userData->email = $hello['email'];
        $userData->course = $course->name;
        $userData->customer_code = $hello['customer_code'];

        // saving the details into the database
        $userData->save();
        
        // checking if the status is either true or false
        if ($paymentDetails['status'] === false) {
            return redirect()->back()->with('error', $paymentDetails['message']);
        } else {
            $user = \Auth::user();
            $user->courses()->attach($course);
            return redirect("/mycourses")->with('success', $paymentDetails['message'] . " You have successfully enrolled for a course ");
        }

    }
    
}
