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
                        <div class="col-lg-3 col-md-3 col-sm-12 col-12" style="background-color: #f5f5f5;">
                         <div class="border">
                            <div class="bg-dark text-light p-3 mb-2">{{$chosenCourse->course}}</div>   
                            <ul>
                                @forelse ($chapters as $chapter)
                                <li><a class="nav-link text-dark" href="{{ route('read', $chapter->id) }}">{{$chapter->chapter}}</a></li>   
                                @empty
                                <div>No Topic Found</div>
                                @endforelse
                            </ul>  
                        </div>   
                            
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-12 col-12 border-right">
                            <p class="text-dark" style="font-size:25px; font-weight:bold;">{{$chosenCourse->course}} Course</p>
                            <hr>
                         
                        <div><h5>About {{$chosenCourse->course}}</h5>
                            {{$chosenCourse->intro}}</div>

                        <hr>
                        
                        <div><h5>Requirements</h5>
                            {{$chosenCourse->requirements}}</div>

                        </div>

                        <div class="col-lg-2 col-md-2 col-sm-12 col-12 p-4">
                         <div class="ml-2">
                         </div>
                        </div>
						</div>

					</div>

				</div>

			@endsection