<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;
use Illuminate\Support\Str;


use DB;
use Mail;

class AuthController extends Controller
{
    public function handleLogin(Request $request){
        if ($request->isMethod('post')) {
            $email = $request->email;
            $token = $request->token;
            $user = DB::table('users')->where('email', $email)->value('email');
            if ($user) {
                $hashedToken = DB::table('users')->where('email', $email)->value('token'); 
                if (Hash::check($token, $hashedToken)) {
                    $request->session()->put('user', $email);
                    echo session('user');
                }else{
                    return 'Invalid password';
                }
             }else{
                 return "No user found";
             }
        }
        return view('auth.login');
    }

    public function handleTokenizer(Request $request){
        if ($request->isMethod('post')) {
            $email = $request->email;
            $token = Str::random(40);
            // updating database record
            DB::table('users')
            ->where('email', $email)
            ->update([
                'token'     => Hash::make($token)
            ]);
           return redirect('/login');
        }
        return view('auth.token');
    }
}
