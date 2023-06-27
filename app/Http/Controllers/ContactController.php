<?php

namespace App\Http\Controllers;

use App\Mail\HelloMail;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class ContactController extends Controller
{
    public function submits()
    {
        $contact = new Contact();
        $contact->name = request('name');
        $contact->email = request('email');
        $contact->save();

        
        Mail::to($contact->email)
        ->send(new HelloMail());
        
      

        // Redirect the user back or to a success page
        return redirect()->back()->with('success', 'Your message has been sent!');
    }
}
