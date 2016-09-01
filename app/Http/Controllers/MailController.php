<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Mail;
use App\Mail\MyFirstMail;

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
