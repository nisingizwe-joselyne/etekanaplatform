@extends('layouts.app')

@section('content')

			<div role="main" class="main">

				<section class="page-header page-header-classic">
					<div class="container">
						<div class="row">
							<div class="col">
								<ul class="breadcrumb">
									<li><a href="#">Home</a></li>
									<li class="active">Courses</li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="col p-static">
								<h1 data-title-border>Courses</h1>

							</div>
						</div>
					</div>
				</section>

				<div class="container py-4">

					<div class="row">
						<div class="col">

							<h2 class="font-weight-normal text-7 mb-2">{{$coursesCounter}} Courses</strong></h2>

							<hr class="solid my-5">

                            @foreach ($courses as $course)
							<div class="card bg-primary p-2 text-light">
								<div class="d-flex justify-content-between">
								<div><a class="nav-link text-light" href="{{route('course.show', $course->id)}}">{{$loop->iteration}}. {{$course->course}}</a></div>
								<div><a href="{{route('course.show', $course->id)}}" class="btn text-light"><i class="fa fa-arrow-right"></i></a></div>
								</div>
							</div>	
							<hr>
							@endforeach

						</div>

					</div>

				</div>

			</div>

			@endsection