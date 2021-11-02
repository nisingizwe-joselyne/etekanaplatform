<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class broadcastMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $id;
    public $email;
    public $subject;
    public $message;
    public function __construct($id, $email, $subject, $message)
    {
       $this->id=$id;
       $this->email=$email;
       $this->subject=$subject;
       $this->message=$message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('broadcast')->with([
            'id'=>$this->id,
            'email'=>$this->email,
            'subject'=>$this->subject,
            'message'=>$this->message,
        ]);
    }
}
