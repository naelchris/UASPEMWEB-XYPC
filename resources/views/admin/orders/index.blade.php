@extends('admin.layouts.master')

@section('page')
view products    
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        @include('admin.layouts.message')
        <div class="col-md-12">
            <div class="card">
                <div class="header">
                    <h4 class="title">Orders</h4>
                    <p class="category">List of all orders</p>
                </div>
                <div class="content table-responsive table-full-width">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>User</th>
                            <th>Product</th>
                            <th>Quantity</th>
                            <th>Address</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>

                            @foreach ($order as $orders)
                        <tr>
                        <td>{{$orders->id}}</td>
                        <td>{{$orders->user->name}}</td>
                        {{-- dia bisa lebih dari satu product jadi ada for --}}
                        <td>
                            @foreach ($orders->products as $item)
                                {{$item->name}}
                            @endforeach
                        </td>
                        <td>
                            @foreach ($orders->OrderItems as $item)
                                {{$item->quantity}}
                            @endforeach
                        </td>
                        <td>{{$orders->address}}</td>
                        <td>
                            @if ($orders->status == 1)
                            <span class="label label-success">Confirmed</span>
                            @else
                            <span class="label label-warning">Pending</span>
                            @endif

                        </td>
                        <td>
                            {{-- disini button --}}
                            @if ($orders->status == 1)
                                {{link_to_route('orders.pending', 'Pending', $orders->id, ['class'=>'btn btn-warning btn-sm']) }}
                                {{-- <a href="{{ url('orders/pending/'.$orders->id) }}" class="btn btn-warning btn-sm">Pending</a> --}}


                            @else
                            {{-- <a href="{{ url('orders/confirm/'.$orders->id) }}" class="btn btn-success btn-sm">Confirm</a> --}}
                            {{ link_to_route('orders.confirm', 'confirm', $orders->id, ['class'=>'btn btn-success btn-sm']) }}

                            
                                
                            @endif
                            {{ link_to_route('orders.show', 'Show', $orders->id, ['class'=>'btn btn-success btn-sm']) }}

                            {{-- {{link_to_route('order.pending', 'Pending', $orders->id, ['class'=>'btn btn-warning btn-sm']) }}
                            {{ link_to_route('order.confirm', 'confirm', $orders->id, ['class'=>'btn btn-success btn-sm']) }} --}}

                        </td>
                        </tr>
                            @endforeach

                        </tbody>
                    </table>

                </div>
            </div>
        </div>


    </div>
</div>
@endsection