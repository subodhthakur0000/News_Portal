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
              <h5 class="card-title">Status:</h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <button class="btn <?php echo $news->status=='Inactive'?'bg-danger':'bg-success'?> btn sm" disabled>{{$news->status}}</button><br><br>
              <h3 class="card-title">Category:  </h3>&nbsp;&nbsp;
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
    </section>

  </div>



  @endsection