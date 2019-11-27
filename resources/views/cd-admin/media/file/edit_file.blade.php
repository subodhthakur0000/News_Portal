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
          <li class="breadcrumb-item active"><a href="{{url()->current()}}">Edit File</a></li>
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
        <h3 class="card-title">Edit File</h3>
      </div>
      <div class="card-body">
        <form action="{{url('/update_file/'.$file->id)}}" method="post" enctype="multipart/form-data">
         @csrf
         <div class="form-group">
          <label >File Title</label>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-align-justify"></i></span>
            </div>
            <input type="text" class="form-control" placeholder="Enter File Title" name="filetitle" value="{{$file['filetitle']}}">
            <div class="text text-danger">{{ $errors->first('filetitle') }}</div>
          </div>
        </div>
        <div class="form-group">
          <p><b>Upload File</b> (Optional)</p>
          <div class="input-group">
            <div class="input-group-append">
              <span class="input-group-text" id=""><i class="fas fa-cloud-upload-alt" aria-hidden="true"></i></span>
            </div>
            <input type="file" name="file" value="{{$file['file']}}">
            <div class="text text-danger">{{ $errors->first('file') }}</div>
          </div>
        </div>

        <div class="form-group">
          <label >File Url</label>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-align-justify"></i></span>
            </div>
            <input type="url" class="form-control" placeholder="Enter File Url" name="fileurl" value="{{$file['fileurl']}}">
            <div class="text text-danger">{{ $errors->first('fileurl') }}</div>
          </div>
        </div>

        <div class="form-group">
         <label >File Descripton </label>
         <textarea class="textarea" placeholder=""
         style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" name="filedescription">{{$file['filedescription']}}</textarea>
         <div class="text text-danger">{{ $errors->first('filedescription') }}</div>
       </div>
       <div class="form-group">
        <label >File Summary</label>
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-align-justify"></i></span>
          </div>
          <textarea class="form-control" rows="6" placeholder="Enter File Summary " name="filesummary">{{$file['filesummary']}}</textarea>
          <div class="text text-danger">{{ $errors->first('filesummary') }}</div>
        </div>
      </div>
      <div class="form-group">
        <label >Status</label>
        <div class="form-group clearfix">
          <div class="icheck-success d-inline">
            <input type="radio" name="status"  id="radioSuccess1" value="Active" <?php echo $file->status=='Active'?'checked':''?>>
            <label for="radioSuccess1">Active</label>
          </div>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <div class="icheck-success d-inline">
            <input type="radio" name="status" id="radioSuccess2" value="Inactive" <?php echo $file->status=='Inactive'?'checked':''?>>
            <label for="radioSuccess2" >Inactive</label>
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
          <input type="text" class="form-control" placeholder="Enter Seo Title" name="seotitle" value="{{$file['seotitle']}}">
          <div class="text text-danger">{{ $errors->first('seotitle') }}</div>
        </div>
      </div>
      <div class="form-group">
        <label >Seo Keyword</label>
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-file"></i></span>
          </div>
          <textarea class="form-control" placeholder="Enter Seo Keyword" name="seokeyword">{{$file['seokeyword']}}</textarea>
          <div class="text text-danger">{{ $errors->first('seokeyword') }}</div>
        </div>
      </div>
      <div class="form-group">
        <label >Seo Description</label>
        <textarea class="textarea form-control" placeholder="Enter Seo Description" name="seodescription">{{$file['seodescription']}}</textarea>
        <div class="text text-danger">{{ $errors->first('seodescription') }}</div>
      </div>              
      <button type="submit" class="btn btn-info" name="insert" style="float: left">Update File</button> 
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