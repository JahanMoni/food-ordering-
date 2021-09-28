
@extends('backend.master')


@section('content')


<br> </br>

<div>
<div class="heading-title text-left">  <!-- Button trigger modal -->
<button class="btn btn-danger btn-lg" onclick="printDiv('printableArea')">
    <i class="fas fa-print"></i> Print
</button>
</div>
    </div>
    <div id="printableArea">
            <h1>Order List</h1>
    @if(session()->has('message'))
        <div class="row" style="padding: 10px;">
            <span class="alert alert-success">{{session()->get('message')}}</span>
        </div>
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
      
      
       </tr>
    
       @endforeach
  </tbody>
</table>

<script type="text/javascript">
        function printDiv(divName) {
            var printContents = document.getElementById(divName).innerHTML;
            var originalContents = document.body.innerHTML;

            document.body.innerHTML = printContents;

            window.print();

            document.body.innerHTML = originalContents;
        }
    </script>




           @endsection