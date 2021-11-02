@extends('admin.layouts.app')
@section('content')

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Chapters</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/admin">Home</a></li>
              <li class="breadcrumb-item active">Chapters</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      <div class="row">
          <div class="col-12">

            @if (Session::has('deleteChapterSuccess'))
            <div class="alert alert-success alert-dismissible mb-2" style="margin: 5px 5px 0px 5px;">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> 
          <strong><i class="fas fa-check"></i></strong> {{ Session::get('deleteChapterSuccess') }} </div>
          @elseif(Session::has('deleteChapterFail'))
          <div class="alert alert-danger alert-dismissible mb-2" style="margin: 5px 5px 0px 5px;">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> 
          <strong>FAILED:</strong> {{ Session::get('deleteChapterFail') }} </div> 
            @endif

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Manage Chapters</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Course</th>
                    <th>Chapter</th>
                    <th>Created_at</th>
                    <th>Actions</th>
                  </tr>
                  </thead>
                  <tbody>
                 
                   @foreach ($chapters as $chapter)
                   <tr> 
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $chapter->course }}</td>
                    <td>{{ $chapter->chapter }}</td>
                    <td>{{ $chapter->created_at }}</td>
                    <td>
                        <form method="POST" action="{{ route('chapter.destroy', $chapter->id) }}">
                          @csrf
                            @method('DELETE')
                            <a href="{{ route('chapter.edit', $chapter->id) }}" class="text-primary"><i class="fa fa-edit"></i></a>
                            &nbsp;
                            <button type="submit" class="text-danger btn borderless"><i class="fa fa-trash"></i></button>
                        </form>
                        </td>
                  </tr>   
                   @endforeach 
                  
              
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>#</th>
                    <th>Course</th>
                    <th>Chapter</th>
                    <th>Created_at</th>
                    <th>Actions</th>
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
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection