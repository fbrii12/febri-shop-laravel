@extends('layouts.app')

@section('content')
    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="product_name">Product Name</label>
            <input type="text" name="product_name" id="product_name" class="input" required>
        </div>
        <div class="form-group">
            <label for="price">Price</label>
            <input type="number" name="price" id="price" step="0.01" class="input" required>
        </div>
        <div class="form-group">
            <label for="diamond_amount">Diamond Amount</label>
            <input type="number" name="diamond_amount" id="diamond_amount" class="input" required>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
@endsection
