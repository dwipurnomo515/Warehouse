{{-- resources/views/purchases/edit.blade.php --}}
@extends('layouts.main')

@section('title', 'Edit Purchase')

@section('page_title', 'Edit Purchase')

@section('contents')
    <div class="m-3">
        <form action="{{ route('purchases.update', $purchase->id) }}" method="POST" class="d-flex flex-column gap-1">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="supplier_id">Supplier</label>
                <select name="supplier_id" id="supplier_id" class="form-control" required>
                    @foreach($suppliers as $supplier)
                        <option value="{{ $supplier->id }}" {{ $supplier->id == $purchase->supplier_id ? 'selected' : '' }}>{{ $supplier->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="product_id">Product</label>
                <select name="product_id" id="product_id" class="form-control" required>
                    @foreach($products as $product)
                        <option value="{{ $product->id }}" {{ $product->id == $purchase->product_id ? 'selected' : '' }}>{{ $product->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="quantity">Quantity</label>
                <input type="number" name="quantity" id="quantity" class="form-control" value="{{ $purchase->quantity }}" required>
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="number" name="price" id="price" class="form-control" value="{{ $purchase->price }}" required>
            </div>
            <button type="submit" class="btn btn-primary mt-3 w-100">Update Purchase</button>
        </form>
    </div>
@endsection
