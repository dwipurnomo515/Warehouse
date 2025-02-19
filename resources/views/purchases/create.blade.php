{{-- resources/views/purchases/create.blade.php --}}
@extends('layouts.main')

@section('title', 'Add New Purchase')

@section('page_title', 'Add New Purchase')

@section('contents')
    <div class="m-3">
        <form action="{{ route('purchases.store') }}" method="POST" class="d-flex flex-column gap-1">
            @csrf
            <div class="form-group">
                <label for="supplier_id">Supplier</label>
                <select name="supplier_id" id="supplier_id" class="form-control" required>
                    <option value="">Select Supplier</option>
                    @foreach($suppliers as $supplier)
                        <option value="{{ $supplier->id }}">{{ $supplier->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="product_id">Product</label>
                <select name="product_id" id="product_id" class="form-control" required>
                    <option value="">Select Product</option>
                    @foreach($products as $product)
                        <option value="{{ $product->id }}">{{ $product->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="quantity">Quantity</label>
                <input type="number" name="quantity" id="quantity" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="number" name="price" id="price" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary mt-3 w-100">Save Purchase</button>
        </form>
    </div>
@endsection
