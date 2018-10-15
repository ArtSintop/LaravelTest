<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;

class ProductsController extends Controller
{
    public function show()
    {
    	$products = Products::orderBy('created_at', 'ASC')->get();
    	$total = $products->reduce(function ($total, $product) {
		    return $total + ($product->quantity * $product->price);
		}, 0);
    	return view('products', ['products' => $products, 'totalValue' => $total]);
    }


    public function store(Request $request)
    {
    	$name = $request->productName;
    	$quantity = $request->quantity;
    	$price = $request->pricePerItem;

    	Products::create([
    		'productName' => $name,
    		'quantity' => $quantity,
    		'price' => $price
    	]);

    	return back();
    }
}