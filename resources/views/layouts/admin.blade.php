<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>@yield('title', 'Focus Dashboard')</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- site icon -->
    <link rel="icon" href="{{asset('fav.svg')}}" type="image/png" />
      <!-- bootstrap css -->
      <link rel="stylesheet" href="{{asset('admin/css/bootstrap.min.css')}}" />
      <!-- site css -->
      <link rel="stylesheet" href="{{asset('admin/style.css')}}" />
      <!-- responsive css -->
      <link rel="stylesheet" href="{{asset('admin/css/responsive.css')}}" />
      <!-- color css -->
      {{-- <link rel="stylesheet" href="{{asset('admin/css/colors.css')}}" /> --}}
      <!-- select bootstrap -->
      <link rel="stylesheet" href="{{asset('admin/css/bootstrap-select.css')}}" />
      <!-- scrollbar css -->
      <link rel="stylesheet" href="{{asset('admin/css/perfect-scrollbar.css')}}" />
      <!-- custom css -->
      <link rel="stylesheet" href="{{asset('admin/css/custom.css')}}" />
      <!-- calendar file css -->
      {{-- <link rel="stylesheet" href="{{asset('admin/js/semantic.min.css')}}" /> --}}
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css">

      <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>

      <script src="https://cdn.tailwindcss.com"></script>

      {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}
      {{-- <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script> --}}
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
</head>

<body class="dashboard dashboard_2">
    <div class="full_container">
        <div class="inner_container">
            <!-- Sidebar  -->
            <nav id="sidebar">
                <div class="sidebar_blog_1">
                    <div class="sidebar-header">
                        <div class="logo_section">
                            {{-- <a href="index.html"><img class="logo_icon img-responsive" src="images/logo/logo_icon.png"
                                    alt="#" /></a> --}}
                        </div>
                    </div>
                    <div class="sidebar_user_info">
                        <div class="icon_setting"></div>
                        <div class="user_profle_side">
                            {{-- <div class="user_img"><img class="img-responsive" src="images/layout_img/user_img.jpg"
                                    alt="#" /></div> --}}
                            <div class="user_info">
                                <h6>Admin</h6>
                                <p><span class="online_animation"></span> Online</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sidebar_blog_2">
                    <h4>Focus Dashboard</h4>
                    <ul class="list-unstyled components">
                        <li class="active">
                            <a href="#dashboard"><i
                                    class="fa fa-dashboard yellow_color"></i> <span>Dashboard</span></a>
                            {{-- <ul class="collapse list-unstyled" id="dashboard">
                                <li>
                                    <a href="dashboard.html">> <span>Default Dashboard</span></a>
                                </li>
                                <li>
                                    <a href="dashboard_2.html">> <span>Dashboard style 2</span></a>
                                </li>
                            </ul> --}}
                        </li>
                        <li><a href="widgets.html"><i class="fa fa-clock-o orange_color"></i> <span>Widgets</span></a>
                        </li>

                        <li><a href="{{url('view-category')}}"><i class="fa fa-clock-o orange_color"></i> <span>Category</span></a>
                        </li>

                        <li><a href="{{url('view-sub-category')}}"><i class="fa fa-clock-o orange_color"></i> <span>Sub Category</span></a>
                        </li>

                        <li><a href="{{url('view-products')}}"><i class="fa fa-clock-o orange_color"></i> <span>Product</span></a>
                        </li>



                    </ul>
                </div>
            </nav>
            <!-- end sidebar -->
            <!-- right content -->
            <div id="content">
                <!-- topbar -->
                <div class="topbar">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <div class="full">
                            <button type="button" id="sidebarCollapse" class="sidebar_toggle"><i
                                    class="fa fa-bars"></i></button>
                            <div class="logo_section">
                                <a href="{{url('home')}}"><img class="img-responsive" src="{{asset('main200.png')}}"
                                        alt="#" /><span>Focus Dashboard</span></a>
                            </div>
                            <div class="right_topbar">
                                <div class="icon_info">
                                    {{-- <ul>
                                        <li><a href="#"><i class="fa fa-bell-o"></i><span
                                                    class="badge">2</span></a></li>
                                        <li><a href="#"><i class="fa fa-question-circle"></i></a></li>
                                        <li><a href="#"><i class="fa fa-envelope-o"></i><span
                                                    class="badge">3</span></a></li>
                                    </ul> --}}
                                    <ul class="user_profile_dd">
                                        <li>
                                            <a class="dropdown-toggle" data-toggle="dropdown">
                                                {{-- <img
                                                    class="img-responsive rounded-circle"
                                                    src="images/layout_img/user_img.jpg" alt="#" /> --}}
                                                    <span
                                                    class="name_user">Admin</span></a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="profile.html">My Profile</a>
                                                <a class="dropdown-item" href="settings.html">Settings</a>
                                                <a class="dropdown-item" href="help.html">Help</a>
                                                <form action="{{route('logout')}}" method="post">
                                                    @csrf
                                                <button class="dropdown-item" type="submit"><span style="color: black" class="text-black">Log Out</span> <i
                                                    style="color: black" class="fa fa-sign-out"></i></button>
                                                    </form>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>



                @yield('content')

            </div>
        </div>
    </div>

    {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}
    <script src="{{asset('admin/js/jquery.min.js')}}"></script>
    <script src="{{asset('admin/js/popper.min.js')}}"></script>
    <script src="{{asset('admin/js/bootstrap.min.js')}}"></script>
    <!-- wow animation -->
    <script src="{{asset('admin/js/animate.js')}}"></script>
    <!-- select country -->
    <script src="{{asset('admin/js/bootstrap-select.js')}}"></script>
    <!-- owl carousel -->
    <script src="{{asset('admin/js/owl.carousel.js')}}"></script>
    <!-- chart js -->
    <script src="{{asset('admin/js/Chart.min.js')}}"></script>
    <script src="{{asset('admin/js/Chart.bundle.min.js')}}"></script>
    <script src="{{asset('admin/js/utils.js')}}"></script>
    <script src="{{asset('admin/js/analyser.js')}}"></script>
    <!-- nice scrollbar -->
    <script src="{{asset('admin/js/perfect-scrollbar.min.js')}}"></script>
    <script>
       var ps = new PerfectScrollbar('#sidebar');
    </script>
    <!-- custom js -->
    <script src="{{asset('admin/js/custom.js')}}"></script>
    <script src="{{asset('admin/js/chart_custom_style2.js')}}"></script>
</body>
</html>
