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
        $contact = $request->contact;
        $subject = $request->subject;
        $message = $request->message;
        $name = ucwords($request->name);
        $msg = "
        Name: $name,<br>
        Email: $email,<br>
        Contact no.: $contact,<br>
        <p>$message</p>
        ";
        Mail::to($to)->send(new ContactMail($email, $msg, $subject, $contact));
        return redirect()->back()->with('Success', 'Email sent successfully!');
    }
}
