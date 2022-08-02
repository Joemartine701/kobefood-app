<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Attempting;

class Auth extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    public function index(){
        return view('register');
    }
    public function store(Request $request){
         $user = new User();
         $data =$request->all();
         $user->name = $request['name'];
         $user->email = $request['email'];
         $user->password =hash::make($request['password']);
         $user->save();

         return back(); 
    }

    public function login(){
        return view('auth.login');
    }
    public function logout(){
        
    }
 
}
