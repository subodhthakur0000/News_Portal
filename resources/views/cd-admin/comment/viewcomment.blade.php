@extends('cd-admin.admin-master')
@section('content')

<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1>Comment</h1>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="{{url('/dashboard')}}">Home</a></li>
					<li class="breadcrumb-item active">Comment</li>
				</ol>
			</div>
		</div>
	</div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-header">
					<h3 class="card-title">Comment Details</h3>
				</div>
				<!-- /.card-header -->
				<div class="card-body">
					<table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>Comment</th>
								<th>Email</th>
								<th>Status</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Trident</td>
								<td>Internet
									Explorer 4.0
								</td>
								<td>Win 95+</td>
								<td>
									<div class="btn-group">
						                    <button type="button" class="btn btn-success">Action</button>
						                    <button type="button" class="btn btn-success dropdown-toggle dropdown-hover dropdown-icon" data-toggle="dropdown">
						                      <span class="sr-only">Toggle Dropdown</span>
						                      </button>
						                      <div class="dropdown-menu" role="menu">
						                        <a class="dropdown-item" data-toggle="modal" data-target="#modal-lg">View</a>
						                        <a class="dropdown-item btn-danger" data-toggle="modal" data-target="#modal-danger">Delete</a>
						                      </div>
					                  </div>
								</td>
							</tr>
							<tr>
								<td>Trident</td>
								<td>Internet
									Explorer 5.0
								</td>
								<td>Win 95+</td>
								<td>
									<div class="btn-group">
						                    <button type="button" class="btn btn-success">Action</button>
						                    <button type="button" class="btn btn-success dropdown-toggle dropdown-hover dropdown-icon" data-toggle="dropdown">
						                      <span class="sr-only">Toggle Dropdown</span>
						                      </button>
						                      <div class="dropdown-menu" role="menu">
						                        <a class="dropdown-item" data-toggle="modal" data-target="#modal-lg">View</a>
						                        <a class="dropdown-item btn-danger" data-toggle="modal" data-target="#modal-danger">Delete</a>
						                      </div>
					                  </div>
								</td>
							</tr>
						</tbody>
						<tfoot>
							<tr>
								<th>Comment</th>
								<th>Email</th>
								<th>Status</th>
								<th>Action</th>
							</tr>
						</tfoot>
					</table>
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

<!-- view Modal -->
<div class="modal fade" id="modal-lg">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">View Comment</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              	<p><b>Status:</b>&nbsp;Active</p><br>
              	<p><b>Post Title:</b>&nbsp;title of the post</p><br>
              	<p><b>Comment:</b>&nbsp;comment on post</p><br>
              	<p><b>Name:</b>&nbsp;Name of user</p><br>
              	<p><b>Email:</b>&nbsp;Email of user</p><br>
              	<p><b>Mobile:</b>&nbsp;Email of user</p><br>

            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->


<!-- delete modal -->
<div class="modal fade" id="modal-danger">
        <div class="modal-dialog">
          <div class="modal-content bg-danger">
            <div class="modal-header">
              <h4 class="modal-title">Delete Comment</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>Are you sure you want to delete this comment ?</p>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-outline-light">Yes</button>
              <button type="button" class="btn btn-outline-light" data-dismiss="modal">No</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
@endsection