@extends('cd-admin.admin-master')
@section('content')

<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1>SEO</h1>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item active">Seo</li>
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
                <h3 class="card-title">Edit Seo</h3>
              </div>
              <div class="card-body">
            <form action="{{url('/updateseo/'.$seo['id'])}}" method="post">
              	@csrf
                <div class="form-group">
                  <label>Page Title</label>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-home"></i></span>
                  </div>
                  <select class="form-control select2" name="pagetitle" value="{{$seo['pagetitle']}}">
                    
                    <option value="home">Home</option>
                    <option value="sports">Sports</option>
                    <option value="news">News</option>
                    <option value="business">Business</option>
                  </select>
                  <div class="text text-danger">{{ $errors->first('pagetitle') }}</div>
                </div>
                </div>
                <div class="form-group">
                  <label>Seo Title</label>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-search"></i></span>
                  </div>
                  <input type="text" class="form-control" name="seotitle" value="{{$seo['seotitle']}}" placeholder="Seo Title">
                  <div class="text text-danger">{{ $errors->first('seotitle') }}</div>
                </div>
                </div>
                <div class="form-group">
                  <label>Seo Keyword</label>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-align-justify"></i></span>
                  </div>
                  <textarea class="form-control" name="seokeyword" value="" placeholder="Seo keyword">{{$seo['seokeyword']}}</textarea>
                  <div class="text text-danger">{{ $errors->first('seokeyword') }}</div>
                </div>
              </div>
              <div class="form-group">
                <label>Seo Description</label>
                <div class="form-group">
                  <textarea class="textarea form-control" name="seodescription"  placeholder="Seo Description">{{$seo['seodescription']}}</textarea>
                  <div class="text text-danger">{{ $errors->first('seodescription') }}</div>
                </div> 
                </div>              
                <button type="submit" class="btn btn-info" name="insert" style="float: left">Update Seo</button>  
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