<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        return view("front.home.index");
    }

    public function aboutus()
    {
        return view("front.home.about-us");
    }

    public function contactus()
    {
        return view("front.home.contact-us");
    }
  
    public function pages()
    {
        return view("front.home.pages");
    }


}



