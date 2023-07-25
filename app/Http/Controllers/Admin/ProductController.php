<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('admin.product.view_products')->with(['products' => $products]);
    }

    public function add()
    {
        return view('admin.product.add_product');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'category_id' => 'required',
            // 'sub_category_id' => 'nullable',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif', // Validate the uploaded image
            'name' => 'required',
            // 'top' => 'required|in:0,1',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }


        if(isset($request->top)){
            $top =1;
        }else{
            $top = 0;
        }


        $uploadedImage = $request->file('image');

        // Convert the uploaded image to Base64-encoded data
        $base64Image = 'data:' . $uploadedImage->getClientMimeType() . ';base64,' . base64_encode(file_get_contents($uploadedImage->getPathname()));

        $product = new Product();
        $product->category_id = $request->category_id;
        $product->sub_category_id = $request->sub_category_id;
        $product->image = $base64Image;
        $product->name = $request->name;
        $product->price = $request->price;
        $product->top = $top; // Default to '0' if 'top' field not provided
        $product->save();
        return redirect('view-products');
    }

    public function edit(Request $request)
    {
        $product = Product::find($request->id);
        return view('admin.product.edit_product')->with(['product' => $product]);
    }

    public function update(Request $request)
    {

        $product = Product::find($request->id);
        if(isset($request->top)){
            $top =1;
        }else{
            $top = 0;
        }

        if($request->has('image')){
        $uploadedImage = $request->file('image');

        // Convert the uploaded image to Base64-encoded data
        $base64Image = 'data:' . $uploadedImage->getClientMimeType() . ';base64,' . base64_encode(file_get_contents($uploadedImage->getPathname()));
        $product->image = $base64Image;
    }

        $product->category_id = $request->category_id;
        $product->sub_category_id = $request->sub_category_id;

        $product->name = $request->name;
        $product->price = $request->price;
        $product->top = $top; // Default to '0' if 'top' field not provided
        $product->save();
        return redirect('view-products');
    }

    public function delete($id)
    {
        Product::find($id)->delete();
        return redirect()->back();
    }
}
