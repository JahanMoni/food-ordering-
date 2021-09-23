@extends('backend.master')
           @section('content')
           <h1>Order List</h1>

           <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">User Id</th>
      <th scope="col">Order ID</th>
      <th scope="col">Total Price</th>
      <th scope="col">Delivary Date</th>
      <th scope="col">Receiver Name</th>
      <th scope="col">Receiver Email</th>
      <th scope="col">Receiver Phone</th>
      <th scope="col">Receiver Address</th>
      <th scope="col">Status</th>
      <th scope="col">Active</th>
    
    </tr>
  </thead>
  <tbody>
  @foreach($orders as $key=>$order)
    <tr>
      <th scope="row">1</th>
      <td>{{$order->order_id}}</td>
      <td>{{$order->total_price}}</td>
      <td>{{$order->delivary_date}}</td>
      <td>{{$order->receiver_name}}</td>
      <td>{{$order->receiver_email}}</td>
      <td>{{$order->receiver_phone}}</td>
      <td>{{$order->receiver_address}}</td>
      
       </tr>
    
       @endforeach
  </tbody>
</table>




           @endsection