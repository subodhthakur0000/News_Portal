@extends('cd-admin.admin-master')
@section('content')

<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1> News</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item"><a href="{{url('view_news')}}">News</a></li>
          <li class="breadcrumb-item active"><a href="{{url()->current()}}">Edit News</a></li>
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
        <h3 class="card-title">Edit News</h3>
      </div>
      <div class="card-body">
        <form action="{{url('update_news/'.$news['id'])}}" method="post">
         @csrf

         <div class="form-group">
          <label >News Title</label>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-align-justify"></i></span>
            </div>
            <input type="text" class="form-control" placeholder="Enter News Title" name="newstitle" value="{{$news['newstitle']}}">
            <div class="text text-danger">{{ $errors->first('newstitle') }}</div>
          </div>
        </div>
        <div class="form-group">
          <label >Writer's User Name</label>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-user-edit"></i></span>
            </div>
            <select class="form-control select2" name="writerusername" value="{{$news['writerusername']}}">
              <option disabled="">Writer's User Name</option>
              <option value="Alabama" <?php echo $news->writerusername=='Alabama'?'selected':''?>>Alabama</option>
            </select>
            <div class="text text-danger">{{ $errors->first('writerusername') }}</div>
          </div>
        </div>
        <?php
                $cat = json_decode($news->category);
          ?>
        <div class="form-group">
          <label>Category</label>
          <div class="form-group clearfix">
            <div class="icheck-success d-inline">
              <input type="checkbox" <?php echo in_array("featured", $cat)?'checked':''?> id="checkboxSuccess1" name="category[]" value="featured">
              <label for="checkboxSuccess1" class="label success">
                Featured 
              </label>
            </div> &nbsp;&nbsp;
            <div class="icheck-success d-inline">
              <input type="checkbox" <?php echo in_array("sports", $cat)?'checked':''?> id="checkboxSuccess2" name="category[]" value="sports">
              <label for="checkboxSuccess2">
                Sports
              </label>
            </div>&nbsp;&nbsp;
            <div class="icheck-success d-inline">
              <input type="checkbox" <?php echo in_array("business", $cat)?'checked':''?> id="checkboxSuccess3" name="category[]" value="business">
              <label for="checkboxSuccess3">
                Business
              </label>
            </div>&nbsp;&nbsp;
            <div class="icheck-success d-inline">
              <input type="checkbox" <?php echo in_array("economy", $cat)?'checked':''?> id="checkboxSuccess4" name="category[]" value="economy">
              <label for="checkboxSuccess4">
                Economy
              </label>
            </div>&nbsp;&nbsp;
            <div class="icheck-success d-inline">
              <input type="checkbox" <?php echo in_array("blogs", $cat)?'checked':''?> id="checkboxSuccess5" name="category[]" value="blogs">
              <label for="checkboxSuccess5">
                Blogs
              </label>
            </div>&nbsp;&nbsp;
            <div class="icheck-success d-inline">
              <input type="checkbox"<?php echo in_array("politics", $cat)?'checked':''?> id="checkboxSuccess6" name="category[]" value="politics">
              <label for="checkboxSuccess6">
                Politics
              </label>
            </div>&nbsp;&nbsp;
          </div>
        </div>
        <div class="form-group">
          <label >News </label>
          <textarea class="textarea" name="news" placeholder="Place some text here"
          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{$news['news']}}</textarea>
          <div class="text text-danger">{{ $errors->first('news') }}</div>
        </div>
        <div class="form-group">
          <label >News Summary</label>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-align-justify"></i></span>
            </div>
            <textarea class="form-control" rows="6" placeholder="Enter News Summary " id="newsdescription" name="newssummary">{{$news['newssummary']}}</textarea>
            <div class="text text-danger">{{ $errors->first('newssummary') }}</div>
          </div>
        </div>
        <div class="form-group">
          <label >Status</label>
          <div class="form-group clearfix">
                      <div class="icheck-success d-inline">
                        <input type="radio" name="status" value="Active" <?php echo $news->status=='Active'?'checked':''?> id="radioSuccess1">
                        <label for="radioSuccess1">Active</label>
                      </div>
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <div class="icheck-success d-inline">
                        <input type="radio" name="status" value="Inactive" id="radioSuccess2" <?php echo $news->status=='Inactive'?'checked':''?>>
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
            <input type="text" class="form-control" placeholder="Enter Seo Title" name="seotitle" value="{{$news['seotitle']}}">
            <div class="text text-danger">{{ $errors->first('seotitle') }}</div>
          </div>
        </div>
        <div class="form-group">
          <label >Seo Keyword</label>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-align-justify"></i></span>
            </div>
            <textarea class="form-control" placeholder="Enter Seo Keyword" name="seokeyword">{{$news['seokeyword']}}</textarea>
            <div class="text text-danger">{{ $errors->first('seokeyword') }}</div>
          </div>
        </div>
        <div class="form-group">
          <label >Seo Description</label>
          <textarea class="textarea form-control" name="seodescription" placeholder="Enter Seo Description">{{$news['seodescription']}}</textarea>
          <div class="text text-danger">{{ $errors->first('seodescription') }}</div>
        </div>                          
        <button type="submit" class="btn btn-info" name="insert" style="float: left">Update News</button> 
      </form>
      <a href="{{url()->previous()}}"><button type="submit" class="btn btn-default" style="float: right">Cancel</button></a>


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