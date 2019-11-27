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
          <li class="breadcrumb-item active"><a href="{{url()->current()}}">Photo</a></li>

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
         <h3 class="card-title">Photo Details</h3>
         <a href="{{url('/add_photo')}}"><button type="button" class="btn bg-gradient-primary float-sm-right">Add Photo</button></a>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>Photo Title</th>
                <th>Photo Summary</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($photo as $p)
              <tr>
                <td>{!!str_limit($p->phototitle,'100')!!}</td>
                <td>{!!str_limit($p->photosummary,'100')!!}
                </td>
                <td>
                   <form action="{{url('/update_photostatus/'.$p->id)}}" method="POST">
                @csrf
                <div class="btn-group">
                 @if($p['status']=='Active')
                 <button type="button" class="btn bg-success">{{$p->status}}</button>
                 @else
                 <button type="button" class="btn bg-danger">{{$p->status}}</button>
                 @endif
                 <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                  <span class="caret"></span>
                  <span class="sr-only">Toggle Dropdown</span>
                </button>
                @if($p['status']=='Active')
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
                                    <a class="dropdown-item" data-toggle="modal" data-target="#modal-lg{{$p->id}}">View</a>
                                    <a class="dropdown-item btn-danger" href="{{url('/edit_photo/'.$p->id)}}">Edit</a>
                                    <a class="dropdown-item btn-danger" data-toggle="modal" data-target="#modal-danger{{$p->id}}">Delete</a>
                                  </div>
                            </div>
                </td>
              </tr>
              @endforeach
            </tbody>
            <tfoot>
              <tr>
                <th>Photo Title</th>
                <th>Photo Summary</th>
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

@foreach($photo as $p)

<!-- view Modal -->
<div class="modal fade" id="modal-lg{{$p->id}}">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">View Photo</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <p><b>Photo Title:</b>&nbsp;{{$p->phototitle}}</p><br>
                <p><b>Photo:</b>&nbsp;
                  <?php
                  $mulphoto = json_decode($p['photo']);
                  ?>
                  @foreach($mulphoto as $pm)
                  <img src="{{ url('public/uploads/multipleupload/'.$pm)}}" class="image1" alt="">
                  @endforeach
                </p><br>
                <p><b>Photo Url:</b>&nbsp;{{$p->photourl}}</p><br>
                <p><b>Photo Description:</b>&nbsp;{!!$p->photodescription!!}</p><br>
                <p><b>Photo Status:</b>&nbsp;{{$p->status}}</p><br>
                <p><b>Seo Title:</b>&nbsp;{{$p->seotitle}}</p><br>
                <p><b>Seo Keyword:</b>&nbsp;{{$p->seokeyword}}</p><br>
                <p><b>Seo Description:</b>&nbsp;{!!$p->seodescription!!}</p><br>
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
<div class="modal fade" id="modal-danger{{$p->id}}">
        <div class="modal-dialog">
          <div class="modal-content bg-danger">
            <div class="modal-header">
              <h4 class="modal-title">Delete Photo</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>Are you sure you want to delete this Photo ?</p>
            </div>
            <div class="modal-footer justify-content-between">
              <form action="{{url('delete_photo/'.$p->id)}}" method="post">
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

      <style type="text/css">
        .image1{
          height: 200px;
        width: 200px;
        }
      </style>
@endsection