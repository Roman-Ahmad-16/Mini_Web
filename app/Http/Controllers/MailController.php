<?php

namespace App\Http\Controllers;

use App\Mail\welcomeEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    function sendEmail()
    {
        $to = "romanehsan30@gmail.com";   // Receiver email
        $msg = "dummy mail";              // Message you want to send
        $subject = "Project Practice";    // Email subject

        // Send email using Mailable class
        Mail::to($to)->send(new welcomeEmail($msg, $subject));
    }
}

