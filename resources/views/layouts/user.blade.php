<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <!-- Add other meta tags and CSS links here -->
    <meta charset="utf-8" />
    <link rel="icon" type="image/x-icon" href="{{asset('/fav.svg')}}">
    <title>@yield('title', 'Focus')</title>
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.css')}}" />


    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet" />
    <!-- responsive style -->
    <link href="{{asset('css/responsive.css')}}" rel="stylesheet" />

    <!-- Add other CSS links here -->
    <style>
        @yield('style')
    </style>
</head>

<body>


        <!-- header section strats -->
        <header class="header_section">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-lg custom_nav-container pt-3">
                    <a class="navbar-brand mr-5" href="index.html">
                        <span>
                            FOCUS
                        </span>
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <div class="d-flex mr-auto flex-column flex-lg-row align-items-center">
                            <ul class="navbar-nav  ">
                                <li class="nav-item  @if(request()->is('/')) active @endif">
                                    <a class="nav-link" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>

                                </li>
                                <li class="nav-item @if(request()->is('about')) active @endif">
                                    <a class="nav-link" href="{{url('about')}}"> About </a>
                                </li>
                                <li class="nav-item @if(request()->is('product')) active @endif">
                                    <a class="nav-link" href="{{url('product')}}"> Product </a>
                                </li>
                                {{-- <li class="nav-item">
                                    <a class="nav-link" href="glass.html"> Glasses </a>
                                </li> --}}
                                <li class="nav-item @if(request()->is('contactus')) active @endif">
                                    <a class="nav-link" href="{{url('contactus')}}">Contact us</a>
                                </li>
                            </ul>
                        </div>
                        <div class="quote_btn-container ">
                            <a href="{{url('login')}}">
                                Log in
                            </a>
                            {{-- <a href="">
                                <img src="images/cart.png" alt="">
                            </a> --}}
                            {{-- <form class="form-inline">
                                <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
                            </form> --}}
                        </div>
                    </div>
                </nav>
            </div>
        </header>
        <!-- end header section -->


    @yield('content')

    <!-- footer section -->

    <section class="info_section ">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <h6>
                        Subscribe Now
                    </h6>
                    <form action="">
                        <input type="text" placeholder="Enter your email">
                        <div class="d-flex justify-content-end">
                            <button>
                                submit
                            </button>
                        </div>
                    </form>
                </div>
                <div class="col-md-3 offset-md-1">
                    <h6>
                        Links
                    </h6>
                    <ul>
                        <li>
                            <a href="">
                                Lorem ipsum dolor sit
                            </a>
                        </li>
                        <li>
                            <a href="">
                                amet, consectetur adipis
                            </a>
                        </li>
                        <li>
                            <a href="">
                                cing elit, sed do
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h6>
                        Contact us
                    </h6>
                    <ul>
                        <li>
                            <a href="">
                                Lorem ipsum dolor sit
                            </a>
                        </li>
                        <li>
                            <a href="">
                                amet, consectetur adipis
                            </a>
                        </li>
                        <li>
                            <a href="">
                                cing elit, sed do
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- end info section -->


    <!-- footer section -->
    <section class="container-fluid footer_section">
        <p>
            Copyright &copy; <span id="displayYear"></span> All Rights Reserved By
            <a href="https://html.design/">Free Html Templates</a>
        </p>
    </section>
    <!-- footer section -->
    <!-- footer section -->

    <script type="text/javascript" src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/bootstrap.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/custom.js')}}"></script>

</body>

</html>
