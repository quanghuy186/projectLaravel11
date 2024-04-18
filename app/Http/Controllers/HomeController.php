<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $products = Product::orderBy('created_at', 'desc')->paginate(8);
        return view('index', compact('products'));
    }

    public function detail(string $id){
        $product = Product::find($id);
        return view('home.detail', compact('product'));
    }

    public function search(){
        
    }
}