<?php

namespace App\Http\Controllers; // ✅ Required namespace

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class ContactController extends Controller
{
    public function showForm()
    {
        return view('contact');
    }

    public function sendForm(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        Contact::create($validated);

        Mail::to('rahulanilpunalur@gmail.com')->send(new ContactFormMail($validated));

        return redirect('/thank-you')->with('success', 'Message sent!');
    }
}
