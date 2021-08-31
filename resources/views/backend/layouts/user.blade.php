@extends('backend.master')

@section('content')
<h1>User List</h1>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Full Name</th>
            <th scope="col">Email</th>
            <th scope="col">Type</th>
            <th scope="col">Address</th>
            <th scope="col">Phone Number</th>
            <th scope="col">Password</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
@foreach($user as $data)
        <tr>
            <th scope="row">1</th>
            <td>{{$data->full_name}}</td>
            <td>{{$data->email}}</td>
            <td>{{$data->role}}</td>
            <td>{{$data->phone_number}}</td>
            <td>{{$data->address}}</td>
            <td>{{$data->password}}</td>
            <td>view</td>
        </tr>
        @endforeach
        </tbody>
    </table>
@endsection
