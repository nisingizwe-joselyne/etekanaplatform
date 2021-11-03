@extends('layouts.app')

@section('content')

			<div role="main" class="main">

				<section class="page-header page-header-classic">
					<div class="container">
						<div class="row">
							<div class="col">
								<ul class="breadcrumb">
									<li><a href="/">Home</a></li>
									<li class="active">{{$chosenCourse->course}}</li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="col p-static">
								<h1 data-title-border>{{$chosenCourse->course}}</h1>

							</div>
						</div>
					</div>
				</section>

				<div class="container-fluid">

					<div class="row">
                        <div class="col-lg-2 col-md-2 col-sm-12 col-12" style="background-color: #f5f5f5;">
                         <div class="border">
                            <div class="bg-dark text-light p-3 mb-2 text-center">{{$chosenCourse->course}}</div>   
                            <ul>
                                @forelse ($chapters as $chapter)
                                <li><a class="nav-link text-dark" href="{{ route('read', $chapter->id) }}">{{$chapter->chapter}}</a></li>   
                                @empty
                                <div>No Topic Found</div>
                                @endforelse
                            </ul>  
                        </div>   
                            
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-12 col-12 border-right">
                           @forelse ($read as $note)
                            <p class="text-dark" style="font-size:25px; font-weight:bold;">{{$chosenCourse->course}} {{$note->chapter}}</p>
                            <hr>
                         
                        <div>
                            
                            {!!$note->description!!}   
                            @empty
                             We found no description   
                            @endforelse
                           
                        </div>

                        </div>

                        <div class="col-lg-2 col-md-2 col-sm-12 col-12">
                            
                            <div class="card">
                                <div class="card-header">Attached FIles:</div>
                               
                                <div class="card-body">
                            <button type="button" class="btn btn-primary d-block mb-2" style="width:100%" data-toggle="modal" data-target="#myModal">
                                <span><i class="fa fa-video"></i> Watch Video </span>
                            </button>
                                    @forelse ($read as $file)
                            <a class="text-center text-dark" href="{{ asset('Uploaded Files/'.$file->attached_file) }}"><i class="fas fa-file-powerpoint" style="font-size: 165px;"></i></a>
                            <a class="btn btn-outline-dark d-block mt-2" href="{{ asset('Uploaded Files/'.$file->attached_file) }}" download><span><i class="fa fa-download"></i> Powerpoint</span></a>         
                            @empty
                                    No attached files
                                      @endforelse
                                </div>
                            </div>
                             
                            
                        </div>
						</div>

					</div>

				</div>

                <!-- Button to Open the Modal -->

  
  <!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
  
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">
              @foreach($read as $note)
         {{$chosenCourse->course}} {{$note->chapter}}
           @endforeach
            </h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
  
        <!-- Modal body -->
        <div class="modal-body">
            @forelse ($read as $video)
            <iframe width="753" height="380" src="{{$video->video_url}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            @empty
        No Video Available
        @endforelse
        </div>
  
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
  
      </div>
    </div>
  </div>

			@endsection