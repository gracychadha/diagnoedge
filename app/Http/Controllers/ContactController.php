<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function store(Request $request)
    {
       
    // Validation
    $request->validate([
        'fullname'         => 'required|string|max:255',
        'email'            => 'required|email|max:255',
        'phone'            => 'required|string|max:20',
        'subject'          => 'required|string|max:255',
        'message'          => 'nullable|string|max:5000',
    ]);

  

    Contact::create([
        'fullname'         => $request->fullname,
        'email'            => $request->email,
        'phone'            => $request->phone,
        'subject'          => $request->subject,
        'message'          => $request->message,
        'ip'               => $request->ip(),
    ]);

    return redirect()->back()->with('success', 'Thankyou for contacting us , We will get back to you soon !!!!');
    }
}
