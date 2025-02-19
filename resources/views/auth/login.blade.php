@extends('layouts.app')

@section('content')

    <div class="container d-flex justify-content-center align-items-center" style="height: 100vh; background-color: #f8f9fa;">
        <div class="card shadow-sm border-0" style="max-width: 400px; width: 100%; border-radius: 12px;">
            <div class="card-body p-4">
                <h3 class="text-center mb-4" style="font-weight: 600; color: #333;">Login</h3>

                @if(session('error'))
                    <div class="alert alert-danger" role="alert">
                        {{ session('error') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('login.submit') }}">
                    @csrf

                    <div class="mb-4">
                        <label for="email" class="form-label" style="font-weight: 500;">Email</label>
                        <input type="email" class="form-control form-control-lg" id="email" name="email" required style="border-radius: 8px; height: 45px; background-color: #fff; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">
                    </div>

                    <div class="mb-4">
                        <label for="password" class="form-label" style="font-weight: 500;">Password</label>
                        <input type="password" class="form-control form-control-lg" id="password" name="password" required style="border-radius: 8px; height: 45px; background-color: #fff; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">
                    </div>



                    <div class="text-center">
                        <button type="submit" class="btn btn-dark btn-lg w-100" style="border-radius: 8px; height: 45px; font-weight: 600;">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
