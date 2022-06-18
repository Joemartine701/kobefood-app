<?php

namespace App\Http\Controllers;

use App\DataTables\GalleryDataTable;
use App\Gallery;
use App\Product;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;


class GalleryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(GalleryDataTable $dataTable){
     return $dataTable -> render('admin.gallery');
    }
    public function uploadsgallery()
    {
        return view('admin.uploadsgallery');
    }
    public function dashboard()
    {
        return view('home');
    }
    public function add(Request $request){
        if($request->isMethod('post')){
            $data =$request->all();
           //  echo"<pre>";print_r($data);die;
           $viewgallery = new Gallery();
           $viewgallery->name =$data['name'];
//    upload image


$request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5000',
        ]);
        if ($request->hasFile('image')) {
            echo $img_tmp = $request->file('image');
            if ($img_tmp->isValid()) {

       
            //  image path
                $extension = $img_tmp->getClientOriginalExtension();
                $filename = rand(111, 99999).'.'.$extension;
                $img_path ='uploads/products/'.$filename;
             
                // image resize
                Image::make($img_tmp) -> resize(300, 300)->save($img_path);
                $viewgallery->image=$filename;
            }
        }
           
           $viewgallery->save();
           return redirect('/adminupgallery')->with('flash_message_success','Gallery has been added successfully!!!');
        }
       
       
    }
public function viewgallery(Request $request){
    $viewgallery = Gallery::paginate(10);
    return view('admin.gallery',compact('viewgallery'));
}

public function edit($id)
{  
    $records= Gallery::findOrFail($id);
        
    return view('admin.editGallery',compact('records'));
    
}



public function update(Request $request, $id){
    $products = Gallery::findOrFail($id);

    if($request->isMethod('post')){
       $data =$request->all();
      $products->name =$request->input('name');

//    upload image

$request->validate([
       'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5000',
   ]);

   if ($request->hasFile('image')) {
    echo $img_tmp = $request->file('image');
    if ($img_tmp->isValid()) {


    //  image path
        $extension = $img_tmp->getClientOriginalExtension();
        $filename = rand(111, 99999).'.'.$extension;
        $img_path ='uploads/products/'.$filename;
     
        // image resize
        Image::make($img_tmp) -> resize(300, 300)->save($img_path);
        $products->image=$filename;
    }
}

      $products->save();
      return redirect('/viewgallery')->with('flash_message_success','Gallery has been updated successfully!!!');
   }
  
}
public function delete($id)
{  
   $product= Gallery::findOrFail($id);
   $product->delete();
        
    return redirect('/viewgallery')->with('flash_message_success','Gallery has been deleted successfully!!!');
    
}
public function delp($id){
    $prod = Gallery::findOrFail($id);
    return view('admin.deleteGallery',compact('prod'));
}



}
