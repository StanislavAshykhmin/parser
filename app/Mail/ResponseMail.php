<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ResponseMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $name;
    protected $lastName;
    protected $email;
    protected $url;
    protected $text;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->name = $data['first_name'];
        $this->lastName = $data['last_name'];
        $this->email = $data['email'];
        $this->url = $data['url'];
        $this->text = $data['text'];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.response')->with([
            'name' => $this->name,
            'lastName' => $this->lastName,
            'email' => $this->email,
            'url' => $this->url,
            'text' => $this->text,
        ]);
    }
}
