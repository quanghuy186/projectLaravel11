<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Cart;
use App\Models\CartItem;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class CustomerController extends Controller
{
    public function index(Request $request){
      $categories = Category::all(); 
      $products = Product::orderBy('created_at', 'desc')->paginate(8);
      $keyword = '';

      $user = Auth::user();
        if ($user && $user->carts) {
            $totalProductsInCart = 0;
            foreach ($user->carts as $cart) {
                $totalProductsInCart += $cart->cartItems()->count();
            }
        } else {
            $totalProductsInCart = 0;
        }
      if($request->input('keyword')){
          $keyword = $request->input('keyword');
          $products = Product::where('name', 'LIKE', "%{$keyword}%")->orderBy('created_at', 'desc')->paginate(8);
      }
      if($request->input('search_category')){
          $id = $request->input('search_category');
          $products = Product::where('category_id', '=', $id)->orderBy('created_at', 'desc')->paginate(8);
      }
      return view('user.index', compact('products', 'categories', 'totalProductsInCart'));
    }
}