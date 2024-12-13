@extends('layouts.app')

@section('content')
    <a href="{{ route('products.create') }}" class="btn btn-primary">Add Product</a>
 
    <table class="table-data" style="margin-top:20px;">
        <thead>
            <tr>
                <th>ID</th>
                <th>Product Name</th>
                <th>Price</th>
                <th>Diamond Amount</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->product_name }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->diamond_amount }}</td>
                    <td>
                        <a href="{{ route('products.edit', $product) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('products.destroy', $product) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
