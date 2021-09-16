@extends('frontend.master')

@section('contents')

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->



<body>

<style type="text/css">
body {
    

  
    background-image:url('https://img.freepik.com/free-photo/delicious-vietnamese-food-including-pho-ga-noodles-spring-rolls-white-table_181624-34062.jpg?size=626&ext=jpg');
  background-position:center;
  background-size:cover;

  margin: 0;
  padding: 0;
  background-color: #17a2b8;
  height: 100vh;
}
</style>


<form action="{{route('user.signup.store')}}" type="form" method="post">
@csrf
<div class="container">
<div class="row justify-content-center">
<div class="col-md-8">
<div class="card">
    <br> </br>
    <br> </br>
    <br> </br>
    
<div class="d-flex justify-content-center"><h3><b> Information about your order</b></h3></div>
<div class="card-body">
@if(session()->has('confirm'))
    <div class="alert alert-success">
        {{ session()->get('confirm') }}
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
<label for="item_name" class="cols-sm-2 control-label">Item Name</label>
<div class="cols-sm-10">
<div class="input-group">
<input required type="text" class="form-control" name="item_name" id="item_name" placeholder="Enter your item Name" />
</div>
</div>
</div>

<div class="form-group">
 <label for="price" class="cols-sm-2 control-label">Price</label>
<div class="cols-sm-10">
<div class="input-group">
<input required type="text" class="form-control" name="price" id="price" placeholder="Enter your total amount">
</div>
</div>
</div>
<div class="form-group">
 <label for="quantity" class="cols-sm-2 control-label"> quantity</label>
<div class="cols-sm-10">
<div class="input-group">
<input required type="text" class="form-control" name=" quantity" id="quantity" placeholder="Enter your quantity">
</div>
</div>
</div>



 
<div class="form-group">

<div class="form-group ">
<button type="submit" class="btn btn-success btn-lg btn-block login-button" href="# " >Order Now</button>
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