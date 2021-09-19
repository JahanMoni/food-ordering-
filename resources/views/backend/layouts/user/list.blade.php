@extends('backend.master')

@section('content')
<h1>User List</h1>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Full Name</th>
            <th scope="col">Image</th>
            <th scope="col">Email</th>
            <th scope="col">Type</th>
            <th scope="col">Address</th>
            <th scope="col">Phone Number</th>
            
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
@foreach($user as $key=>$data)
        <tr>
            <th scope="row">{{$key+1}}</th>
            <td>{{$data->full_name}}</td>
            <td>
                <img src="{{url('/uploads/'.$data->images)}}" width="100px" alt="images">
            </td>
            <td>{{$data->email}}</td>
            <td>{{$data->role}}</td>
            <td>{{$data->phone_number}}</td>
            <td>{{$data->address}}</td>
         
            <td scope="row"><a href="{{route('user.viewuser',$data->id)}}" class="btn btn-primary">View</a></td>
        </tr>
        @endforeach
        </tbody>
    </table>
    {{$user->links('pagination::bootstrap-4')}}
@endsection
