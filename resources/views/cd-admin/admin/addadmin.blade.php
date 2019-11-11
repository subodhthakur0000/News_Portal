@extends('cd-admin.admin-master')
@section('content')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>ADMIN DETAILS</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">admin</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-12">
      <div class="card">
        
        <!-- /.card-header -->
        <div class="card-body">
          <form action="{{url('/storeadmin')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <form role="form">
              <div class="box-body">
                <div class="form-group">
                  <label>Name</label>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                  </div>
                  <input type="text" class="form-control" placeholder="Name">
                </div>
                </div>
                <div class="form-group">
                  <label>Email</label>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                  </div>
                  <input type="email" class="form-control" placeholder="Email">
                </div>
                </div>
                <div class="form-group">
                  <label>Password</label>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                  </div>
                  <input type="text" class="form-control" placeholder="Password">
                </div>
                </div>
                <div class="form-group">
                  <label>Confirm Password</label>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                  </div>
                  <input type="text" class="form-control" placeholder="Confirm Password">
                </div>
                </div>
                <div class="form-group">
                  <label>Admin Image</label>
                    <div class="input-group">
                      <div class="input-group-append">
                        <span class="input-group-text" id=""><i class="fas fa-cloud-upload-alt" aria-hidden="true"></i></span>
                      </div>
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Upload Admin Image</label>
                      </div>
                </div>
              </div>
              <div class="form-group">
                <label>Alternative Image Description</label>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-align-justify"></i></span>
                  </div>
                  <input type="text" class="form-control" placeholder="Image Description">
                </div>
                </div>
               
               
         
            <div class="form-group">
            <label for="exampleInputPassword1">Role</label><br>
            <input type="radio" name="role" checked value="SuperAdmin"> SuperAdmin &nbsp; &nbsp; &nbsp; &nbsp;
            <input type="radio" name="role" value="Admin"> Admin
          </div>

            <button type="submit" class="btn btn-info" name="insert">Add Admin</button>
              
            </form>
            <a href="{{url()->previous()}}"><button type="submit" class="btn btn-default" style="float: right">Back</button></a>

              
              
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
</section>
<!-- /.content -->
@endsection