@extends('layouts.main')

@section('title', 'Edit Supplier')

@section('page_title', 'Edit Supplier')

@section('contents')
    <div class="m-3">
        <form action="{{ route('suppliers.update', $supplier->id) }}" method="POST" class="d-flex flex-column gap-1">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Supplier Name</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ $supplier->name }}" required>
            </div>
            <div class="form-group">
                <label for="contact_name">Contact</label>
                <input type="text" name="contact" id="contact_name" class="form-control" value="{{ $supplier->contact }}" required>
            </div>
            <button type="submit" class="btn btn-primary mt-3 w-100">Update Supplier</button>
        </form>
    </div>
@endsection
