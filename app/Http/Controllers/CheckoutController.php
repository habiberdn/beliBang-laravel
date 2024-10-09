<?php

namespace App\Http\Controllers;

use App\Models\Product;

class CheckoutController extends Controller
{
    public function checkout(Product $product){

        return view('front.checkout',[
            'products' => $product
        ]);
    }
}
