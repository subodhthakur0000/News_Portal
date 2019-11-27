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
          <li class="breadcrumb-item"><a href="{{url()->current()}}">View News</a></li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <!-- Default box -->
        <div class="card">
          <div class="card-header">
            <div class="float-sm-left">
              <h5 class="card-title">Status:</h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <button class="btn <?php echo $news->status=='Inactive'?'bg-danger':'bg-success'?> btn sm" disabled>{{$news->status}}</button><br><br>
            </div>

            <div class="float-sm-right">

              <h5 class="card-title">Writer's User Name</h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <a data-toggle="modal" data-target="#modal-lg{{$writerinfo->username}}"><button class="btn bg-success btn sm " >{{$writerinfo->username}}</button></a>
            </div>
            <br><br>
            <br>
            <h5 class="card-title">Category:  </h5>&nbsp;&nbsp;
            @foreach($category as $c)
            <button class="btn bg-olive btn-sm" disabled>{{$c}}</button>
            @endforeach
          </div>

        <div class="card-body">
         <div class="col-sm-9">
          <h2 class="m-0 text-dark">News Title</h2>
          <p>{{$news->newstitle}}</p>
        </div>
        <div style="text-align: right;">
          <h4>2076/07/19</h4>           
          <h4 class="m-0 text-dark">Writer's User Name</h1>
            <p>{{$news->writerusername}}</p>
            <h4 class="m-0 text-dark">Views</h1>
            </div>
            <div>
              News Description
            </div>
            <div class="col-sm-12">
              <h5 >{!!$news->news!!}</h5>

            </div>
            <hr>
            <p id="seo-section"><b>Seo Section</b></p>
            <hr>
            <div>
              <h5>SEO title</h5>
              <p>{{$news->seotitle}}</p>
              <h5>SEO Keywords</h5>
              <p>{{$news->seokeyword}}</p>
              <h5>SEO Description</h5>
              <p>{!!$news->seodescription!!}</p>
            </div>
            <a href="{{url()->previous()}}"><button type="submit" class="btn btn-default bg-green " >Back</button></a>

          </div>
          <!-- /.card-body -->

        </div>
        <!-- /.card -->
      </div>
    </div>
  </div>
  </div>
</section>

</div>


<!-- view Modal -->
<div class="modal fade" id="modal-lg{{$writerinfo->username}}">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Writer Detail</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p><b>Username:</b>&nbsp;{{$writerinfo->username}}</p><br>
        <p><b>Name:</b>&nbsp;{{$writerinfo->name}}</p><br>
        <p><b>Email:</b>&nbsp;{{$writerinfo->email}}</p><br>
        <p><b>Phone:</b>&nbsp;{{$writerinfo->phone}}</p><br>

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


@endsection