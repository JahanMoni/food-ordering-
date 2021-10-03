@extends('backend.master')
           @section('content')
           <h1>Item List</h1>
           <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    Create item list

</button>


 

       
           <table class="table table-striped">
  <thead>
  <tr>
                        <th scope="col">id</th>
                        <th scope="col"> Item_name</th>
                        
                        <th scope="col"> category_name</th>
                        <th scope="col">Image</th>
                        <th scope="col"> price</th>
                        <th scope="col"> details</th>
                        <th scope="col">Action</th>
                    </tr>
  </thead>
  <tbody>
  @foreach($items as $key=>$item)

<tr>
    <th scope="row">{{$key+1}}</th>>
    <td>{{$item->item_name}}</td>
    <td>{{optional($item->category)->name}}</td>
    
    <td>
                <img src="{{url('/uploads/'.$item->image)}}" width="100px" alt="item image">
            </td>
    <td>{{$item->price}}.BDT</td>
    <td>{{$item->details}}</td>
    <td scope="row"><a href="#" class="btn btn-primary">View</a>
    
                <a href="#" class="btn btn-warning">Edit</a>
                <a onclick="return confirm('Are you sure you want to delete this item?');" href="{{route('items.delete',$item->id)}}" class="btn btn-danger">Delete</a>
            </td>

        </tr>
        @endforeach
  </tbody>
</table>

{{$items->links('pagination::bootstrap-4')}}

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <form action="{{route('items.store')}}" method="POST"enctype="multipart/form-data">

                @csrf
                

                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Item List</h5>
                </div>

                <div class="modal-body">


                <div class="form-group">
                            <label for="item_name">Select Category</label>
                            <select class="form-control" name="category_name" id="">
                                @foreach($categories as $cat)
                                <option value="{{$cat->id}}">{{$cat->name}}</option>
                                @endforeach
                            </select>
                            </div>
                    <div class="form-group">
                        <label for="description">Item Name</label>
                        <input type="text" class="form-control" name="Item_name" placeholder="Enter Item name"
                            style="background-color: white">
                    </div>

                    
                    <div class="form-group">
                           <label for="exampleFormControlFile1">Image</label>
                            <div class="custom-file">
                                 <input type="file" class="form-control" name='image' >
   
                               </div>

                    <div class="form-group">
                        <label for="price">price</label>
                        <input type="number" min="0" id="price" class="form-control" name="price"
                            placeholder="Enter product price" style="background-color: white"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="details">details</label>
                        <textarea id="details" class="form-control" name="details"
                            placeholder="Enter product details" style="background-color: white"></textarea>
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