<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request){
        $products = Product::orderBy('created_at', 'desc')->paginate(8);
        $keyword = '';
        if($request->input('keyword')){
            $keyword = $request->input('keyword');
            $products = Product::where('name', 'LIKE', "%{$keyword}%")->orderBy('created_at', 'desc')->paginate(8);
        }
        return view('index', compact('products'));
    }

    public function detail(string $id){
        $product = Product::find($id);
        return view('home.detail', compact('product'));
    }

    // public function search(Request $request){
    //     $keyword = $request->input('keyword');
    //     if($keyword){
    //         $products = Product::find($keyword);
    //     }
    // }
}