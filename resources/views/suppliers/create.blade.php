@extends('layouts.main')
@section('title', 'Add Supplier')

@section('page_title', 'Add New Supplier')

@section('contents')
    <div class="mx-4">
        <form action="{{ route('suppliers.store') }}" method="POST" class="d-flex flex-column gap-1">
            @csrf
            <div class="form-group">
                <label for="name">Supplier Name</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="contact">Contact</label>
                <input type="text" name="contact" id="contact" class="form-control" required>
            </div>
       
            <button type="submit" class="btn btn-primary mt-3 w-100">Save Supplier</button>
        </form>
    </div>
@endsection
