<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashBoardController extends Controller
{
    public function index(){
        return view('dashboard.index');
    }
    
    public function add(){
        return "USER HSHS";
    }
}