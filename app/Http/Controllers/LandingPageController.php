<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class LandingPageController extends Controller
{
    public function home()
    {
        $products = Product::all();
        return view('layout.main', compact('products'));
    }
}
