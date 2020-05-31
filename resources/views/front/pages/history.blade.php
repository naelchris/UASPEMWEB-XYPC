@extends('front.layouts.navbar')


@section('title')
    History
@endsection
@section('content')
<link rel="stylesheet" href="{{url('front_assets/history/styleHistory.css')}}">
<div class="container">
    


 
    <table class="table product-table table-hover mt-5 table-light col-12" style="border-radius: 10px; margin-bottom: 100px">

      <!-- Table head -->
      <thead class="mdb-color lighten-5">
        <tr class="d-flex">
          <th class="col-4" style="border-top: none;"></th>
          <th class="col-4 txt">
            <strong>Product</strong>
          </th>
          <th class="col-2 txt">
            <strong>Qty</strong>
          </th>
          <th class="col-2 txt" style="border-top: none;">
            <strong>Price</strong>
          </th>
        </tr>
      </thead>
      <!-- /.Table head -->

      <!-- Table body -->
      <tbody>


        @foreach($order as $item)
             <tr class="d-flex" title="View Product" onclick="location.href = '#';">
          <td class="col-4">
            <!-- <img src="macbook3.jpg" alt="" class="img-fluid z-depth-0"> -->
          <img src="{{url('/uploads')}}/{{$item->image}}" alt="" class="imageproducts">
          </td>
          <td class="col-4">
            <h5 class="txt">
            <strong>{{$item->product_name}}</strong>
            </h5>
        <p class="txt">${{$item->price}}</p>
        <p class="text-muted">{{$item->category}}</p>
          </td>
        <td class="col-2 txt">{{$item->quantity}}</td>
          <td class="col-2 font-weight-bold txt">
          <strong>${{$item->price*$item->quantity}}</strong>
          </td>
        </tr>
        @endforeach
        <!-- First row -->
       
        <!-- /.First row -->

        
        <!-- /.Second row -->

        
        
        </tr>
    </tbody>
    
    </table>

  
      
  

</div>
@endsection