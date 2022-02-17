@extends('master')
@section('content')

<div class="custom-product">
    <div class="col-sm-4">
         <a href="#">Filter</a>
    </div>
        <div class="col-sm-4">
            <div class="trending.products">
                <h3>Result for Products</h3>
                <div class="">
                    @foreach ($products as $item)
                        <div class="">
                            <img class='searched-items' src="{{$item['gallery']}}">
                            <div class="trending-items">
                                <h3>{{$item['name']}}</h3>
                                <h5>{{$item['description']}}</h5>
                            </div>
                        </div>
                    @endforeach
                </div> 
        </div>
</div>
@endsection