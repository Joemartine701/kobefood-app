<?php

namespace App\Http\Controllers;
use Intervention\Image\Facades\Image;
use App\ContactUs;
use App\Product;
use App\User;
use Illuminate\Http\Request;
use Products;
use Symfony\Component\Console\Input\Input;
use Illuminate\Support\Facades\File;
use Symfony\Component\VarDumper\Cloner\Data;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function uploads()
    {
        return view('admin.uploads');
    }
    public function add(Request $request)
    {
        if ($request->isMethod('post')) {
            $data =$request->all();
            //  echo"<pre>";print_r($data);die;
            $product = new Product();
            $product->name =$data['name'];
            $product->code =$data['product_code'];
            $product->color =$data['product_color'];
            if (!empty($data['product_description'])) {
                $product->description =$data['product_description'];
            } else {
                $product->description ='';
            }
            $product->price =$data['product_price'];
//    upload image


            $request->validate([
             'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5000',
         ]);
   
            // $imageName = time().'.'.$request->image->extension();
            // Image::make($imageName) -> resize(500, 500)->save($imageName);
            // $request->image->resize(300, 300);
            // //   $request->image->move(public_path('uploads/products/'), $imageName);
            // //   $product->image= $imageName;
            // $product->image =$data['image'];
            // $imagefile = $request->image;  
            if ($request->hasFile('image')) {
                echo $img_tmp = $request->file('image');
                if ($img_tmp->isValid()) {

           
                //  image path
                    $extension = $img_tmp->getClientOriginalExtension();
                    $filename = rand(111, 99999).'.'.$extension;
                    $img_path ='uploads/products/'.$filename;
                 
                    // image resize
                    Image::make($img_tmp) -> resize(300, 300)->save($img_path);
                    $product->image =$filename;
                }
            }
            
            $product->save();
            // return redirect('/upload')->with('flash_message_success','Product has been added successfully!!!');
            return redirect('/adminhome')->with('flash_message_success','Product has been added successfully!!!');
        }
    }
  
    public function viewProduct()
    {
        $viewproduct = Product::paginate(10);

        return view('admin.viewProduct', compact('viewproduct'));
    }

    public function edit($id)
    {
        $records= Product::findOrFail($id);
             
        return view('admin.editProd', compact('records'));
    }



    public function update(Request $request, $id)
    {
        $products = Product::findOrFail($id);

        if ($request->isMethod('post')) {
            $data =$request->all();
            $products->name =$request->input('name');
            $products->code =$request->input('product_code');
            $products->color =$request->input('product_color');

            if (!empty($request->input('product_description'))) {
                $products->description =$data['product_description'];
            } else {
                $products->description ='';
            }

            $products->price =$request->input('product_price');

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
                $products->image =$filename;
            }
        }
    
            $products->save();
            return redirect('/viewP')->with('flash_message_success','Product has been updated successfully!!!');
        }
    }
    public function delete($id)
    {
        $product= Product::findOrFail($id);
        $product->delete();
             
        return redirect('/viewP')->with('flash_message_success','Product has been deleted successfully!!!');
    }
    public function delp($id)
    {
        $prod = Product::findOrFail($id);
        return view('admin.deleteProd', compact('prod'));
    }

    public function view($id)
    {
        $records= Product::findOrFail($id);
             
        return view('admin.descriptionView', compact('records'));
    }



    // USERS ROUTES

    public function viewAdmin()
    {
        $viewadmins = User::all();
        return view('admin.admins', compact('viewadmins'));
    }

    public function editadmin($id)
    {
        $user= User::findOrFail($id);
             
        return view('admin.editAdmin', compact('user'));
    }

    public function deleteadmin($id)
    {
        $user= User::findOrFail($id);
        $user->delete();
             
        return redirect('/viewA')->with('flash_message_success','User Admin has been deleted successfully!!!');
    }
    public function delA($id)
    {
        $user = User::findOrFail($id);
        return view('admin.deleteAdmin', compact('user'));
    }
    public function updateadmin(Request $request, $id)
    {
        $user = User::findOrFail($id);

        if ($request->isMethod('post')) {
            $data =$request->all();
            $user->name =$request->input('name');
            $user->email =$request->input('email');
 
            $user->save();
            return redirect('/viewA')->with('flash_message_success','User has been updated successfully!!!');
        }

    }
}

