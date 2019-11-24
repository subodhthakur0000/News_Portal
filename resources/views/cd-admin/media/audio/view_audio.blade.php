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
          <li class="breadcrumb-item active"><a href="{{url()->current()}}">Audio</a></li>

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
         <h3 class="card-title">Audio Details</h3>
         <a href="{{url('/add_audio')}}"><button type="button" class="btn bg-gradient-primary float-sm-right">Add Audio</button></a>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>Audio Title</th>
                <th>Audio Link</th>
                <th>Views</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($audio as $a)
              <tr>
                <td>{{$a->audiotitle}}</td>
                <td>{{$a->audiourl}}
                </td>
                <td>yet to integrate</td>
                <td>
                  <div class="btn-group">
                                <button type="button" class="btn btn-success">Action</button>
                                <button type="button" class="btn btn-success dropdown-toggle dropdown-hover dropdown-icon" data-toggle="dropdown">
                                  <span class="sr-only">Toggle Dropdown</span>
                                  </button>
                                  <div class="dropdown-menu" role="menu">
                                    <a class="dropdown-item" data-toggle="modal" data-target="#modal-lg{{$a->id}}">View</a>
                                    <a class="dropdown-item btn-danger" data-toggle="modal" data-target="#modal-danger{{$a->id}}">Delete</a>
                                  </div>
                            </div>
                </td>
              </tr>
              @endforeach
            </tbody>
            <tfoot>
              <tr>
                <th>Audio Title</th>
                <th>Audio Link</th>
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

@foreach($audio as $a)
<!-- view Modal -->
<div class="modal fade" id="modal-lg{{$a->id}}">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">View Audio</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <p><b>Audio Title:</b>&nbsp;{{$a->audiotitle}}</p><br>
                <p><b>Audio Link:</b>&nbsp;{{$a->audiourl}}</p><br>
                <p><b>Audio View:</b>&nbsp;Views count will be here</p><br>
                <p><b>Audio Description:</b>&nbsp;{!!$a->audiodescription!!}</p><br>
                <p><b>Seo Title:</b>&nbsp;{{$a->seotitle}}</p><br>
                <p><b>Seo Keyword:</b>&nbsp;{{$a->seokeyword}}</p><br>
                <p><b>Seo Description:</b>&nbsp;{!!$a->seodescription!!}</p><br>
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
<div class="modal fade" id="modal-danger{{$a->id}}">
        <div class="modal-dialog">
          <div class="modal-content bg-danger">
            <div class="modal-header">
              <h4 class="modal-title">Delete Audio</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>Are you sure you want to delete this audio ?</p>
            </div>
            <div class="modal-footer justify-content-between">
              <form action="{{url('delete_audio/'.$a->id)}}" method="post">
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