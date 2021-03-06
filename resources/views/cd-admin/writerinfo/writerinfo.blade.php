@extends('cd-admin.admin-master')
@section('content')

<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1>Writer Info</h1>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item active">Writer Info</li>
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
					<a href="{{url('/addwriterinfo')}}"><button type="button" class="btn bg-gradient-primary">Add Writer Info</button></a>
				</div>
				<!-- /.card-header -->
				<div class="card-body">
					<table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>Username</th>
								<th>Name</th>
								<th>Email</th>
								<th>Phone Number</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							@foreach($writerinfo as $w)
							<tr>
								<td>{{$w['username']}}</td>
								<td>{{$w['name']}}
								</td>
								<td>{{$w['email']}}</td>
								<td>{{$w['phone']}}</td>
								<td>
									<div class="btn-group">
						                    <button type="button" class="btn btn-success">Action</button>
						                    <button type="button" class="btn btn-success dropdown-toggle dropdown-hover dropdown-icon" data-toggle="dropdown">
						                      <span class="sr-only">Toggle Dropdown</span>
						                      </button>
						                      <div class="dropdown-menu" role="menu">
						                        <a class="dropdown-item btn-danger" data-toggle="modal" data-target="#modal-danger{{$w->id}}">Delete</a>
						                      </div>
					                  </div>
								</td>
							</tr>
							@endforeach
						</tbody>
						<tfoot>
							<tr>
								<th>Username</th>
								<th>Name</th>
								<th>Email</th>
								<th>Phone Number</th>
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

@foreach($writerinfo as $w)

<!-- delete modal -->
<div class="modal fade" id="modal-danger{{$w->id}}">
        <div class="modal-dialog">
          <div class="modal-content bg-danger">
            <div class="modal-header">
              <h4 class="modal-title">Delete Writer Info</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>Are you sure you want to delete this writer info ?</p>
            </div>
            <div class="modal-footer justify-content-between">
            	<form action="{{url('/deletewriterinfo/'.$w->id)}}" method="post">
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