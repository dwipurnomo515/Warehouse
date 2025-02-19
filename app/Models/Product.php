<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function stockTransactions()
    {
        return $this->hasMany(StockTransaction::class);
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
