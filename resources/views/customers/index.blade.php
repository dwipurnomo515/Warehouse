@extends('layouts.main')

@section('title', 'Customers')

@section('page_title', 'Customers List')

@section('contents')
<div class="container">
    <a href="{{ route('customers.create') }}" class="btn btn-primary mb-3">Add Customer</a>
    
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if($customers->isEmpty())
        <div class="text-center mt-5">
            <img src="{{ asset('storage/images/empty.svg') }}" alt="No Customers" width="250" class="mb-3">
            <h4 class="text-muted">Haven't any customers</h4>
            <p class="text-secondary">Add customers to see them here</p>
        </div>
    @else
        <table class="table table-bordered">
            <thead class="bg-dark text-white">
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($customers as $customer)
                    <tr>
                        <td>{{ $customer->name }}</td>
                        <td>{{ $customer->email }}</td>
                        <td>{{ $customer->phone }}</td>
                        <td>
                            <a href="{{ route('customers.edit', $customer->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form id="delete-form-{{ $customer->id }}" action="{{ route('customers.destroy', $customer->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button onclick="confirmDelete({{ $customer->id }})" type="button" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection

<script>
    function confirmDelete(customerId) {
        Swal.fire({
            title: 'Yakin ingin menghapus?',
            text: "Data customer akan dihapus permanen!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Ya, hapus!',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('delete-form-' + customerId).submit();
            }
        })
    }
</script>
