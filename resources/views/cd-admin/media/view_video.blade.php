@extends('cd-admin.admin-master')
@section('content')

<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Media</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{url('/dashboard')}}">Home</a></li>
          <li class="breadcrumb-item active"><a href="{{url('/media')}}">Media</a></li>
          <li class="breadcrumb-item active"><a href="{{url()->current()}}">Video</a></li>

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
         <h3 class="card-title">Video Details</h3>
         <a href="{{url('/add_video')}}"><button type="button" class="btn bg-gradient-primary float-sm-right">Add Video</button></a>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>Video Title</th>
                <th>Video Link</th>
                <th>Views</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($video as $v)
              <tr>
                <td>{{$v->videotitle}}</td>
                <td>{{$v->videourl}}
                </td>
                <td>Yet to integrate</td>
                <td>
                  <div class="btn-group">
                                <button type="button" class="btn btn-success">Action</button>
                                <button type="button" class="btn btn-success dropdown-toggle dropdown-hover dropdown-icon" data-toggle="dropdown">
                                  <span class="sr-only">Toggle Dropdown</span>
                                  </button>
                                  <div class="dropdown-menu" role="menu">
                                    <a class="dropdown-item" data-toggle="modal" data-target="#modal-lg{{$v->id}}">View</a>
                                    <a class="dropdown-item btn-danger" data-toggle="modal" data-target="#modal-danger{{$v->id}}">Delete</a>
                                  </div>
                            </div>
                </td>
              </tr>
              @endforeach
            </tbody>
            <tfoot>
              <tr>
                <th>Video Title</th>
                <th>Video Link</th>
                <th>Views</th>
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

@foreach($video as $v)

<!-- view Modal -->
<div class="modal fade" id="modal-lg{{$v->id}}">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">View Video</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <p><b>Video Title:</b>&nbsp;{{$v->videotitle}}</p><br>
                <p><b>Video Link:</b>&nbsp;{{$v->videourl}}</p><br>
                <p><b>Video View:</b>&nbsp;Views count will be here</p><br>
                <p><b>Video Description:</b>&nbsp;{!!$v->videodescription!!}</p><br>
                <p><b>Seo Title:</b>&nbsp;{{$v->seotitle}}</p><br>
                <p><b>Seo Keyword:</b>&nbsp;{{$v->seokeyword}}</p><br>
                <p><b>Seo Description:</b>&nbsp;{!!$v->seodescription!!}</p><br>
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
<div class="modal fade" id="modal-danger{{$v->id}}">
        <div class="modal-dialog">
          <div class="modal-content bg-danger">
            <div class="modal-header">
              <h4 class="modal-title">Delete Video</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>Are you sure you want to delete this Video ?</p>
            </div>
            <div class="modal-footer justify-content-between">
              <form action="{{url('delete_video/'.$v->id)}}" method="post">
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