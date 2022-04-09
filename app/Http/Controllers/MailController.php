<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use App\Mail\TokenMail;

class MailController extends Controller
{
    public function handleMail(){
        // $user = 'jonathanfelicity@mail.com';
        Mail::to('jonathanfelicity@mail.com')->send(new TokenMail());
    }
}
