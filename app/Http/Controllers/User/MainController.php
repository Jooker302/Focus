<?php

namespace App\Http\Controllers\User;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MainController extends Controller
{
    public function index(){
        $hotpicks = Product::where('top',1)->get();
        return view('welcome')->with(['hotpicks' => $hotpicks]);
    }

    public function product(){
        $product = Product::all();
        return view('product')->with(['product' => $product]);
    }






}
