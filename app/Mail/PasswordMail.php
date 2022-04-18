<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PasswordMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($rand)
    {
        $this -> rand = $rand;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
      return $this->view('hesap.kullanici.mail.password_mail')
                  ->subject('Şifreniz')
                  ->from('megi@gmail.com', 'MEGİ')
                  ->with('rand', $this->rand);
    }
}
