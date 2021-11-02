@extends('admin.layouts.app')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Chapter</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/admin">Home</a></li>
              <li class="breadcrumb-item active">Add Chapter</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      <div class="row">
        <div class="col-md-6">
            <!-- general form elements -->
            @if (Session::has('addChapterSuccess'))
            <div class="alert alert-success alert-dismissible mb-2" style="margin: 5px 5px 0px 5px;">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> 
          <strong><i class="fas fa-check"></i></strong> {{ Session::get('addChapterSuccess') }} </div>
          @elseif(Session::has('addChapterFail'))
          <div class="alert alert-danger alert-dismissible mb-2" style="margin: 5px 5px 0px 5px;">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> 
          <strong>FAILED:</strong> {{ Session::get('addChapterFail') }} </div> 
            @endif
           <div class="card card-danger">
              <div class="card-header">
                <h3 class="card-title"><i class="fa fa-plus"></i> Add Chapter</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="{{ route('chapter.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                      <div class="form-group">
                    <label for="course">Course</label>
                    <select class="form-control @error('course') is-invalid @enderror" name="course" id="course" required>
                        @foreach ($courses as $course)
                        <option value="{{ $course->id }}">{{ ucfirst($course->course) }}</option> 
                        @endforeach
                    </select>
                    @error('Course')
                                  <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                     </span>
                              @enderror 
                  </div>

                  <div class="form-group">
                    <label for="chapter">Chapter</label>
                    <input type="text" class="form-control @error('chapter') is-invalid @enderror" value="{{ old('chapter') }}" id="chapter" name="chapter" placeholder="Enter Chapter" required>
                    @error('chapter')
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