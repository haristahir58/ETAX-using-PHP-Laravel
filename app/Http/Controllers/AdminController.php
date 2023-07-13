<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Models\User;

class AdminController extends Controller
{
    public $current = 'home';
    public function admin_login(Request $request){
        $email = $request->input('email');
        $password = $request->input('password');

        if (auth()->attempt(['email'=>$email, 'password'=>$password, 'is_admin'=>1]) ){
            return redirect('/admin')->with('success','Welcome, you are logged in!');
        }
        else{
            return redirect('/admin/login')->with('success','Invalid User!')->with('error','Invalid, User not an admin');
        }
    }
    public function index(){
        $this->current = 'home';
        if (auth()->check()){
            if (auth()->user()->is_admin == 1){
                $users = DB::table('users')->where('is_admin','=',0)->get();
                $tax_filers = DB::table('users')->where('is_tax_filer', '=', 1)->get();
                $taxes_filed = DB::table('income_taxes')->get();
                
                $tax_filers_count = count($tax_filers);
                $total_users = count($users);
                $total_taxes_filed = count($taxes_filed);
                return view('/admin/index', [
                    'users' => $users,
                    'tax_filers' => $tax_filers,
                    'taxes_filed' => $taxes_filed,
                    'total_users' => $total_users,
                    'total_tax_filers' => $tax_filers_count,
                    'total_taxes_filed' => $total_taxes_filed,
                    'current' => $this->current,
                ]);
            }
        }
        else{
            return redirect('/admin/login');
        }
    }
    public function admin_logout(){
        auth()->logout();
        return redirect('/admin/login')->with('error','Logged out of the account');
    }
    public function admin_signup(Request $request){
        $cnic = $request->input('cnic');
        $name = $request->input('name');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $pass = bcrypt($request->input('password'));
        
        $user = new User;
        $user->cnic = $cnic;
        $user->name = $name;
        $user->email = $email;
        $user->phone = $phone;
        $user->password = $pass;
        $user->is_admin = true;
        $user->save();

        auth()->login($user);

        return redirect('/admin');
    }
    public function users(){
        $this->current = 'users';
        $userlist = DB::table('users')->where('is_admin','=',0)->get();
        return view('/admin/users/index', [
            'userlist' => $userlist,
            'current' => $this->current,
        ]);
    }
    public function forms(){
        $this->current = 'forms';
        $formlist = DB::table('income_taxes')->get();
        return view('/admin/formsubmitted', [
            'formlist' => $formlist,
            'current' => $this->current,
        ]);
    }
    public function user($user){
        $this->current = 'users';
        $selectedUser = DB::table('users')->where('id', '=', $user)->first();
        return view('/admin/users/user', [
            'user' => $selectedUser,
            'current' => $this->current,
        ]);
    }
    public function updateUser(Request $request, $user){
        $this->current = 'users';
        $cnic = $request->input('cnic');
        $name = $request->input('name');
        $email = $request->input('email');
        $phone = $request->input('number');
        $pass = bcrypt($request->input('password'));
        DB::table('users')->where('id', '=', $user)->update(['name'=>$name, 'cnic'=>$cnic, 'email'=>$email, 'phone'=>$phone, 'password'=>$pass]);
        return redirect('/admin');
    }
    public function deleteUser($user){
        DB::table('users')->where('id', '=', $user)->delete();
        return redirect('/admin');
    }
}
