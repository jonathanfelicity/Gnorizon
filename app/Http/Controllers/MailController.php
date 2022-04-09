<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use App\Mail\TokenMail;

class MailController extends Controller
{
    public function handleMail($mail, $token){
        Mail::to($mail)->send(new TokenMail($mail, $token));
        return redirect('/login');
    }
}
