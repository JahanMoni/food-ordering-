

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="{{ asset('frontend/css/profile.css') }}">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container emp-profile">
            <div>
                
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h5>
                                        <!-- {{auth()->user()->full_name}} -->
                                    </h5>
                                    <h6>

                                    </h6>
                            
                        </div>
                    </div>
                   
                </div>
                <div class="row">
                    <div class="col-md-4">



                    </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>User Name</label>
                                            </div>
                                            <div class="col-md-6">
                                               <p>{{auth()->user()->full_name}} </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label> Email </label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{auth()->user()->email}}</p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Mobile Number</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{auth()->user()->phone_number}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Address</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{auth()->user()->address}}</p>
                                            </div>
                                        </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <table class="table">

                            <thead>
                            <tr>
                                <th scope="col">serial</th>
                                <th scope="col">  Name</th>
                                <th scope="col"> Email</th>
                                <th scope="col"> Mobile</th>
                                <th scope="col"> Adress</th>
                                <th scope="col"> Status</th>
                               


                                <th class="text text-center"scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($orders as $key=>$order)

                            
                            <tr>
                                     <th scope="row">{{$key+1}}</th>
                                   
                                     <td>{{$order->receiver_name}}</td>
                                     <td>{{$order->receiver_email}}</td>
                                     <td>{{$order->receiver_phone_number}}</td>
                                    <td>{{$order->receiver_address}}</td>
                                     <td>{{$order->status}}</td>
                                     <td scope="row"><a href="#" class="btn btn-primary">View</a>
                                     <td scope="row"><a href="{{route('cencel',$myprofile->id})}" class="btn btn-primary">Cencel</a>

                               
                            </tr>
                @endforeach
                            </tbody>



                        </table>
                    </div>
                </div>
            </div>
        </div>
       