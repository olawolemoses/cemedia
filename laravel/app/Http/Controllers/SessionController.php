<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

use App\User;

class SessionController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'destroy']);
    }

    public function create()
    {

        return view('session.login');

    }

    public function store(Request $request)
    {
      $request->validate
      (['username' => 'required',
        'password' => 'required|min:6'
       ]);

       $username = request('username');
       $password = request('password');
       $remember = request('remember_me') == '1' ? true: false;

       if($user = Auth::attempt(['email' => $username, 'password' => $password],$remember))
       {
          $user = User::where('email','=',$username)->first();

          return redirect('/users');

       }else
       {
           return back()->withErrors(['message' => 'Credentials are not correct']);
       }
    }



    public function destroy()
    {
        auth()->logout();
        //return redirect()->home();
        return redirect()->route('home');
    }

}
