@extends('front.layouts.navbar')

@section('title')
    Details
@endsection
@section('content')
<link rel="stylesheet" href="https://glacial-falls-89341.herokuapp.com/front_assets/details/styleDetails.css">
<div class="container">
    <div class="row mt-5" style="background-color: #fafafa;border-radius: 10px;">
        <div class="col-lg-6 p-5">
        <img src="{{url('uploads')}}/{{$product->image}}" alt="" style="max-width: 100%;">
        </div>
        <div class="col-lg-5 mt-5">
            <h1 style="font-weight: bold;">{{$product->name}}</h1>
            <p class="text-muted">{{$product->categories}}</p>
            <p class="txt" style="color: #035aa6;font-size:2rem;font-weight: bold;">${{$product->price}}</p>
            <form action="{{url('/cart')}}" method="post">
                @csrf
           @if($product->stock > 0)
                <div class="form-group">
                    <label for="qty">Product stock : {{$product->stock}}</label>
                    <input type="number" min="1" max="{{$product->stock}}" class="form-control @error('qty') is-invalid @enderror" name="qty" value="" placeholder="Quantity">
                    <div class="invalid-feedback">
                        @error('qty') {{$message}} @enderror
                    </div>
                </div>

            @else
                <div class="form-group">
                    <label for="qty">Product is out of stock</label>
                    <input type="number" min="1" max="{{$product->stock}}" class="form-control" name="qty" value="" placeholder="Out of stock" disabled>
                </div>
            @endif

            
            <h6>{{$product->description}}</h6>
                <input type="hidden" name="id" value="{{$product->id}}">
                <input type="hidden" name="name" value="{{$product->name}}">
                <input type="hidden" name="price" value="{{$product->price}}">
                <button type="submit" class="btn btn-block btn-outline-success mt-5 mb-5"><i class="fas fa-shopping-cart"></i> Add to Cart</button>

            </form>

        </div>
    </div>
    
    <div class="col-6 mx-auto mt-5">
        <p class="moreproducts">More products from this brand</p>
    </div>

    <div class="row">
        
        @foreach ($upsell as $pro)
            <div class="col-lg-4 mb-5">
            <div class="products ct1 center pb-5">
            <p class="producttext p-3">{{Str::limit($pro->name, 20)}}</p>
            <div class="imagecategory" style="background-image: url('{{url('uploads')}}/{{$pro->image}}');">

                </div>
            <a href="/details/{{$pro->id}}"><button type="button" class="btn btn-lg btn-outline-primary btnshopnow mr-3">Shop Now</button></a>
                
            </div>
        </div>
        @endforeach


        

    </div>
    
</div>
@endsection