<?php

namespace App\Mail;

use App\Models\ContactMessage;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewContactMessage extends Mailable
{
    use Queueable, SerializesModels;

    public ContactMessage $contactMessage;

    public function __construct(ContactMessage $contactMessage)
    {
        $this->contactMessage = $contactMessage;
    }

    public function build()
    {
        return $this
            ->subject('New portfolio contact: ' . ($this->contactMessage->subject ?: $this->contactMessage->name))
            ->replyTo($this->contactMessage->email, $this->contactMessage->name)
            ->view('emails.contact-message');
    }
}
