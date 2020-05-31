<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Product;
class CategoriesController extends Controller
{

    //in this controller it contains detial, category, and search
    public function index(){
        $product = product::all();
        $brand = Product::select('category')->distinct()->get();
        return view('front.categories.index',['product'=>$product,'brand'=>$brand]);
    }

    public function sortByName(){
        $product = DB::table('products')
        ->orderBy('name')
        ->get();
        $brand = Product::select('category')->distinct()->get();
        return view('front.categories.index',['product'=>$product,'brand'=>$brand]);

    }

    public function sortByPrice(){
        $product = DB::table('products')
        ->orderBy('price')
        ->get();
        $brand = Product::select('category')->distinct()->get();
        return view('front.categories.index',['product'=>$product,'brand'=>$brand]);

    }

    public function searchProduct(Request $request){
        $name = "%" . $request->name . "%";
        $product = DB::table('products')
        ->where('name', 'like', $name)
        ->get();
        $brand = Product::select('category')->distinct()->get();
        if(count($product) == 0){
            session()->flash('msg1',$request->name . " is not found");
            session()->flash('msg2',"alert-danger");
        }
        else{
            session()->flash('msg1',"Search results for " . $request->name);
            session()->flash('msg2',"alert-success");
        }
        return view('front.categories.search',['product'=>$product,'brand'=>$brand]);
        
    }

    public function details($id){
        $product = Product::find($id);
        $upsell = Product::where('category',$product->category)->where('id','!=',$id)->get();
       
        return view('front.categories.details',['product'=>$product,'upsell'=>$upsell]);
    }
}
