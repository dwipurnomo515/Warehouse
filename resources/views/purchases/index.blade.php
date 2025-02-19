@extends('layouts.main')

@section('title', 'Purchases')

@section('page_title', 'Purchases')

@section('contents')
    <div class="container">
        <a href="{{ route('purchases.create') }}" class="btn btn-primary mb-3">Add New Purchase</a>

        @if($purchases->isEmpty())
            <div class="text-center mt-5">
                <img src="{{ asset('storage/images/empty.svg') }}" alt="No Purchases" width="250" class="mb-3">
                <h4 class="text-muted">Haven't any purchases</h4>
                <p class="text-secondary">Add purchases to see them here</p>
            </div>
        @else
            <table class="table table-bordered">
                <thead class="bg-dark text-white">
                    <tr>
                        <th>Supplier</th>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total Cost</th>
                        <th>Purchase Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($purchases as $purchase)
                        <tr>
                            <td>{{ $purchase->supplier->name }}</td>
                            <td>{{ $purchase->product->name }}</td>
                            <td>Rp {{ number_format($purchase->price, 0, ',', '.') }}</td>
                            <td>{{ $purchase->quantity }}</td>
                            <td>Rp {{ number_format($purchase->total_cost, 0, ',', '.') }}</td>
                            <td>{{ $purchase->created_at ? $purchase->created_at->format('Y-m-d') : 'N/A' }}</td>
                            <td>
                                <a href="{{ route('purchases.edit', $purchase->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form id="delete-form-{{ $purchase->id }}" action="{{ route('purchases.destroy', $purchase->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" class="btn btn-danger btn-sm" onclick="confirmDelete({{ $purchase->id }})">Delete</button>
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
    function confirmDelete(purchaseId) {
        Swal.fire({
            title: 'Yakin ingin menghapus?',
            text: "Data pembelian akan dihapus permanen!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Ya, hapus!',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('delete-form-' + purchaseId).submit();
            }
        })
    }
</script>
