<?php

namespace App\Http\Controllers;

use App\Models\Product;


class ProductController extends Controller
{
    public function product()
    {
        $products = Product::all();
        return $products;
    }
    
    public function product_id($id)
    {
        $product = Product::find($id);
        return $product;
    }
}

