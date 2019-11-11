@extends('cd-admin.admin-master')
@section('content')

<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1>User Info</h1>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item active">User Info</li>
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
                <h3 class="card-title">Add User Info</h3>
              </div>
              <div class="card-body">
            <form action="" method="post">
              	@csrf
                <div class="form-group">
                  <label>Name</label>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text">@</span>
                  </div>
                  <input type="text" class="form-control" placeholder="Name">
                </div>
                </div>
                <div class="form-group">
                  <label>Email</label>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                  </div>
                  <input type="email" class="form-control" placeholder="Email">
                </div>
                </div>
                <div class="form-group">
                  <label>Phone</label>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-phone"></i></span>
                  </div>
                  <input type="number" class="form-control" placeholder="Phone">
                </div>
                </div>
                <button type="submit" class="btn btn-info" name="insert" style="float: left">Add Info</button> 
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