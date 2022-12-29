<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

class authcontroller extends Controller
{
    public function index()
    {
        return view('layout.app');
    }

    public function register()
    {
        return view('auth.register');
    }
    public function register_create(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email' =>'required|unique:users|email',
            'password'=>'required',
            'conpass'=>'required|same:password'


        ]);
        $users = new User();
        $users->name=$request['name'];
        $users->email=$request['email'];
        $users->password=hash::make($request['password']);
        $users->conpass=hash::make($request['conpass']);
        $users->save();
        ;
        return redirect()->intended('login')->with('msg', 'Account Registered!');
    }

    public function login_view()
    {
        return view('auth.login');
    }
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('addprdouct')->with('msg', 'Sucessfully LOGED In!');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

   public function addproductview()
   {
       $msg = "login sucessfull";
       $url = url('/addproduct');
       $title = "Add_Proudct";
       $data = compact('url', 'title', 'msg');
       return view('layout.product')->with($data);
   }


    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect('/')->with('msg','Logged OUT');
    }
}
