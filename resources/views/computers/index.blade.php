@extends('layout')
@section('title','Computers')
@section('content')
<div class="max-w-6xl mx-auto sm:px-6 lg:px-6">
    <div class="flex justify-center">
        <h1>Computers</h1>
    </div>

    <div class="">
        @if (count($computers)>0)
        <ul>
            @foreach ($computers as $computer)
            <a href="{{route('computers.show',$computer['id'])}}">
                <li>
                    {{$computer['name']}} is from <strong>{{$computer['origin']}}</strong>
                    price<strong>{{$computer['price']}}</strong>
                </li>
            </a>
            @endforeach
        </ul>
        @else
        <p>There Are No Computer To Display</p>
        @endif
    </div>
    @if (count($computers)>0)
    @foreach ($computers as $computer)
    <a href="{{route('computers.show',$computer['id'])}}">
        <div class="col-sm-6 col-md-3 product-grid">
            <div class="thumbnail">
                <div class="product-location">
                    <span class="fa-map-marker fa"></span> Banyumas
                </div>
                <div class="product-price product-price-bottom">
                    <h4><strong>$ {{$computer['price']}}</strong></h4>
                </div>
                <img src="{{ url('img/R.jpg') }}" alt="...">
                <div class="caption">
                    <small>Category</small>
                    <small class="pull-right">
                        <span class="rate fa-star fa"></span>
                        <span class="rate fa-star fa"></span>
                        <span class="rate fa-star fa"></span>
                        <span class="rate fa-star fa"></span>
                        <span class="rate fa-star-half fa"></span>
                    </small>
                    <h4><strong>{{$computer['name']}}</strong></h4>
                    <p>Is From <strong>{{$computer['origin']}}</strong> .</p>
                    <p><a href="#" class="btn btn-primary" role="button">Buy</a></p>
                </div>
            </div>
        </div>
    </a>
    @endforeach
    @endif

</div>
@endsection