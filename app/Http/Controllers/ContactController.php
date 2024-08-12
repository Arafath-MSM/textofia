<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Log;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function sendmail(Request $request)
    {       
        $request->validate([
            'fname' => 'required',
            'lname' => 'required',
            'fname' => 'required|alpha',
            'lname' => 'required|alpha',
            'email' => 'required|email',
            'description' => 'required|min:5',
        ],[
            'fname.required' => 'The first name field is required.',
            'lname.required' => 'The last name field is required.',
            'fname.alpha' => 'The first name must only contain letters.',
            'lname.alpha' => 'The last name must only contain letters.',
            'description.required' => 'The description field is required.',
            'description.min' => 'The description must be at least 5 characters in length.',
        ]);

        $data = ['fname' => $request->fname, 'lname' => $request->lname,'email' => $request->email,'solution' => $request->solution,'description' => $request->description];

        try {
            Mail::send('mail.contact_mail', $data, function ($message) use ($data) {
                $message->from(config('mail.from.address'), config('mail.from.name'));
                $message->subject("An inquiry on ". config('app.name'));
                $message->to(setting('contact_email'));
                $message->bcc('sajeev@ontomatrix.com');
            });
        } catch (\Exception $e) {
            Log::info($e->getMessage());
        }


        try {
            Mail::send('mail.contact_mail_user', $data, function ($message) use ($data) {
                $message->from(config('mail.from.address'), config('mail.from.name'));
                $message->subject("Thank you for your inquiry!");
                $message->to($data['email']);
            });
        } catch (\Exception $e) {
            Log::info($e->getMessage());
        }

        return redirect()->back()->with('success', 'Thank you for your inquiry. One of our customer care team members will be in touch with you via email.');
    }
}
