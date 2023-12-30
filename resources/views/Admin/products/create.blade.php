@extends('Admin.layout.master')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>General Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">General Form</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Quick Example</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{route('admin.product.save')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" name='name' class="form-control" id="exampleInputEmail1" placeholder="Enter name of product">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Price</label>
                    <input type="text" name=price class="form-control" id="exampleInputPassword1" placeholder="price">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">catagory</label>
                     <select name="catagory_id" class="form-control" id="">
                        <option value="">Select an option</option>
                        @foreach ($catagories as $catagory )
                            <option value="{{$catagory->id}}">{{$catagory->name}}</option>
                        @endforeach
                     </select>
                </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Status</label>
                    <input type="radio" value=1 name="status" >Active
                    <input type="radio"value=0  name="status" > inActive

                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Is favourite</label>
                    <input type="radio" value="1" name="is_favourite" >favourite
                    <input type="radio" value="0" name="is_favourite" > Not favourite

                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" name="image" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>

                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">save</button>
                </div>
              </form>
            </div>
            <!-- /.card -->




          <!--/.col (left) -->
          <!-- right column -->
          </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  @endsection
