@extends('cd-admin.admin-master')
@section('content')

<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Advertisement</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item"><a href="{{url('view_advertisement')}}">Advertisement</a></li>
          <li class="breadcrumb-item active"><a href="{{url()->current()}}">Edit Advertisement</a></li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
	<div class="row"> 
		<div class="col-12">
     <!-- Input addon -->
     <div class="card card-info">
      <div class="card-header">
        <h3 class="card-title">Edit Advertisement</h3>
      </div>
      <div class="card-body">
        <form action="" method="post">
         @csrf

         <div class="form-group">
          <label >Advertisement Title</label>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-file"></i></span>
            </div>
            <input type="text" class="form-control" placeholder="Enter Advertisement Title" name="newstitle">
          </div>
        </div>
        <div class="form-group">
          <label >Advertisement URL</label>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-file"></i></span>
            </div>
            <input type="text" class="form-control" placeholder="Enter Advertisement URL" name="newstitle">
          </div>
        </div>
        <div class="form-group">
          <label >Advertisement Description</label>
          <textarea class="textarea" placeholder="Place some text here"
          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
        </div>
        <div class="form-group">
                  <label >Upload Advertisement </label>
                    <div class="input-group">
                      <div class="input-group-append">
                        <span class="input-group-text" id=""><i class="fas fa-cloud-upload-alt" aria-hidden="true"></i></span>
                      </div>
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Upload Advertisment</label>
                      </div>
                  </div><br>
                  <div class="form-group">
                      <label >Alternative Advertisement Description</label>
                      <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa-file"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Enter Alternative Advertisement Description" name="Image_title">
                          </div>
                        </div>

                  <div class="form-group">
                  <label >Section</label>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-home"></i></span>
                  </div>
                  <select class="form-control select2">
                    <option selected="selected">Select Section</option>
                    <option>Header</option>
                    <option>Body</option>
                    <option>Left Side</option>
                    <option>Right Side</option>
                    <option>Footer</option>
                  </select>
                </div>
                </div>

        <button type="submit" class="btn btn-info" name="insert" style="float: left">Update Advertisement</button> 
      </form>
      <a href="{{url('/view_advertisement')}}"><button type="button" class="btn btn-default" style="float: right">Back</button></a>


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