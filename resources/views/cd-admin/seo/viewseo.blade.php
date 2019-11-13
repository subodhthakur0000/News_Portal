@extends('cd-admin.admin-master')
@section('content')

<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1>SEO DETAILS</h1>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item active">seo</li>
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
					<a href="{{url('/addseo')}}"><button type="button" class="btn bg-gradient-primary">Add Seo</button></a>
				</div>
				<!-- /.card-header -->
				<div class="card-body">
					<table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>Page Title</th>
								<th>Seo Title</th>
								<th>Seo Keyword</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							@foreach($seo as $s)
							<tr>
								<td>{{$s['pagetitle']}}</td>
								<td>{{$s['seotitle']}}
								</td>
								<td>{{$s['seokeyword']}}</td>
								<td>
									<div class="btn-group">
						                    <button type="button" class="btn btn-success">Action</button>
						                    <button type="button" class="btn btn-success dropdown-toggle dropdown-hover dropdown-icon" data-toggle="dropdown">
						                      <span class="sr-only">Toggle Dropdown</span>
						                      </button>
						                      <div class="dropdown-menu" role="menu">
						                        <a class="dropdown-item" data-toggle="modal" data-target="#modal-lg{{$s->id}}">View</a>
						                        <a class="dropdown-item" href="{{url('/editseo/'.$s->id)}}">Edit</a>
						                        <a class="dropdown-item btn-danger" data-toggle="modal" data-target="#modal-danger{{$s->id}}">Delete</a>
						                      </div>
					                  </div>
								</td>
							</tr>
							@endforeach
						</tbody>
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
@foreach($seo as $s)
<!-- view Modal -->
<div class="modal fade" id="modal-lg{{$s->id}}">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">View Seo</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              	<p><b>Page Title:</b>&nbsp;{{$s['pagetitle']}}</p><br>
              	<p><b>Seo Title:</b>&nbsp;{{$s['seotitle']}}</p><br>
              	<p><b>Seo Keyword:</b>&nbsp;{{$s['seokeyword']}}</p><br>
              	<p><b>Seo Description:</b>&nbsp;{!!$s['seodescription']!!}</p><br>
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
	<div class="modal fade" id="modal-danger{{$s->id}}">
        <div class="modal-dialog">
          <div class="modal-content bg-danger">
            <div class="modal-header">
              <h4 class="modal-title">Delete Seo</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>Are you sure you want to delete this seo section ?</p>
            </div>
            <div class="modal-footer justify-content-between">
            	<form action="{{url('/deleteseo/'.$s->id)}}" method="post">
            		@csrf

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