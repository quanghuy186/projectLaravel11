<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use App\Models\Cart;

class CartItem extends Model
{
    use HasFactory;

    public function cart(){
        return $this->belongsTo(Product::class);
    }

    public function product(){
        return $this->belongsTo(Cart::class);
    }
}