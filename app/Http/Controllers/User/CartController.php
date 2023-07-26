<?php

namespace App\Http\Controllers\User;

use App\Models\Cart;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function add_to_cart(Request $request){

        $cart = new Cart();
        $cart->product_id = $request->product_id;
        $cart->user_id = Auth::id();
        $cart->save();

        return back()->with('success', 'Product added to cart successfully!');
    }
}
