@extends('backend.master')
           @section('content')
           <h1>Order List</h1>
           @if(session()->has('message'))
                            <span class="alert alert-danger">{{session()->get('message')}}</span>
                    @endif

           <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col"> Id</th>
      <th scope="col">User ID</th>
      <th scope="col">Total payment</th>>
      <th scope="col">Receiver Name</th>
      <th scope="col">Receiver Email</th>
      <th scope="col">Receiver Phone</th>
      <th scope="col">Receiver Address</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
    
    </tr>
  </thead>
  <tbody>
  @foreach($orders as $key=>$order)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$order->user_id}}</td>
      <td>{{$order->total_payment}}</td>
      <td>{{$order->receiver_name}}</td>
      <td>{{$order->receiver_email}}</td>
      <td>{{$order->receiver_phone_number}}</td>
      <td>{{$order->receiver_address}}</td>
      <td>{{$order->status}}</td>
      <td scope="row"><a href="{{route('orders.details',$order->id)}}" class="btn btn-primary">View</a>
      <a class="btn btn-success" href="{{route('orders.invoice',$order->id)}}">Invoice</a>
      <td scope="row">
       
        <div class="dropdown show">
  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
   Confirmation   
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item" href="{{route('orders.approve',[$order->id,'status'=>'approved'])}}">Approve</a>
    <a class="dropdown-item" href="{{route('orders.approve',[$order->id,'status'=>'cancelled'])}}">Cancel</a>
   
  </div>
</div>
      </td>

      
      
       </tr>
    
       @endforeach
  </tbody>
</table>

{{$orders->links('pagination::bootstrap-4')}}




           @endsection