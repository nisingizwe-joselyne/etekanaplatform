@extends('admin.layouts.app')
@section('content')

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Notes</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/admin">Home</a></li>
              <li class="breadcrumb-item active">Notes</li>
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

            @if (Session::has('deleteNoteSuccess'))
            <div class="alert alert-success alert-dismissible mb-2" style="margin: 5px 5px 0px 5px;">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> 
          <strong><i class="fas fa-check"></i></strong> {{ Session::get('deleteNoteSuccess') }} </div>
          @elseif(Session::has('deleteNoteFail'))
          <div class="alert alert-danger alert-dismissible mb-2" style="margin: 5px 5px 0px 5px;">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> 
          <strong>FAILED:</strong> {{ Session::get('deleteNoteFail') }} </div> 
            @endif

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Manage Courses</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Author</th>
                    <th>Course</th>
                    <th>Chapter</th>
                    <th>Requirements</th>
                    <th>URL</th>
                    <th>Description</th>
                    <th>Attachment</th>
                    <th>Views</th>
                    <th>Created_at</th>
                    <th>Actions</th>
                  </tr>
                  </thead>
                  <tbody>
                 
                   @foreach ($read as $read)
                   <tr> 
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $read->first_name }} {{ $read->last_name }}</td>
                    <td>{{ $read->course }}</td>
                    <td>{{ $read->chapter }}</td>
                    <td>{{ $read->requirements }}</td>
                    <td>{{ $read->video_url }}</td>
                    <td>{{ $read->description }}</td>
                    <td>{{ $read->attached_file }}</td>
                    <td>{{ $read->views }}</td>
                    <td>{{ $read->created_at }}</td>
                    <td>
                        <form method="POST" action="{{ route('note.destroy', $read->id) }}">
                            @csrf
                            @method('DELETE')
                            <a href="{{ route('note.edit', $read->id) }}" class="btn btn-primary"><span><i class="fa fa-edit"></i></span>Edit</a>
                            &nbsp;
                            <button type="submit" class="btn btn-danger"><span><i class="fa fa-trash"></i></span> Delete</button>
                        </form>
                        </td>
                  </tr>   
                   @endforeach 
                  
              
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>#</th>
                    <th>Author</th>
                    <th>Course</th>
                    <th>Chapter</th>
                    <th>Requirements</th>
                    <th>URL</th>
                    <th>Description</th>
                    <th>Attachment</th>
                    <th>Views</th>
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