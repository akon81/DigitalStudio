<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactFormMail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(
        public string $contactName,
        public string $contactEmail,
        public string $contactSubject,
        public string $contactMessage
    ) {}

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Nowa wiadomość z formularza kontaktowego: '.$this->contactSubject,
            replyTo: [
                new Address($this->contactEmail, $this->contactName),
            ],
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.contact-form',
        );
    }

    public function attachments(): array
    {
        return [];
    }
}
