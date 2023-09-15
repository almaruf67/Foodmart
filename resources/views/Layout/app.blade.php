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

<body>
    <!-- pageWrapper -->
    <div id="pageWrapper">
        <!-- header -->
        <header id="header" class="position-fixed bg-white">

            <!-- headerHolder -->
            <div class="headerHolder container pt-lg-2 pb-lg-2 py-2">
                <div class="row">
                    <div class="col-6 col-sm-2">
                        <!-- mainLogo -->
                        <div class="logo">
                            <a href="home.html"><img src="{{ asset('assets/images/logo1.png') }}" alt="Botanical"
                                    class="img-fluid"></a>
                        </div>
                    </div>
                    <div class="col-6 col-sm-7 col-lg-8 static-block">
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

                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                    <div class="col-sm-1 col-lg-2 dropdown">
                        <!-- wishListII -->
                        <ul class="nav nav-tabs wishListII justify-content-end align-items-center pt-2 border-bottom-0">
                            <li class="nav-item ml-0"><a class="nav-link icon-search" href="javascript:void(0);"></a>
                            </li>
                            @guest
                                @if (Route::has('login'))
                                    <li class="nav-item"><a class="btn btnTheme fwEbold text-white sm-round py-2 px-3"
                                            data-toggle="modal" data-target="#Modallogin"
                                            href="{{ route('login') }}">Login</a></li>
                                @endif
                            @else
                                <li class="nav-item"><a class="nav-link position-relative icon-cart"
                                        href="javascript:void(0);"><span class="num rounded d-block">2</span></a></li>
                                <li class="nav-item"><a class="nav-link icon-profile" href="javascript:void(0);"></a>
                                </li>
                                <li class="nav-item"><a id="navbarDropdown" class="dropdown-toggle" type="button"
                                        id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        {{ Auth::user()->name }}
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
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
        {{-- Modal begin --}}
        <div class="modal fade" id="Modallogin" tabindex="-1" role="dialog"
            aria-labelledby="ModalloginModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content booking-form">
                    <div class="d-flex justify-content-center pt-3">

                        <div class="col-9 form-header d-flex justify-content-end">
                            <h2>Feel The Taste</h2>
                        </div>

                        <button type="button" class="col-3 close d-flex justify-content-end pr-3 pt-2"
                            data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>


                    <div class="modal-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group">
                                <span class="form-label">Email</span>
                                <input id="email" class="form-control @error('email') is-invalid @enderror"
                                    type="email" placeholder="Enter your email" name="email"
                                    value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>

                            <div class="form-group">
                                <span class="form-label">Password</span>
                                <input type="password" class="form-control" type="password" id="password"
                                    placeholder="Enter your Password" @error('password') is-invalid @enderror
                                    name="password" required autocomplete="current-password">



                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-btn d-flex justify-content-end">
                                <button type="submit"
                                    class="btn btnTheme btnShop fwEbold text-white rounded-0 py-md-3 w-100 py-2">Log
                                    In</button>
                            </div>

                            <div class="form-group pt-2 remember">
                                <div class="form-check form-switch d-flex justify-content-between">
                                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked"
                                        {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="flexSwitchCheckChecked">Remember Me</label>
                                    @if (Route::has('password.request'))
                                        <a href="{{ route('password.request') }}">Forgot Password ?</a>
                                    @endif
                                </div>

                            </div>

                            <div class="col-12">
                                <div class=" text-center"> <span>OR SIGN IN WITH EMAIL</span>
                                    <hr>
                                </div>

                            </div>
                            <div class="col-12">
                                <div class="d-flex align-items-center gap-3 justify-content-center">
                                    <a href="{{ route('auth.google') }}">
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-google" viewBox="0 0 16 16">
                                            <path
                                                d="M15.545 6.558a9.42 9.42 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.689 7.689 0 0 1 5.352 2.082l-2.284 2.284A4.347 4.347 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.792 4.792 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.702 3.702 0 0 0 1.599-2.431H8v-3.08h7.545z" />
                                        </svg>
                                    </a>
                                    <button type="button" class="btn btn-white text-info"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                                            <path
                                                d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z" />
                                        </svg></button>
                                </div>
                            </div>

                            <div class="d-flex justify-content-center mt-3">
                                <span>Don't have an account? <button style="color: #FF6A3D;"
                                        class="border-0 bg-transparent" data-dismiss="modal" data-toggle="modal"
                                        data-target="#Modalsignup">Sign up</button></span>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>

{{-- For register modal --}}

        <div class="modal fade" id="Modalsignup" tabindex="-1" role="dialog" aria-labelledby="ModalsignupLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content booking-form">
                    <div class="d-flex justify-content-center pt-3">

                        <div class="col-8 form-header d-flex justify-content-end">
                            <h2>Sign Up</h2>
                        </div>

                        <button type="button" class="col-4 close d-flex justify-content-end pr-3 pt-2"
                            data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>


                    <div class="modal-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="form-group">
                                <span class="form-label">Name</span>

                                <input id="inputName" type="text" placeholder="Enter Name"
                                    class="form-control radius-30 ps-5 @error('name') is-invalid @enderror"
                                    name="name" value="{{ old('name') }}" required autocomplete="name"
                                    autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <span class="form-label">Email</span>
                                <input id="email" type="email" placeholder="Email"
                                    class="form-control radius-30 ps-5 @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <span class="form-label">Phone</span>
                                <input class="form-control" type="text" id="phone" name="phone" placeholder="Enter your number">
                            </div>

                            <div class="form-group">
                                <span class="form-label">Password</span>
                                <input id="password" type="password" placeholder="Password"
                                    class="form-control radius-30 ps-5 @error('password') is-invalid @enderror"
                                    name="password" required autocomplete="new-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <span class="form-label">Confirm Password</span>
                                <input id="password-confirm" type="password" placeholder="Confirm Password"
                                    class="form-control radius-30 ps-5" name="password_confirmation" required
                                    autocomplete="new-password">
                            </div>

                            <div class="form-btn d-flex justify-content-end">
                                <button class="btn btnTheme btnShop fwEbold text-white rounded-0 py-md-3 w-100 py-2"
                                    type="submit">Sign Up</button>

                            </div>
                            <div class="d-flex justify-content-center mt-3">
                                <span>Already have an account? <button style="color: #FF6A3D;"
                                        class="border-0 bg-transparent" data-dismiss="modal" data-toggle="modal"
                                        data-target="#Modallogin">Sign In</button></span>
                            </div>
                        </form>
                    </div>



                </div>
            </div>
        </div>
        {{-- Modal end --}}
        <!-- main -->
        @yield('content')
        <!-- footer -->
        <footer id="footer" class="container-fluid overflow-hidden px-lg-20">
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
