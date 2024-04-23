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
       // Lấy người dùng hiện tại đã đăng nhập
    $user = Auth::user();
    
    // Lấy tất cả các mục trong giỏ hàng của người dùng hiện tại
    $cartItems = $user->cart->items()->get();
    
    // Trả về view 'user.cart.index' với dữ liệu giỏ hàng
    return view('user.cart.index', compact('cartItems'));
    }

    public function addToCart(Request $request)
    {
        // Lấy giỏ hàng của người dùng hoặc tạo mới nếu chưa có
        $cart = Cart::firstOrCreate(['user_id' => auth()->id()]);

        // Tạo một cart item mới
        $cartItem = new CartItem([
            'product_id' => $request->product_id,
            'quantity' => $request->quantity
        ]);

        // Lưu cart item vào giỏ hàng
        $cart->items()->save($cartItem);

        return redirect()->back()->with('success', 'Sản phẩm đã được thêm vào giỏ hàng!');
    }

    public function totalCart(){
        // $totalProductsInCart = CartItem::sum('quantity');
        // return view('user.index', compact('totalProductsInCart'));
    }
}