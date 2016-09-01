# Sending-mail-using-Laravel-5.3-mailable
Sending mail using laravel 5.3 mailable
Step 1: Mail Configuration
.env
~php
MAIL_DRIVER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=itsolutionstuff@gmail.com
MAIL_PASSWORD=mypassword
MAIL_ENCRYPTION=tls
~php


Step 2: Create Mailable Class
php artisan make:mail MyFirstMail

app/Mail/MyTestMail.php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class MyFirstMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {

        
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.myFirstMail');
    }
}

Step 3: Add Route
routes/web.php
