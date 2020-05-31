<?php

use Illuminate\Database\Seeder;
use App\OrderItems;
use Carbon\Carbon;
class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for( $i =1;$i<30;$i++){
            $now = Carbon::now();
            $order = new OrderItems();
            $order->order_id = $i;
            $order->product_id  = 5;
            $order->quantity = 1;
            $order->price = 2500;
            $order->created_at = $now->subDay($i);
            $order->updated_at = $now->subDay($i);
            $order->save();
        }
    }
}
