@extends('layouts.user')

@section('title', 'Cart')

@section('content')

<!-- cart section -->
<section class="cart_section layout_padding">
    <div class="container">
    @if (session('success'))
                <div class="alert alert-success mt-3">
                    {{ session('success') }}
                </div>
            @endif
        <div class="row">
            <div class="col-lg-8">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Product</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Sample data for demonstration purposes -->
                            @php
                                $t = 0;
                            @endphp
                            @foreach ($cart as $carts)
                            @php
                            $product = get_product($carts->product_id);
                            // dd($product,"h");
                            $t = $t + $product->price;
                            @endphp

                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img style="width: 140px; height: 80px;" src="{{ $product->image }}"
                                            alt="">
                                    </div>
                                </td>
                                <td>
                                    {{ $product->name ?? '' }}
                                </td>
                                <td>RS {{ $product->price ?? '' }}</td>
                                <td>
                                    <input type="number" min="1" value="1" style="width: 60px;" oninput="updateTotal(this, {{ $product->price }})">
                                </td>
                                <td>RS <span class="stotal">{{ $product->price ?? '' }}</span></td>
                                <td>
                                    <form action="{{ url('remove-cart') }}" method="post">
                                        @csrf
                                        <input type="hidden" name="id" value="{{ $carts->id }}">
                                        <button type="submit" class="btn btn-sm btn-danger">Remove</button>
                                    </form>
                                </td>
                            </tr>
                            <tr>
                                @endforeach

                                <!-- End of sample data -->
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="cart_totals text-center p-3 rounded" style="background-color: #e1f3fc;">
                    <h4>Cart Totals</h4>
                    {{-- <div class="subtotal">
                        Subtotal: <span id="subtotal">$110</span>
                    </div>
                    <div class="shipping">
                        Shipping: <span>$10</span>
                    </div> --}}
                    <div class="total">
                        Total: RS <span id="total"><b>{{$t}}</b></span>
                    </div>
                    <div class="address mt-3">
                        <label for="address">Address:</label>
                        <input type="text" id="address" name="address" placeholder="Enter your address"
                            class="form-control">
                    </div>
                    <div class="address mt-3">
                        <label for="address">Phone:</label>
                        <input type="text" id="phone" name="phone" placeholder="Enter your Phone #"
                            class="form-control">
                    </div>
                    <div class="payment-method mt-3">
                        <label>Payment Method:</label><br>
                        <div class="form-check">
                            <input type="radio" disabled checked id="cash_on_delivery" name="payment_method" value="cash_on_delivery"
                                class="form-check-input">
                            <label for="cash_on_delivery" class="form-check-label">Cash on Delivery</label><br>
                        </div>
                        {{-- <div class="form-check">
                            <input type="radio" id="jazz_cash" name="payment_method" value="jazz_cash"
                                class="form-check-input">
                            <label for="jazz_cash" class="form-check-label">JazzCash</label><br>
                        </div> --}}
                    </div>
                    <div class="checkout_btn mt-3">
                        <button class="btn btn-primary btn-block" style="background-color: #38C5EB;">Checkout</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end cart section -->

<script>
    function updateTotal(inputElement, price) {
        const quantity = inputElement.value;
        const totalElement = inputElement.parentNode.nextElementSibling.querySelector('.stotal');
        const total = quantity * price;
        totalElement.textContent = total;

        // Calculate and update the grand total
        const grandTotalElement = document.getElementById('total');
        const subtotalElements = document.querySelectorAll('.stotal');
        let subtotal = 0;
        subtotalElements.forEach(element => {
            subtotal += parseInt(element.textContent);
        });
        const shipping = 10; // Assuming fixed shipping cost for demonstration
        const grandTotal = subtotal + shipping;
        grandTotalElement.textContent = grandTotal;
    }
</script>

@endsection
