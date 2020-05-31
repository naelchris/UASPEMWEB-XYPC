<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;
use PHPUnit\Framework\Constraint\FileExists;

class ProductController extends Controller
{
    public function index(){
        $product = product::all();
        return view('admin.products.index',['products'=>$product]);
       
    }

    public function create(){
        return view('admin.products.create'); 
    }

    public function store(Request $request ){
        //logic untuk form
        
        $request->validate([
            'name'=>'required',
            'price'=>'required',
            'description'=>'required',
            'category'=>'required',
            'image'=>'image|required',
            'stock'=>'required'
        ]);
        
        

        //load image
         if($request->hasFile('image')){
             
            $image = $request->image;
            $name = $image->getClientOriginalName();
            //  $image->move('uploads',$image->getClientOriginalName());
            $request->file('image')->move('uploads',$name);
        }
        //save the data
        // Product::create([
        //     'name'=>$request->name,
        //     'price'=>$request->price,
        //     'description'=>$request->description,
        //     'image'=>$name   
        // ]); 
        $product = new Product;
        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->category = $request->category;
        $product->image = $name;
        $product->stock = $request->stock;

        $product->save();


        //session 
        $request->session()->flash('msg','Your product has been added');
        //redirect 
        return redirect('admin/products/create');
    }

    public function edit($id){
        $product = Product::find($id );
        return view('admin.products.edit',['product'=>$product]);
    }

    public function update(Request $request, $id){
        //cari produknya pake id
        $product = Product::find($id);
        //validasi formnya
        $request->validate([
            'name'=>'required',
            'price'=>'required',
            'description'=>'required',
            'category'=>'required',
            'stock'=>'required'
        ]);

        //public_path('uploads/') berguna dapetin path

        //disini kita cari tau klo gambar di masukin
        if($request->hasFile('image')){
            
            if(file_exists(public_path('uploads/').$product->image)){
                unlink(public_path('uploads/').$product->image);
            }

            $image = $request->image;
            $image->move('uploads',$image->getClientOriginalName());
            $product->image = $request->image->getClientOriginalName(); 
        }

        //update data produk
        $product->update([
            'name'=>$request->name,
            'price'=>$request->price,
            'description'=>$request->description,
            'category'=>$request->category,
            'image'=>$product->image,
            'stock'=>$request->stock

        ]);

        //session msg
        $request->session()->flash('msg','Product has been updated');

        //redirecting
        return redirect('admin/products');
      
    }

    public function destroy($id){
        $product = Product::find($id);
        if(file_exists(public_path('uploads/').$product->image)){
            unlink(public_path('uploads/').$product->image);
        }
        //destroy product database
        Product::destroy($id);

        //session
        session()->flash('msg','your item has been deleted');

        //redirect
        return redirect('admin/products');
    }

    public function show($id){
        $product = Product::find($id);
        return view('admin.products.details',['product'=>$product]);
    }
   
}
