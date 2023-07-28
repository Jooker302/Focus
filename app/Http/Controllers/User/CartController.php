<?php

namespace App\Http\Controllers\User;

use App\Models\Cart;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function add_to_cart(Request $request)
    {

        $check_cart = Cart::where('product_id', $request->product_id)->where('user_id', Auth::id())->first();
        if (!$check_cart) {
            $cart = new Cart();
            $cart->product_id = $request->product_id;
            $cart->user_id = Auth::id();
            $cart->save();

            return back()->with('success', 'Product added to cart successfully!');
        } else {
            return back()->with('error', 'Product already added to cart!');
        }
    }

    public function remove_cart(Request $request)
    {
        Cart::find($request->id)->delete();
        return back()->with('success', 'Product removed from cart successfully!');
    }
}
