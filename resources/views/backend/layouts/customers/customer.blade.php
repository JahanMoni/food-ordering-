@extends('backend.master')
           @section('content')
           <h1>Customer List</h1>
           


<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Email</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

  @foreach($customers as $customer)


    <tr>
      <th scope="row">{{$customer ->id}}</th>
      <td>{{$customer ->full_name}}</td>
      <td>{{$customer->phone_number}}</td>
      <td>{{$customer ->email}}</td>
      <td>{{$customer ->status}}</td>
      
     <td>
    
    <a onclick="return confirm('Are you sure you want to delete this item?');" href="#" class="btn btn-danger">Delete</a>
</td>
    </tr>
    @endforeach
    
  </tbody>
</table>
    






@endsection