<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Attempting;

class Auth extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
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
// <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
//     <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
//     <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
//     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
//     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
//     <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
//     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
//     <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>