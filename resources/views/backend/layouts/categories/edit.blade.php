@extends('backend.master')
@section('content')



           
                

                <div class="">
                    <h5 class="" id="">Category Update</h5>
                </div>

                <div class="">
                <form action="{{route('categories.update',$categories->id)}}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                @csrf

                
               
                    <div class="form-group">
                        <label for="description">Category Name</label>
                        <input type="text" value="{{ $categories->name}}" class="form-control" name="Category_name" placeholder="Enter Item name"
                            style="background-color: white">
                    </div>

                    
                   

                    


                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
                
               
            </form>
        </div>
    </div>
</div>
@endsection

