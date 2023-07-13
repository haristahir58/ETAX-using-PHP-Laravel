<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class UserController extends Controller
{
    public function register(Request $request){
        $cnic = $request->input('cnic');
        $name = $request->input('name');
        $email = $request->input('email');
        $phone = $request->input('number');
        $pass = bcrypt($request->input('password'));
        
        $user = new User;
        $user->cnic = $cnic;
        $user->name = $name;
        $user->email = $email;
        $user->phone = $phone;
        $user->password = $pass;
        $user->save();

        auth()->login($user);

        return redirect('/')->with('success','Your account has been created!');
    }
}
