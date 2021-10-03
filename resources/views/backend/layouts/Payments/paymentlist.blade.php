@extends('backend.master')


@section('content')
<h2>Payment Record</h2>
@if(session()->has('message'))
                            <span class="alert alert-danger">{{session()->get('message')}}</span>
                    @endif


<table class="table">
  <thead>
    <tr>
   
      <th scope="col">User id</th>
      <th scope="col">Order id</th>
      <th scope="col">Pay_at</th>
      <th scope="col">Payment Type</th>
      <th scope="col">Total Payment</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    @foreach($payments as $key=>$payment)
      <th scope="row">{{$key+1}}</th>
      <td>{{$payment->order_id}}</td>
      <td>{{$payment->pay_at}}</td>
      <td>{{$payment->payment_type}}</td>

      <td>{{$payment->total_payment}}.BDT</td>
      
      
      <td>{{$payment->status}}</td>
      <td> <a href="{{route('Payments.approve',$payment->id)}}" class="btn btn-primary">Approved</a></td>
      
    </tr>
    @endforeach
    
  </tbody>
</table>
@endsection