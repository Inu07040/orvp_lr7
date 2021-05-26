@extends('layout')
@section('title', 'Products')

@section('content')

    <div class="container products">
        <a class="btn btn-warning" role="button" href="{{url('products/create')}}">Create product</a><br><br>
        <div class="row">
            @foreach($products as $product)
                <div class="col-xs-18 col-sm-6 col-md-3">
                    <div class="thumbnail">
                        <img src="{{ $product->photo }}" width="250" height="250">
                        <div class="caption">
                            <h4>{{ $product->name }}</h4>
                            <p>{{ \Illuminate\Support\Str::limit(strtolower($product->description), 55) }}</p>
                            <p><strong>Price: </strong> {{ $product->price }}$</p>
                            <p class="btn-holder"><a href="{{ url('add-to-cart/'.$product->id) }}" class="btn btn-warning btn-block text-center" role="button">Add to cart</a> </p>
                            <p><a href="{{ route('products.edit', $product) }}" class="btn btn-warning btn-block text-center" role="button">Edit</a> </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection
