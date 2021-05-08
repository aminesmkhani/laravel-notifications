<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TopicCreated extends Mailable
{
    use Queueable, SerializesModels;
    private $first_name,$last_name;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->first_name = 'Amin';
        $this->last_name = 'Esmkhani';
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.topic-created')->with([
            'fullname' => $this->first_name . $this->last_name
        ]);
    }
}
