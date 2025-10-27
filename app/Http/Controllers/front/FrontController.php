<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\UserContactMail;
use App\Mail\AdminContactMail;
use App\Models\Contact;

class FrontController extends Controller
{
    public function index_1()
    {
        return view("front.home.index_1");
    }
    public function index_3()
    {
        return view("front.home.index_3");
    }
    public function index_4()
    {
        return view("front.home.index_4");
    }
    public function index_5()
    {
        return view("front.home.index_5");
    }
    public function index_6()
    {
        return view("front.home.index_6");
    }
    public function index_7()
    {
        return view("front.home.index_7");
    }
    public function index_8()
    {
        return view("front.home.index_8");
    }
    public function index_9()
    {
        return view("front.home.index_9");
    }
    public function index_10()
    {
        return view("front.home.index_10");
    }
    public function index_11()
    {
        return view("front.home.index_11");
    }
    public function index_12()
    {
        return view("front.home.index_12");
    }
    public function index_13()
    {
        return view("front.home.index_13");
    }
    public function index_14()
    {
        return view("front.home.index_14");
    }
    public function index_15()
    {
        return view("front.home.index_15");
    }
    public function index_16()
    {
        return view("front.home.index_16");
    }
    public function index_17()
    {
        return view("front.home.index_17");
    }
    public function index_18()
    {
        return view("front.home.index_18");
    }
    public function index_19()
    {
        return view("front.home.index_19");
    }

    public function accounts()
    {
        return view("front.home.accounts");
    }

    public function appointment()
    {
        return view("front.home.appointment");
    }









    public function aboutus()
    {
        return view("front.about.about-us");
    }

    public function services()
    {
        return view("front.service");
    }

    public function contactus()
    {
        return view("front.contact-us");
    }

    public function store(Request $request)
    {
        // Return Associated array (key value pairs )

        $validated = $request->validate([
            "your_name" => "required|string|max:150",
            "your_email" => "required|email|max:150",
            "your_phone_no" => "required|string|max:150",
            "your_message" => "required|string|max:500",
        ], [
            "your_name.required" => "Please enter your full name.",
            "your_email.required" => "We need your email address to contact you.",
            "your_email.email" => "Please enter a valid email address.",
            "your_phone_no.required" => "Your phone number is required.",
            "your_message.required" => "Please write a message before submitting."
        ]);

        $contact = new Contact();

        // Associated array (key value pairs )

        $contact->name = $validated['your_name'];
        $contact->email = $validated['your_email'];
        $contact->phone_no = $validated['your_phone_no'];
        $contact->message = $validated['your_message'];

        $contact->save();

        $contactData = [
            'name' => $validated['your_name'],
            'email' => $validated['your_email'],
            'phone_no' => $validated['your_phone_no'],
            'message' => $validated['your_message'],
        ];

        // ✅ Step 4: Send email to user (confirmation)
        Mail::to($validated['your_email'])->send(new UserContactMail($contactData));

        // ✅ Step 5: Send email to admin (notification)
        Mail::to('romanehsan30@gmail.com')->send(new AdminContactMail($contactData));

        return back()->with('success', 'Your message has been sent successfully!');
    }
}