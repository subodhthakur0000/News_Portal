@extends('cd-admin.admin-master')
@section('content')

<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Media</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{url('/dashboard')}}">Home</a></li>
          <li class="breadcrumb-item"><a href="{{url('/media')}}">Media</a></li>
          <li class="breadcrumb-item active"><a href="{{url()->current()}}">Edit Photo</a></li>
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
                <h3 class="card-title">Edit Photo</h3>
              </div>
              <div class="card-body">
            <form action="{{url('update_photo/'.$photo->id)}}" method="post" enctype="multipart/form-data">
              	@csrf

                <div class="form-group">
                      <label >Photo Title</label>
                      <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa-align-justify"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Enter Photo Title" name="phototitle" value="{{$photo['phototitle']}}">
                            <div class="text text-danger">{{ $errors->first('phototitle') }}</div>
                          </div>

                  <div class="form-group">
          <p><b>Upload Photo</b> (Optional)</p>
          <div class="input-group">
            <div class="input-group-append">
              <span class="input-group-text" id=""><i class="fas fa-cloud-upload-alt" aria-hidden="true"></i></span>
            </div>
            <input type="file" name="photo[]" value="{{$photo['photo']}}" multiple>
            <div class="text text-danger">{{ $errors->first('photo') }}</div>
          </div>
        </div>
              
              <div class="form-group">
                  <label >Photo Url</label>
                  <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa-link"></i></span>
                            </div>
                            <input type="url" class="form-control" placeholder="Enter Photo Url" name="photourl" value="{{$photo['photourl']}}">
                            <div class="text text-danger">{{ $errors->first('photourl') }}</div>
                          </div>
                        </div>
                        
                        </div>
                        <div class="form-group">
                  			<label >Photo Descripton </label>
                           <textarea class="textarea" name="photodescription" placeholder=""
                  style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{$photo['photodescription']}}</textarea>
                  <div class="text text-danger">{{ $errors->first('photodescription') }}</div>
                        </div>
                        <div class="form-group">
                  <label >Photo Summary</label>
                  <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa-align-justify"></i></span>
                            </div>
                            <textarea class="form-control" rows="6" placeholder="Enter Photo Summary " name="photosummary">{{$photo['photosummary']}}</textarea>
                            <div class="text text-danger">{{ $errors->first('photosummary') }}</div>
                          </div>
                        </div>
                         <div class="form-group">
        <label >Status</label>
        <div class="form-group clearfix">
          <div class="icheck-success d-inline">
            <input type="radio" name="status"  id="radioSuccess1" value="Active"<?php echo $photo->status=='Active'?'checked':''?>>
            <label for="radioSuccess1">Active</label>
          </div>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <div class="icheck-success d-inline">
            <input type="radio" name="status" id="radioSuccess2" value="Inactive"<?php echo $photo->status=='Inactive'?'checked':''?>>
            <label for="radioSuccess2">Inactive</label>
          </div>
          <div class="text text-danger">{{ $errors->first('status') }}</div>
        </div>
      </div>
      <hr>
      <p id="seo-section"><b>Seo Section</b></p>
      <hr>
                        <div class="form-group">
                  <label >Seo Title</label>
                  <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa-search"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Enter Seo Title" name="seotitle" value="{{$photo['seotitle']}}">
                            <div class="text text-danger">{{ $errors->first('seotitle') }}</div>
                          </div>
                      </div>
                      <div class="form-group">
                        <label >Seo Keyword</label>
                          <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa-align-justify"></i></span>
                            </div>
                            <textarea class="form-control" placeholder="Enter Seo Keyword" name="seokeyword">{{$photo['seokeyword']}}</textarea>
                            <div class="text text-danger">{{ $errors->first('seokeyword') }}</div>
                          </div>
                      </div>
                      <div class="form-group">
                        <label >Seo Description</label>
                            <textarea class="textarea form-control" placeholder="Enter Seo Description" name="seodescription">{{$photo['seodescription']}}</textarea>
                            <div class="text text-danger">{{ $errors->first('seodescription') }}</div>
                      </div>              
                <button type="submit" class="btn btn-info" name="insert" style="float: left">Update Photo</button> 
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