<!-- Start header -->
<header class="top-navbar">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container">
				<!-- <a class="navbar-brand" href="index.html">
					<img src="{{url('/frontend/images/logo.png')}}" alt="" />
				</a> -->
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
				  <span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-rs-food">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active"><a class="nav-link" href="{{route('home')}}">Home</a></li>
                       
						<form action="{{route('search')}}" method="get">
{{--                            @csrf--}}
                        <input style="width: 250px;" type="text" placeholder="Search" name="search" class="form-control">
                        <button type="submit" class="btn btn-primary">
                            <i class="fa fa-search"></i></button>
                        </form>
						<li class="nav-item"><a class="nav-link" href="{{route('items')}}">Item</li>
						<li class="nav-item"><a class="nav-link" href="{{route('menu')}}">Menu</li>
						<li class="nav-item"><a class="nav-link" href="{{route('about')}}">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('cart')}}">Cart({{session()->has('cart')?count(session()->get('cart')):0}})</a></li>
						
                       

						@if(auth()->user())
						<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  {{auth()->user()->full_name}}
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
  <a class="dropdown-item" href="{{route('myprofile')}}">My Profile</a>
    <a class="dropdown-item" href="{{route('MyOrderDetails')}}">My Order Details</a>
    <a class="dropdown-item" href="{{route('user.logout')}}">Logout</a>
  
  </div>
</div>
    

    @else

    <a class="btn btn-success" href= "{{route('customer.login')}}" role="button">Login</a>
    <a class="btn btn-light" href= "{{route('User.signup')}}" >Signup</a>
    @endif
                        
						
				

				
							
	
				
				


				</div>
			</div>
		</nav>
        
	</header>
	<!-- End header -->

	
