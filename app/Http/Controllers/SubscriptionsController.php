<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SubscriptionsController extends Controller
{
    // public function update($planId)
    // {
    //     $apiUrl = config('apiUrl');
    //     $response = Http::post($apiUrl . 'Payments', [
    //         'userId' => session('id'),
    //         'planId' => $planId,
    //     ])->json();

    //     $response = Http::post($apiUrl . 'Users/' . session('id'), [
    //         'startsAt' => now(),
    //         'endsAt' => now()->addDays(30),
    //         'userId' => session('id'),
    //         'planId' => $planId,
    //         'paymentId' => $response['id'],
    //     ])->json();

    //     return redirect()->route('payment.pay');
    // }

    public function pay(Request $request, $planId)
    {
        $apiUrl = config('apiUrl');
        $response = Http::post($apiUrl . 'Payments', [
            'amount' => $request->input('amount'),
            'PaymentDate' => now(),
        ])->json();

        $response = Http::post($apiUrl . 'Suscriptions', [
            'startsAt' => now(),
            'endsAt' => now()->addDays(30),
            'userId' => session('id'),
            'planId' => $planId,
            'paymentId' => $response['id'],
        ])->json();

        return redirect()->route('payment.pay');
    }

    public function subscriptionByCountry(Request $request){
        $grafica = Http::get('http://localhost:4000/api/amountSuscriptionsByCountry');

        return response($grafica, 200)->header('Content-type', 'application/json');
    }
}
