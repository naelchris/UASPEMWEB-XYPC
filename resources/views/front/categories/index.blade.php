@extends('front.layouts.navbar')

@section('title')
    Product
@endsection

@section('content')
<link rel="stylesheet" href="front_assets/category/styleCategory.css">
<script> var key = 0;</script>
<div class="container">
    @if (Session::has('msg'))
        <div class="alert alert-success mt-5" role="alert">
            <h4 class="alert-heading">Your item has been added to the cart</h4>
        </div>
    @endif
    <div class="row text-center mt-5">
        <div class="row col-lg-8">
            @foreach ($product as $key => $item)
                <script>
                    key++;
                </script>
                <input type="number" id="price{{$key}}" style="display:none;" value="{{$item->price}}">
                <div class="col-lg-6 mb-5 {{$item->category}} category price-{{$key}}">
                    <div class="card products">
                    <div class="card-header imagecategory" style='background-image: url("uploads/{{$item->image}}");'>
                            <!-- <img src="macbook.png" alt="" class="img-fluid"> -->
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">{{$item->name}}</h5>
                            <p class="text-muted">{{$item->category}}</p>
                            <p class="card-text" id="desc{{$key+1}}">{{$item->description}}</p>
                                <p class="showmorebutton" id="shwbtn{{$key+1}}" onclick="showmore({{$key+1}})">Show More</p>
                        </div>
                        <div class="card-footer" style="text-align: center;"> 
                            <strong>${{$item->price}}.00</strong> &nbsp; <br>
                        <a href="/details/{{$item->id}}" class="btn btn-outline-success mt-2"><i class="fas fa-eye"></i> View Products</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="col-lg-4">
            <a href="/categoriesByPrice"><i class="fas fa-sort-numeric-up-alt"></i> Sort by price</a><br>
            <a href="/categoriesByName"><i class="fas fa-sort-alpha-up"></i> Sort by name</a><br>
            <div class="choosebrand mt-3">
                <p class="brandtitle pt-3">Brand</p>
                <div class="col-lg-8 pb-5" style="margin: auto;text-align: left;">
                    <div class="form-check mb-2">
                        <input class="form-check-input" type="radio" name="exampleRadios" value="allproduct"  id="allproduct" checked onclick="changecategory('all')">
                        <label class="form-check-label" for="allproduct">
                            Show All Products
                        </label>
                    </div>
                    @foreach ($brand as $item)
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="radio" name="exampleRadios"  id="{{$item->category}}" onclick="changecategory('{{$item->category}}')">
                            <label class="form-check-label" for="{{$item->category}}">
                                {{$item->category}}
                            </label>
                        </div>
                    @endforeach
                    <form class="mt-5">
                        <div class="form-group">
                            <input type="text" class="form-control" id="lowestprice" onchange="searchPrice()" name="low" placeholder="Lowest Price">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="highestprice" onchange="searchPrice()" name="high" placeholder="Highest Price">
                        </div>
                    </form>
                
                </div>
            </div>
            
        </div>
        

    </div>
</div>
<script>
    // function searchPrice(){
    //     var $radios = $('input:radio[name=exampleRadios]');
    //     $radios.filter('[value=allproduct]').prop('checked', true);
    //     var low = parseInt( $('#lowestprice').val() );
    //     var high = parseInt( $('#highestprice').val() );
    //     $('.category').hide();
    //     if(!isNaN(low) && !isNaN(high)){
    //         for(i = 0; i < key; i++){
    //             price = parseInt( $('#price'+i).val() );
    //             if(price >= low && price <= high){
    //                 $('.price-'+i).fadeIn(1000);
    //             }
    //         }
    //     }
    //     else if(!isNaN(high)){
    //         for(i = 0; i < key; i++){
    //             price = parseInt( $('#price'+i).val() );
    //             if(price <= high){
    //                 // console.log(price + " < " + high);
    //                 $('.price-'+i).fadeIn(1000);
    //             }
    //         }
    //     }
    //     else if(!isNaN(low)){
    //         for(i = 0; i < key; i++){
    //             price = parseInt( $('#price'+i).val() );
    //             if(price >= low){
    //                 // console.log(price + " > " + low);
    //                 $('.price-'+i).fadeIn(1000);
    //             }
    //         }
    //     }
    //     else{
    //         $('.category').fadeIn(1000);
    //     }
    // }

    function searchPrice(){
        var $radios = $('input:radio[name=exampleRadios]');
        $radios.filter('[value=allproduct]').prop('checked', true);
        var low = document.getElementById("lowestprice").value;
        var high = document.getElementById("highestprice").value;
        $('.category').hide();
        if(low != '' && high != ''){
            for(i = 0; i < key; i++){
                price = $('#price'+i).val();
                if(price >= low && price <= high){
                    $('.price-'+i).fadeIn(1000);
                }
            }
        }
        else if(high != ''){
            for(i = 0; i < key; i++){
                price = $('#price'+i).val();
                if(price <= high){
                    $('.price-'+i).fadeIn(1000);
                }
            }
        }
        else if(low != ''){
            for(i = 0; i < key; i++){
                price = $('#price'+i).val();
                if(price >= low){
                    $('.price-'+i).fadeIn(1000);
                }
            }
        }
        else{
            $('.category').fadeIn(1000);
        }

    }

    function changecategory(brand){
        document.getElementById("lowestprice").value = "";
        document.getElementById("highestprice").value = "";
        $('.category').hide();
        if(brand === 'all'){
            $('.category').hide();
            $('.category').fadeIn();
        }
        else{
            $('.category').hide();
            $('.'+brand).fadeIn(1000);
        }
    }
    function showmore(number){
        document.getElementById("desc"+number).style.height = "100%";
        $('#shwbtn'+number).hide();
    }
</script>
    
@endsection