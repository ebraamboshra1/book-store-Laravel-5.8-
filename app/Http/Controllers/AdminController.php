<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;

class AdminController extends Controller
{
    public function login_view(){
        return view('admin/login');
    }
    public function login(Request $r){
        $admin = Admin::where('email', Request()->email)->where('password', Request()->password)->first();
        if ($admin) {
            $r->session()->put('admin', $admin);
            return Redirect("/admin-table");
        }else{
            session()->flash("msg", "Your email or password is not valid");
                return redirect()->back();
        }
    }

    public function logout(Request $r){
        $r->session()->forget('admin');
        return view('/');
    }

    public function index()
    {
        $admin = Admin::all();
        return view('admin/admintable', ['admin' => $admin]);
    }

    public function create(Request $request){
        try{
        $admin = new Admin([
            'full_name' => $request->get('full_name'),
            'email'=> $request->get('email'),
            'password'=> $request->get('password'),
          ]);
          
          $admin->save();
          return redirect('/admin-table');
          }
          catch(\Illuminate\Database\QueryException  $e){
            report($e);
            return redirect()->back() ->with('alert', 'error!');
          }
    }

    
}
