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
          <li class="breadcrumb-item active"><a href="{{url()->current()}}">Add News</a></li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
	<div class="row"> 
		<div class="col-12">
			            <!-- Input addon -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Add News</h3>
              </div>
              <div class="card-body">
            <form action="" method="post">
              	@csrf
              
              <div class="form-group">
                  <label >News Title</label>
                  <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa-align-justify"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Enter News Title" name="newstitle">
                          </div>
                        </div>
                        <div class="form-group">
                  <label >Writer's User Name</label>
                  <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa-user-edit"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Enter Writer's User Name Title" name="newstitle">
                          </div>
                        </div>
                        <div class="form-group">
                  <label >News </label>
                           <textarea class="textarea" placeholder="Place some text here"
                  style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                        </div>
                        <div class="form-group">
                  <label >News Summary</label>
                  <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa-align-justify"></i></span>
                            </div>
                            <textarea class="form-control" rows="6" placeholder="Enter News Summary " id="newsdescription" name="newsdescription"></textarea>
                          </div>
                        </div>
                        <div class="form-group">
                  <label >Seo Title</label>
                  <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa-search"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Enter Seo Title">
                          </div>
                      </div>
                      <div class="form-group">
                        <label >Seo Keyword</label>
                          <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa-align-justify"></i></span>
                            </div>
                            <textarea class="form-control" placeholder="Enter Seo Keyword"></textarea>
                          </div>
                      </div>
                      <div class="form-group">
                        <label >Seo Description</label>
                            <textarea class="textarea form-control" placeholder="Enter Seo Description"></textarea>
                      </div>            
                        
                
                <div class="form-group">
                  <!-- checkbox-->
                  <label>
                    <input type="checkbox">
                    Checkbox 1
                  </label>
                  
                  
                  <label>
                    <input type="checkbox">
                    Checkbox 2
                  </label>
                  
                  
                  <label>
                    <input type="checkbox">
                    Checkbox 3
                  </label>
                  
                  <label>
                    <input type="checkbox">
                    Checkbox 11
                  </label>
                  
                  <label>
                    <input type="checkbox">
                    Checkbox 12
                  </label>
                  
                  <label>
                    <input type="checkbox">
                    Checkbox 13
                  </label>
                </div>              
                <button type="submit" class="btn btn-info" name="insert" style="float: left">Add News</button> 
            </form>
            <a href="{{url()->previous()}}"><button type="submit" class="btn btn-default" style="float: right">Back</button></a>
                

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