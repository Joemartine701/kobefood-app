<?php

namespace App\Http\Controllers;

use App\ContactUs;
use App\Gallery as AppGallery;
use App\Mail\ContactMe;
use App\Mail\Fam;
use App\Product;
use Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactUsController extends Controller
{
    public function add(Request $request){
        
        if ($request->isMethod('post')) {
            $data =$request->all();
            // $contact = new ContactUs();
            // $contact->FName =$data['first_name'];
            // $contact->LName =$data['last_name'];
            // $contact->Email =$data['email'];
            // $contact->Phone =$data['phone'];
            // $contact->Description =$data['message'];

            // $contact->save();

            // $data = $request(['first_name','last_name','email','phone','message']);
            Mail::to('joemartine701@gmail.com')->send(new Fam($data));
            return view('layouts.contactUs')->with('flash_message_success','Message sent Succesfully'); 
        }

      
       
        
    }


    public function retrieve1(Request $request)
{
    $product = Product::paginate(12);

    return view('layouts.products', compact('product'));
}
public function retrieve(Request $request){
    $viewgallery = AppGallery::all();
    return view('index',compact('viewgallery'));
}
}
