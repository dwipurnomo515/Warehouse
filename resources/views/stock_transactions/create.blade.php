@extends('layouts.main')

@section('title', 'Add Stock Transaction')

@section('page_title', 'Add Stock Transaction')

@section('contents')

<form class="m-3" action="{{ route('stock_transactions.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label class="form-label">Product</label>
        <select class="form-control" name="product_id" required>
            <option value="">-- Select Product --</option>
            @foreach($products as $product)
                <option value="{{ $product->id }}">{{ $product->name }} (Stock: {{ $product->stock }})</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label class="form-label">Transaction Type</label>
        <select class="form-control" name="type" required>
            <option value="in">Stock In</option>
            <option value="out">Stock Out</option>
        </select>
    </div>
    <div class="mb-3">
        <label class="form-label">Quantity</label>
        <input type="number" class="form-control" name="quantity" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Description</label>
        <textarea class="form-control" name="description"></textarea>
    </div>
    <button type="submit" class="btn btn-primary mb-3 w-100">Save</button>
</form>

@endsection
