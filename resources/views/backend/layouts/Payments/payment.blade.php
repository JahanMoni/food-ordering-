@extends('backend.master')


@section('content')



     
        <h2>Payment </h2>
        <form action="{{route('Payments.store')}}" method="Post">
            @csrf

        <div class="col-md-6">
            <label for="recipient-name" class="col-form-label">Order ID:</label>
            <input value="{{$orders->id}}" type="number" name="order_id" class="form-control" id="recipient-name">
          </div>
          
          <div class="col-md-5">
            <label for="recipient-name" class="col-form-label">Total Payment</label>
            <input type="{{$orders->total_payment}}" name="total_payment" class="form-control" id="recipient-name">
          </div>
          <div class="col-md-4">
            <label for="message-text" class="col-form-label">User ID:</label>
            <input value="{{$orders->user_id}}" type="number" name="id" class="form-control" id="recipient-name">
          </div>
          
          <div class="col-md-3">
            <label for="message-text" class="col-form-label">Pay at:</label>
            <input type="date" name="date" class="form-control" id="recipient-name">
          </div>
          <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success">Submit</button>
      </div>
        </form>
      </div>
     
    </div>
  </div>
</div>
@endsection