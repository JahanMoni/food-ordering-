@extends('frontend.master')

@section('contents')


<style type="text/css">

body {
    background-color: #eee;
    font-family: "Poppins", sans-serif
}


.card {
    background-color: #fff;
    padding: 14px;
    border: none
}

.demo {
    width: 100%
}

ul {
    list-style: none outside none;
    padding-left: 0;
    margin-bottom: 0
}

li {
    display: block;
    float: left;
    margin-right: 6px;
    cursor: pointer
}

img {
    display: block;
    height: auto;
    width: 100%
}

.stars i {
    color: #f6d151
}

.stars span {
    font-size: 13px
}

hr {
    color: #d4d4d4
}

.badge {
    padding: 5px !important;
    padding-bottom: 6px !important
}

.badge i {
    font-size: 10px
}

.profile-image {
    width: 35px
}

.comment-ratings i {
    font-size: 13px
}

.username {
    font-size: 12px
}

.comment-profile {
    line-height: 17px
}

.date span {
    font-size: 12px
}

.p-ratings i {
    color: #f6d151;
    font-size: 12px
}

.btn-long {
    padding-left: 35px;
    padding-right: 35px
}

.buttons {
    margin-top: 15px
}

.buttons .btn {
    height: 46px
}

.buttons .cart {
    border-color: #ff7676;
    color: #ff7676
}

.buttons .cart:hover {
    background-color: #e86464 !important;
    color: #fff
}

.buttons .buy {
    color: #fff;
    background-color: #ff7676;
    border-color: #ff7676
}

.buttons .buy:focus,
.buy:active {
    color: #fff;
    background-color: #ff7676;
    border-color: #ff7676;
    box-shadow: none
}

.buttons .buy:hover {
    color: #fff;
    background-color: #e86464;
    border-color: #e86464
}

.buttons .wishlist {
    background-color: #fff;
    border-color: #ff7676
}

.buttons .wishlist:hover {
    background-color: #e86464;
    border-color: #e86464;
    color: #fff
}

.buttons .wishlist:hover i {
    color: #fff
}

.buttons .wishlist i {
    color: #ff7676
}

.comment-ratings i {
    color: #f6d151
}

.followers {
    font-size: 9px;
    color: #d6d4d4
}

.store-image {
    width: 42px
}

.dot {
    height: 10px;
    width: 10px;
    background-color: #bbb;
    border-radius: 50%;
    display: inline-block;
    margin-right: 5px
}

.bullet-text {
    font-size: 12px
}

.my-color {
    margin-top: 10px;
    margin-bottom: 10px
}

label.radio {
    cursor: pointer
}

label.radio input {
    position: absolute;
    top: 0;
    left: 0;
    visibility: hidden;
    pointer-events: none
}

label.radio span {
    border: 2px solid #8f37aa;
    display: inline-block;
    color: #8f37aa;
    border-radius: 50%;
    width: 25px;
    height: 25px;
    text-transform: uppercase;
    transition: 0.5s all
}

label.radio .red {
    background-color: red;
    border-color: red
}

label.radio .blue {
    background-color: blue;
    border-color: blue
}

label.radio .green {
    background-color: green;
    border-color: green
}

label.radio .orange {
    background-color: orange;
    border-color: orange
}

label.radio input:checked+span {
    color: #fff;
    position: relative
}

label.radio input:checked+span::before {
    opacity: 1;
    content: '\2713';
    position: absolute;
    font-size: 13px;
    font-weight: bold;
    left: 4px
}

.card-body {
    padding: 0.3rem 0.3rem 0.2rem
}

</style>


@if(session('success'))
        <div class="alert alert-success">
            {!! session('success') !!}
        </div>
@endif



<link rel='stylesheet' href='https://sachinchoolur.github.io/lightslider/dist/css/lightslider.css'>
<div class="container-fluid mt-2 mb-3">
    <div class="row no-gutters">
        <div class="col-md-5 pr-2">
            <div class="card">
                <div class="demo">
               
                    <ul id="lightSlider">
                        <li data-thumb="https://i.imgur.com/KZpuufK.jpg"> <img src="{{url('uploads/'. $offer->image)}}" /> </li>
                       
                    </ul>
                </div>
            </div>
            <br> </br>
                <br> </br>
                <br> </br>
                <br> </br>
                <br> </br>
                <br> </br>
                
            <div class="card mt-2">
                <h6></h6>
                <div class="d-flex flex-row">
                    <div class="stars"> </div> 
                </div>
                <hr>
                <div class="badges">   </div>
                <hr>
                <div class="comment-section">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="d-flex flex-row align-items-center"> 
                            <div class="d-flex flex-column ml-1 comment-profile">
                                <div class="comment-ratings"> </div> 
                            </div>
                        </div>
                        <div class="date">  </div>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="d-flex flex-row align-items-center"> 
                            <div class="#">
                                <div class="comment-ratings">  </div> 
                            </div>
                        </div>
                        <div class="date"> <span class="text-muted"></span> </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-7">
            <div class="card">
                <div class="d-flex flex-row align-items-center">
                    <div class="p-ratings"> </div> <span class="ml-1"></span>
                </div>
                <div class="about"> <span class="font-weight-bold"></span>
                    <h4 class="font-weight-bold"></h4>
                </div>
                <br> </br>
                <br> </br>
               
                <hr>
                <div>
   <b>Discount Price-{{$offer->discount_price}}.BDT</b>
                </div>
                <div>
   <b>Price <strike>{{ $offer->price}}</strike>.BDT</b>
                </div>

                <div class="product-description">
                   
                    <div class="d-flex flex-row align-items-center"> Delivery time within 30 minutes</span> </div>
                    <div class="mt-2"> <span class="font-weight-bold">Description</span>
                        <p>{{$offer->details}}</p>
                        <div class="bullets">
                            <div class="d-flex align-items-center"> <span class="dot"></span> <span class="bullet-text">Best in Quality</span> </div>
                            <div class="d-flex align-items-center"> <span class="dot"></span> <span class="bullet-text">Anti-creak joinery</span> </div>
                            <div class="d-flex align-items-center"> <span class="dot"></span> <span class="bullet-text">Sturdy laminate surfaces</span> </div>
                            <div class="d-flex align-items-center"> <span class="dot"></span> <span class="bullet-text">Relocation friendly design</span> </div>
                            <div class="d-flex align-items-center"> <span class="dot"></span> <span class="bullet-text">High gloss, high style</span> </div>
                            <div class="d-flex align-items-center"> <span class="dot"></span> <span class="bullet-text">Easy-access hydraulic storage</span> </div>
                        </div>
                    </div>
                    <div class="mt-2"> <span class="font-weight-bold"></span> </div>
                    <div class="d-flex flex-row align-items-center"> 
                        <div class="d-flex flex-column ml-1 comment-profile">
                            <div class="comment-ratings">  </div> 
                        </div>
                    </div>
                </div>
            </div>
           
            
                    
                   
                   
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js'></script>
<script src='https://sachinchoolur.github.io/lightslider/dist/js/lightslider.js'></script>
<script>
    $('#lightSlider').lightSlider({
        gallery: true,
        item: 1,
        loop: true,
        slideMargin: 0,
        thumbItem: 9
    });
</script>
@endsection