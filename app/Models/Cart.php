<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\CartItem;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = ['user_id'];

    public function cartItems(){
        return $this->hasMany(CartItem::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

}