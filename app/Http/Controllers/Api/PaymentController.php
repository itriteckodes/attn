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

        Stripe::setApiKey('sk_test_51JvIZ1Ey3DjpASZjmQpp61o9MDwfEnXHyZIbVE08CiJf3XxMKN93bOlu5MSxiw07yPJwX9kvDezuEugwSNZNkddy00ZCa33RpG');
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
