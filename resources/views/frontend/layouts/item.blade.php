@extends('frontend.master')

@section('contents')
@php 
$items=['1','2','3','4'];
@endphp
<div class="gallery-box">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
                    <br>  </br>
                    <br>  </br>
                    <br>  </br>
						<h2>Gallery</h2>
                       
						<p>Item Gallery</p>
					</div>
				</div>
			</div>
			<div class="tz-gallery">
				<div class="row">
					<div class="col-sm-12 col-md-4 col-lg-4">
						<a class="lightbox" href="{{url('/frontend/images/gallery-img-01.jpg')}}">
							<img class="img-fluid" src="{{url('/frontend/images/gallery-img-01.jpg')}}" alt="Gallery Images">
						</a>
					</div>
					<div class="col-sm-6 col-md-4 col-lg-4">
						<a class="lightbox" href="{{url('/frontend/images/gallery-img-02.jpg')}}">
							<img class="img-fluid" src="{{url('/frontend/images/gallery-img-02.jpg')}}" alt="Gallery Images">
						</a>
					</div>
					<div class="col-sm-6 col-md-4 col-lg-4">
						<a class="lightbox" href="{{url('/frontend/images/gallery-img-03.jpg')}}">
							<img class="img-fluid" src="{{url('/frontend/images/gallery-img-03.jpg')}}" alt="Gallery Images">
						</a>
					</div>
					<div class="col-sm-12 col-md-4 col-lg-4">
						<a class="lightbox" href="{{url('/frontend/images/gallery-img-04.jpg')}}">
							<img class="img-fluid" src="{{url('/frontend/images/gallery-img-04.jpg')}}" alt="Gallery Images">
						</a>
					</div>
					<div class="col-sm-6 col-md-4 col-lg-4">
						<a class="lightbox" href="{{url('/frontend/images/gallery-img-05.jpg')}}">
							<img class="img-fluid" src="{{url('/frontend/images/gallery-img-05.jpg')}}" alt="Gallery Images">
						</a>
					</div> 
					<div class="col-sm-6 col-md-4 col-lg-4">
						<a class="lightbox" href="{{url('/frontend/images/gallery-img-06.jpg')}}">
							<img class="img-fluid" src="{{url('/frontend/images/gallery-img-06.jpg')}}" alt="Gallery Images">
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
    @endsection