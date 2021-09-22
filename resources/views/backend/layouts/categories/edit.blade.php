@extends('backend.master')
@section('content')



           
                

                <div class="">
                    <h5 class="" id="">Item List</h5>
                </div>

                <div class="">


               
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

