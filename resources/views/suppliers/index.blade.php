@extends('layouts.main')

@section('title', 'Suppliers')

@section('page_title', 'Suppliers List')

@section('contents')

    <div class="container">
        <a href="{{ route('suppliers.create') }}" class="btn btn-primary mb-3">Add New Supplier</a>

        @if($suppliers->isEmpty())
            <div class="text-center mt-5">
                <img src="{{ asset('storage/images/empty.svg') }}" alt="No Suppliers" width="250" class="mb-3">
                <h4 class="text-muted">haven't added any supplier</h4>
                <p class="text-secondary">Add new supplier to list</p>
            </div>
        @else
            <table class="table table-bordered">
                <thead class="bg-dark text-white">
                    <tr>
                        <th>Name</th>
                        <th>Contact</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($suppliers as $supplier)
                        <tr>
                            <td>{{ $supplier->name }}</td>
                            <td>{{ $supplier->contact }}</td>
                            <td>
                                <a href="{{ route('suppliers.edit', $supplier->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form id="delete-form-{{ $supplier->id }}" action="{{ route('suppliers.destroy', $supplier->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" class="btn btn-danger btn-sm" onclick="confirmDelete({{ $supplier->id }})">Delete</button>
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
    function confirmDelete(supplierId) {
        Swal.fire({
            title: 'Yakin ingin menghapus?',
            text: "Data supplier akan dihapus permanen!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Ya, hapus!',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('delete-form-' + supplierId).submit();
            }
        })
    }
</script>
