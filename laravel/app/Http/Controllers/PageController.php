<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view("welcome");
    }

    public function elements()
    {
        return view("elements");
    }

    public function about_us()
    {
        return view("about_us");
    }

    public function services()
    {
        return view("services");
    }

    public function pricing()
    {
        return view("pricing");
    }

    public function contact()
    {
        return view("contact");
    }

    public function contact_send(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'nullable|regex:/^\+?[0-9]{10,15}$/',   // Valid phone number with optional + and 10-15 digits
            'email' => 'required|email|max:255',               // Valid email
            'message' => 'required|string|max:5000',    // Message should be at least 10 characters
        ], [
            'name.required' => 'Het naamveld is verplicht.',
            'phone.regex' => 'Vul een geldig telefoonnummer in (10-15 cijfers).',
            'email.required' => 'Het e-mailveld is verplicht.',
            'message.required' => 'Het berichtveld is verplicht.',
            'message.string' => 'Het bericht moet tekst bevatten.',
        ]);
        #ToDo: Maybe send a mail?!?
        return redirect()->back()->with('success', 'Je bericht is succesvol verzonden!');
    }

    public function portfolio()
    {
        return view("portfolio");
    }

    public function generic()
    {
        return view("generic");
    }

}
