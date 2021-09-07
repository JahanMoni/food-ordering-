@extends('backend.master')
           @section('content')
           <h1>Customer List</h1>
           


<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">FName</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Email</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>@mdo</td>
      
      <td scope="row"><a href="#" class="btn btn-primary">View</a>
    
    <a href="#" class="btn btn-warning">Edit</a>
    <a onclick="return confirm('Are you sure you want to delete this item?');" href="#" class="btn btn-danger">Delete</a>
</td>
    </tr>
    
  </tbody>
</table>
    






           @endsection