@extends('layouts.app')

@section('content')
    <form action="{{ route('categories.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="game_name">Game Name</label>
            <input type="text" class="input" name="game_name" id="game_name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="categories_name">Category Name</label>
            <input type="text" class="input" name="categories_name" id="categories_name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="photo">Photo</label>
            <input type="file" class="input" name="photo" id="photo" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
@endsection
