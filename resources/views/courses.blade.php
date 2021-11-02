@extends('layouts.app')

@section('content')

			<div role="main" class="main">

				<section class="page-header page-header-classic">
					<div class="container">
						<div class="row">
							<div class="col">
								<ul class="breadcrumb">
									<li><a href="/">Home</a></li>
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

							<h2 class="font-weight-normal text-7 mb-2">There are  <strong class="font-weight-extra-bold">{{$coursesCounter}}</strong> Available Courses for you</h2>
		
                            <hr class="solid my-5">

							<div class="toggle toggle-primary" data-plugin-toggle>
                                @foreach($courses as $course)
                                <section class="toggle">
									<label>{{$loop->iteration}}. {{$course->course}}</label>
									<p>{{$course->topic}}</p>
								</section>
                                @endforeach
							</div>

						</div>

					</div>

				</div>

			</div>

			@endsection