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
                <h3 class="card-title">Add Seo</h3>
              </div>
              <div class="card-body">
            <form action="" method="post">
              	@csrf
              
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
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-file"></i></span>
                  </div>
                  <input type="text" class="form-control" placeholder="Seo Title">
                </div>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-file"></i></span>
                  </div>
                  <textarea class="form-control">Seo keyword</textarea>
                </div>
                <div class="form-group">
                  <textarea class="textarea form-control" placeholder="Seo Description">Seo Description</textarea>
                </div>               
                <button type="submit" class="btn btn-primary"> Add Seo</button>
                 <a href="{{url('/seo')}}"><button type="button" class="btn btn-default float-right" data-dismiss="modal">Back</button></a>
                
                </form>

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