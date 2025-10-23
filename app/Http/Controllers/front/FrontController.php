<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
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
        $request->validate([
            "name" => "required|string|max:150",
            "email" => "required|string|max:150",
            "phone_no" => "required|string|max:150",
            "message" => "required|string|max:500",
        ]);

        $contact = new Contact();
        
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone_no = $request->phone_no;
        $contact->message = $request->message;
        $contact->save();

        return back()->with('success', 'Your message has been sent successfully!');
    }


















}