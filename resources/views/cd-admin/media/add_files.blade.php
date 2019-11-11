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
          <li class="breadcrumb-item active"><a href="{{url()->current()}}">Add File</a></li>
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
                <h3 class="card-title">Add File</h3>
              </div>
              <div class="card-body">
            <form action="" method="post">
              	@csrf
              
                 <div class="form-group">
                 	<label >Upload File </label>
                    <div class="input-group">
                      <div class="input-group-append">
                        <span class="input-group-text" id=""><i class="fas fa-cloud-upload-alt" aria-hidden="true"></i></span>
                      </div>
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Upload Admin File</label>
                      </div>
                	</div><br>
                	<div class="form-group">
		                  <label >Alternative File Description</label>
		                  <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa-file"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Enter Alternative File Description" name="Image_title">
                          </div>
                        </div>
                        <div class="form-group">
		                  <label >File Title</label>
		                  <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa-file"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Enter File Title" name="File_title">
                          </div>
                        </div>
                        <div class="form-group">
                  			<label >File Descripton </label>
                           <textarea class="textarea" placeholder=""
                  style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                        </div>
                        <div class="form-group">
                  <label >File Summary</label>
                  <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa-file"></i></span>
                            </div>
                            <textarea class="form-control" rows="6" placeholder="Enter File Summary " name="File_summary"></textarea>
                          </div>
                        </div>
                        <div class="form-group">
                  <label >Seo Title</label>
                  <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa-file"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Enter Seo Title">
                          </div>
                      </div>
                      <div class="form-group">
                        <label >Seo Keyword</label>
                          <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa-file"></i></span>
                            </div>
                            <textarea class="form-control" placeholder="Enter Seo Keyword"></textarea>
                          </div>
                      </div>
                      <div class="form-group">
                        <label >Seo Description</label>
                            <textarea class="textarea form-control" placeholder="Enter Seo Description"></textarea>
                      </div>              
                <button type="submit" class="btn btn-info" name="insert" style="float: left">Add File</button> 
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