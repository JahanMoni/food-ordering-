@extends('backend.master')
@section('content')


<h1>Category List</h1>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    Create category list
</button>

<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Category Name</th>
            <th scope="col">Status</th>

        </tr>
    </thead>
    <tbody>



        @foreach($categories as $category)
        <tr>
            <th scope="row">{{$category->id}}</th>
            <td>{{$category->name}}</td>
            <td>{{$category->status}}</td>


        </tr>
        @endforeach
    </tbody>
</table>





<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <form action="{{route('categories.store')}}" method="POST">
                @csrf

                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="description">Category name</label>
                        <input type="text" class="form-control" name="Category_name" placeholder="Enter Category name"
                            style="background-color: white">
                    </div>

                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea id="description" class="form-control" name="description"
                            placeholder="Enter product description" style="background-color: white"></textarea>
                    </div>

                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                    <!-- <a type="submit" class="btn btn-info">submit</a> -->
                </div>
            </form>
        </div>
    </div>
</div>




@endsection