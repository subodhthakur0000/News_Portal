@extends('cd-admin.admin-master')
@section('content')

<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>News</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item"><a href="{{url('view_news')}}">News</a></li>
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
          <h3 class="card-title">News Details</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>News Title</th>
                <th>Writer's User Name</th>
                <th>Category</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>

              @foreach($news as $n)
              <tr>
                <td>{!!str_limit(e($n->newstitle),'100')!!}</td>
                <td>{{$n->writerusername}}
                </td>
                <?php
                $cat = json_decode($n->category);
                ?>
                <td>@foreach($cat as $c)
                  <button class="btn bg-olive btn-sm" disabled>{{$c}}</button>
                @endforeach</td>
                <td>
                  <form action="{{url('/update_newsstatus/'.$n->id)}}" method="POST">
                @csrf
                <div class="btn-group">
                 @if($n['status']=='Active')
                 <button type="button" class="btn bg-success">{{$n->status}}</button>
                 @else
                 <button type="button" class="btn bg-danger">{{$n->status}}</button>
                 @endif
                 <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                  <span class="caret"></span>
                  <span class="sr-only">Toggle Dropdown</span>
                </button>
                @if($n['status']=='Active')
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
                      <a class="dropdown-item" href="{{url('show_news/'.$n->slug)}}">View</a>
                      <a class="dropdown-item" href="{{url('/edit_news/'.$n->slug)}}">Edit</a>
                      <a class="dropdown-item btn-danger" data-toggle="modal" data-target="#modal-danger{{$n->slug}}">Delete</a>
                    </div>
                  </div>
                </td>
              </tr>
              @endforeach
            </tbody>
            <tfoot>
              <tr>
                <th>News Title</th>
                <th>Writer's User Name</th>
                <th>Category</th>
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

@foreach($news as $n)
<!-- delete modal -->
<div class="modal fade" id="modal-danger{{$n->slug}}">
  <div class="modal-dialog">
    <div class="modal-content bg-danger">
      <div class="modal-header">
        <h4 class="modal-title">Delete News</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Are you sure you want to delete this news ?</p>
      </div>
      <div class="modal-footer justify-content-between">
        <form action="{{url('delete_news/'.$n->id)}}" method="post">
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