<?php

namespace App\Http\Controllers\Api;

use App\Helpers\Api;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Stripe\PaymentIntent;
use Stripe\Stripe;
class PaymentController extends Controller
{
    public function createPaymentIntent(Request $request){

        Stripe::setApiKey('sk_test_51Epy7YEyVDCb4yfROYFHci7RMVgM5lZdeVIq4kgLnkUYYsZhV6Xw4cNOEHIPbf0r88CwfGDmV3vtmDfwdVjimbkZ007WEAmF99');
        $paymentIntent = PaymentIntent::create([
            'amount' => $request->price * 100,
            'currency' => 'eur', // Replace with your country's primary currency
            'automatic_payment_methods' => [
                'enabled' => true,
            ],
            // Remove if you don't want to send automatic email receipts after successful payment
            "receipt_email" => 'ihuzaifasocial@gmail.com'
        ]);
        return Api::setResponse('intent',$paymentIntent);
    }
}
