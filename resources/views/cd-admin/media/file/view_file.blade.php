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
          <li class="breadcrumb-item active"><a href="{{url()->current()}}">File</a></li>

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
         <h3 class="card-title">File Details</h3>
         <a href="{{url('/add_file')}}"><button type="button" class="btn bg-gradient-primary float-sm-right">Add File</button></a>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>File Title</th>
                <th>File Summary</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($file as $f)
              <tr>
                <td>{!!str_limit($f->filetitle,'100')!!}</td>
                <td>{!!str_limit($f->filesummary,'100')!!}
                </td>
                <td>
                  <form action="{{url('/update_filestatus/'.$f->id)}}" method="POST">
                @csrf
                <div class="btn-group">
                 @if($f['status']=='Active')
                 <button type="button" class="btn bg-success">{{$f->status}}</button>
                 @else
                 <button type="button" class="btn bg-danger">{{$f->status}}</button>
                 @endif
                 <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                  <span class="caret"></span>
                  <span class="sr-only">Toggle Dropdown</span>
                </button>
                @if($f['status']=='Active')
                <div class="dropdown-menu" role="menu" style="min-width: 0px;">
                  <li> <button class="btn bg-danger" type="submit">Inactive</button>
                  </li>
                </div>
                @else
                <div class="dropdown-menu" role="menu" style="min-width: 0px;">
                  <li> <button class="btn bg-success" type="submit">Active</button>
                  </li>
                </div>
                @endif
              </div> 
            </form>

                </td>
                <td>
                  <div class="btn-group">
                                <button type="button" class="btn btn-success">Action</button>
                                <button type="button" class="btn btn-success dropdown-toggle dropdown-hover dropdown-icon" data-toggle="dropdown">
                                  <span class="sr-only">Toggle Dropdown</span>
                                  </button>
                                  <div class="dropdown-menu" role="menu">
                                    <a class="dropdown-item" data-toggle="modal" data-target="#modal-lg{{$f->id}}">View</a>
                                    <a class="dropdown-item btn-danger" href="{{url('edit_file/'.$f->id)}}">Edit</a>
                                    <a class="dropdown-item btn-danger" data-toggle="modal" data-target="#modal-danger{{$f->id}}">Delete</a>
                                  </div>
                            </div>
                </td>
              </tr>
              @endforeach
            </tbody>
            <tfoot>
              <tr>
                <th>File Title</th>
                <th>File Summary</th>
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

@foreach($file as $f)


<!-- view Modal -->
<div class="modal fade" id="modal-lg{{$f->id}}">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">View File</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <p><b>File Title:</b>&nbsp;{{$f->filetitle}}</p><br>
                <p><b>File :</b>&nbsp;gdgdfg</p><br>
                <p><b>File Url:</b>&nbsp;{{$f->fileurl}}</p><br>
                <p><b>File Description:</b>&nbsp;{!!$f->filedescription!!}</p><br>
                <p><b>File Summary:</b>&nbsp;{{$f->filesummary}}</p><br>
                <p><b>File Status:</b>&nbsp;{{$f->status}}</p><br>
                <p><b>Seo Title:</b>&nbsp;{{$f->seotitle}}</p><br>
                <p><b>Seo Keyword:</b>&nbsp;{{$f->seokeyword}}</p><br>
                <p><b>Seo Description:</b>&nbsp;{!!$f->seodescription!!}</p><br>
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
<div class="modal fade" id="modal-danger{{$f->id}}">
        <div class="modal-dialog">
          <div class="modal-content bg-danger">
            <div class="modal-header">
              <h4 class="modal-title">Delete File</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>Are you sure you want to delete this File ?</p>
            </div>
            <div class="modal-footer justify-content-between">
              <form action="{{url('delete_file/'.$f->id)}}" method="post">
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