@extends('layouts.admin')

@section('content')

<div class="m-6">

    <div class="flex justify-start m-5">
        <p class="text-2xl font-bold text-cyan-500">Update Product</p>
    </div>

    <div>
        <form class="form" action="{{url('update-product')}}" method="post" enctype="multipart/form-data">
            @csrf

            <input type="hidden" name="id" value="{{$product->id}}">
            @php
            $categories = \App\Models\Category::all();
            $subcategories = \App\Models\SubCategory::all();
        @endphp
        <label for="category_id" class="text-black">Category ID</label>
        <select class="form-control col-md-6" name="category_id" id="">
            @foreach ($categories as $c)
                <option value="{{$c->id}} @if($product->category_id == $c->id) selected @endif">{{$c->name}}</option>
            @endforeach
        </select>
        {{-- <input class="form-control col-md-6" type="text" name="category_id" placeholder="Category ID"> --}}

        <label for="sub_category_id" class="text-black">Sub Category ID</label>
        <select class="form-control col-md-6" name="sub_category_id" id="">
            <option value=""></option>
            @foreach ($subcategories as $c)
                <option @if($product->subcategory_id == $c->id) selected @endif value="{{$c->id}}">{{$c->name}}</option>
            @endforeach
        </select>
            <label for="image" class="text-black">Image</label>
            <input class="form-control col-md-6" value="" type="file" name="image" placeholder="Image URL">

            <label for="name" class="text-black">Name</label>
            <input class="form-control col-md-6" value="{{$product->name}}" type="text" name="name" placeholder="Name">

            <label for="top" class="text-black">Top</label>
            {{-- <input class="form-control col-md-6" value="{{$product->top}}" type="text" name="top" placeholder="Top (0 or 1)"> --}}
            <input class="form-control col-md-2" type="checkbox" name="top" @if($product->top == 1) checked @endif placeholder="Top (0 or 1)">


            <input type="submit" value="Update" class="mr-4 mt-4 border-2 border-cyan-500 text-black rounded-2xl p-2 hover:text-white hover:bg-cyan-500 hover:border-white ml-0">
        </form>
    </div>

</div>

@endsection
