@extends('frontend.master')

@section('contents')
<br> </br>
<br> </br>
<br> </br>
<br> </br>





<div class="about-section-box">
<div class="heading-title text-center">
						<h2>About as</h2>
						
</div>

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



	<div class="about-section-box">
<div class="heading-title text-center">
						<h2>Nusrat Restaurant Contact Section</h2>
						
</div>


	
	<div class="form-row text-center  ">
    <div class="form-group col-md-6 text-center">
      <label for="inputName">Name</label>
      <input readonly type="name "name="restaurant_name" class="form-control" id="inputName" placeholder="Enter Name" value="{{$checkInfo->name??''}}" style="background-color: Azure"> 
    </div> 
 
        
    <div class="form-group col-md-6 text-center">
      <label for="inputName">Email</label>
      <input readonly type="name "name="email" class="form-control" id="inputName" placeholder="Enter Name" value="{{$checkInfo->email??''}}" style="background-color: Azure">
    </div>

    <div class="form-group col-md-6 text-center">
      <label for="inputName">Phone Number</label>
      <input readonly type="name "name="password" class="form-control" id="inputName" placeholder="Enter Name" value= 01972260772 style="background-color: Azure">
    </div>

 <div class="form-group col-md-6 text-center">
      <label for="inputName">Address</label>
      <input readonly type="name "name="address" class="form-control" id="inputName" placeholder="Enter Name" value="{{$checkInfo->address??''}}" style="background-color: Azure">
    </div>
  
    <div class="form-group col-md-6 text-center">
      <label for="inputName">city</label>
      <input readonly type="name "name="city" class="form-control" id="inputName" placeholder="Enter Name" value="{{$checkInfo->city??''}}" style="background-color: Azure">
    </div>
    
    
  </div>
  
  <div class="form-group text-center ">
<button type="submit" class="btn btn-danger " >Contact With Us</button>
<br> </br>
</form>
	
	<!-- End Contact info -->
    @endsection