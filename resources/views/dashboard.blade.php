@extends('layouts.main')

@section('title', 'Dashboard')

@section('page_title', 'Dashboard')

@section('contents')
            <!-- Stats Cards -->
            <div class="row">
                <div class="col-12 col-md-4 mb-4">
                    <div class="card shadow-sm border-0" style="border-radius: 12px;">
                        <div class="card-body text-center">
                            <h4 class="text-muted">Total Products</h4>
                            <h2 class="fw-bold" style="color: #333;">{{ $totalProducts }}</h2>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-4 mb-4">
                    <div class="card shadow-sm border-0" style="border-radius: 12px;">
                        <div class="card-body text-center">
                            <h4 class="text-muted">Incoming Stock</h4>
                            <h2 class="fw-bold" style="color: #333;">{{ $incomingStock }}</h2>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-4 mb-4">
                    <div class="card shadow-sm border-0" style="border-radius: 12px;">
                        <div class="card-body text-center">
                            <h4 class="text-muted">Outgoing Stock</h4>
                            <h2 class="fw-bold" style="color: #333;">{{ $outgoingStock }}</h2>
                        </div>
                    </div>
                </div>
            </div>

@endsection
