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
						<li class="nav-item active"><a class="nav-link" href="index.html">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="menu.html">Category</li>
						<li class="nav-item"><a class="nav-link" href="menu.html">Item</li>
						<li class="nav-item"><a class="nav-link" href="about.html">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="about.html">Restaurant Info</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('User.signup')}}">sign up</a></li>
						
				
                     <li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Pages</a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="reservation.html">Reservation</a>
								<a class="dropdown-item" href="stuff.html">Stuff</a>
								<a class="dropdown-item" href="gallery.html">Gallery</a>
							</div>
						</li>
				
							
	
				
						</li>
						<li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
										
						<button type="button" class="btn btn-dark" data-toggle="modal" data-target="#exampleModal">
    log in

</button>
				</div>
			</div>
		</nav>
        
	</header>
	<!-- End header -->

	<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <form action="{{route('items.store')}}" method="POST">
                @csrf

                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Registration Here</h5>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="Name">Name</label>
                        <input type="text" class="form-control" name="Name" placeholder="Enter Name"
                            style="background-color: white">
                    </div>

                    <div class="form-group">
                        <label for="Mobile">Mobile</label>
                        <textarea id="Mobile" class="form-control" name="Mobile"
                            placeholder="Enter product Mobile" style="background-color: white"></textarea>
                    </div>
					<div class="form-group">
                        <label for="Email">Email</label>
                        <textarea id="Email" class="form-control" name="Email"
                            placeholder="Enter productEmail" style="background-color: white"></textarea>
                    </div>
                   
					

                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                    <!-- <a type="submit" class="btn btn-info">submit</a> -->
                </div>
            </form>
        </div>
    </div>
</div>

