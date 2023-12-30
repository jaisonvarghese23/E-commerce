@extends('Admin\layout\master')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Products({{$products->total()}})</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
              <li class="breadcrumb-item active"><a href="{{route('admin.product.list')}}">Products</a></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12 ">
            <div class="card">
                <div class="card-header mr-0">
                    <a href="{{route('admin.product.create')}}" class="btn btn-primary">Add Product</a>
                </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Image</th>
                      <th>Name</th>
                      <th>Catagory Name</th>
                      <th>Price</th>
                      <th>Catagory</th>
                      <th>Status</th>
                      <th>Favourite</th>
                      <th style="width: 15%">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($products as $product)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td><img src="{{asset("storage/images/".$product->image)}}" width="100px"alt="smsm"></td>
                        <td>{{$product->name}}</td>
                        <td>{{$product->catagory->name}}</td>
                        <td>{{number_format($product->price,2)}}</td>
                        <td>{{$product->catagory_id}}</td>
                        <td>{{$product->status}}</td>
                        <td>{{$product->is_favourite}}</td>
                        <td><a href="{{route('admin.product.edit',$product->id)}}" class="btn btn-info btn-sm">Edit</a>
                       <a href="{{route('admin.product.delete',$product->id)}}" class="btn btn-danger btn-sm">Delete</a></td>
                       </tr>
                    @endforeach

                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">

                <ul class="pagination pagination-sm m-0 float-right">
                    {{$products->links()}}
                </ul>
              </div>
            </div>
            <!-- /.card -->


          </div>

      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  @endsection
