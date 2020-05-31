@extends('front.layouts.navbar')
@section('title')
Cart
@endsection
@section('content')
<div class="container">
    <link rel="stylesheet" href="front_assets/cart/styleCart.css">
    {{-- {{Cart::instance('default')->content()}} --}}


  <div class="container">
    @if (Session::has('msg'))
        <div class="alert alert-success mt-5" role="alert">
        <h4 class="alert-heading">{{session('msg')}}</h4>
    </div>
    @endif
    <h2 class="mt-5"><i class="fa fa-shopping-cart"></i> Shopping Cart</h2>
    <hr>
    @if(Cart::instance('default')->content())
    
    <h4 class="mt-5">{{Cart::count()}} items(s) in Shopping Cart</h4>
    
    <div class="cart-items">
        
        <div class="row">
            
            <div class="col-md-12">
                
                {{-- asdfsd --}}
               



                <div class="container">
                    <table class="table product-table table-hover mt-5 table-dark col-12" style="border-radius: 10px;">
                
                      <!-- Table head -->
                      <thead class="mdb-color lighten-5">
                        <tr class="d-flex">
                          <th class="col-3" style="border-top: none;"></th>
                          <th class="col-3 txt">
                            <strong>Product</strong>
                          </th>
                          <th class="col-3 txt">
                            <strong>Qty</strong>
                          </th>
                          <th class="col-2 txt">
                            <strong>Price</strong>
                          </th>
                          <th class="col-1" style="border-top: none;"></th>
                        </tr>
                      </thead>
                      <!-- /.Table head -->
                
                      <!-- Table body -->
                      <tbody>
                        @foreach (Cart::instance('default')->content() as $item)
                            <tr class="d-flex">
                          <td class="col-3" title="View Product" style="cursor: pointer;" onclick="location.href = '#';">
                            <!-- <img src="macbook3.jpg" alt="" class="img-fluid z-depth-0"> -->
                          <img src="uploads/{{$item->model->image}}" alt="" class="imageproducts">
                          </td>
                          <td class="col-3" title="View Product" style="cursor: pointer;" onclick="location.href = '#';">
                            <h5 class="txt">
                            <strong>{{$item->model->name}}</strong>
                            </h5>
                        <p class="txt" style="color: rgb(211, 210, 255);">${{$item->model->price}}</p>
                        <p class="text-muted">{{$item->model->category}}</p>
                          </td>
                          <td class="col-3 txt">
                            {{$item->qty}}
                        </td>
                          <td class="col-2 font-weight-bold txt">
                          <strong>${{$item->qty * (int)$item->model->price}}</strong>
                          </td>
                          <td class="col-1">

                            <form action="{{route('cart.remove',$item->rowId)}}" method="post">
                                @csrf
                                <input type="hidden" value="{{$item->model->id}}" name="product_id">
                                <input type="hidden" value="{{$item->qty}}" name="Order_qty">
                                <input type="hidden" value="{{$item->model->stock}}" name="product_stock">
                                <button type="submit" style="border:none;background:none;"><i class="fas fa-times" style="color:red;" title="Delete Item"></i></button>
                              </form>
                                

                            </td>
                            
                          </td>
                        </tr>
                        @endforeach
                        <!-- First row -->
                        
                        <!-- /.First row -->

                        <tr class="d-flex">
                            
                            <td  class="col-lg-9" colspan="6"></td>
                            <td class="col-lg-1">
                              <h5 class="mt-2 txt2">
                                <strong>Sub-Total</strong>
                              </h5>
                            </td>
                            <td class="col-lg-2 text-right">
                              <h5 class="mt-2 mr-5 txt2">
                              <strong>${{Cart::subtotal()}}</strong>
                              </h5>
                            </td>
                          
                        </tr>
                        <tr class="d-flex">
                            <td  class="col-lg-9" colspan="6"></td>
                            <td class="col-lg-1">
                              <h5 class="mt-2 txt2">
                                <strong>Tax</strong>
                              </h5>
                            </td>
                            <td class="col-lg-2 text-right">
                              <h5 class="mt-2 mr-5 txt2">
                              <strong>${{Cart::tax()}}</strong>
                              </h5>
                            </td>
                          
                          </tr>
                        
                        <!-- Second row -->
                        <tr class="d-flex">
                          <td  class="col-lg-9" colspan="6"></td>
                          <td class="col-lg-1">
                            <h5 class="mt-2 txt2">
                              <strong>Total</strong>
                            </h5>
                          </td>
                          <td class="col-lg-2 text-right">
                            <h5 class="mt-2 mr-5 txt2">
                            <strong>${{Cart::total()}}</strong>
                            </h5>
                          </td>
                        
                        </tr>
                        
                        
                    </tbody>
                    
                    </table>
                    
                     
                      <!-- /.Table body -->
                
                  </div>

            </div>   
            <!-- Price Details -->
                <div class="col-md-6">
                        <div class="sub-total">
                                        
                         </div>
                  </div>
                <!-- Save for later  -->
                <div class="col-md-12" style="float: right;">
                    <a href="/categories"><button class="btn btn-outline-dark">Continue Shopping</button></a>
                    @if(Cart::count() > 0)
                    <a href="/order"><button class="btn btn-outline-info"><i class="fas fa-shopping-cart"></i> Proceed to checkout</button></a>
                    @endif
                <hr>

                </div>

                @else
                  <h1>Sorry you don't have any item</h1>
                @endif

                
                </div>


            </div>
        </div>
</div>


@endsection