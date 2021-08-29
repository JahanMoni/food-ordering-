<!DOCTYPE html>
<html lang="en"><!-- Basic -->
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title>Nusrat Restaurant - Responsive HTML5 Template</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{url('/frontend/css/bootstrap.min.css')}}">    
	<!-- Site CSS -->
    <link rel="stylesheet" href="{{url('/frontend/css/style.css')}}">    
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{url('/frontend/css/responsive.css')}}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{url('/frontend/css/custom.css')}}">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

@include('frontend.partials.header')




	
	
	<!-- Start slides -->
	

	

	@yield('slider')


	<!-- End slides -->
	
	<!-- Start About -->
	
@yield('contents')
	
	
	@include('frontend.partials.footer')


	
	
	
	
	<a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

	<!-- ALL JS FILES -->
	<script src="{{url('/frontend/js/jquery-3.2.1.min.js')}}"></script>
	<script src="{{url('/frontend/js/popper.min.js')}}"></script>
	<script src="{{url('/frontend/js/bootstrap.min.js')}}"></script>
    <!-- ALL PLUGINS -->
	<script src="{{url('/frontend/js/jquery.superslides.min.js')}}"></script>
	<script src="{{url('/frontend/js/images-loded.min.js')}}"></script>
	<script src="{{url('/frontend/js/isotope.min.js')}}"></script>
	<script src="{{url('/frontend/js/baguetteBox.min.js')}}"></script>
	<script src="{{url('/frontend/js/form-validator.min.js')}}"></script>
    <script src="{{url('/frontend/js/contact-form-script.js')}}"></script>
    <script src="{{url('/frontend/js/custom.js')}}"></script>
</body>
</html>