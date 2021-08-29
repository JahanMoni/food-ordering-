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
                        <th scope="col"> name</th>
                        <th scope="col"> category_item</th>
                        <th scope="col"> price</th>
                        <th scope="col"> details</th>
                        

                        <th class="text text-center"scope="col">Action</th>
                    </tr>
  </thead>
  <tbody>
  @foreach($items as $key=>$item)

<tr>
<th scope="row">{{$item->id}}</th>>
    <td>{{$item->name}}</td>
    <td>{{$item->category_item}}</td>
    <td>{{$item->price}}</td>
    <td>{{$item->details}}</td>


        </tr>
        @endforeach
  </tbody>
</table>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <form action="{{route('items.store')}}" method="POST">
                @csrf

                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Item List</h5>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="description">Item Name</label>
                        <input type="text" class="form-control" name="Item_name" placeholder="Enter Item name"
                            style="background-color: white">
                    </div>

                    <div class="form-group">
                        <label for="category_item">category_item</label>
                        <textarea id="category_item" class="form-control" name="category_item"
                            placeholder="Enter product category_item" style="background-color: white"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="price">price</label>
                        <textarea id="price" class="form-control" name="price"
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