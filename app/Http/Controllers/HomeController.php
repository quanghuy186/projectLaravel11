<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request){
        $categories = Category::all();
        $products = Product::orderBy('created_at', 'desc')->paginate(8);
        $keyword = '';
        if($request->input('keyword')){
            $keyword = $request->input('keyword');
            $products = Product::where('name', 'LIKE', "%{$keyword}%")->orderBy('created_at', 'desc')->paginate(8);
        }
        return view('index', compact('products', 'categories'));
    }

    public function detail(string $id){
        $products = Product::orderBy('created_at', 'desc')->paginate(4);
        $product = Product::find($id);
        return view('home.detail', compact('product', 'products'));
    }

    // public function search(Request $request){
    //     $keyword = $request->input('keyword');
    //     if($keyword){
    //         $products = Product::find($keyword);
    //     }
    // }
}