<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


  
</head>
  <body>

    <div class="d-flex">
        <div class="sidebar bg-dark text-white p-4" style="width: 250px; height: 100vh; position: fixed;">
            <h3 class="text-center mb-4" style="font-weight: 600; color: #fff;">Warehouse</h3>

            <ul class="list-unstyled">
                <li>
                    <button onclick="window.location.href='{{ route('dashboard') }}'" class="btn btn-dark w-100 d-flex align-items-center justify-content-start p-3 rounded-3 hover-bg-dark d-flex gap-2">
                        <i class="fas fa-tachometer-alt mr-3"></i>
                        <span>Dashboard</span>
                    </button>
                </li>

                <li>
                     <button onclick="window.location.href='{{ route('products.index') }}'" class="btn btn-dark w-100 d-flex align-items-center justify-content-start p-3 rounded-3 hover-bg-dark d-flex gap-2">
                        <i class="fas fa-box mr-3"></i>
                        <span>Products</span>
                    </button>
                </li>

                <li>
                    <button onclick="window.location.href='{{ route('stock_transactions.index') }}'" class="btn btn-dark w-100 d-flex align-items-center justify-content-start p-3 rounded-3 hover-bg-dark d-flex gap-2">
                        <i class="fas fa-exchange-alt mr-3"></i>
                        <span>Stock Transactions</span>
                    </button>
                </li>

                <li>
                    <button onclick="window.location.href='{{ route('suppliers.index') }}'" class="btn btn-dark w-100 d-flex align-items-center justify-content-start p-3 rounded-3 hover-bg-dark d-flex gap-2">
                        <i class="fas fa-truck mr-3"></i>
                        <span>Suppliers</span>
                    </button>
                </li>

                <li>
                    <button onclick="window.location.href='{{ route('purchases.index') }}'" class="btn btn-dark w-100 d-flex align-items-center justify-content-start p-3 rounded-3 hover-bg-dark d-flex gap-2">
                        <i class="fas fa-credit-card mr-3"></i>
                        <span>Purchases</span>
                    </button>
                </li>

                <li>
                    <button onclick="window.location.href='{{ route('customers.index') }}'" class="btn btn-dark w-100 d-flex align-items-center justify-content-start p-3 rounded-3 hover-bg-dark d-flex gap-2">
                        <i class="fas fa-users mr-3"></i>
                        <span>Customers</span>
                    </button>
                </li>
                <li>
                  
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="mt-5 btn btn-dark w-100 d-flex align-items-center justify-content-start p-3 rounded-3 hover-bg-dark d-flex gap-2">
                            <i class="fas fa-sign-out-alt mr-3"></i>
                            <span>Logout</span>
                        </button>
                     </form>
                </li>
            </ul>
        </div>
        <div class="main-content flex-grow-1 p-4" style="margin-left: 250px;">
            <div class="header d-flex justify-content-between align-items-center mb-4">
                <h2 class="fw-bold" style="color: #333;">@yield('page_title')</h2>
               
            </div>

            @yield('contents')
        </div>
    </div> 

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
