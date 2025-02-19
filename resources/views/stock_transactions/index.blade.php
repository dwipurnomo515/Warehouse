@extends('layouts.main')

@section('title', 'Stock Transactions')

@section('page_title', 'Stock Transactions')

@section('contents')

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<a href="{{ route('stock_transactions.create') }}" class="btn btn-primary mb-3">Add Stock Transaction</a>

@if($transactions->isEmpty())
    <div class="text-center mt-5">
        <img src="{{ asset('storage/images/empty.svg') }}" alt="No Transactions" width="250" class="mb-3">
        <h4 class="text-muted">Haven't any stock transactions</h4>
        <p class="text-secondary">Add stock transactions to see them here</p>
    </div>
@else
    <table class="table table-bordered">
        <thead class="bg-dark text-white">
            <tr>
                <th>No</th>
                <th>Product</th>
                <th>Type</th>
                <th>Quantity</th>
                <th>Description</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach($transactions as $transaction)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $transaction->product->name }}</td>
                <td class="{{ $transaction->type == 'in' ? 'text-success' : 'text-danger' }}">
                    {{ ucfirst($transaction->type) }}
                </td>
                <td>{{ $transaction->quantity }}</td>
                <td>{{ $transaction->description }}</td>
                <td>{{ $transaction->created_at->format('d-m-Y H:i') }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endif

@endsection
