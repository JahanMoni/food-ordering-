@extends('backend.master')
           @section('content')
          <h1> Delivary Man Record</h1>





                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    Create category list
</button>

                    
           <table class="table table-striped">
  <thead>
  <tr>
                        <th scope="col">serial</th>
                        <th scope="col"> Name</th>
                        <th scope="col"> Phone Number</th>
                        <th scope="col"> Email</th>
                        

                        
                    </tr>
                    </thead>
  <tbody>
        @foreach($list as $key=>$data)

                    <tr>
                        <th scope="row">{{$key+1}}</th>
                        <td>{{$data->name}}</td>
                        <td>{{$data->phone_number}}</td>
                        <td>{{$data->email}}</td>
                        



                        
                    </tr>
        @endforeach
        </tbody>
</table>

<!-- modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <form action="{{route('delivery.store')}}" method="POST">

                @csrf
                

                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delivary Man List</h5>
                </div>

                <div class="modal-body">


              
                    <div class="form-group">
                        <label for="description">Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Enter  name"
                            style="background-color: white">
                    </div>

                    
                   

                    <div class="form-group">
                        <label for="price">Phone Number</label>
                        <input type="number" min="0" id="price" class="form-control" name="phone_number"
                            placeholder="Enter phone number" style="background-color: white"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="price">Email</label>
                        <input type="text" min="0" id="price" class="form-control" name="email"
                            placeholder="Enter product price" style="background-color: white"></textarea>
                    </div>
                    
                    <div class="form-group">
                        <label for="price">Password</label>
                        <input type="text" min="0" id="price" class="form-control" name="password"
                            placeholder="Enter product price" style="background-color: white"></textarea>
                    </div>

                    

                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
                
                
            </form>
        </div>
    </div>
</div>




            

           
    @endsection