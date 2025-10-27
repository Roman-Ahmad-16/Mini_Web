<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;

class UserContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $contact;

    public function __construct($contact)
    {
        $this->contact = $contact;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Thank You for Contacting Us!',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'email.user-contact',
            with: [
                'contact' => $this->contact
            ],
        );
    }

    public function attachments(): array
    {
        return [];
    }
}
