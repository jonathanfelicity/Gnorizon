<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;
use Illuminate\Support\Str;


use DB;

class AuthController extends Controller
{
    // Authenticating user
    public function handleLogin(Request $request){
        if ($request->isMethod('post')) {
            $email = $request->email;
            $token = $request->token;
            $user = DB::table('users')->where('email', $email)->value('email');
            if ($user) {
                $hashedToken = DB::table('users')->where('email', $email)->value('token'); 
                if (Hash::check($token, $hashedToken)) {
                    try {
                        $request->session()->put('user', $email);
                        return redirect('/dashboard');
                    } catch (Exception $e) {
                        return "Error setting session ".$e;
                    }
                    
                }else{
                    return 'Invalid password';
                }
             }else{
                 return "No user found";
             }
        }
        return view('auth.login');
    }

    // Generating token and sending it to the user mail
    public function handleTokenizer(Request $request){
        if ($request->isMethod('post')) {
            $email = $request->email;
            $token = Str::random(40);
            // updating database record
            DB::table('users')
            ->where('email', $email)
            ->update([
                'token' => Hash::make($token)
            ]);
            return redirect()->route('mail', ['mail' => $email, 'token'=>$token]);
        }
        return view('auth.token');
    }
}
