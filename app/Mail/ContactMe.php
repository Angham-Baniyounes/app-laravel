<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMe extends Mailable
{
    use Queueable, SerializesModels;

    public $topic;

    public function __construct($topic)
    {
        $this->topic = $topic;
    }

    public function build()
    {
        // return $this->view('emails.contact-me')
            // ->subject('More information about ' . $this->topic);

            return $this->markdown('emails.contact-me')->subject('More information about ' . $this->topic);
    }
}
