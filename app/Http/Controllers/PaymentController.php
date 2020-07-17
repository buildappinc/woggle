<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Payment;

class PaymentController extends Controller
{
    public function index(){
        return view('payment.index');
    }

    public function create(Request $request){
        // checking for form validation 
       $data = $request->validate([
           'card_number' => 'required | Numeric ', 
           'expiry_date' => 'required', 
           'security_code' => 'required', 
           'name' => 'required', 
           'address' => 'required', 
           'phone_Number' => 'required'
       ]); 

        Payment::create($data); 

        return redirect('/');
    }
}
