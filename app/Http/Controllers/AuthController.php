<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

use DB;
use Mail;

class AuthController extends Controller
{
    

    public function handleTokenizer(Request $request){
        if ($request->isMethod('post')) {
            $email = $request->email;
            $token = Str::random(100);
            // updating database record
            DB::table('users')
            ->where('email', $email)
            ->update([
                'token'     => $token
            ]);
           return redirect('/login');
        }
        return view('auth.token');
    }

    public function handleLogin(Request $request){
        if ($request->isMethod('post')) {
            
        }
        return view('auth.login', ['title'=>'Login']);
        // return redirect('/dashboard');
    }
}
