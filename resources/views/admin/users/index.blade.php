@extends('admin.layouts.master')

@section('page')
view products    
@endsection

@section('content')
<div class="row">

   <div class="col-md-12">
       <div class="card">
           <div class="header">
               <h4 class="title">Users</h4>
               <p class="category">List of users</p>
           </div>
           @include('admin.layouts.message')
           <div class="content table-responsive table-full-width">
               <table class="table table-striped">
                   <thead>
                   <tr>
                       <th>ID</th>
                       <th>Name</th>
                       <th>Email</th>
                       <th>Action</th>
                   </tr>
                   </thead>
                   <tbody>
                       @foreach ($users as $item)
                             <tr>
                             <td>{{$item->id}}</td>
                             <td>{{$item->name}}</td>
                             <td>{{$item->email}}</td>
                       <td>

                           {{-- buat delete --}}
                           {{ Form::open(['route'=>['users.destroy',$item->id],'method'=>'DELETE'])}}
                               {{Form::button('<span class="fa fa-trash"></span>',['type'=>'submmit','class'=>'btn btn-danger','onclick'=>'return confirm("are you sure you want to delete this ?")'] )  }}
                               
                           {{Form::close()}}


                           {{-- <button class="btn btn-sm btn-danger ti-trash" title="Delete"></button> --}}
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