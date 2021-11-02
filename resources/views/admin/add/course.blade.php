@extends('admin.layouts.app')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Course</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/admin">Home</a></li>
              <li class="breadcrumb-item active">Add Course</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
            <!-- general form elements -->
            @if (Session::has('addCourseSuccess'))
            <div class="alert alert-success alert-dismissible mb-2" style="margin: 5px 5px 0px 5px;">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> 
          <strong><i class="fas fa-check"></i></strong> {{ Session::get('addCourseSuccess') }} </div>
          @elseif(Session::has('addCourseFail'))
          <div class="alert alert-danger alert-dismissible mb-2" style="margin: 5px 5px 0px 5px;">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> 
          <strong>FAILED:</strong> {{ Session::get('addCourseFail') }} </div> 
            @endif
           <div class="card card-danger">
              <div class="card-header">
                <h3 class="card-title"><i class="fa fa-plus"></i> Add Course</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="{{ route('course.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                      <div class="form-group">
                    <label for="course">Course</label>
                    <input type="text" class="form-control @error('course') is-invalid @enderror" value="{{ old('course') }}" id="course" name="course" placeholder="Enter course" required>
                    @error('course')
                                  <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                     </span>
                              @enderror 
                  </div>

                  <div class="form-group">
                    <label for="course">Requirements</label>
                    <input type="text" class="form-control @error('requirements') is-invalid @enderror" value="{{ old('requirements') }}" id="requirements" name="requirements" placeholder="Enter requirements" required>
                    @error('requirements')
                                  <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                     </span>
                              @enderror 
                  </div>

                  <div class="form-group">
                    <label for="course">Short Descriptions (Introduction)</label>
                    <textarea name="intro" rows="5" class="form-control @error('intro') is-invalid @enderror" required></textarea>
                    @error('intro')
                                  <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                     </span>
                              @enderror 
                  </div>


                </div>

                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-danger"><span><i class="fa fa-plus"></i> Add</span></button>
                </div>
              </form>
            </div>
            <!-- /.card -->

          </div>
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection