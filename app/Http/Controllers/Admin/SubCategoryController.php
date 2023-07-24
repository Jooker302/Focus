<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SubCategoryController extends Controller
{
    public function index(){
        $category = SubCategory::all();
        return view('admin.sub_category.view')->with(['categorys' => $category]);
    }

    public function add(){
        $category = Category::all();
        return view('admin.sub_category.add')->with(['category'=> $category]);
    }

    public function store(Request $request){
        $category = new SubCategory();
        $category->name = $request->name;
        $category->category_id = $request->category_id;
        $category->save();
        return redirect('view-sub-category');
    }

    public function edit(Request $request){
        $category = SubCategory::find($request->id);
        $main = Category::all();
        return view('admin.sub_category.edit')->with(['category' => $category, 'main' => $main]);
    }

    public function update(Request $request){
        $category = SubCategory::find($request->id);
        $category->name = $request->name;
        $category->category_id = $request->category_id;
        $category->save();
        return redirect('view-sub-category');
    }

    public function delete($id){
        SubCategory::find($id)->delete();
        return redirect()->back();
    }
}
