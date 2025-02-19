@extends('layouts.main')

@section('title', 'Edit Product')

@section('page_title', 'Edit Product')

@section('contents')

<form class="m-3" action="{{ route('products.update', $product->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label class="form-label">Product Name</label>
        <input type="text" class="form-control" name="name" value="{{ $product->name }}" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Price</label>
        <input type="number" class="form-control" name="price" value="{{ $product->price }}" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Stock</label>
        <input type="number" class="form-control" name="stock" value="{{ $product->stock }}" required>
    </div>
    <button type="submit" class="btn btn-primary mb-3 w-100">Update</button>
</form>

@endsection
