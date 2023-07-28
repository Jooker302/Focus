@extends('layouts.user')

@section('title', 'Our Products')

@section('style')
    /* Custom CSS for the Add to Cart button */
    .glass_section .price button {
    background-color: #38C5EB;
    color: #fff;
    border: none;
    padding: 8px 16px;
    border-radius: 20px;
    cursor: pointer;
    transition: background-color 0.3s ease;
    }

    .glass_section .price button:hover {
    background-color: #2b99c1;
    }

@endsection

@section('content')

    <section class="glass_section layout_padding">
        <div class="container">
            @if (session('success'))
                <div class="alert alert-success mt-3">
                    {{ session('success') }}
                </div>
            @endif
            @if (session('error'))
                <div class="alert alert-danger mt-3">
                    {{ session('error') }}
                </div>
            @endif
            <div class="heading_container">
                <h2>
                    <span> Our </span> Glasses
                </h2>
            </div>
            <div class="glass_container">
                @foreach ($product as $pro)
                    <div class="box">
                        <div class="img-box">
                            <img src="{{ $pro->image ?? '' }}" alt="">
                        </div>
                        <div class="price">
                            <h5>
                                {{ $pro->name ?? '' }}
                            </h5>
                            <h6>
                                @php
                                    $category = \App\Models\Category::find($pro->category_id);
                                @endphp
                                ({{ $category->name ?? '' }})
                            </h6>
                            <h6>
                                RS {{ $pro->price ?? '' }}
                            </h6>
                            <form action="{{ url('add-to-cart') }}" method="post">
                                @csrf
                                <input type="hidden" name="product_id" value="{{ $pro->id }}">
                                <button type="submit">Add to Cart</button>
                            </form>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </section>
@endsection
