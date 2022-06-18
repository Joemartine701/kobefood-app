<?php

namespace App\Http\Controllers;

use App\ContactUs;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function contactUs(){
        $contact = ContactUs::all();
        return view('admin.contactUs',compact('contact'));

    }

    public function edit($id)
    {  
        $records= ContactUs::findOrFail($id);
            
        return view('admin.messageView',compact('records'));
        
    }

    public function delM($id){
        $prod = ContactUs::findOrFail($id);
        return view('admin.deleteMessage',compact('prod'));
    }

    public function delete($id)
    {  
       $product= ContactUs::findOrFail($id);
       $product->delete();
            
        return redirect('/contactUsView')->with('flash_message_success','Gallery has been deleted successfully!!!');
        
    }
    
}
