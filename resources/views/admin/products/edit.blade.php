@extends('admin.layouts.master')

@section('page')
    edit Product
@endsection

 @section('content')
 <div class="row">
                    <div class="col-lg-10 col-md-10">
                        @include('admin.layouts.message')
                        <div class="card">
                            <div class="header">
                                <h4 class="title">edit Product</h4>
                            </div>


                            <div class="content">
                            {!! Form::open(['url' => ['admin/products',$product->id],'files'=>'true','method'=>'PUT']) !!}

                                 <div class="row">
                                        <div class="col-md-12">
                                            
                                            <div class="form-group {{$errors->has('name') ? 'has-error' : ''}}">
                                                {{Form::label('product_name','Product Name')}}
                                                {{Form::text('name',$product->name,['class'=>'form-control border-input ','placeholder'=>'table,etc'])}}
                                                <span class="text-danger">{{$errors->has('name')?$errors->first('name'):''}}</span>
                                                </div>
                                                
                                                
                                                <div class="form-group {{$errors->has('price')? 'has-error': ''}}">
                                                {{Form::label('price','Price')}}
                                                {{Form::text('price',$product->price,['class'=>'form-control border-input','placeholder'=>'$2500'])}}
                                                <span class="text-danger">{{$errors->has('price')?$errors->first('price'):''}}</span>
                                                
                                                </div>
                                                
                                                <div class="form-group {{$errors->has('stock')? 'has-error': ''}}">
                                                    {{Form::label('stock','Stock')}}
                                                    {{Form::text('stock',$product->stock,['class'=>'form-control border-input','placeholder'=>'$2500'])}}
                                                    <span class="text-danger">{{$errors->has('stock')?$errors->first('stock'):''}}</span>
                                                    
                                                    </div>

                                                <div class="form-group {{$errors->has('description')? 'has-error': ''}}">
                                                {{Form::label('description','Product Description')}}
                                                {{Form::textarea('description',$product->description,['class'=>'form-control border-input','placeholder'=>'Product Description'])}}
                                                <span class="text-danger">{{$errors->has('description')?$errors->first('description'):''}}</span>
                                                </div>
                                                
                                                <div class="form-group {{$errors->has('category')? 'has-error': ''}}">
                                                    {{Form::label('category','Product Category')}}
                                                    {{Form::text('category',$product->category,['class'=>'form-control border-input','placeholder'=>'Product Category'])}}
                                                    <span class="text-danger">{{$errors->has('category')?$errors->first('description'):''}}</span>    
                                                </div>
                                                
                                                <div class="form-group {{$errors->has('image')? 'has-error': ''}}">
                                                {{Form::label('file','File')}}
                                                {{Form::file('image',['class'=>'form-control border-input','id'=>'file-input'])}}
                                                <div id="thumb-output"></div>
                                                <span class="text-danger">{{$errors->has('image')?$errors->first('file'):''}}</span>
                                                </div>

                                        </div>
                                    </div>
                                    <div class="">
                                        <button type="submit" class="btn btn-info btn-fill btn-wd">update Product</button>
                                    </div>
                                    <div class="clearfix"></div>
                            {!! Form::close() !!}                               </div>
                        </div>
                    </div>
                </div>
 @endsection