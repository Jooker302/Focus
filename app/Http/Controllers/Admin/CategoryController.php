<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $category = Category::all();
        return view('admin.category.view_category')->with(['categorys' => $category]);
    }

    public function add(){
        return view('admin.category.add_category');
    }

    public function store(Request $request){
        $category = new Category();
        $category->name = $request->name;
        $category->save();
        return redirect('view-category');
    }

    public function edit(Request $request){
        $category = Category::find($request->id);
        return view('admin.category.edit_category')->with(['category' => $category]);
    }

    public function update(Request $request){
        $category = Category::find($request->id);
        $category->name = $request->name;
        $category->save();
        return redirect('view-category');
    }

    public function delete($id){
        Category::find($id)->delete();
        return redirect()->back();
    }
}
