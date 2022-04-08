<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function handleUser(Request $request){
        if ($request->isMethod('post')) {
            $user = new User;
            $user->name = $request->name;
            $user->email = $request->email;
            $user->role = $request->role;
            $user->save();
            return redirect('/user');
        }
        return view('admin.user');
    }
}
