<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class MyMail extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $email;
    public $msage;
    public $subject;
    //public $subject;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($subject,$email,$name,$msage)
    {
        //
        $this->name = $name;
        $this->email = $email;
        $this->msage = $msage;
        $this->subject = $subject;
        //$this->subject = $subject;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('myserenguetiPage@page.com')->view('autoemail');
    }
}
