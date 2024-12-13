@extends('layouts.app')

@section('content')
    <a href="{{ route('categories.create') }}" class="btn btn-primary" >Add Category</a>
    <a href="{{ route('categories.print') }}" class="btn btn-primary">Print PDF</a>
    <table class="table-data" style="margin-top:20px;">
        <thead>
            <tr>
                <th>ID</th>
                <th>Game Name</th>
                <th>Category Name</th>
                <th>Photo</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->game_name }}</td>
                    <td>{{ $category->categories_name }}</td>
                    <td><img src="{{ asset('storage/' . $category->photo) }}" alt="" width="100"></td>
                    <td>
                        <a href="{{ route('categories.edit', $category) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('categories.destroy', $category) }}" method="POST" style="display: inline-block;">
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
