<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class MerchantController extends Controller
{
    public function toCbeBirr(Response $response, Request $request){
        // $tmp = TempAmount::create(['amount' => $request['amount']]);
        $till = '';
        $amount = '';
        $compName = '';

        
        //send the data received from merchant to the API
        $response =  Http::acceptJson()->post('http://192.168.0.169/cbebirrpg/api/CBEBirrGateWay/GetOrder', [
            'Till' => $request['till'],
            'Amount' => $request['amount'],
            'UID' => $request['UID'],
            'UP' => $request['UP']
        ]);

        //share variables throughout the views
        View::share('amount', $amount);
        View::share('till', $till);
        View::share('compName', $compName);
        
        // dd($response);
        $merchant = json_decode($response->getBody());

        if(count($merchant) == 0){
            echo "error has occured";
            return null;
        }
        foreach($merchant as $merch){
            $compName = $merch->CompName;
            $till = $merch->Till;
            $amount = $merch->Amount;
        }

        return inertia('Home', [
            'amount' => '600',
            'till' => '002',
            'compName' => 'Bluesom'
        ]);
    }
    public function validateMerchant(Request $request){
        return Inertia::render('AcceptPhoneNumber', [
            'amount' => $request->amount,
            'till' => $request->till,
            'compName' => $request->compName
        ]);
    }
}
