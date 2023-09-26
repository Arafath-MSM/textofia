<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Log;
use App\Models\Newsletter;
use Validator;

class SubscriptionController extends Controller
{
    public function subscribe(Request $request) 
    {
        $validator = Validator::make($request->all(),[
            'email' => 'required|email|unique:newsletters',

        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => 'Validation error',
                'errors' => $validator->errors(),
            ], 400);
        }

        $nesletter = new Newsletter();
        $nesletter->email = $request->email;
        $nesletter->save();
        
        $data = [
            'email' => $request->email,
        ];

        try {
            Mail::send('mail.newsletter_welcome_mail', $data, function ($message) use ($data) {
                $message->from(config('mail.from.address'), config('mail.from.name'));
                $message->subject("THANK YOU FOR SIGNING UP!");
                $message->to($data['email']);
            });
        } catch (\Exception $e) {
            Log::info($e->getMessage());
        }

        try {
            Mail::send('mail.newsletter_admin_mail', $data, function ($message) use ($data) {
                $message->from(config('mail.from.address'), config('mail.from.name'));
                $message->subject("New Subscription Notification");
                $message->to(setting('contact_email'));
            });
        } catch (\Exception $e) {
            Log::info($e->getMessage());
        }

        return response()->json([
            'status'=>'success',
            'message' => 'Thank you for signing up!'],200);
    }
}
