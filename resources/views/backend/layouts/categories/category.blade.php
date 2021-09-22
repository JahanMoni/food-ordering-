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
            <th scope="col">Image</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>

        </tr>
    </thead>
    <tbody>



        @foreach($categories as $key=>$category)
        

        <tr>
<th scope="row">{{$key+1}}</th>>
    <td>{{$category->name}}</td>
    <td>
                <img src="{{url('/uploads/'.$category->image)}}" width="100px" alt="category image">
            </td>
    <td>{{$category->status}}</td>
    
    
    <td scope="row"><a href="{{route('category.item',$category->id)}}" class="btn btn-primary">View</a>
    
    <a href="{{route('categories.edit',$category->id)}}" class="btn btn-warning">Edit</a>
    <a onclick="return confirm('Are you sure you want to delete this item?');" href="{{route('categories.delete',$category->id)}}" class="btn btn-danger">Delete</a>
</td>


        </tr>



        @endforeach
    </tbody>
</table>
{{$categories->links('pagination::bootstrap-4')}}





<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <form action="{{route('categories.store')}}" method="POST" enctype="multipart/form-data">
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
                           <label for="exampleFormControlFile1">Image</label>
                            <div class="custom-file">
                                 <input type="file" class="form-control" name='image' >
   
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
