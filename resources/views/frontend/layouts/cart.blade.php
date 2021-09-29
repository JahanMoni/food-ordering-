@extends('frontend.master')

@section('contents')

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->



<body>

<style type="text/css">


body {

    background-image:url('https://image.freepik.com/free-photo/delicious-vietnamese-food-including-pho-ga-noodles-spring-rolls-white-table_181624-34062.jpg');
  background-position:center;
  background-size:cover;

  margin: 0;
  padding: 0;
  background-color: #17a2b8;
  height: 100vh;
}
#login .container #login-row #login-column #login-box {
  margin-top: 120px;
  max-width: 600px;
  height: 320px;
  border: 1px solid #9C9C9C;
  background-color: #EAEAEA;
}
#login .container #login-row #login-column #login-box #login-form {
  padding: 20px;
}
#login .container #login-row #login-column #login-box #login-form #register-link {
  margin-top: -85px;
}
</style>



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

                <div class="table-responsive cart_info">
<table class="table table-condensed">
<thead>
<tr class="cart_menu">
<td class="image">Item</td>
<td class="description"></td>
<td class="price">Price</td>
<td class="quantity">Quantity</td>
<td class="total">Sub Total</td>

<td></td>
</tr>
</thead>
<tbody>
@if($carts)
@foreach($carts as $key=>$cart)


<tr>
<td class="cart_product">
<a href=""><img src="images/cart/one.png" alt=""></a>
</td>
<td class="cart_description">
<h4><a href="">{{$cart['name']}}</a></h4>



</td>
<td class="cart_price">
<p>{{$cart['price']}}</p>
</td>
    <td class="cart_quantity">
        <span class="cart_quantity_button">
            <input style="width: 40px" class="cart_quantity_input" type="hidden" name="id" value="#" autocomplete="off" >
        <input style="width: 40px" class="cart_quantity_input" type="number" name="quantity" value="{{$cart['quantity']}}" autocomplete="off" >
        <button type="submit" class="btn btn-primary">edit</button>
        </span>
        <span class="text-center">
            <a href="{{route('cart.delete',$key)}}"  class="btn btn-primary"> Delete</a>
            </span>
</td>




<td class="cart_total">
<p class="cart_total_price">{{$cart['total_price']}}</p>
</td>

@endforeach
@endif


</tbody>


</table>
<a class="btn btn-success" style="float:right" href="{{route('checkout')}}">Check Out</a>
<a class="btn btn-success" style="float:right" href="{{route('clear')}}">clear</a>

</div>




</div>

</section> <!--/#cart_items-->

@endsection