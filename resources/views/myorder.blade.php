@extends('master')
@section('content')

<div class="custom-product">
        <div class="col-sm-10">
            <div class="trending.products">
                <h3>Orders List</h3>
                <!-- <a class="btn btn-success" href="/ordernow">Order Now</a> <br><br> -->
                <div class="">
                    @foreach ($orders as $item)
                        <div class="row searched-items cart-list-devider">
                            <div class="col-sm-3">
                            <a href="detail/{{$item->id}}">
                                <img class="trending-items" src="{{$item->gallery}}">
                            </a>
                        </div>
                        <div class="col-sm-3">
                            <div class="" >
                                <h3>{{$item->name}}</h3>
                                <h5>Delivery Status : {{$item->status}}</h5>
                                <h5>Payment Status : {{$item->payment_status}}</h5>
                                <h5>Payment Method : {{$item->payment_method}}</h5>
                                <h5>Delivery Address : {{$item->address}}</h5>
                                <h5>Price : {{$item->price}}</h5>



                            </div>
                        </div>
                            <div class="col-sm-3">
                                <!-- <a href="/removecart/{{$item->cart_id}}" class="btn btn-warning">Remove from Cart</a> -->
                            </div>
                        </div>
                    @endforeach
                    <!-- <a class="btn btn-success" href="/ordernow">Order Now</a> <br><br> -->

                </div> 
        </div>
</div>
@endsection