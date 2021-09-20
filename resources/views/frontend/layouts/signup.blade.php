 
@extends('frontend.master')

@section('contents')

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->



<body>

<style type="text/css">
body {
    

  
    background-image:url('https://images.unsplash.com/photo-1515669097368-22e68427d265?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MjA5fHxmb29kfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60');
  background-position:center;
  background-size:cover;

  margin: 0;
  padding: 0;
  background-color: #17a2b8;
  height: 100vh;
}
</style>


<form action="{{route('user.signup.store')}}" type="form" method="POST"enctype="multipart/form-data">
@csrf
<div class="container">
<div class="row justify-content-center">
<div class="col-md-8">
<div class="card">
    <br> </br>
    <br> </br>
    
<div class="d-flex justify-content-center"><h3><b>Please Signup Here</b></h3></div>
<div class="card-body">
@if(session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
@endif
@if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
<div class="form-group">
<label for="full_name" class="cols-sm-2 control-label">Full Name</label>
<div class="cols-sm-10">
<div class="input-group">
<input required type="text" class="form-control" name="full_name" id="full_name" placeholder="Enter your Name" />
</div>
</div>
</div>



<div class="form-group">
<label for="images" class="cols-sm-2 control-label">image</label>
<div class="cols-sm-10">
<div class="input-group">
<input type="file" class="form-control" name='images' >
</div>
</div>
</div>

<div class="form-group">
 <label for="phone_number" class="cols-sm-2 control-label">Phone Number</label>
<div class="cols-sm-10">
<div class="input-group">
<input required type="number" class="form-control" name="phone_number" id="name" placeholder="Enter your Phone Number">
</div>
</div>
</div>
<div class="form-group">
 <label for="address" class="cols-sm-2 control-label"> Address</label>
<div class="cols-sm-10">
<div class="input-group">
<input required type="text" class="form-control" name=" address" id="name" placeholder="Enter your Name">
</div>
</div>
</div>


<div class="form-group">
<label for="email" class="cols-sm-2 control-label">Email</label>
<div class="cols-sm-10">
<div class="input-group">
<input required type="email" class="form-control" name="email" id="email" placeholder="Enter your Email" />
</div>
</div>
</div>
 <div class="form-group">
<label for="password" class="cols-sm-2 control-label">Password</label>
<div class="cols-sm-10">
<div class="input-group">
<input required type="password" class="form-control" name="password" id="password" placeholder="Enter your Password" />
</div>
</div>
</div>
<div class="form-group">

<div class="form-group ">
<button type="submit" class="btn btn-success btn-lg btn-block login-button" href=" " >Submit</button>
<br> </br>
<a href=" " target="_blank" >Forgot Password?</a>


</form>
</div>

</div>
</div>
</div>

</div>
</body>

@endsection







