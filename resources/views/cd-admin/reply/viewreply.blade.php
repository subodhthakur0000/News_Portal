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
			<div class="card">
				<div class="card-header">
					<a href="{{url('/addreply')}}"><button type="button" class="btn bg-gradient-primary">Add Comment</button></a>
				</div>
				<!-- /.card-header -->
				<div class="card-body">
					<table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>Reply</th>
								<th>Email</th>
								<th>Status</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							@foreach($reply as $r)
							<tr>
								<td>{{$r->reply}}</td>
								<td>{{$r->email}}</td>
								<td>Win 95+</td>
								<td>
									<div class="btn-group">
						                    <button type="button" class="btn btn-success">Action</button>
						                    <button type="button" class="btn btn-success dropdown-toggle dropdown-hover dropdown-icon" data-toggle="dropdown">
						                      <span class="sr-only">Toggle Dropdown</span>
						                      </button>
						                      <div class="dropdown-menu" role="menu">
						                        <a class="dropdown-item" data-toggle="modal" data-target="#modal-lg{{$r->id}}">View</a>
						                        <a class="dropdown-item btn-danger" data-toggle="modal" data-target="#modal-danger{{$r->id}}">Delete</a>
						                      </div>
					                  </div>
								</td>
							</tr>
							@endforeach
						</tbody>
						<tfoot>
							<tr>
								<th>Reply</th>
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

@foreach($reply as $r)

<!-- view Modal -->
<div class="modal fade" id="modal-lg{{$r->id}}">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">View Reply</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              	<p><b>Status:</b>&nbsp;Active</p><br>
              	<p><b>Comment:</b>&nbsp;comment on post</p><br>
              	<p><b>Reply:</b>&nbsp;{{$r->reply}}</p><br>
              	<p><b>Name:</b>&nbsp;Name of user</p><br>
              	<p><b>Email:</b>&nbsp;{{$r->email}}</p><br>
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
<div class="modal fade" id="modal-danger{{$r->id}}">
        <div class="modal-dialog">
          <div class="modal-content bg-danger">
            <div class="modal-header">
              <h4 class="modal-title">Delete Reply</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>Are you sure you want to delete this reply ?</p>
            </div>
            <div class="modal-footer justify-content-between">
            	<form action="{{url('/deletereply/'.$r->id)}}"  method="post">
            		@csrf
            		@method('DELETE')
              <button type="submit" class="btn btn-outline-light">Yes</button>
              </form>
              <button type="button" class="btn btn-outline-light" data-dismiss="modal">No</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->

      @endforeach
@endsection