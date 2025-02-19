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
     @error('name')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    <div class="mb-3">
        <label class="form-label">Price</label>
        <input type="number" class="form-control" name="price" required>
    </div>
     @error('price')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    <div class="mb-3">
        <label class="form-label">Stock</label>
        <input type="number" class="form-control" name="stock" required>
    </div>
     @error('stock')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    <div class="mb-3">
        <label class="form-label">Description</label>
        <textarea class="form-control" name="description"></textarea>
    </div>
     @error('description')
            <small class="text-danger">{{ $message }}</small>
        @enderror

    <div class="mb-3">
        <label class="form-label">Supplier</label>
        <select name="supplier_id" class="form-control">
            <option value="">Select Supplier</option>
            @foreach($suppliers as $supplier)
                <option value="{{ $supplier->id }}">{{ $supplier->name }}</option>
            @endforeach
        </select>
        @error('supplier_id')
               <small class="text-danger">{{ $message }}</small>
           @enderror
    </div>
    <button type="submit" class="btn btn-primary mb-3 w-100">Save</button>
</form>

@endsection
