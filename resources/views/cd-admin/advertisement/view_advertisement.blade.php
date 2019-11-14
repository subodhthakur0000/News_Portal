@extends('cd-admin.admin-master')
@section('content')

<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Advertisement</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item"><a href="{{url('view_advertisement')}}">Advertisement</a></li>
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
          <h3 class="card-title">Advertisement Details</h3>
          <a href="{{url('/add_advertisement')}}"><button type="button" class="btn bg-gradient-primary float-sm-right">Add Advertisement</button></a>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>Advertisement Title</th>
                <th>Advertisement URL</th>
                <th>Section</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($advertisement as $a)
              <tr>
                <td>{{$a->advertisementtitle}}</td>
                <td>{{$a->advertisementurl}}
                </td>
                <td>{{$a->section}}</td>
                <td>
                  <div class="btn-group">
                                <button type="button" class="btn btn-success">Action</button>
                                <button type="button" class="btn btn-success dropdown-toggle dropdown-hover dropdown-icon" data-toggle="dropdown">
                                  <span class="sr-only">Toggle Dropdown</span>
                                  </button>
                                  <div class="dropdown-menu" role="menu">
                                    <a class="dropdown-item" data-toggle="modal" data-target="#modal-lg{{$a->id}}">View</a>
                                    <a class="dropdown-item" href="{{url('/edit_advertisement/'.$a->id)}}">Edit</a>
                                    <a class="dropdown-item btn-danger" data-toggle="modal" data-target="#modal-danger{{$a->id}}">Delete</a>
                                  </div>
                            </div>
                </td>
              </tr>
              @endforeach
            </tbody>
            <tfoot>
              <tr>
                <th>Advertisement Title</th>
                <th>Advertisement URL</th>
                <th>Section</th>
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

@foreach($advertisement as $a)

<!-- view Modal -->
<div class="modal fade" id="modal-lg{{$a->id}}">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">View Seo</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <p><b>Advertisement Title:</b>&nbsp;{{$a->advertisementtitle}}</p><br>
                <p><b>Advertisement:</b>&nbsp;Advertisement will be here</p><br>
                <p><b>Advertisement Alt Description:</b>&nbsp;{{$a->alternativeadvertisementdescription}}</p><br>
                <p><b>Advertisment URL:</b>&nbsp;{{$a->advertisementurl}}</p><br>
                <p><b>Section:</b>&nbsp;{{$a->section}}</p><br>
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
              <h4 class="modal-title">Delete Advertisment</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>Are you sure you want to delete this advertisement ?</p>
            </div>
            <div class="modal-footer justify-content-between">
              <form action="{{url('/delete_advertisement/'.$a->id)}}" method="post">
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