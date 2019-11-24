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
          <li class="breadcrumb-item active"><a href="{{url()->current()}}">Add Advertisement</a></li>
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
        <h3 class="card-title">Add Advertisement</h3>
      </div>
      <div class="card-body">
        <form action="{{url('/store_advertisement')}}" method="post" enctype="multipart/form-data">
         @csrf

         <div class="form-group">
          <label >Advertisement Title</label>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-align-justify"></i></span>
            </div>
            <input type="text" class="form-control" name="advertisementtitle" value="{{old('advertisementtitle')}}" placeholder="Enter Advertisement Title" name="newstitle">
            <div class="text text-danger">{{ $errors->first('advertisementtitle') }}</div>
          </div>
        </div>
        <div class="form-group">
          <label >Advertisement URL</label>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-link"></i></span>
            </div>
            <input type="text" class="form-control" name="advertisementurl" value="{{old('advertisementurl')}}" placeholder="Enter Advertisement URL" name="newstitle">
            <div class="text text-danger">{{ $errors->first('advertisementurl') }}</div>
          </div>
        </div>
        <div class="form-group">
          <label >Advertisement Description</label>
          <textarea class="textarea" name="advertisementdescription" placeholder="Place some text here"
          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{old('advertisementdescription')}}</textarea>
          <div class="text text-danger">{{ $errors->first('advertisementdescription') }}</div>  
                  <div class="form-group">
                    <label >Upload Advertisement </label>
                    <div class="input-group">
                      <div class="input-group-append">
                        <span class="input-group-text" id=""><i class="fas fa-cloud-upload-alt" aria-hidden="true"></i></span>
                      </div>
                    <input type="file" name="image" value="{{old('image')}}">
                    <div class="text text-danger">{{ $errors->first('image') }}</div>
                  </div>
                  </div>
                  <div class="form-group">
                      <label >Alternative Advertisement Description</label>
                      <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa-align-justify"></i></span>
                            </div>
                            <input type="text" class="form-control" name="alternativeadvertisementdescription" value="{{old('alternativeadvertisementdescription')}}" placeholder="Enter Alternative Advertisement Description" name="Image_title">
                            <div class="text text-danger">{{ $errors->first('alternativeadvertisementdescription') }}</div>
                          </div>
                        </div>

                  <div class="form-group">
                  <label >Section</label>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-align-justify"></i></span>
                  </div>
                  <select class="form-control select2" name="section">
                    <option selected="selected">Select Section</option>
                    <option value="header">Header</option>
                    <option value="body">Body</option>
                    <option value="leftside">Left Side</option>
                    <option value="rightside">Right Side</option>
                    <option value="footer">Footer</option>
                  </select>
                  <div class="text text-danger">{{ $errors->first('section') }}</div>
                </div>
                </div>

                <div class="form-group">
          <label >Status</label>
          <div class="form-group clearfix">
                      <div class="icheck-success d-inline">
                        <input type="radio" name="status"  id="radioSuccess1" value="Status">
                        <label for="radioSuccess1">Active</label>
                      </div>
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <div class="icheck-success d-inline">
                        <input type="radio" name="status" id="radioSuccess2" value="Inactive">
                        <label for="radioSuccess2">Inactive</label>
                      </div>
                      <div class="text text-danger">{{ $errors->first('status') }}</div>
          </div>
          </div>

        <button type="submit" class="btn btn-info" name="insert" style="float: left">Add Advertisement</button> 
      </form>
      <a href="{{url()->previous()}"><button type="button" class="btn btn-default" style="float: right">Back</button></a>


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