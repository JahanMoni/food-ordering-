@extends('backend.master')

@section('content')



<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                           
                        </ol>
                    

    <div class="row" style="margin-top: 100px;">
        <div class="col-md-3" style="background-color:PaleGreen; padding: 10px; margin-right: 10px">
            <h3>Total sale</h3>
            <p><h4>{{$order_count}}</h4></p>
        </div>
        <div class="col-md-3" style="background-color:Brown; padding: 10px; margin-right: 10px">
            <h3>Total customer</h3>
            <p><h4>{{$order_count}}</h4></p>
        </div>
        <div class="col-md-3" style="background-color: Pink; padding: 10px; margin-right: 10px;">
           <h3>Total Order</h3>
            <p><h4>{{$order_count}}</h4></p>
        </div>


    </div>

@endsection