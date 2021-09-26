<?php

namespace App\Http\Controllers;

use App\Mail\ContactUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MiscellaneousController extends Controller
{
    //
    public function contactUs(Request $request){
        try{
            $markdown = new ContactUs($request->all());
            if($markdown == 'error')
                return response()->json([
                    'error' => 'Sorry an error occured. Try again',
                    'responseCode' => 400,
                ], 400);
            
            \Log::debug(['email' => config('project.appemail')]);
            $contactUs = Mail::to(config('project.appemail'))->send($markdown);
            return response()->json([
                'message' => 'Thank you for contacting us. We will get back to you shortly',
                'responseCode' => 200,
            ],200);
        } catch(Exception $e){
            return response()->json([
                'error' => 'Sorry an error occured. Try again',
                'responseCode' => 400,
            ],400);
        }

    }
}
