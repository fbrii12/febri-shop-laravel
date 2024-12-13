@extends('layouts.app')

@section('content')
    <form action="{{ route('products.update', $product) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="product_name">Product Name</label>
            <input type="text"  name="product_name" id="product_name" class="input" value="{{ $product->product_name }}" required>
        </div>
        <div class="form-group">
            <label for="price">Price</label>
            <input type="number" name="price" id="price" step="0.01" class="input" value="{{ $product->price }}" required>
        </div>
        <div class="form-group">
            <label for="diamond_amount">Diamond Amount</label>
            <input type="number" name="diamond_amount" id="diamond_amount" class="input" value="{{ $product->diamond_amount }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
