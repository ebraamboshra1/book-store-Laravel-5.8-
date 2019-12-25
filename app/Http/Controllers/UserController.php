<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Book;
use Auth;
use Validator;
class UserController extends Controller
{
    public function getuser(){
        if(Auth::Check()){
        $userId = Auth::id();
        $user = User::find($userId);
        return view('user/welcome', ['user' => $user]);
        }else{
            return view('user/welcome');
        }
    }
    public function register(){
        return View('user/register');
    }
    
    public function create_register(Request $request){
        $user = new User([
            'first_name' => $request->get('first_name'),
            'last_name'=> $request->get('last_name'),
            'password'=> $request->get('password'),
            'Phone'=> $request->get('phone'),
            'email'=> $request->get('email'),
          ]);
          $user->save();
          Auth::login($user);
          return view('user/welcome', ['user' => $user]);
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


    public function viewbooks(){
        $book = Book::get();
        return view('user/books', ['book' => $book]);
    }

}
