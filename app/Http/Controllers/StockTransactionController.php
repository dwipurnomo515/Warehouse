<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\StockTransaction;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth as FacadesAuth;

class StockTransactionController extends Controller
{
    /**
     * Menampilkan daftar transaksi stok.
     */
    public function index()
    {
        $transactions = StockTransaction::with('product')->latest()->get();
        return view('stock_transactions.index', compact('transactions'));
    }

    /**
     * Menampilkan form tambah transaksi stok.
     */
    public function create()
    {
        $products = Product::all();
        return view('stock_transactions.create', compact('products'));
    }

    /**
     * Menyimpan transaksi stok baru.
     */
    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'type' => 'required|in:in,out',
            'quantity' => 'required|integer|min:1',
            'description' => 'nullable|string',
        ]);

        $product = Product::findOrFail($request->product_id);

        // Update stok produk
        if ($request->type === 'in') {
            $product->increment('stock', $request->quantity);
        } else {
            if ($product->stock < $request->quantity) {
                return back()->withErrors(['quantity' => 'Stok tidak mencukupi!']);
            }
            $product->decrement('stock', $request->quantity);
        }

        // Simpan transaksi
        StockTransaction::create([
            'product_id'  => $request->product_id,
            'type'        => $request->type,
            'quantity'    => $request->quantity,
            'description' => $request->description,
            'user_id'     => FacadesAuth::id(),
        ]);
        return redirect()->route('stock_transactions.index')->with('success', 'Stock transaction added successfully!');
    }
}
