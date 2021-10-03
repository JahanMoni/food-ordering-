@extends('backend.master')
           @section('content')
           <h1>Offer item</h1>
           
           <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    Create offer list

</button>

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">User ID</th>
      <th scope="col">Item Name</th>
      <th scope="col">Image</th>
      <th scope="col">Price</th>
      <th scope="col">Discount Price</th>
      <th scope="col">Expire Date</th>
         <th scope="col">Status</th>
         <th scope="col">Action</th>
      
    </tr>
  </thead>
  <tbody>

 
  @foreach($Offer as $key=>$offers)

    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$offers->user_id}}</td>
      <td>{{$offers->item_name}}</td>
      <td>
                <img src="{{url('/uploads/'.$offers->image)}}" width="100px" alt="offer image">
            </td>
      <td>{{$offers->price}}.BDT</td>
      <td>{{$offers->discount_price}}.BDT</td>
      <td>{{$offers->expire_date}}</td>
      <td>{{$offers->status}}</td>
      <td> 
      <a onclick="return confirm('Are you sure you want to delete this item?');" href="{{route('offers.delete',$offers->id)}}" class="btn btn-danger">Delete</a>
</td>
</tr>
      
      @endforeach
  </tbody>
</table>
    


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

           <form action="{{route('offers..store')}}" method="POST"enctype="multipart/form-data">

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
                           <label for="exampleFormControlFile1">Image</label>
                            <div class="custom-file">
                                 <input type="file" class="form-control" name='image' >
   
                               </div>

                               <div class="form-group">
                        <label for="price">price</label>
                        <input type="number" min="0" id="price" class="form-control" name="price"
                            placeholder="Enter Item price" style="background-color: white"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="price">Discount price</label>
                        <input type="number" min="0" id="price" class="form-control" name="discount_price"
                            placeholder="Enter discount_price" style="background-color: white"></textarea>
                    </div>

                    
                    <div class="form-group">
                        <label for="expire_date">Expair Date</label>
                        <input type="text" min="0" id="expire_date" class="form-control" name="expire_date"
                            placeholder="Enter expire_date" style="background-color: white"></textarea>
                    </div>

                    

                   

                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
                
               
            </form>
        </div>
    </div>
</div>






@endsection
          