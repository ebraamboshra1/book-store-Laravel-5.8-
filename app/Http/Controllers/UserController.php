<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Validator;
class UserController extends Controller
{
    public function register(){
        return View('user/register');
    }
    
    public function create_register($Request){
        DB::table('users')->insert(
            ['email' => 'john@example.com', 'votes' => 0]
        );
    }

    public function login()
    {
        return view('/user/login');
    }

    public function login_post(){
        $user = User::where('email', Request()->email)->where('password', Request()->password)->first();
        if ($user) {
        Auth::login($user);
        return view('user/welcome', ['user' => $user]);
        }else{
        session()->flash("msg", "Your email or password is not valid");
            return redirect()->back();
        }
    }

    public function logout(){
        Auth::logout();
        return view('user/welcome');
    }

}
