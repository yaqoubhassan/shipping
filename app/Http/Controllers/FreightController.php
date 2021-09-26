<?php

namespace App\Http\Controllers;

use View;
use App\Freight;
use App\FreightDetails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FreightController extends Controller
{
    //
    public function track(Request $request){
        $information = Freight::where('tracking_number', '=', $request->tracking_number)->first();
        if($information){
            return response()->json([
                'information' => $information,
                'redirect' => route('tracking-info', ['id' => $request->tracking_number]),
                'responseCode' => '200',
            ],200);
        }

        return response()->json([
            'error' => 'No shipment found for ' . $request->tracking_number,
            'responseCode' => '400',
        ], 400);
    }

    public function getInfo($number){
        $information = Freight::where('tracking_number', '=', $number)->first();
        if($information){
            $details = $information->details;
            return view('freight.shippinginfo', compact('information','details'));
        }
        return view('freight.trackshipment', compact('number'))->withErrors(['errors' => 'The tracking number you entered is invalid. Try again']);
    }
}
