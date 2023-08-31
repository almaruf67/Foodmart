<!DOCTYPE html>
<html lang="en">

<head>
    <!-- set the encoding of your site -->
    <meta charset="utf-8">
    <!-- set the Compatible of your site -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- set the page title -->
    <title>Brotanical</title>
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
		<header id="header" class="position-relative">
			
			<!-- headerHolder -->
			<div class="headerHolder container pt-lg-5 pb-lg-7 py-4">
				<div class="row">
					<div class="col-6 col-sm-2">
						<!-- mainLogo -->
						<div class="logo">
							<a href="home.html"><img src="{{ asset('assets/images/logo.png') }}" alt="Botanical" class="img-fluid"></a>
						</div>
					</div>
					<div class="col-6 col-sm-7 col-lg-8 static-block">
						<!-- mainHolder -->
						<div class="mainHolder pt-lg-5 pt-3 justify-content-center">
							<!-- pageNav2 -->
							<nav class="navbar navbar-expand-lg navbar-light p-0 pageNav2 position-static">
								<button type="button" class="navbar-toggle collapsed position-relative" data-toggle="collapse" data-target="#navbarNav" aria-expanded="false">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
								<div class="collapse navbar-collapse" id="navbarNav">
									<ul class="navbar-nav mx-auto text-uppercase d-inline-block">
										<li class="nav-item active dropdown">
											<a class="dropdown-toggle d-block" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">home</a>
											<ul class="list-unstyled text-capitalize dropdown-menu mt-0 py-0">
												<li class="d-block mx-0"><a href="home.html">Home 1</a></li>
												<li class="d-block mx-0"><a href="home2.html">Home 2</a></li>
												<li class="d-block mx-0"><a href="home3.html">Home 3</a></li>
											</ul>
										</li>
										<li class="nav-item dropdown">
											<a class="dropdown-toggle d-block" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Store</a>
											<ul class="list-unstyled text-capitalize dropdown-menu mt-0 py-0">
												<li class="d-block mx-0"><a href="shop.html">Shop Left Sidebar</a></li>
												<li class="d-block mx-0"><a href="shop-detail.html">Single Product</a></li>
											</ul>
										</li>
										<li class="nav-item">
											<a class="d-block" href="about-us.html">About</a>
										</li>
										<li class="nav-item dropdown">
											<a class="dropdown-toggle d-block" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Blog</a>
											<ul class="list-unstyled text-capitalize dropdown-menu mt-0 py-0">
												<li class="d-block mx-0"><a href="blog.html">Blog Left Sidebar</a></li>
												<li class="d-block mx-0"><a href="blog-detail.html">Blog Detail</a></li>
											</ul>
										</li>
										<li class="nav-item dropdown">
											<a class="dropdown-toggle d-block" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
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
					<div class="col-sm-3 col-lg-2">
						<!-- wishListII -->
						<ul class="nav nav-tabs wishListII pt-5 justify-content-end border-bottom-0">
							<li class="nav-item ml-0"><a class="nav-link icon-search" href="javascript:void(0);"></a></li>
							<li class="nav-item"><a class="nav-link position-relative icon-cart" href="javascript:void(0);"><span class="num rounded d-block">2</span></a></li>
							<li class="nav-item"><a class="nav-link icon-profile" href="javascript:void(0);"></a></li>
						</ul>
					</div>
				</div>
			</div>
		</header>
        <!-- main -->
        @yield('content')
        <!-- footer -->
        <footer id="footer" class="container-fluid overflow-hidden px-lg-20">
            <div class="copyRightHolder text-center pt-lg-5 pb-lg-4 py-3">
                <p class="mb-0">Coppyright 2019 by <a href="javascript:void(0);">Botanical Store</a> - All right
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
</body>

</html>
