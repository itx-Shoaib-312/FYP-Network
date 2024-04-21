<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\MessageRecieved;
use App\Models\Contact;

class ContactController extends Controller
{
    public function get_contact()
    {
        return view('contact.index');
    }

    public function admin_contact()
    {
        $contacts=Contact::latest()->get();
        return view('Admin-contact',compact('contacts'));
    }
    public function sendmessage(Request $request)
    {
        $validatedData=$request->validate([
         'name'=>'required',
         'email'=>'required',
         'message'=>'required|string',
        ]);
        $contact=new Contact();
        $contact->name= $validatedData['name'];
        $contact->email=$validatedData['email'];
        $contact->message= $validatedData['message'];
        $contact->save();

        Mail::to('shanzamuzaffar292@gmail.com')->send(new MessageRecieved(
            $validatedData['name'],
            $validatedData['email'],
            $validatedData['message']
        ));

        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }
}
