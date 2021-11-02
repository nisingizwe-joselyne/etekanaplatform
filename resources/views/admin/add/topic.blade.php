@extends('admin.layouts.app')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Topic</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/admin">Home</a></li>
              <li class="breadcrumb-item active">Add Topic</li>
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

            @if (Session::has('addTopicSuccess'))
            <div class="alert alert-success alert-dismissible mb-2" style="margin: 5px 5px 0px 5px;">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> 
          <strong><i class="fas fa-check"></i></strong> {{ Session::get('addTopicSuccess') }} </div>
          @elseif(Session::has('addTopicFail'))
          <div class="alert alert-danger alert-dismissible mb-2" style="margin: 5px 5px 0px 5px;">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> 
          <strong>FAILED:</strong> {{ Session::get('addTopicFail') }} </div> 
            @endif

           <div class="card card-danger">
              <div class="card-header">
                <h3 class="card-title"><i class="fa fa-plus"></i> Add Post</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="{{ route('topic.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                      <div class="form-group">
                    <label for="author">Author</label>
                    <select class="form-control" name="author" @error('author') is-invalid @enderror id="author" required>
                  @foreach ($authors as $author)
                  <option value="{{ $author->id }}">{{ ucfirst($author->first_name) }} {{ ucfirst($author->last_name) }}</option> 
                  @endforeach
                    </select>
                    @error('author')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                       </span>
                @enderror
                  </div>
                  <div class="form-group">
                    <label for="photo">Enter Youtube Video URL</label>
                    <input type="text" class="form-control @error('url') is-invalid @enderror" id="url" name="url" placeholder="Place Youtube URL Here..." required>
                    @error('url')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                       </span>
                @enderror  
                </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="form-group">
                            <label for="course">Course</label>
                            <select class="form-control @error('course') is-invalid @enderror" name="course" id="course" required>
                                @foreach ($courses as $course)
                                <option value="{{ $course->id }}">{{ ucfirst($course->course) }}</option> 
                                @endforeach
                            </select>
                            @error('course')
                            <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                               </span>
                        @enderror 
                        </div>
                  <div class="form-group">
                    <label for="title">Topic</label>
                    <input type="text" class="form-control @error('topic') is-invalid @enderror" {{ old('topic') }} name="topic" id="topic" placeholder="Enter Topic" required>
                    @error('topic')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                       </span>
                @enderror  
                </div> 
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="post">Upload PowerPoint File</label>
                    <input type="file" class="form-control @error('powerpoint') is-invalid @enderror" id="powerpoint" name="powerpoint" placeholder="Upload powerpoint">
                     
              @error('powerpoint')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                 </span>
          @enderror 
                  </div>
                   <div class="form-group">
                    <label for="post">Topic Description</label>
                    <textarea rows="4" class="@error('description') is-invalid @enderror" id="summernote" name="description" required>
                {{ old('description') }}
              </textarea>
              @error('description')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                 </span>
          @enderror 
                  </div>
                </div>

                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-danger">Post</button>
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