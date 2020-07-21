<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Paystack;
use Auth;
use App\User;

class PaymentController extends Controller
{

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
        $user_id = Auth::user()->id;
        $user_role = Auth::user()->role;


        $user = User::where('id', $user_id)->update(['payment_status' => 'paid'] );

        return redirect($user_role);


        // $paymentDetails = Paystack::getPaymentData();

        // dd($paymentDetails);
        // // Now you have the payment details,
        // // you can store the authorization_code in your db to allow for recurrent subscriptions
        // // you can then redirect or do whatever you want
    }
}