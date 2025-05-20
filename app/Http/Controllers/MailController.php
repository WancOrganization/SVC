<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    //
    public function sendMail(Request $request)
    {
        $to = "spacevalves25@gmail.com";
        $email = $request->email;
        $subject = $request->subject;
        $contact = $request->contact;
        $name = ucwords($request->name);
        $msg = $request->message;
        Mail::to($to)->send(new ContactMail($email, $msg, $subject, $contact));
        return redirect()->back()->with('Success', 'Email sent successfully!');
    }
}
