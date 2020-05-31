 @extends('admin.layouts.master')

 @section('page')
 view products    
 @endsection

@section('content')
<div class="row">

    <div class="col-md-12">
        <div class="card">
            <div class="header">
                <h4 class="title">All Products</h4>
                <p class="category">List of all stock</p>
            </div>
            @include('admin.layouts.message')
            <div class="content table-responsive table-full-width">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Desc</th>
                        <th>Stock</th>
                        <th>Category</th>
                        <th>Image</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $item)
                              <tr>
                              <td>{{$item->id}}</td>
                              <td>{{$item->name}}</td>
                              <td>{{$item->price}}</td>
                              <td>{{$item->description}}</td>
                              <td>{{$item->stock}}</td>
                              <td>{{$item->category}}</td>
                              <td><img src="../uploads/{{$item->image}}" alt="" class="img-thumbnail"
                                 style="width: 50px"></td>
                        <td>

                            {{-- buat delete --}}
                            {{ Form::open(['route'=>['products.destroy',$item->id],'method'=>'DELETE'])}}
                                {{Form::button('<span class="fa fa-trash"></span>',['type'=>'submmit','class'=>'btn btn-danger','onclick'=>'return confirm("are you sure you want to delete this ?")'] )  }}
                                {{{link_to_route('products.edit', '' , $item->id, ['class'=>'btn btn-info ti-pencil']) }}}
                                {{{link_to_route('products.show', '' , $item->id, ['class'=>'btn btn-primary ti-list']) }}}
                            {{Form::close()}}


                            {{-- <button class="btn btn-sm btn-info ti-pencil-alt" title="Edit"></button>
                            <button class="btn btn-sm btn-danger ti-trash" title="Delete"></button>
                            <button class="btn btn-sm btn-primary ti-view-list-alt"
                                    title="Details"></button> --}}
                        </td>
                    </tr>
                        @endforeach
                  
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>
@endsection