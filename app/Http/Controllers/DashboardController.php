<?php

namespace App\Http\Controllers;
use App\OrderItems;
use Illuminate\Http\Request;
use App\Product;
use App\User;
use App\Order;
use App\Charts\OrderChart;
class DashboardController extends Controller
{   
    //kita bisa pake ini untuk login salah satu bentuk login
    // public function __construct()
    // {
    //     if($this->middleware('auth:admin')){
    //         return redirect('/admin/');
    //     }
        
    // }

    public function index(){
        $product_total = Product::all()->count();
        $users = User::all()->count();
        $orders = Order::all()->count();



        $order = OrderItems::orderBy('created_at')->pluck('quantity','created_at'); 
        $chart = new OrderChart;
        
        $chart->labels($order->keys());
        $chart->dataset('total Item yang di order berdasarkan tanggal', 'line',$order->values());

        return view('admin.dashboard',['orders'=>$orders,'product_total'=>$product_total,'users'=>$users, 'chart' => $chart]);
       
    }
}

//cara query
// $users = User::where(function ($query) {
//     $query->select('type')
//         ->from('membership')
//         ->whereColumn('user_id', 'users.id')
//         ->orderByDesc('start_date')
//         ->limit(1);
// }, 'Pro')->get();