<?php

use App\Models\Product;

if(!function_exists('get_product')){
    function get_product($id){
        $product = Product::find($id);
        return $product;
    }
}
