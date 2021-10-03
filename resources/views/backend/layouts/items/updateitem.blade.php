@extends('backend.master')
           @section('content')
          


           <div class="">
                    <h5 class="" id="">Item Update</h5>
                </div>

                <div class="">
                <form action="{{route('items.update',$items->id)}}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                @csrf

                
               
                    <div class="form-group">
                        <label for="description">Item  Name</label>
                        <input type="text" value="{{ $items->name}}" class="form-control" name="Item_name" placeholder="Enter Item name"
                            style="background-color: white">
                    </div>
                    <div class="form-group">
                        <label for="description">Item Price</label>
                        <input type="text" value="{{ $items->price}}" class="form-control" name="price" placeholder="Enter Item name"
                            style="background-color: white">
                    </div>
                   
                    <div class="form-group">
                        <label for="description">Details</label>
                        <input type="text" value="{{ $items-> details}}" class="form-control" name=" details" placeholder="Enter Item name"
                            style="background-color: white">
                    </div>
                    
                   

                    


                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
                
               
            </form>
        </div>
    </div>
</div>

@endsection