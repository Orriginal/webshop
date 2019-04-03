<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index(){
        $products = Product::where('prijs', '>', 10)->orderBy('prijs', 'desc')->paginate('15');
        return view('welcome', compact('products'));
    }
}
