@extends('cd-admin.admin-master')
@section('content')

<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1>Reply</h1>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item active">Reply</li>
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
                <h3 class="card-title">Add Reply</h3>
              </div>
              <div class="card-body">
            <form action="{{url('/storereply')}}" method="post">
              	@csrf
                <div class="form-group">
                  <label>Reply</label>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text">@</span>
                  </div>
                  <input type="text" class="form-control" name="reply" value="{{old('reply')}}" placeholder="Reply">
                  <div class="text text-danger">{{ $errors->first('reply') }}</div>
                </div>
                </div>
                <div class="form-group">
                  <label>Email</label>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                  </div>
                  <input type="email" class="form-control" name="email" value="{{old('email')}}" placeholder="Email">
                  <div class="text text-danger">{{ $errors->first('email') }}</div>
                </div>
                </div>
                <button type="submit" class="btn btn-info" name="insert" style="float: left">Add Reply</button> 
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