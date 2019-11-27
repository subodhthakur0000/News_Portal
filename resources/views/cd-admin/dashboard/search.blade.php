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
          <li class="breadcrumb-item"><a href="{{url('/dashboard')}}">Dashboard</a></li>
          <li class="breadcrumb-item"><a href="{{url()->current()}}">Search</a></li>
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
        @if(isset($news))
          <h3 class="card-title">Search Details</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <p> The Search results for your query <b> {{ $q }} </b> are :</p>
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>News Title</th>
                <th>Writer's User Name</th>
                <th>Created At</th>
              </tr>
            </thead>
            <tbody>
         @foreach($news as $n)
            <tr>
                <td><a href="{{url('/show_news/'.$n->slug)}}">{{$n->newstitle}}</a></td>
                <td>{{$n->writerusername}}</td>
                <td>{{$n->created_at}}</td>
            </tr>
            @endforeach
            </tbody>
            <tfoot>
              <tr>
                <th>News Title</th>
                <th>Writer's User Name</th>
                <th>Created At</th>
              </tr>
            </tfoot>
          </table>
          @elseif(isset($no))
            {{$no}}
          @endif
          
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



@endsection