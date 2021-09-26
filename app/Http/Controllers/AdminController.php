<?php

namespace App\Http\Controllers;

use App\User;
use App\Freight;
use App\FreightDetails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function addTracking(Request $request){
        $customMessages = [
            'tracking_number.required' => 'You must enter a tracking number for the item',
            'tracking_number.unique' => 'The tracking number already exists for another item',
            'final_destination.required' => 'You must enter a final destination for the item',
            'product_features.required' => 'You must enter product features for the item',
            'postal_product.required' => 'You must enter postal product description for the item',
            'sender.required' => 'You must enter the sender\'s name',
            'sender_address.required' => 'You must enter the sender\'s address',
            'receiver.required' => 'You must enter the receiver\'s name',
            'receiver_address.required' => 'You must enter the receiver\'s address',
        ];
        $validator = Validator::make($request->all(),[
            'tracking_number' => 'required|unique:freights',
            'final_destination' => 'required',
            'product_features' => 'required',
            'postal_product' => 'required',
            'sender' => 'required',
            'sender_address' => 'required',
            'receiver' => 'required',
            'receiver_address' => 'required',
        ], $customMessages);

        if($validator->fails()){
            return response()->json([
                'errors' => $validator->errors(),
                'responseCode' => '400',
            ],400);
        }

        $information = Freight::create($request->all());
        $informations = Freight::get();
        return response()->json([
            'message' => 'Tracking number addedd successfully',
            'view' => View::make('admin.add-tracking', compact('informations'))->render(),
            'responseCode' => '200',
        ],200);
    }

    public function addTrackingDetails(Request $request){
        $customMessages = [
            'note.required' => 'You must enter a note for this detail',
            'description.required' => 'You must enter a description for this detail',
            'date.required' => 'Select a date',
            'current_status.required' => 'You must enter a current status for the detail',
            'current_destination.required' => 'You must enter current_destination for the detail',
            'time.required' => 'You must enter shipment time',
        ];
        $validator = Validator::make($request->all(),[
            'note' => 'required',
            'description' => 'required',
            'current_status' => 'required',
            'date' => 'required',
            'current_destination' => 'required',
            'time' => 'required',
        ], $customMessages);

        if($validator->fails()){
            return response()->json([
                'errors' => $validator->errors(),
                'responseCode' => '400',
            ],400);
        }

        $information = Freight::find($request->tracking_number);
        $detail = new FreightDetails;
        $detail->note = $request->note;
        $detail->description = $request->description;
        $detail->date = $request->date;
        $detail->current_status = $request->current_status;
        $detail->current_destination = $request->current_destination;
        $detail->time = $request->time;
        $save = $information->details()->save($detail);
        $details = FreightDetails::where('freight_id', '=', $request->tracking_number)->get();
        return response()->json([
            'message' => 'Tracking details addedd successfully',
            'view' => View::make('admin.view-details', compact('details'))->render(),
            'responseCode' => '200',
        ],200);
    }

    public function addAdmin(Request $request){
        $customMessages = [
            'name.required' => 'Enter admin\'s name',
            'email.required' => 'Enter admin\'s email address',
            'email.unique' => 'This email address has already taken',
            'password.required' => 'Enter admin\'s password',
        ];
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required',
        ], $customMessages);

        if($validator->fails()){
            return response()->json([
                'errors' => $validator->errors(),
                'responseCode' => '400',
            ],400);
        }

        $request['password'] = Hash::make($request->password);
        $request['username'] = 'psltdadmin' . mt_rand(999, 1999);
        $user = User::create($request->all());

        return response()->json([
            'success' => 'Admin added successfully',
        ],200);
    }

    public function login(Request $request){
        $customMessages = [
            'username.required' => 'Enter your username',
            'password.required' => 'Enter your password',
        ];
        $validator = Validator::make($request->all(),[
            'username' => 'required',
            'password' => 'required',
        ], $customMessages);

        if($validator->fails()){
            return response()->json([
                'errors' => $validator->errors(),
                'responseCode' => '400',
            ],400);
        }

        $credentials = $request->only('username', 'password');
        $user = Auth::attempt($credentials);
        if ($user) {
            Cookie::queue(Cookie::forever('login','true'));
            Cookie::queue(Cookie::forever('A009', $request->username));
            return response()->json([
                'redirect' => route('admin.page'),
                'responseCode' => '200',
            ],200);
        }

        $errors = [
            'errors' => 'Invalid login credentials. Try again',
        ];
        return response()->json([
            'errors' => $errors,
            'responseCode' => '400'
        ],400);
    }

    public function logout(){
        Cookie::queue(Cookie::forget('login'));
        Cookie::queue(Cookie::forget('lastActivity'));
        Auth::logout();
        return redirect()->route('admin.login');
    }

    public function dashboard(){
        $informations = Freight::get();
        return view('admin.page', compact('informations'));
    }

    public function deleteTracking(Request $request){
        $delete = Freight::find($request->id)->delete();
        $informations = Freight::get();
        return response()->json([
            'message' => 'Shipment deleted successfully',
            'view' => View::make('admin.add-tracking', compact('informations'))->render(),
            'responseCode' => '200',
        ], 200);
    }

    public function editTracking(Request $request){
        $customMessages = [
            'final_destination.required' => 'You must enter a final destination for the item',
            'product_features.required' => 'You must enter product features for the item',
            'postal_product.required' => 'You must enter postal product description for the item',
            'sender.required' => 'You must enter the sender\'s name',
            'sender_address.required' => 'You must enter the sender\'s address',
            'receiver.required' => 'You must enter the receiver\'s name',
            'receiver_address.required' => 'You must enter the receiver\'s address',
        ];
        $validator = Validator::make($request->all(),[
            'final_destination' => 'required',
            'product_features' => 'required',
            'postal_product' => 'required',
            'sender' => 'required',
            'sender_address' => 'required',
            'receiver' => 'required',
            'receiver_address' => 'required',
        ], $customMessages);

        if($validator->fails()){
            return response()->json([
                'errors' => $validator->errors(),
                'responseCode' => '400',
            ],400);
        }

        $tracking = Freight::find($request->id);
        $tracking->final_destination = $request->final_destination;
        $tracking->product_features = $request->product_features;
        $tracking->postal_product = $request->postal_product;
        $tracking->sender = $request->sender;
        $tracking->sender_address = $request->sender_address;
        $tracking->receiver = $request->receiver;
        $tracking->receiver_address = $request->receiver_address;
        $tracking->save();

        $informations = Freight::get();
        return response()->json([
            'message' => 'Shipment edited successfully',
            'view' => View::make('admin.add-tracking', compact('informations'))->render(),
            'responseCode' => '200',
        ], 200);
    }

    public function details($id){
        $freight = Freight::find($id);
        $id = $freight->id;
        $details = $freight->details;
        return view('admin.details',compact('details', 'id'));
    }

    public function deleteDetails(Request $request){
        // return response()->json(['info' => $request->all()],200);
        $delete = FreightDetails::find($request->id)->delete();
        $details = FreightDetails::get();
        return response()->json([
            'message' => 'Detail deleted successfully',
            'view' => View::make('admin.view-details', compact('details'))->render(),
            'responseCode' => '200',
        ], 200);
    }

    public function editDetail(Request $request){
        $customMessages = [
            'note.required' => 'You must enter a note for this detail',
            'description.required' => 'You must enter a description for this detail',
            'date.required' => 'Select a date',
            'current_status.required' => 'You must enter a current status for the detail',
            'current_destination.required' => 'You must enter current_destination for the detail',
            'time.required' => 'You must enter shipment time',
        ];
        $validator = Validator::make($request->all(),[
            'note' => 'required',
            'description' => 'required',
            'current_status' => 'required',
            'date' => 'required',
            'current_destination' => 'required',
            'time' => 'required',
        ], $customMessages);

        if($validator->fails()){
            return response()->json([
                'errors' => $validator->errors(),
                'responseCode' => '400',
            ],400);
        }

        $detail = FreightDetails::find($request->id);
        $detail->note = $request->note;
        $detail->description = $request->description;
        $detail->date = $request->date;
        $detail->current_status = $request->current_status;
        $detail->current_destination = $request->current_destination;
        $detail->time = $request->time;
        $save = $detail->save();

        $details = FreightDetails::where('id', '=', $request->id)->get();
        return response()->json([
            'message' => 'Detail edited successfully',
            'view' => View::make('admin.view-details', compact('details'))->render(),
            'responseCode' => '200',
        ], 200);
    }

    public function changePassword(Request $request){
        $customMessages = [
            'old_password.required'  => "You must enter your old password",
            'new_password.required'  => "You must enter a new password",
            'new_password_confirmation.required'  => "You must confirm your new password",
            'new_password.confirmed'  => "Your new password confirmation does not match",
        ];

        $validator = Validator::make($request->all(),[
            'old_password' => 'required',
            'new_password' => 'required|confirmed',
            'new_password_confirmation' => 'required',
        ], $customMessages);


        if($validator->fails())
            return response()->json(['errors' => $validator->errors(), 'responseCode' => '400'], 400);

        $request['username'] = Cookie::get('A009');
        $request['password'] =$request->old_password;
        $credentials = $request->only('username', 'password');
        $user = Auth::attempt($credentials);
        if ($user) {
            $findUser = User::where('username','=',Cookie::get('A009'))->first();
            $findUser->password = Hash::make($request->new_password);
            $findUser->save();
            return response()->json(['message' => 'You have successfully changed your password', 'responseCode' => '200'], 200);
        }

        $errors = [
            'error' => 'You entered a wrong password. Try again.'
        ];
        return response()->json(['errors' => $errors, 'responseCode' => '400'], 400);

    }
}
