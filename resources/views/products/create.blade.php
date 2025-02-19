@extends('layouts.main')

@section('title', 'Add Product')

@section('page_title', 'Add New Product')

@section('contents')

<form class="m-3" action="{{ route('products.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label class="form-label">Product Name</label>
        <input type="text" class="form-control" name="name" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Price</label>
        <input type="number" class="form-control" name="price" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Stock</label>
        <input type="number" class="form-control" name="stock" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Description</label>
        <textarea class="form-control" name="description"></textarea>
    </div>
    <button type="submit" class="btn btn-primary mb-3 w-100">Save</button>
</form>

@endsection
