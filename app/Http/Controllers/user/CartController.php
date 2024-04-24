<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\CartItem;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index(){
        $user = Auth::user();
        $cartItems = $user->carts;
        return view('user.cart.index', compact('cartItems'));
    }

    public function addToCart(Request $request)
    {
        $cart = Cart::firstOrCreate(['user_id' => auth()->id()]);
        $cartItem = new CartItem([
            'product_id' => $request->product_id,
            'quantity' => $request->quantity
        ]);

        $cart->cartItems()->save($cartItem);

        return redirect()->back()->with('success', 'Sản phẩm đã được thêm vào giỏ hàng!');
    }
}