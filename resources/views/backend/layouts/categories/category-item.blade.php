@extends('backend.master')
@section('content')

    <h1>Product under category-</h1>


    <table class="table">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Item Name</th>
            <th scope="col">Price</th>
        </tr>
        </thead>
        <tbody>
        {{--categories--}}
        {{--@dd($categories)--}}
        @foreach($items as $key=>$data)
            <tr>
                <th scope="row">{{$key+1}}</th>
                <td>{{$data->item_name}}</td>
                <td>{{$data->price}}</td>

            </tr>
        @endforeach
        </tbody>
    </table>

@endsection
