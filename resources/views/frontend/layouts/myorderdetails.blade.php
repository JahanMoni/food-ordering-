@extends('frontend.master')

@section('contents')

<br> </br>
<br> </br>
<br> </br>
<br> </br>

<h1>Order Details</h1>
                <table class="table">

                    <thead>
                    <tr>
                        <th scope="col">serial</th>
                        <th scope="col"> Order Id</th>
                        <th scope="col"> user Id</th>
                        <th scope="col"> Item name</th>
                        <th scope="col"> Quantity</th>
                        <th scope="col"> Price</th>
                        <th scope="col"> Sub_total</th>


                    </tr>
                    </thead>
                    <tbody>
                        
                       @foreach ( $orders as $key=>$date )
                       <tr>

                           <th scope="row">{{$key+1}}</th>
                           <td>{{$date->order_id}}</td>
                           <td>{{$date->user_id}}</td>
                           <td>{{$date ->item_name}}</td>
                           <td>{{$date ->quantity}}</td>
                           <td>{{$date ->unit_price}}</td>
                           <td>{{$date ->sub_total}}</td>

                       </tr>

                       @endforeach
                       

                    </tbody>



                </table>

            </div>

            </div>
    @endsection