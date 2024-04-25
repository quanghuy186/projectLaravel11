<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(Request $request){
        $categories = Category::all(); 
        $products = Product::orderBy('created_at', 'desc')->paginate(8);
        
        $user = Auth::user();

        if ($user && $user->carts) {
            $totalProductsInCart = 0;
            foreach ($user->carts as $cart) {
                $totalProductsInCart += $cart->cartItems()->count();
            }
        } else {
            $totalProductsInCart = 0;
        }

        $keyword = '';
        if($request->input('keyword')){
            $keyword = $request->input('keyword');
            $products = Product::where('name', 'LIKE', "%{$keyword}%")->orderBy('created_at', 'desc')->paginate(8);
        }
        if($request->input('search_category')){
            $id = $request->input('search_category');
            $products = Product::where('category_id', '=', $id)->orderBy('created_at', 'desc')->paginate(8);
        }
        return view('index', compact('products', 'categories', 'totalProductsInCart'));
    }

    public function detail(string $id){
           
        $user = Auth::user();

        if ($user && $user->carts) {
            $totalProductsInCart = 0;
            foreach ($user->carts as $cart) {
                $totalProductsInCart += $cart->cartItems()->count();
            }
        } else {
            $totalProductsInCart = 0;
        }

        $categories = Category::all(); 
        $products = Product::orderBy('created_at', 'desc')->paginate(4);
        $product = Product::find($id);
        return view('home.detail', compact('product', 'products', 'categories', 'totalProductsInCart'));
    }
}