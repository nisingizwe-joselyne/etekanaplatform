@extends('admin.layouts.app')
@section('content')

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>topics</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/admin">Home</a></li>
              <li class="breadcrumb-item active">topics</li>
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

            @if (Session::has('deleteTopicSuccess'))
            <div class="alert alert-success alert-dismissible mb-2" style="margin: 5px 5px 0px 5px;">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> 
          <strong><i class="fas fa-check"></i></strong> {{ Session::get('deleteTopicSuccess') }} </div>
          @elseif(Session::has('deleteTopicFail'))
          <div class="alert alert-danger alert-dismissible mb-2" style="margin: 5px 5px 0px 5px;">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> 
          <strong>FAILED:</strong> {{ Session::get('deleteTopicFail') }} </div> 
            @endif

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Manage topics</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Course</th>
                    <th>Topic</th>
                    <th>URL</th>
                    <th>Description</th>
                    <th>Powerpoint</th>
                    <th>Created_at</th>
                    <th>Actions</th>
                  </tr>
                  </thead>
                  <tbody>
                 
                   @foreach ($topics as $topic)
                   <tr> 
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $topic->first_name }} {{ $topic->last_name }}</td>
                    <td>{{ $topic->course }}</td>
                    <td>{{ $topic->topic }}</td>
                    <td><a href="{{ $topic->url }}">{{ $topic->url }}</a></td>
                    <td>{!! $topic->description !!}</td>
                    <td>{{ $topic->powerpoint }}</td>
                    <td>{{ $topic->created_at }}</td>
                    <td>
                        <form method="topic" action="{{ route('topic.destroy', $topic->id) }}">
                          @csrf
                            @method('DELETE')
                            <a href="{{ route('topic.edit', $topic->id) }}" class="text-primary"><i class="fa fa-edit"></i></a>
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
                    <th>Name</th>
                    <th>Course</th>
                    <th>Topic</th>
                    <th>URL</th>
                    <th>Description</th>
                    <th>Powerpoint</th>
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