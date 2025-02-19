@extends('layouts.main')

@section('title', 'Edit Customer')

@section('page_title', 'Edit Customer')

@section('contents')
<div class="m-3">
    <form action="{{ route('customers.update', $customer->id) }}" method="POST" class="d-flex flex-column gap-1">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $customer->name }}" required>
        </div>
        
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" value="{{ $customer->email }}" required>
        </div>
        
        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="text" name="phone" id="phone" class="form-control" value="{{ $customer->phone }}">
        </div>
        
        <button type="submit" class="btn btn-primary mt-3">Update</button>
    </form>
</div>
@endsection
