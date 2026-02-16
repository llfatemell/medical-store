<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        Product::create([
            'name' => $request->name,
            'price_b2c' => $request->price_b2c,
            'price_b2b' => $request->price_b2b,
            'medical_usage' => $request->medical_usage,
            'description' => $request->description,
            'warnings' => $request->warnings,
            'order_type' => $request->order_type,
        ]);

        return redirect('/products');
    }
}
