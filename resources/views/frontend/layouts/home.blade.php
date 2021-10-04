
@extends('frontend.master')

@section('contents')

@include('frontend.partials.slider')
<!-- about section -->
<div class="about-section-box">


		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12">
					<img src="{{url('/frontend/images/gallery-img-04.jpg')}}" alt="" class="img-fluid">
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 text-center">
					<div class="inner-column">
						<h1>Welcome To <span>Nusrat Restaurant</span></h1>
						<h4>Little Story</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque auctor suscipit feugiat. Ut at pellentesque ante, sed convallis arcu. Nullam facilisis, eros in eleifend luctus, odio ante sodales augue, eget lacinia lectus erat et sem. </p>
						<p>Sed semper orci sit amet porta placerat. Etiam quis finibus eros. Sed aliquam metus lorem, a pellentesque tellus pretium a. Nulla placerat elit in justo vestibulum, et maximus sem pulvinar.</p>
						
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End About -->
	
	<!-- Start QT -->
	<div class="qt-box qt-background">
		<div class="container">
			<div class="row">
				<div class="col-md-8 ml-auto mr-auto text-left">
					<p class="lead ">
						" If you're not the one cooking, stay out of the way and compliment the chef. "
					</p>
					<span class="lead">Nusrat</span>
				</div>
			</div>
		</div>
	</div>
	<!-- End QT -->
	
	<!-- Start Menu -->
	<br> </br>

<div class="menu-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Category</h2>
						<p>Our All  Category Wise Item list</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="special-menu text-center">
						@foreach($category as $cat)
						<div class="button-group filter-button-group">
							<button><a href="{{route('categorywise',$cat->id)}}" class="active" data-filter="*">{{$cat->name}}</a></button>
							
						</div>
						@endforeach
					</div>
				</div>
			</div>
				
				
			<div class="row special-list">

			@foreach($items as $item)
			<a href="{{route('itemview',$item->id)}}">
				<div class="col-lg-4 col-md-6 special-grid drinks">
				

					<div class="gallery-single fix">
						<img src="{{url('uploads/'.$item->image)}}" class="img-fluid" alt="Image">
						<div class="why-text">
							<h4>Item-Name</h4>
							<p class="card-text"> Item-{{$item->item_name}}</p>
							<h5>  Price-{{$item->price}} </h5>
						</div>
					
					</div>
					</a>
				</div>
              
			@endforeach
			</div>
		</div>
	</div>
	<div class="text-center">
  <a class="btn btn-success btn-lg" href="{{route('items')}}" role="button">View All items</i></a>
  </div>

	
	<!-- End Menu -->
	
<!-- Restaurant Menu Section -->
  <<div class="menu-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Offer Item</h2>
						<div class="text-right">
  <a class="btn btn-success btn-lg" href="{{route('menu')}}" role="button">See Menu</i></a>
  </div>


  



				
  <div class="row special-list">

@foreach($offers as  $offer)
<a href="{{route('offerview',$offer->id)}}">
  <div class="col-lg-4 col-md-6 special-grid drinks">
  

	  <div class="gallery-single fix">
		  <img src="{{url('uploads/'. $offer->image)}}" class="img-fluid" alt="Image">
		  <div class="why-text">
			  <h4>Item-Name</h4>
			  <p class="card-text"> Item-{{ $offer->item_name}}</p>
			  @if($offer->discount_price)
			  <h4>{{$offer->discount_price}}.BDT</h4>
			  <p>Price <strike>{{ $offer->price}}.BDT</strike>   </p>
				@else

			  <h4>{{$offer->price}}</h4>
				@endif
		  </div>
	  
	  </div>
	  </a>
  </div>

@endforeach
				
				
			
				
				
				
			</div>
		</div>
	</div>
	

	<!-- Start Gallery -->
	<div class="gallery-box">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Gallery</h2>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
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



	<!-- End Gallery -->  
	
	<!-- Start Customer Reviews -->
	<div class="customer-reviews-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Customer Reviews</h2>
						<p>Nusrat </p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-8 mr-auto ml-auto text-center">
					<div id="reviews" class="carousel slide" data-ride="carousel">
						<div class="carousel-inner mt-4">
							<div class="carousel-item text-center active">
								<div class="img-box p-1 border rounded-circle m-auto">
									<img class="d-block w-100 rounded-circle" src="{{url('/frontend/images/profile-1.jpg')}}" alt="">
								</div>
								<h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">Shoshy</strong></h5>
								<h6 class="text-dark m-0">Web Developer</h6>
								<p class="m-0 pt-3">Excellent customer service.  was very friendly, patient and helpful in helping us find what we were looking for.</p>
							</div>
							<div class="carousel-item text-center">
								<div class="img-box p-1 border rounded-circle m-auto">
									<img class="d-block w-100 rounded-circle" src="{{url('/frontend/images/profile-3.jpg')}}" alt="">
								</div>
								<h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">Nafiza</strong></h5>
								<h6 class="text-dark m-0">Web Designer</h6>
								<p class="m-0 pt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante. Idac bibendum scelerisque non non purus. Suspendisse varius nibh non aliquet.</p>
							</div>
							<div class="carousel-item text-center">
								<div class="img-box p-1 border rounded-circle m-auto">
									<img class="d-block w-100 rounded-circle" src="{{url('/frontend/images/profile-7.jpg')}}" alt="">
								</div>
								<h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">Sadia</strong></h5>
								<h6 class="text-dark m-0">Seo Analyst</h6>
								<p class="m-0 pt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante. Idac bibendum scelerisque non non purus. Suspendisse varius nibh non aliquet.</p>
							</div>
						</div>
						<a class="carousel-control-prev" href="#reviews" role="button" data-slide="prev">
							<i class="fa fa-angle-left" aria-hidden="true"></i>
							<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#reviews" role="button" data-slide="next">
							<i class="fa fa-angle-right" aria-hidden="true"></i>
							<span class="sr-only">Next</span>
						</a>
                    </div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Customer Reviews -->

    @endsection