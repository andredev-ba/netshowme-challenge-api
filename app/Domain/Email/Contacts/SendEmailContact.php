<?php

namespace Domain\Email\Contacts;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendEmailContact extends Mailable
{
    use Queueable, SerializesModels;

    protected $contact;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($contact)
    {
        $this->contact = $contact;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
      $contact = $this->contact;
      return $this->from('andre.ti.bahia@gmail.com')
      ->subject('Contato')
      ->attachFromStorage($contact->file_path)
      ->view('contacts.form')->with(['contact'=>$contact]);
    }
}
