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
Route::get('my-first-mail','MailController@myFirstMail');


Step 4: Add Controller Method
app/Http/Controllers/MailController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class MailController extends Controller
{
    /**
     * Send My First Mail Example
     *
     * @return void
     */
    public function myFirstMail()
    {
        $myEmail = 'vpijayanand@gmail.com';
        Mail::to($myEmail)->send(new MyFirstMail());


        dd("Mail Send Successfully");
    }

}
Step 5: Add View File
resources/views/emails/myFirstMail.blade.php
Hi,

This is My First Mail Sending Using Laravel 5.3 Mailable

Thank you...
