@extends('layouts.admin')

@section('content')

<div class="m-6">

    <div class="flex justify-start m-5">
        <p class="text-2xl font-bold text-cyan-500">Add Sub Category</p>
    </div>


    <div>
        <form class="form" class="" action="{{url('store-sub-category')}}" method="post">
            @csrf
            <label for="name" class="text-black">Name</label>
            <input class="form-control col-md-6" type="text" name="name" placeholder="Name">
            <label for="name" class="text-black">Category</label>
            <select class="form-control col-md-6" name="category_id" id="">
                @foreach ($category as $c)
                    <option value="{{$c->id}}">{{$c->name}}</option>
                @endforeach
            </select>
            {{-- <input class="form-control col-md-6" type="text" name="name" placeholder="Name"> --}}
            <input type="submit" value="Create" class="mr-4 mt-4 border-2 border-cyan-500 text-black rounded-2xl p-2 hover:text-white hover:bg-cyan-500 hover:border-white ml-0">
        </form>
    </div>


</div>

@endsection
