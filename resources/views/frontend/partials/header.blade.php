<!-- Start header -->
<header class="top-navbar">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container">
				<a class="navbar-brand" href="index.html">
					<img src="{{url('/frontend/images/logo.png')}}" alt="" />
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
				  <span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-rs-food">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active"><a class="nav-link" href="{{route('home')}}">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Category</li>
						<form action="{{route('search')}}" method="get">
{{--                            @csrf--}}
                        <input style="width: 250px;" type="text" placeholder="Search" name="search" class="form-control">
                        <button type="submit" class="btn btn-primary">
                            <i class="fa fa-search"></i></button>
                        </form>
						<li class="nav-item"><a class="nav-link" href="{{route('items')}}">Item</li>
						<li class="nav-item"><a class="nav-link" href="about.html">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('cart')}}">Cart({{count(session()->get('cart'))}})</a></li>
                       

						@if(auth()->user())
						<a class="nav-item nav-link" href="{{route('user.logout')}}">Logout</a>    
                        <a class="nav-item nav-link" href="">{{auth()->user()->full_name}}</a>
    

    @else

    <a class="btn btn-success" href= "{{route('customer.login')}}" role="button">Login</a>
    <a class="btn btn-light" href= "{{route('User.signup')}}" >Signup</a>
    @endif
                        
						
				
                     <li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Pages</a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="reservation.html">Reservation</a>
								<a class="dropdown-item" href="stuff.html">Stuff</a>
								<a class="dropdown-item" href="gallery.html">Gallery</a>
							</div>
						</li>
				
							
	
				
				


				</div>
			</div>
		</nav>
        
	</header>
	<!-- End header -->

	
