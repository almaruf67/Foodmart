<!DOCTYPE html>
<html lang="en">

<head>
    <!-- set the encoding of your site -->
    <meta charset="utf-8">
    <!-- set the Compatible of your site -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- set the page title -->
    <title>Yumzy</title>
    <!-- include the site Google Fonts stylesheet -->
    <link
        href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700%7CRoboto:300,400,500,700,900&display=swap"
        rel="stylesheet">
    <!-- include the site bootstrap stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}"> --}}

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- include the site fontawesome stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.css') }}">
    <!-- include the site stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <!-- include theme plugins setting stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets/css/plugins.css') }}">
    <!-- include theme color setting stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets/css/color.css') }}">
    <!-- include theme responsive setting stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body class="yumzy-df">
    <!-- pageWrapper -->
    <div id="pageWrapper">
        <!-- header -->
        <header id="header" class="position-fixed bg-white">

            <!-- headerHolder -->
            <div class="headerHolder container pt-lg-2 pb-lg-2 py-2">
                <div class="row">
                    <div class="col-6 col-sm-6 col-lg-2">
                        <!-- mainLogo -->
                        <div class="logo">
                            <a href="home.html"><img src="{{ asset('assets/images/logo1.png') }}" alt="Botanical"
                                    class="img-fluid"></a>
                        </div>
                    </div>
                    <div class="col-6 col-sm-6 col-lg-8 static-block">
                        <!-- mainHolder -->
                        <div class="mainHolder pt-lg-5 pt-3 justify-content-center">
                            <!-- pageNav2 -->
                            <nav class="navbar navbar-expand-lg navbar-light p-0 pageNav2 position-static">
                                <button type="button" class="navbar-toggle collapsed position-relative"
                                    data-toggle="collapse" data-target="#navbarNav" aria-expanded="false">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarNav">
                                    <ul class="navbar-nav mx-auto text-uppercase d-inline-block">
                                        <li class="nav-item">
                                            <a class="d-block" href="{{ route('home') }}">Home</a>

                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="dropdown-toggle d-block" role="button" data-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false">Store</a>
                                            <ul class="list-unstyled text-capitalize dropdown-menu mt-0 py-0">
                                                <li class="d-block mx-0"><a href="shop.html">Shop Left Sidebar</a></li>
                                                <li class="d-block mx-0"><a href="shop-detail.html">Single Product</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a class="d-block" href="about-us.html">About</a>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="dropdown-toggle d-block" role="button" data-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false">Blog</a>
                                            <ul class="list-unstyled text-capitalize dropdown-menu mt-0 py-0">
                                                <li class="d-block mx-0"><a href="blog.html">Blog Left Sidebar</a></li>
                                                <li class="d-block mx-0"><a href="blog-detail.html">Blog Detail</a></li>
                                            </ul>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="dropdown-toggle d-block" role="button" data-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false">Pages</a>
                                            <ul class="list-unstyled text-capitalize dropdown-menu mt-0 py-0">
                                                <li class="d-block mx-0"><a href="cart-page.html">Cart Page</a></li>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a class="d-block" href="contact-us.html">contact</a>
                                        </li>

                                        <li class="hide">
                                            <a class="d-block yumzy-or text-white" href="">Sign in</a>
                                        </li>

                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                    <div class="col-sm-1 col-lg-2 dropdown srchLogin">
                        <!-- wishListII -->
                        <ul class="nav nav-tabs wishListII justify-content-end align-items-center pt-2 border-bottom-0">
                            <li class="nav-item ml-0"><a class="nav-link icon-search" href="javascript:void(0);"></a>
                            </li>
                            @guest
                                @if (Route::has('login'))
                                    <li class="nav-item"><a class="btn btnTheme fwEbold text-white xs-round py-2 px-3"
                                            href="{{ route('login') }}">Login</a></li>
                                @endif
                            @else
                                <li class="nav-item"><a class="nav-link position-relative icon-cart"
                                        href="javascript:void(0);"><span class="num rounded d-block">2</span></a></li>
                                @if (Auth::user()->image == null)
                                    <li class="nav-item"><a class="nav-link icon-profile" id="dropdownMenuButton"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                            href="javascript:void(0);"></a>
                                    @else
                                    <li class="nav-item"><a class="nav-link" id="dropdownMenuButton"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                            href="javascript:void(0);"><img src="{{ Auth::user()->image }}"
                                                alt="" width="25px" class="rounded-circle"></a>
                                @endif

                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">{{ Auth::user()->name }}</a>
                                    <a class="dropdown-item" href="#">
                                        Orders
                                    </a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
							   document.getElementById('logout-form').submit();">
                                        LogOut
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        class="d-none">
                                        @csrf
                                    </form>
                                </div>
                                </li>

                            @endguest
                        </ul>
                    </div>
                </div>
            </div>
        </header>
        
    <!-- main -->
    @yield('content')

    <!-- footerHolder -->
    <aside
        class="footerHolder container-fluid overflow-hidden yumzy-df px-xl-20 px-lg-14 pt-xl-12 pb-xl-8 pt-lg-12 pt-md-8 pb-lg-8">
        <div class="d-flex flex-wrap flex-lg-nowrap">
            <div class="coll-1 pr-3 mb-sm-4 mb-3 mb-lg-0">
                <h3 class="headingVI fwEbold text-uppercase mb-7">Contact Us</h3>
                <ul class="list-unstyled footerContactList mb-3">
                    <li class="mb-3 d-flex flex-nowrap"><span class="icon icon-place mr-3"></span>
                        <address class="fwEbold m-0">Address: London Oxford Street, 012 United Kingdom.</address>
                    </li>
                    <li class="mb-3 d-flex flex-nowrap"><span class="icon icon-phone mr-3"></span> <span
                            class="leftAlign">Phone : <a href="javascript:void(0);">(+032) 3456 7890</a></span></li>
                    <li class="email d-flex flex-nowrap"><span class="icon icon-email mr-2"></span> <span
                            class="leftAlign">Email: <a href="javascript:void(0);">Botanicalstore@gmail.com</a></span>
                    </li>
                </ul>
                <ul class="list-unstyled followSocailNetwork d-flex flex-nowrap">
                    <li class="fwEbold mr-xl-11 mr-sm-6 mr-4">Follow us:</li>
                    <li class="mr-xl-6 mr-sm-4 mr-2"><a href="javascript:void(0);" class="fab fa-facebook-f"></a>
                    </li>
                    <li class="mr-xl-6 mr-sm-4 mr-2"><a href="javascript:void(0);" class="fab fa-twitter"></a>
                    </li>
                    <li class="mr-xl-6 mr-sm-4 mr-2"><a href="javascript:void(0);" class="fab fa-pinterest"></a>
                    </li>
                    <li class="mr-2"><a href="javascript:void(0);" class="fab fa-google-plus-g"></a></li>
                </ul>
            </div>
            <div class="coll-2 mb-sm-4 mb-3 mb-lg-0">
                <h3 class="headingVI fwEbold text-uppercase mb-6">Information</h3>
                <ul class="list-unstyled footerNavList">
                    <li class="mb-1"><a href="javascript:void(0);">New Products</a></li>
                    <li class="mb-2"><a href="javascript:void(0);">Top Sellers</a></li>
                    <li class="mb-2"><a href="javascript:void(0);">Our Blog</a></li>
                    <li class="mb-2"><a href="javascript:void(0);">About Our Shop</a></li>
                    <li><a href="javascript:void(0);">Privacy policy</a></li>
                </ul>
            </div>
            <div class="coll-3 mb-sm-4 mb-3 mb-lg-0">
                <h3 class="headingVI fwEbold text-uppercase mb-6">My Account</h3>
                <ul class="list-unstyled footerNavList">
                    <li class="mb-1"><a href="javascript:void(0);">My account</a></li>
                    <li class="mb-2"><a href="javascript:void(0);">Discount</a></li>
                    <li class="mb-2"><a href="javascript:void(0);">Orders history</a></li>
                    <li><a href="javascript:void(0);">Personal information</a></li>
                </ul>
            </div>
            <div class="coll-4 mb-sm-4 mb-3 mb-lg-0">
                <h3 class="headingVI fwEbold text-uppercase mb-7 pl-xl-14 pl-lg-10">Popular Tag</h3>
                <ul class="list-unstyled tagNavList d-flex flex-wrap justify-content-lg-end mb-0">
                    <li class="text-center mb-2 mr-2"><a href="javascript:void(0);"
                            class="md-round d-block py-2 px-2">Trend</a></li>
                    <li class="text-center mb-2"><a href="javascript:void(0);"
                            class="md-round d-block py-2 px-2">Decor</a></li>
                    <li class="text-center mb-2 mr-2"><a href="javascript:void(0);"
                            class="md-round d-block py-2 px-2">Plant</a></li>
                    <li class="text-center mb-2"><a href="javascript:void(0);"
                            class="md-round d-block py-2 px-2">Table tree</a></li>
                    <li class="text-center mb-2 mr-2"><a href="javascript:void(0);"
                            class="md-round d-block py-2 px-2">Bedroom tree</a></li>
                    <li class="text-center mb-2"><a href="javascript:void(0);"
                            class="md-round d-block py-2 px-2">Living room</a></li>
                </ul>
            </div>
        </div>
    </aside>

    <!-- footer -->
    <footer id="footer" class="container-fluid overflow-hidden px-lg-20 bg-white">
        <div class="copyRightHolder text-center pt-lg-5 pb-lg-4 py-3">
            <p class="mb-0">Coppyright 2023 by <a href="javascript:void(0);">Yumzy Food</a> - All right
                reserved</p>
        </div>
    </footer>
    </div>
    <!-- include jQuery library -->
    <script src="{{ asset('assets/js/jquery-3.4.1.min.js') }}"></script>
    <!-- include bootstrap popper JavaScript -->
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <!-- include bootstrap JavaScript -->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <!-- include custom JavaScript -->
    <script src="{{ asset('assets/js/jqueryCustome.js') }}"></script>
    @yield('script')


</body>
<!-- Modal -->

</html>
