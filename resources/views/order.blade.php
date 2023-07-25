@extends('layouts.user')

@section('title', 'Orders')

@section('content')

<!-- orders section -->
<section class="orders_section layout_padding">
    <div class="container">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>Order ID</th>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Sample data for demonstration purposes -->
                    <tr>
                        <td>#12345</td>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="images/g-1.png" alt="">
                                <span class="ml-2">Product 1</span>
                            </div>
                        </td>
                        <td>$50</td>
                        <td>2</td>
                        <td>$100</td>
                        <td>Delivered</td>
                    </tr>
                    <tr>
                        <td>#12346</td>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="images/g-2.png" alt="">
                                <span class="ml-2">Product 2</span>
                            </div>
                        </td>
                        <td>$60</td>
                        <td>1</td>
                        <td>$60</td>
                        <td>Processing</td>
                    </tr>
                    <!-- End of sample data -->
                </tbody>
            </table>
        </div>
    </div>
</section>
<!-- end orders section -->

@endsection
