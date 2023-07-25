@extends('layouts.admin')

@section('content')

<div class="m-6">

    <div class="flex justify-start m-5">
        <p class="text-2xl font-bold text-cyan-500">Add Product</p>
    </div>

    <div>
        <form class="form" action="{{url('store-product')}}" method="post" enctype="multipart/form-data">
            @csrf
            @php
                $categories = \App\Models\Category::all();
                $subcategories = \App\Models\SubCategory::all();
            @endphp
            <label for="category_id" class="text-black">Category ID</label>
            <select class="form-control col-md-6" name="category_id" id="">
                @foreach ($categories as $c)
                    <option value="{{$c->id}}">{{$c->name}}</option>
                @endforeach
            </select>
            {{-- <input class="form-control col-md-6" type="text" name="category_id" placeholder="Category ID"> --}}

            <label for="sub_category_id" class="text-black">Sub Category ID</label>
            <select class="form-control col-md-6" name="sub_category_id" id="">
                <option value=""></option>
                @foreach ($subcategories as $c)
                    <option value="{{$c->id}}">{{$c->name}}</option>
                @endforeach
            </select>
            {{-- <input class="form-control col-md-6" type="text" name="sub_category_id" placeholder="Sub Category ID"> --}}

            <label for="image" class="text-black">Image</label>
            <input class="form-control col-md-6" type="file" name="image" placeholder="Image URL">

            <label for="name" class="text-black">Name</label>
            <input class="form-control col-md-6" type="text" name="name" placeholder="Name">

            <label for="name" class="text-black">Price</label>
            <input class="form-control col-md-6" type="text" name="price" placeholder="Name">

            <label for="top" class="text-black">Hot Picks</label>
            <input class="form-control col-md-2" type="checkbox" name="top" placeholder="Top (0 or 1)">

            <input type="submit" value="Create" class="mr-4 mt-4 border-2 border-cyan-500 text-black rounded-2xl p-2 hover:text-white hover:bg-cyan-500 hover:border-white ml-0">
        </form>
    </div>

</div>

@endsection
