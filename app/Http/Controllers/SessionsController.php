<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class SessionsController extends Controller
{
    public function logout(){
        auth()->logout();
        return redirect('/')->with('success','Logged out of the account');
    }
    public function login(Request $request){
        $email = $request->input('email');
        $password = $request->input('password');

        if (auth()->attempt(['email'=>$email, 'password'=>$password]) ){
            return redirect('/')->with('success','Welcome, you are logged in!');
        }
        else{
            return redirect('/')->with('success','Invalid User!');
        }
    }
}
