<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function pageproduct()
    {
        $products = Product::all();
        return view('admin.page', compact('products'));
    }

    public function create()
    {
        return view('admin.add');
    }

    public function store(Request $request)
    {
        $products = new Product();

        if($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/img/', $filename);
            $products->image = $filename;
        } else {
            return $request;
            $products->image = ''; 
        }

        $products->drink = $request->input('drink');
        $products->desc = $request->input('desc');
        $products->price = $request->input('price');

        $products->save();
        // return view('admin.tambah', compact('admins'));
        return redirect('/addproduct')->with('status_add', 'Add Product Successfully!');
    }

    public function edit(Product $products)
    {
        return view('admin.edit', compact('products'));
    }

    public function update(Request $request, $id)
    {
        $products = Product::find($id);

        if($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/img/', $filename);
            $products->image = $filename;
        } else {
            return $request;
            $products->image = ''; 
        }

        Product::where('id', $products->id)
        ->update([
            'drink' => $request->drink,
            'desc' => $request->desc,
            'price' => $request->price
        ]);

        $products->save();
        return redirect('/addproduct')->with('status_edit', 'Edit Product Successfully!');
    }

    public function destroy(Product $products)
    {
        Product::destroy($products->id);
        return redirect('/addproduct')->with('status_delete', 'Deleted Product Successfully!');
    }
}
