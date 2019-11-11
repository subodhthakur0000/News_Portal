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
            <form action="" method="post">
              	@csrf
              
                <div class="form-group">
                  <label>Page Title</label>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-home"></i></span>
                  </div>
                  <select class="form-control select2">
                    <option selected="selected">Page Title</option>
                    <option>Page title 1</option>
                    <option>Page title 2</option>
                    <option>Page title 3</option>
                    <option>Page title 4</option>
                    <option>Page title 5</option>
                    <option>Page title 6</option>
                  </select>
                </div>
                </div>
                <div class="form-group">
                  <label>Seo Title</label>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-search"></i></span>
                  </div>
                  <input type="text" class="form-control" placeholder="Seo Title">
                </div>
                </div>
                <div class="form-group">
                  <label>Seo Keyword</label>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-align-justify"></i></span>
                  </div>
                  <textarea class="form-control" placeholder="Seo keyword"></textarea>
                </div>
              </div>
              <div class="form-group">
                <label>Seo Description</label>
                <div class="form-group">
                  <textarea class="textarea form-control" placeholder="Seo Description"></textarea>
                </div> 
                </div>              
               <button type="submit" class="btn btn-info" name="insert" style="float: left">Add Seo</button> 
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