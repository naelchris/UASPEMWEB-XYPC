<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    //
    public function index(){
        $order = Order::all();
        return view('admin.orders.index',['order'=>$order]);
    }

    public function confirm($id){
        //get order
        $order = Order::find($id);
        //update order
        $order->update(['status'=>1]);
        //session
        session()->flash('msg','your order has been confirmed');

        //redirect
        return redirect('/admin/orders');
    }

    public function pending($id){
        //get order
        $order = Order::find($id);
        //update order
        $order->update(['status'=>0]);
        //session
        session()->flash('msg','your order is now pended');
        //redirect
        return redirect('/admin/orders');


        return $id;
    }

    public function show($id){

        $order = Order::find($id);
        return view('admin.orders.details',['order'=>$order]);
    }
}
