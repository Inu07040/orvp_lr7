@extends('layout')
@section('title', isset($product) ? 'Update '.$product->name : 'Create product')

@section('content')
    <a class="btn btn-warning" role="button" href="{{ route('products.index') }}">Back</a>
    <form method="POST"
          @if(isset($product))
          action="{{route("products.update", $product)}}"
          @else
          action="{{route("products.store")}}"
          @endif
          class="mt-3">
        @csrf
        @isset($product)
            @method('PUT')
        @endisset
        <div class="mb-3">
            <label for="formName" class="form-label">Name</label>
            <input type="text" name="name"
                   value="{{ isset($product) ? $product->name : null }}"
                   class="form-control" id="formName" placeholder="Product's name" aria-label="name">
        </div>
        <div class="mb-3">
            <label for="formDescription" class="form-label">Description</label>
            <input type="text" name="description"
                   value="{{ isset($product) ? $product->description : null }}"
                   class="form-control" id="formDescription" placeholder="Description" aria-label="description">
        </div>
        <div class="mb-3">
            <label for="formPhotoUrl" class="form-label">Photo</label>
            <input type="text" name="photo"
                   value="{{ isset($product) ? $product->photo : null }}"
                   class="form-control" id="formPhotoUrl" placeholder="Photo url" aria-label="photo">
        </div>
        <div class="mb-3">
            <label for="formPrice" class="form-label">Price</label>
            <input type="text" name="price"
                   value="{{ isset($product) ? $product->price : null }}"
                   class="form-control" id="formPrice" placeholder="Price, $" aria-label="price">
        </div>
        <button type="submit" class="btn btn-warning">Create</button>
    </form>
@endsection
