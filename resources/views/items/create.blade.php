<!-- resources/views/items/create.blade.php -->

@extends('layouts.app')

@section('content')
    <div>
        <h1>Create Item</h1>
        <form action="{{ route('items.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" class="form-control">
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea name="description" id="description" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label for="quantity">Quantity:</label>
                <input type="number" name="quantity" id="quantity" class="form-control">
            </div>
            <div class="form-group">
                <label for="price">Price:</label>
                <input type="number" name="price" id="price" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
@endsection
