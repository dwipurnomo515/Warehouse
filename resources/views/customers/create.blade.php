@extends('layouts.main')

@section('title', 'Add Customer')

@section('page_title', 'Add New Customer') 

@section('contents')
<div class="m-3">

    <form action="{{ route('customers.store') }}" method="POST" class="d-flex flex-column gap-1">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" required>

            @error('name')
             <small class="text-danger">{{ $message }}</small>
             @enderror
        </div>
        
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" required>
            @error('email')
            <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        
        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="text" name="phone" id="phone" class="form-control">

            @error('phone')
            <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        
        
        <button type="submit" class="btn btn-primary mt-3">Save</button>
    </form>
</div>
@endsection
