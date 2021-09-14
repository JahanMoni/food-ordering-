@extends('frontend.master')

@section('contents')

<<div class="menu-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Item</h2>
						<p>Our All Item list</p>
					</div>
				</div>
			</div>
			
				
			<div class="row special-list">

			@foreach($items as $item)
				<div class="col-lg-4 col-md-6 special-grid drinks">
					<div class="gallery-single fix">
						<img src="{{url('uploads/'.$item->image)}}" class="img-fluid" alt="Image">
						<div class="why-text">
							<h4>Item-Name</h4>
							<p class="card-text"> Item-{{$item->item_name}}</p>
							<h5>  Price-{{$item->price}} </h5>
						</div>
					</div>
				</div>
			@endforeach
			</div>
		</div>
	</div>
	@endsection