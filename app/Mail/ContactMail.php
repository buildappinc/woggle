<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return  $this->from('test@example.com', 'Mailtrap')
                    ->subject("Mailtrap Confirm")
                    ->markdown('emails.contact.contact-form')
                    ->with([
                        'name'=> 'New Mailtrap user',
                        'link'=> 'https://mailtrap.io/inboxes'
                    ]);
    }
}
