<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use App\Models\Cart;

class CartItem extends Model
{
    use HasFactory;
    protected $fillable = ['cart_id', 'product_id', 'quantity'];

    public function cart(){
        return $this->belongsTo(Product::class, 'cart_id');
    }

    public function product(){
        return $this->belongsTo(Cart::class, 'product_id');
    }
}