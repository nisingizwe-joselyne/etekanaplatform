@extends('admin.layouts.app')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Video</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/admin">Home</a></li>
              <li class="breadcrumb-item active">Edit Video</li>
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

            @if (Session::has('addVideoSuccess'))
            <div class="alert alert-success alert-dismissible mb-2" style="margin: 5px 5px 0px 5px;">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> 
          <strong><i class="fas fa-check"></i></strong> {{ Session::get('addVideoSuccess') }} </div>
          @elseif(Session::has('addVideoFail'))
          <div class="alert alert-danger alert-dismissible mb-2" style="margin: 5px 5px 0px 5px;">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> 
          <strong>FAILED:</strong> {{ Session::get('addVideoFail') }} </div> 
            @endif

           <div class="card card-danger">
              <div class="card-header">
                <h3 class="card-title"><i class="fa fa-edit"></i> Edit Video</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="{{ route('video.update', $video->id) }}" enctype="multipart/form-data">
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
                    <label for="video">Video</label>
                    <input type="file" class="form-control @error('video') is-invalid @enderror" id="video" name="video" placeholder="Upload Video" required>
                    @error('video')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                       </span>
                @enderror  
                </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="form-group">
                            <label for="category">Category</label>
                            <select class="form-control @error('category') is-invalid @enderror" name="category" id="category" required>
                                @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ ucfirst($category->category) }}</option> 
                                @endforeach
                            </select>
                            @error('category')
                            <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                               </span>
                        @enderror 
                        </div>
                  <div class="form-group">
                    <label for="title">Caption</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" {{ old('title') }} name="title" id="title" placeholder="Enter Title" required>
                    @error('title')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $video->title }}</strong>
                       </span>
                @enderror  
                </div> 
                    </div>
                  </div>
                </div>

                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-danger">Update</button>
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