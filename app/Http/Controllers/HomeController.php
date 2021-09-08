<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $products = Product::all();
        return view('user.home', compact('products'));
    }

    public function details($id)
    {
        $products = Product::find($id);
        return view('user.detail', compact('products'));
    }

    // public function home(){
    //     $products = Product::all();
    //     return view('layout.main', compact('products'));
    // }
}
