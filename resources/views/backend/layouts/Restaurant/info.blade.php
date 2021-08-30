@extends('backend.master')
           @section('content')
           <h1>Restaurant Info</h1>
          


           <!-- modal   -->

           <form action="{{route('Restaurant.store')}}" method="POST">
                @csrf

           <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputName">Name</label>
      <input type="name "name="restaurant_name" class="form-control" id="inputName" placeholder="Enter Name" value="{{$checkInfo->name??''}}"> 
    </div>  
        
    <div class="form-group col-md-6">
      <label for="inputName">Email</label>
      <input type="name "name="email" class="form-control" id="inputName" placeholder="Enter Name" value="{{$checkInfo->email??''}}"> 
    </div>

    <div class="form-group col-md-6">
      <label for="inputName">Password</label>
      <input type="name "name="password" class="form-control" id="inputName" placeholder="Enter Name" value="{{$checkInfo->password??''}}"> 
    </div>

 <div class="form-group col-md-6">
      <label for="inputName">Address</label>
      <input type="name "name="address" class="form-control" id="inputName" placeholder="Enter Name" value="{{$checkInfo->address??''}}"> 
    </div>
  
    <div class="form-group col-md-6">
      <label for="inputName">city</label>
      <input type="name "name="city" class="form-control" id="inputName" placeholder="Enter Name" value="{{$checkInfo->city??''}}"> 
    </div>
    
    
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Sign in</button>
</form>

           @endsection