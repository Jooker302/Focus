@extends('layouts.user')

@section('title', 'Cart')

@section('content')

<!-- cart section -->
<section class="cart_section layout_padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Product</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Sample data for demonstration purposes -->
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="images/g-1.png" alt="">
                                    </div>
                                </td>
                                <td>
                                    Product 1
                                </td>
                                <td>$50</td>
                                <td>
                                    <input type="number" min="1" value="1" style="width: 60px;">
                                </td>
                                <td>$50</td>
                                <td>
                                    <button class="btn btn-sm btn-danger">Remove</button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="images/g-2.png" alt="">
                                    </div>
                                </td>
                                <td>
                                    Product 2
                                </td>
                                <td>$60</td>
                                <td>
                                    <input type="number" min="1" value="1" style="width: 60px;">
                                </td>
                                <td>$60</td>
                                <td>
                                    <button class="btn btn-sm btn-danger">Remove</button>
                                </td>
                            </tr>
                            <!-- End of sample data -->
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="cart_totals text-center p-3 rounded" style="background-color: #e1f3fc;">
                    <h4>Cart Totals</h4>
                    <div class="subtotal">
                        Subtotal: <span>$110</span>
                    </div>
                    <div class="shipping">
                        Shipping: <span>$10</span>
                    </div>
                    <div class="total">
                        Total: <span>$120</span>
                    </div>
                    <div class="address mt-3">
                        <label for="address">Address:</label>
                        <input type="text" id="address" name="address" placeholder="Enter your address"
                            class="form-control">
                    </div>
                    <div class="payment-method mt-3">
                        <label>Payment Method:</label><br>
                        <div class="form-check">
                            <input type="radio" id="cash_on_delivery" name="payment_method" value="cash_on_delivery"
                                class="form-check-input">
                            <label for="cash_on_delivery" class="form-check-label">Cash on Delivery</label><br>
                        </div>
                        <div class="form-check">
                            <input type="radio" id="jazz_cash" name="payment_method" value="jazz_cash"
                                class="form-check-input">
                            <label for="jazz_cash" class="form-check-label">JazzCash</label><br>
                        </div>
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

@endsection
