@extends('Layout.app')

@section('content')
    <!-- main -->
    <main style="background-color: #FFFCF7">
        <!-- introBlock -->
        <section class="introBlock position-relative">
            <div class="slick-fade bgCover" style="background-image: url({{ asset('assets/images/bg1.jpg') }});">
                <div>
                    <div class="align w-100 d-flex align-items-top">
                        <!-- holder -->
                        <div class="container position-relative holder pt-xl-10 pt-0">
                            <!-- py-12 pt-lg-30 pb-lg-25 -->
                            <div class="row">
                                <div style="z-index: 1;" class="col-12 col-xl-7">
                                    <div class="txtwrap pr-lg-10">
                                        <h1 class="fwEbold position-relative pb-lg-8 pb-4 mb-xl-7 mb-lg-6">Yumzy!!<span
                                                class="text-break d-block">Feast Your Senses.</span></h1>
                                        <p class="mb-xl-15 mb-lg-10">Buckle up your taste buds-<br>you're about to take a
                                            flavor-filled ride!</p>
                                        <a href="shop.html"
                                            class="btn btnTheme btnShop fwEbold text-white md-round py-md-3 px-md-4 py-2 px-3">Explore
                                            Food <i class="fas fa-arrow-right ml-2"></i></a>
                                    </div>
                                </div>
                                <div class="imgHolder pt-15">
                                    <img style="width: 72%;" src="{{ asset('assets/images/platter1.png') }}"
                                        alt="image description" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="align w-100 d-flex align-items-top">
                        <!-- holder -->
                        <div class="container position-relative holder pt-xl-10 pt-0">
                            <!-- py-12 pt-lg-30 pb-lg-25 -->
                            <div class="row">
                                <div style="z-index: 1;" class="col-12 col-xl-7">
                                    <div class="txtwrap pr-lg-10">
                                        <span
                                            class="title d-block text-uppercase fwEbold position-relative pl-2 mb-lg-5 mb-sm-3 mb-1">wellcome
                                            to yumzy</span>
                                        <h2 class="fwEbold position-relative mb-xl-7 mb-lg-5">Savor the flavors.</h2>
                                        <p class="mb-xl-15 mb-lg-10">Discover a world of taste with a click!</p>
                                        <a href="shop.html"
                                            class="btn btnTheme btnShop fwEbold text-white md-round py-2 px-3 py-md-3 px-md-4">Explore
                                            Food <i class="fas fa-arrow-right ml-2"></i></a>
                                    </div>
                                </div>
                                <div class="imgHolder pt-15">
                                    <img style="width: 72%;" src="{{ asset('assets/images/platter1.png') }}"
                                        alt="image description" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="align w-100 d-flex align-items-top">
                        <!-- holder -->
                        <div class="container position-relative holder pt-xl-10 pt-0">
                            <!-- py-12 pt-lg-30 pb-lg-25 -->
                            <div class="row">
                                <div style="z-index: 1;" class="col-12 col-xl-7">
                                    <div class="txtwrap pr-lg-10">
                                        <span
                                            class="title d-block text-uppercase fwEbold position-relative pl-2 mb-lg-5 mb-sm-3 mb-1">wellcome
                                            to yumzy</span>
                                        <h2 class="fwEbold position-relative mb-xl-7 mb-lg-5">Rapid Refueling</h2>
                                        <p class="mb-xl-15 mb-lg-10">Fuel your appetite with flair - you've just arrived at
                                            the right place.</p>
                                        <a href="shop.html"
                                            class="btn btnTheme btnShop fwEbold text-white md-round py-2 px-3 py-md-3 px-md-4">Explore
                                            Food <i class="fas fa-arrow-right ml-2"></i></a>
                                    </div>
                                </div>
                                <div class="imgHolder pt-15">
                                    <img style="width: 72%;" src="{{ asset('assets/images/platter1.png') }}"
                                        alt="image description" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slickNavigatorsWrap">
                <a href="#" class="slick-prev"><i class="icon-leftarrow"></i></a>
                <a href="#" class="slick-next"><i class="icon-rightarrow"></i></a>
            </div>
        </section>

        <!-- PopularSec -->
        <section
            class="PopulerSec container pt-xl-12 pt-lg-10 pt-md-80 pt-5 pb-xl-10 pb-lg-4 pb-md-2 px-xl-14 px-lg-7">
            <!-- mainHeader -->
            <header class="col-12 mainHeader mb-7 text-center">
                <h1 class="headingIV playfair fwEblod mb-4">Popular Dishes</h1>
                <span class="headerBorder d-block mb-md-5 mb-3"><img src="{{ asset('assets/images/hbdr.png') }}"
                        alt="Header Border" class="img-fluid img-bdr"></span>

            </header>
			<div>
				
			</div>
            <button class="left" onclick="leftScroll()"><i class="fas fa-chevron-left"></i></button>
            <div class="ppDishes row row-cols-2 row-cols-sm-2 row-cols-md-3 row-cols-xl-4 row-cols-xxl-5 ">
                
                <!-- PopularCol1 -->
                <div class="fCol px-3 mb-6">
                    <div class="shadow p-3 mb-5 bg-body rounded">
                        <div class="bb">
                            <div class="imgHolder  w-100 overflow-hidden">
                                <img src="{{ asset('assets/images/burger.jpg') }}" alt="image description"
                                    class="img-fluid w-100">
                            </div>
                        </div>
                        <div class="d-flex justify-content-between text-left py-xl-5 py-sm-4 py-2 px-xl-2 px-1">
                            <span class="d-flex flex-column title d-block"><a href="shop-detail.html">
                                    <h6>Beef Burger</h6>
                                </a>
                                <span class="price fwEbold text-bottom">66.00 $</span>
                            </span>
                            <div class="d-flex justify-content-between align-items-end">

                                <span>
                                    <a href="javascript:void(0);" class="btn btnTheme text-white sm-round py-2 px-2 "><i
                                            class="icon-cart"></i></a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- PopularCol2 -->
                <div class="fCol px-3 mb-6">
                    <div class="shadow p-3 mb-5 bg-body rounded">
                        <div class="bb">
                            <div class="imgHolder  w-100 overflow-hidden">
                                <img src="{{ asset('assets/images/burger.jpg') }}" alt="image description"
                                    class="img-fluid w-100">
                            </div>
                        </div>
                        <div class="d-flex justify-content-between text-left py-xl-5 py-sm-4 py-2 px-xl-2 px-1">
                            <span class="d-flex flex-column title d-block"><a href="shop-detail.html">
                                    <h6>Beef Burger</h6>
                                </a>
                                <span class="price fwEbold text-bottom">66.00 $</span>
                            </span>
                            <div class="d-flex justify-content-between align-items-end">

                                <span>
                                    <a href="javascript:void(0);" class="btn btnTheme text-white sm-round py-2 px-2 "><i
                                            class="icon-cart"></i></a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- PopularCol3 -->
                <div class="fCol px-3 mb-6">
                    <div class="shadow p-3 mb-5 bg-body rounded">
                        <div class="bb">
                            <div class="imgHolder  w-100 overflow-hidden">
                                <img src="{{ asset('assets/images/burger.jpg') }}" alt="image description"
                                    class="img-fluid w-100">
                            </div>
                        </div>
                        <div class="d-flex justify-content-between text-left py-xl-5 py-sm-4 py-2 px-xl-2 px-1">
                            <span class="d-flex flex-column title d-block"><a href="shop-detail.html">
                                    <h6>Beef Burger</h6>
                                </a>
                                <span class="price fwEbold text-bottom">66.00 $</span>
                            </span>
                            <div class="d-flex justify-content-between align-items-end">

                                <span>
                                    <a href="javascript:void(0);" class="btn btnTheme text-white sm-round py-2 px-2 "><i
                                            class="icon-cart"></i></a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- PopularCol4 -->
                <div class="fCol px-3 mb-6">
                    <div class="shadow p-3 mb-5 bg-body rounded">
                        <div class="bb">
                            <div class="imgHolder  w-100 overflow-hidden">
                                <img src="{{ asset('assets/images/burger.jpg') }}" alt="image description"
                                    class="img-fluid w-100">
                            </div>
                        </div>
                        <div class="d-flex justify-content-between text-left py-xl-5 py-sm-4 py-2 px-xl-2 px-1">
                            <span class="d-flex flex-column title d-block"><a href="shop-detail.html">
                                    <h6>Beef Burger</h6>
                                </a>
                                <span class="price fwEbold text-bottom">66.00 $</span>
                            </span>
                            <div class="d-flex justify-content-between align-items-end">

                                <span>
                                    <a href="javascript:void(0);" class="btn btnTheme text-white sm-round py-2 px-2 "><i
                                            class="icon-cart"></i></a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- PopularCol5 -->
                <div class="fCol px-3 mb-6">
                    <div class="shadow p-3 mb-5 bg-body rounded">
                        <div class="bb">
                            <div class="imgHolder  w-100 overflow-hidden">
                                <img src="{{ asset('assets/images/burger.jpg') }}" alt="image description"
                                    class="img-fluid w-100">
                            </div>
                        </div>
                        <div class="d-flex justify-content-between text-left py-xl-5 py-sm-4 py-2 px-xl-2 px-1">
                            <span class="d-flex flex-column title d-block"><a href="shop-detail.html">
                                    <h6>Beef Burger</h6>
                                </a>
                                <span class="price fwEbold text-bottom">66.00 $</span>
                            </span>
                            <div class="d-flex justify-content-between align-items-end">

                                <span>
                                    <a href="javascript:void(0);" class="btn btnTheme text-white sm-round py-2 px-2 "><i
                                            class="icon-cart"></i></a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- PopularCol6 -->
                <div class="fCol px-3 mb-6">
                    <div class="shadow p-3 mb-5 bg-body rounded">
                        <div class="bb">
                            <div class="imgHolder  w-100 overflow-hidden">
                                <img src="{{ asset('assets/images/burger.jpg') }}" alt="image description"
                                    class="img-fluid w-100">
                            </div>
                        </div>
                        <div class="d-flex justify-content-between text-left py-xl-5 py-sm-4 py-2 px-xl-2 px-1">
                            <span class="d-flex flex-column title d-block"><a href="shop-detail.html">
                                    <h6>Beef Burger</h6>
                                </a>
                                <span class="price fwEbold text-bottom">66.00 $</span>
                            </span>
                            <div class="d-flex justify-content-between align-items-end">

                                <span>
                                    <a href="javascript:void(0);" class="btn btnTheme text-white sm-round py-2 px-2 "><i
                                            class="icon-cart"></i></a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- PopularCol7 -->
                <div class="fCol px-3 mb-6">
                    <div class="shadow p-3 mb-5 bg-body rounded">
                        <div class="bb">
                            <div class="imgHolder  w-100 overflow-hidden">
                                <img src="{{ asset('assets/images/burger.jpg') }}" alt="image description"
                                    class="img-fluid w-100">
                            </div>
                        </div>
                        <div class="d-flex justify-content-between text-left py-xl-5 py-sm-4 py-2 px-xl-2 px-1">
                            <span class="d-flex flex-column title d-block"><a href="shop-detail.html">
                                    <h6>Beef Burger</h6>
                                </a>
                                <span class="price fwEbold text-bottom">66.00 $</span>
                            </span>
                            <div class="d-flex justify-content-between align-items-end">

                                <span>
                                    <a href="javascript:void(0);" class="btn btnTheme text-white sm-round py-2 px-2 "><i
                                            class="icon-cart"></i></a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- PopularCol8 -->
                <div class="fCol px-3 mb-6">
                    <div class="shadow p-3 mb-5 bg-body rounded">
                        <div class="bb">
                            <div class="imgHolder  w-100 overflow-hidden">
                                <img src="{{ asset('assets/images/burger.jpg') }}" alt="image description"
                                    class="img-fluid w-100">
                            </div>
                        </div>
                        <div class="d-flex justify-content-between text-left py-xl-5 py-sm-4 py-2 px-xl-2 px-1">
                            <span class="d-flex flex-column title d-block"><a href="shop-detail.html">
                                    <h6>Beef Burger</h6>
                                </a>
                                <span class="price fwEbold text-bottom">66.00 $</span>
                            </span>
                            <div class="d-flex justify-content-between align-items-end">

                                <span>
                                    <a href="javascript:void(0);" class="btn btnTheme text-white sm-round py-2 px-2 "><i
                                            class="icon-cart"></i></a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- PopularCol9 -->
                <div class="fCol px-3 mb-6">
                    <div class="shadow p-3 mb-5 bg-body rounded">
                        <div class="bb">
                            <div class="imgHolder  w-100 overflow-hidden">
                                <img src="{{ asset('assets/images/burger.jpg') }}" alt="image description"
                                    class="img-fluid w-100">
                            </div>
                        </div>
                        <div class="d-flex justify-content-between text-left py-xl-5 py-sm-4 py-2 px-xl-2 px-1">
                            <span class="d-flex flex-column title d-block"><a href="shop-detail.html">
                                    <h6>Beef Burger</h6>
                                </a>
                                <span class="price fwEbold text-bottom">66.00 $</span>
                            </span>
                            <div class="d-flex justify-content-between align-items-end">

                                <span>
                                    <a href="javascript:void(0);" class="btn btnTheme text-white sm-round py-2 px-2 "><i
                                            class="icon-cart"></i></a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="right" onclick="rightScroll()"><i class="fas fa-chevron-right"></i></button>
        </section>

        <!-- chooseUs-sec -->
        <section class="chooseUs-sec container pt-xl-22 pt-lg-20 pt-md-16 pt-10 pb-xl-12 pb-md-7 pb-2">
            <div class="row">
                <div class="col-12 col-lg-6 mb-lg-0 mb-4">
                    <img src="{{ asset('assets/images/chef-banner.jpg') }}" alt="image description" class="img-fluid">
                </div>
                <div class="col-12 col-lg-6 pr-4">
                    <h2 class="headingII fwEbold playfair position-relative mb-6 pb-5">Beyond food orders!</h2>
                    <p class="mb-xl-14 mb-lg-10">Our platform offers more than just food ordering. We provide an enhanced
                        experience that caters to your cravings, making your mealtime not just convenient but truly
                        delightful...<a href="javascript:void(0);" class="btnMore"><i>Learn More</i></a></p>
                    <!-- chooseList -->
                    <ul class="list-unstyled chooseList">
                        <li class="d-flex justify-content-start mb-xl-7 mb-lg-5 mb-3">
                            <img style="width: 10%; height: 10%" src="{{ asset('assets/images/clock.png') }}"
                                alt="image description" class="mr-2">
                            <div class="alignLeft d-flex justify-content-start flex-wrap">
                                <h3 class="headingIII fwEbold mb-2">24/7 Service</h3>
                                <p>There are many variations of passages of lorem ipsum available, but the majority have
                                    suffered alteration in some form.</p>
                            </div>
                        </li>
                        <li class="d-flex justify-content-start mb-xl-6 mb-lg-5 mb-4">
                            <img style="width: 10%; height: 10%" src="{{ asset('assets/images/chef.png') }}"
                                alt="image description" class="mr-2">
                            <div class="alignLeft d-flex justify-content-start flex-wrap">
                                <h3 class="headingIII fwEbold mb-2">Super Chefs'</h3>
                                <p>It is a long established fact that a reader will be distracted by the reable content of a
                                    page.</p>
                            </div>
                        </li>
                        <li class="d-flex justify-content-start">
                            <img style="width: 10%; height: 10%" src="{{ asset('assets/images/stand.png') }}"
                                alt="image description" class="mr-2">
                            <div class="alignLeft d-flex justify-content-start flex-wrap">
                                <h3 class="headingIII fwEbold mb-2">Clean Kitchen</h3>
                                <p>There are many variations of passages of lorem ipsum available, but the majority have
                                    suffered.</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>



        <!-- featureSec -->
        <section
            class="featureSec container overflow-hidden pt-xl-12 pt-lg-10 pt-md-80 pt-5 pb-xl-10 pb-lg-4 pb-md-2 px-xl-5 px-lg-2">
            <!-- mainHeader -->
            <header class="col-12 mainHeader mb-7 text-center">
                <h1 class="headingIV playfair fwEblod mb-4">Regular Menu</h1>
                <span class="headerBorder d-block mb-md-5 mb-3"><img src="{{ asset('assets/images/hbdr.png') }}"
                        alt="Header Border" class="img-fluid img-bdr"></span>
                <div>
                    <div class="btn btnTheme btnShop fwEbold text-white round py-md-3 px-md-4 py-2 px-3"
                        onclick="showDiv('desert')">Dessert</div>
                    <div class="btn btnTheme btnShop fwEbold text-white round py-md-3 px-md-4 py-2 px-3"
                        onclick="showDiv('pizza')">Pizza</div>
                    <div class="btn btnTheme btnShop fwEbold text-white round py-md-3 px-md-4 py-2 px-3"
                        onclick="showDiv('burger')">Burger</div>
                    <div class="btn btnTheme btnShop fwEbold text-white round py-md-3 px-md-4 py-2 px-3"
                        onclick="showDiv('drinks')">Drinks</div>
                </div>

            </header>
            <!-- Dessert -->
            <div id="desert" style="display:none;">
                <div class="col-12 p-0  d-flex flex-wrap">
                    <!-- featureCol1 -->
                    <div class="featureCol px-3 mb-6">
                        <div class="shadow p-3 mb-5 bg-body rounded">
                            <div class="bb position-relative">
                                <div class="imgHolder position-relative w-100 overflow-hidden">
                                    <img src="{{ asset('assets/images/burger.jpg') }}" alt="image description"
                                        class="img-fluid w-100">
                                </div>
                                <div class="overlay text-left overflow-hidden">
                                    <h4>Ingredients</h4>
                                    <span>½ tbsp olive oil</span>
                                    <span>1 onion, peeled and finely chopped</span>
                                    <span>1 tsp mixed dried herbs</span>
                                    <span>1 egg, beaten</span>
                                    <span> 4 slices mature Cheddar (optional)</span>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between text-left py-xl-5 py-sm-4 py-2 px-xl-2 px-1">
                                <span class="d-flex flex-column title d-block"><a href="shop-detail.html">
                                        <h6>Beef Burger</h6>
                                    </a>
                                    <span class="price fwEbold text-bottom">66.00 $</span>
                                </span>
                                <div class="d-flex justify-content-between align-items-end">
    
                                    <span>
                                        <a href="javascript:void(0);" class="btn btnTheme text-white sm-round py-2 px-2 "><i
                                                class="icon-cart"></i></a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- featureCol2 -->
                    <div class="featureCol px-3 mb-6">
                        <div class="shadow p-3 mb-5 bg-body rounded">
                            <div class="bb position-relative">
                                <div class="imgHolder position-relative w-100 overflow-hidden">
                                    <img src="{{ asset('assets/images/burger.jpg') }}" alt="image description"
                                        class="img-fluid w-100">
                                </div>
                                <div class="overlay text-left overflow-hidden">
                                    <h4>Ingredients</h4>
                                    <span>½ tbsp olive oil</span>
                                    <span>1 onion, peeled and finely chopped</span>
                                    <span>1 tsp mixed dried herbs</span>
                                    <span>1 egg, beaten</span>
                                    <span> 4 slices mature Cheddar (optional)</span>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between text-left py-xl-5 py-sm-4 py-2 px-xl-2 px-1">
                                <span class="d-flex flex-column title d-block"><a href="shop-detail.html">
                                        <h6>Beef Burger</h6>
                                    </a>
                                    <span class="price fwEbold text-bottom">66.00 $</span>
                                </span>
                                <div class="d-flex justify-content-between align-items-end">
    
                                    <span>
                                        <a href="javascript:void(0);" class="btn btnTheme text-white sm-round py-2 px-2 "><i
                                                class="icon-cart"></i></a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- featureCol3 -->
                    <div class="featureCol px-3 mb-6">
                        <div class="shadow p-3 mb-5 bg-body rounded">
                            <div class="bb position-relative">
                                <div class="imgHolder position-relative w-100 overflow-hidden">
                                    <img src="{{ asset('assets/images/burger.jpg') }}" alt="image description"
                                        class="img-fluid w-100">
                                </div>
                                <div class="overlay text-left overflow-hidden">
                                    <h4>Ingredients</h4>
                                    <span>½ tbsp olive oil</span>
                                    <span>1 onion, peeled and finely chopped</span>
                                    <span>1 tsp mixed dried herbs</span>
                                    <span>1 egg, beaten</span>
                                    <span> 4 slices mature Cheddar (optional)</span>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between text-left py-xl-5 py-sm-4 py-2 px-xl-2 px-1">
                                <span class="d-flex flex-column title d-block"><a href="shop-detail.html">
                                        <h6>Beef Burger</h6>
                                    </a>
                                    <span class="price fwEbold text-bottom">66.00 $</span>
                                </span>
                                <div class="d-flex justify-content-between align-items-end">
    
                                    <span>
                                        <a href="javascript:void(0);" class="btn btnTheme text-white sm-round py-2 px-2 "><i
                                                class="icon-cart"></i></a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- featureCol4 -->
                    <div class="featureCol px-3 mb-6">
                        <div class="shadow p-3 mb-5 bg-body rounded">
                            <div class="bb position-relative">
                                <div class="imgHolder position-relative w-100 overflow-hidden">
                                    <img src="{{ asset('assets/images/burger.jpg') }}" alt="image description"
                                        class="img-fluid w-100">
                                </div>
                                <div class="overlay text-left overflow-hidden">
                                    <h4>Ingredients</h4>
                                    <span>½ tbsp olive oil</span>
                                    <span>1 onion, peeled and finely chopped</span>
                                    <span>1 tsp mixed dried herbs</span>
                                    <span>1 egg, beaten</span>
                                    <span> 4 slices mature Cheddar (optional)</span>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between text-left py-xl-5 py-sm-4 py-2 px-xl-2 px-1">
                                <span class="d-flex flex-column title d-block"><a href="shop-detail.html">
                                        <h6>Beef Burger</h6>
                                    </a>
                                    <span class="price fwEbold text-bottom">66.00 $</span>
                                </span>
                                <div class="d-flex justify-content-between align-items-end">
    
                                    <span>
                                        <a href="javascript:void(0);" class="btn btnTheme text-white sm-round py-2 px-2 "><i
                                                class="icon-cart"></i></a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- featureCol5 -->
                    <div class="featureCol px-3 mb-6">
                        <div class="shadow p-3 mb-5 bg-body rounded">
                            <div class="bb position-relative">
                                <div class="imgHolder position-relative w-100 overflow-hidden">
                                    <img src="{{ asset('assets/images/burger.jpg') }}" alt="image description"
                                        class="img-fluid w-100">
                                </div>
                                <div class="overlay text-left overflow-hidden">
                                    <h4>Ingredients</h4>
                                    <span>½ tbsp olive oil</span>
                                    <span>1 onion, peeled and finely chopped</span>
                                    <span>1 tsp mixed dried herbs</span>
                                    <span>1 egg, beaten</span>
                                    <span> 4 slices mature Cheddar (optional)</span>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between text-left py-xl-5 py-sm-4 py-2 px-xl-2 px-1">
                                <span class="d-flex flex-column title d-block"><a href="shop-detail.html">
                                        <h6>Beef Burger</h6>
                                    </a>
                                    <span class="price fwEbold text-bottom">66.00 $</span>
                                </span>
                                <div class="d-flex justify-content-between align-items-end">
    
                                    <span>
                                        <a href="javascript:void(0);" class="btn btnTheme text-white sm-round py-2 px-2 "><i
                                                class="icon-cart"></i></a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Pizza -->
            <div id="pizza" style="display:none;">
                <div class="col-12 p-0  d-flex flex-wrap">
                    <!-- featureCol1 -->
                    <div class="featureCol px-3 mb-6">
                        <div class="shadow p-3 mb-5 bg-body rounded">
                            <div class="bb position-relative">
                                <div class="imgHolder position-relative w-100 overflow-hidden">
                                    <img src="{{ asset('assets/images/burger.jpg') }}" alt="image description"
                                        class="img-fluid w-100">
                                </div>
                                <div class="overlay text-left overflow-hidden">
                                    <h4>Ingredients</h4>
                                    <span>½ tbsp olive oil</span>
                                    <span>1 onion, peeled and finely chopped</span>
                                    <span>1 tsp mixed dried herbs</span>
                                    <span>1 egg, beaten</span>
                                    <span> 4 slices mature Cheddar (optional)</span>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between text-left py-xl-5 py-sm-4 py-2 px-xl-2 px-1">
                                <span class="d-flex flex-column title d-block"><a href="shop-detail.html">
                                        <h6>Beef Burger</h6>
                                    </a>
                                    <span class="price fwEbold text-bottom">66.00 $</span>
                                </span>
                                <div class="d-flex justify-content-between align-items-end">
    
                                    <span>
                                        <a href="javascript:void(0);" class="btn btnTheme text-white sm-round py-2 px-2 "><i
                                                class="icon-cart"></i></a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- featureCol2 -->
                    <div class="featureCol px-3 mb-6">
                        <div class="shadow p-3 mb-5 bg-body rounded">
                            <div class="bb position-relative">
                                <div class="imgHolder position-relative w-100 overflow-hidden">
                                    <img src="{{ asset('assets/images/burger.jpg') }}" alt="image description"
                                        class="img-fluid w-100">
                                </div>
                                <div class="overlay text-left overflow-hidden">
                                    <h4>Ingredients</h4>
                                    <span>½ tbsp olive oil</span>
                                    <span>1 onion, peeled and finely chopped</span>
                                    <span>1 tsp mixed dried herbs</span>
                                    <span>1 egg, beaten</span>
                                    <span> 4 slices mature Cheddar (optional)</span>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between text-left py-xl-5 py-sm-4 py-2 px-xl-2 px-1">
                                <span class="d-flex flex-column title d-block"><a href="shop-detail.html">
                                        <h6>Beef Burger</h6>
                                    </a>
                                    <span class="price fwEbold text-bottom">66.00 $</span>
                                </span>
                                <div class="d-flex justify-content-between align-items-end">
    
                                    <span>
                                        <a href="javascript:void(0);" class="btn btnTheme text-white sm-round py-2 px-2 "><i
                                                class="icon-cart"></i></a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- featureCol3 -->
                    <div class="featureCol px-3 mb-6">
                        <div class="shadow p-3 mb-5 bg-body rounded">
                            <div class="bb position-relative">
                                <div class="imgHolder position-relative w-100 overflow-hidden">
                                    <img src="{{ asset('assets/images/burger.jpg') }}" alt="image description"
                                        class="img-fluid w-100">
                                </div>
                                <div class="overlay text-left overflow-hidden">
                                    <h4>Ingredients</h4>
                                    <span>½ tbsp olive oil</span>
                                    <span>1 onion, peeled and finely chopped</span>
                                    <span>1 tsp mixed dried herbs</span>
                                    <span>1 egg, beaten</span>
                                    <span> 4 slices mature Cheddar (optional)</span>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between text-left py-xl-5 py-sm-4 py-2 px-xl-2 px-1">
                                <span class="d-flex flex-column title d-block"><a href="shop-detail.html">
                                        <h6>Beef Burger</h6>
                                    </a>
                                    <span class="price fwEbold text-bottom">66.00 $</span>
                                </span>
                                <div class="d-flex justify-content-between align-items-end">
    
                                    <span>
                                        <a href="javascript:void(0);" class="btn btnTheme text-white sm-round py-2 px-2 "><i
                                                class="icon-cart"></i></a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- featureCol4 -->
                    <div class="featureCol px-3 mb-6">
                        <div class="shadow p-3 mb-5 bg-body rounded">
                            <div class="bb position-relative">
                                <div class="imgHolder position-relative w-100 overflow-hidden">
                                    <img src="{{ asset('assets/images/burger.jpg') }}" alt="image description"
                                        class="img-fluid w-100">
                                </div>
                                <div class="overlay text-left overflow-hidden">
                                    <h4>Ingredients</h4>
                                    <span>½ tbsp olive oil</span>
                                    <span>1 onion, peeled and finely chopped</span>
                                    <span>1 tsp mixed dried herbs</span>
                                    <span>1 egg, beaten</span>
                                    <span> 4 slices mature Cheddar (optional)</span>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between text-left py-xl-5 py-sm-4 py-2 px-xl-2 px-1">
                                <span class="d-flex flex-column title d-block"><a href="shop-detail.html">
                                        <h6>Beef Burger</h6>
                                    </a>
                                    <span class="price fwEbold text-bottom">66.00 $</span>
                                </span>
                                <div class="d-flex justify-content-between align-items-end">
    
                                    <span>
                                        <a href="javascript:void(0);" class="btn btnTheme text-white sm-round py-2 px-2 "><i
                                                class="icon-cart"></i></a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Burger -->
            <div id="burger" style="display:none;">
                <div class="col-12 p-0  d-flex flex-wrap">
                    <!-- featureCol1 -->
                    <div class="featureCol px-3 mb-6">
                        <div class="shadow p-3 mb-5 bg-body rounded">
                            <div class="bb position-relative">
                                <div class="imgHolder position-relative w-100 overflow-hidden">
                                    <img src="{{ asset('assets/images/burger.jpg') }}" alt="image description"
                                        class="img-fluid w-100">
                                </div>
                                <div class="overlay text-left overflow-hidden">
                                    <h4>Ingredients</h4>
                                    <span>½ tbsp olive oil</span>
                                    <span>1 onion, peeled and finely chopped</span>
                                    <span>1 tsp mixed dried herbs</span>
                                    <span>1 egg, beaten</span>
                                    <span> 4 slices mature Cheddar (optional)</span>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between text-left py-xl-5 py-sm-4 py-2 px-xl-2 px-1">
                                <span class="d-flex flex-column title d-block"><a href="shop-detail.html">
                                        <h6>Beef Burger</h6>
                                    </a>
                                    <span class="price fwEbold text-bottom">66.00 $</span>
                                </span>
                                <div class="d-flex justify-content-between align-items-end">
    
                                    <span>
                                        <a href="javascript:void(0);" class="btn btnTheme text-white sm-round py-2 px-2 "><i
                                                class="icon-cart"></i></a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- featureCol2 -->
                    <div class="featureCol px-3 mb-6">
                        <div class="shadow p-3 mb-5 bg-body rounded">
                            <div class="bb position-relative">
                                <div class="imgHolder position-relative w-100 overflow-hidden">
                                    <img src="{{ asset('assets/images/burger.jpg') }}" alt="image description"
                                        class="img-fluid w-100">
                                </div>
                                <div class="overlay text-left overflow-hidden">
                                    <h4>Ingredients</h4>
                                    <span>½ tbsp olive oil</span>
                                    <span>1 onion, peeled and finely chopped</span>
                                    <span>1 tsp mixed dried herbs</span>
                                    <span>1 egg, beaten</span>
                                    <span> 4 slices mature Cheddar (optional)</span>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between text-left py-xl-5 py-sm-4 py-2 px-xl-2 px-1">
                                <span class="d-flex flex-column title d-block"><a href="shop-detail.html">
                                        <h6>Beef Burger</h6>
                                    </a>
                                    <span class="price fwEbold text-bottom">66.00 $</span>
                                </span>
                                <div class="d-flex justify-content-between align-items-end">
    
                                    <span>
                                        <a href="javascript:void(0);" class="btn btnTheme text-white sm-round py-2 px-2 "><i
                                                class="icon-cart"></i></a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- featureCol3 -->
                    <div class="featureCol px-3 mb-6">
                        <div class="shadow p-3 mb-5 bg-body rounded">
                            <div class="bb position-relative">
                                <div class="imgHolder position-relative w-100 overflow-hidden">
                                    <img src="{{ asset('assets/images/burger.jpg') }}" alt="image description"
                                        class="img-fluid w-100">
                                </div>
                                <div class="overlay text-left overflow-hidden">
                                    <h4>Ingredients</h4>
                                    <span>½ tbsp olive oil</span>
                                    <span>1 onion, peeled and finely chopped</span>
                                    <span>1 tsp mixed dried herbs</span>
                                    <span>1 egg, beaten</span>
                                    <span> 4 slices mature Cheddar (optional)</span>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between text-left py-xl-5 py-sm-4 py-2 px-xl-2 px-1">
                                <span class="d-flex flex-column title d-block"><a href="shop-detail.html">
                                        <h6>Beef Burger</h6>
                                    </a>
                                    <span class="price fwEbold text-bottom">66.00 $</span>
                                </span>
                                <div class="d-flex justify-content-between align-items-end">
    
                                    <span>
                                        <a href="javascript:void(0);" class="btn btnTheme text-white sm-round py-2 px-2 "><i
                                                class="icon-cart"></i></a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- featureCol4 -->
                    <div class="featureCol px-3 mb-6">
                        <div class="shadow p-3 mb-5 bg-body rounded">
                            <div class="bb position-relative">
                                <div class="imgHolder position-relative w-100 overflow-hidden">
                                    <img src="{{ asset('assets/images/burger.jpg') }}" alt="image description"
                                        class="img-fluid w-100">
                                </div>
                                <div class="overlay text-left overflow-hidden">
                                    <h4>Ingredients</h4>
                                    <span>½ tbsp olive oil</span>
                                    <span>1 onion, peeled and finely chopped</span>
                                    <span>1 tsp mixed dried herbs</span>
                                    <span>1 egg, beaten</span>
                                    <span> 4 slices mature Cheddar (optional)</span>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between text-left py-xl-5 py-sm-4 py-2 px-xl-2 px-1">
                                <span class="d-flex flex-column title d-block"><a href="shop-detail.html">
                                        <h6>Beef Burger</h6>
                                    </a>
                                    <span class="price fwEbold text-bottom">66.00 $</span>
                                </span>
                                <div class="d-flex justify-content-between align-items-end">
    
                                    <span>
                                        <a href="javascript:void(0);" class="btn btnTheme text-white sm-round py-2 px-2 "><i
                                                class="icon-cart"></i></a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- featureCol5 -->
                    <div class="featureCol px-3 mb-6">
                        <div class="shadow p-3 mb-5 bg-body rounded">
                            <div class="bb position-relative">
                                <div class="imgHolder position-relative w-100 overflow-hidden">
                                    <img src="{{ asset('assets/images/burger.jpg') }}" alt="image description"
                                        class="img-fluid w-100">
                                </div>
                                <div class="overlay text-left overflow-hidden">
                                    <h4>Ingredients</h4>
                                    <span>½ tbsp olive oil</span>
                                    <span>1 onion, peeled and finely chopped</span>
                                    <span>1 tsp mixed dried herbs</span>
                                    <span>1 egg, beaten</span>
                                    <span> 4 slices mature Cheddar (optional)</span>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between text-left py-xl-5 py-sm-4 py-2 px-xl-2 px-1">
                                <span class="d-flex flex-column title d-block"><a href="shop-detail.html">
                                        <h6>Beef Burger</h6>
                                    </a>
                                    <span class="price fwEbold text-bottom">66.00 $</span>
                                </span>
                                <div class="d-flex justify-content-between align-items-end">
    
                                    <span>
                                        <a href="javascript:void(0);" class="btn btnTheme text-white sm-round py-2 px-2 "><i
                                                class="icon-cart"></i></a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Drinks -->
            <div id="drinks" style="display:none;">
                <div class="col-12 p-0  d-flex flex-wrap">
                    <!-- featureCol1 -->
                    <div class="featureCol px-3 mb-6">
                        <div class="shadow p-3 mb-5 bg-body rounded">
                            <div class="bb position-relative">
                                <div class="imgHolder position-relative w-100 overflow-hidden">
                                    <img src="{{ asset('assets/images/burger.jpg') }}" alt="image description"
                                        class="img-fluid w-100">
                                </div>
                                <div class="overlay text-left overflow-hidden">
                                    <h4>Ingredients</h4>
                                    <span>½ tbsp olive oil</span>
                                    <span>1 onion, peeled and finely chopped</span>
                                    <span>1 tsp mixed dried herbs</span>
                                    <span>1 egg, beaten</span>
                                    <span> 4 slices mature Cheddar (optional)</span>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between text-left py-xl-5 py-sm-4 py-2 px-xl-2 px-1">
                                <span class="d-flex flex-column title d-block"><a href="shop-detail.html">
                                        <h6>Beef Burger</h6>
                                    </a>
                                    <span class="price fwEbold text-bottom">66.00 $</span>
                                </span>
                                <div class="d-flex justify-content-between align-items-end">
    
                                    <span>
                                        <a href="javascript:void(0);" class="btn btnTheme text-white sm-round py-2 px-2 "><i
                                                class="icon-cart"></i></a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- featureCol2 -->
                    <div class="featureCol px-3 mb-6">
                        <div class="shadow p-3 mb-5 bg-body rounded">
                            <div class="bb position-relative">
                                <div class="imgHolder position-relative w-100 overflow-hidden">
                                    <img src="{{ asset('assets/images/burger.jpg') }}" alt="image description"
                                        class="img-fluid w-100">
                                </div>
                                <div class="overlay text-left overflow-hidden">
                                    <h4>Ingredients</h4>
                                    <span>½ tbsp olive oil</span>
                                    <span>1 onion, peeled and finely chopped</span>
                                    <span>1 tsp mixed dried herbs</span>
                                    <span>1 egg, beaten</span>
                                    <span> 4 slices mature Cheddar (optional)</span>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between text-left py-xl-5 py-sm-4 py-2 px-xl-2 px-1">
                                <span class="d-flex flex-column title d-block"><a href="shop-detail.html">
                                        <h6>Beef Burger</h6>
                                    </a>
                                    <span class="price fwEbold text-bottom">66.00 $</span>
                                </span>
                                <div class="d-flex justify-content-between align-items-end">
    
                                    <span>
                                        <a href="javascript:void(0);" class="btn btnTheme text-white sm-round py-2 px-2 "><i
                                                class="icon-cart"></i></a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- featureCol3 -->
                    <div class="featureCol px-3 mb-6">
                        <div class="shadow p-3 mb-5 bg-body rounded">
                            <div class="bb position-relative">
                                <div class="imgHolder position-relative w-100 overflow-hidden">
                                    <img src="{{ asset('assets/images/burger.jpg') }}" alt="image description"
                                        class="img-fluid w-100">
                                </div>
                                <div class="overlay text-left overflow-hidden">
                                    <h4>Ingredients</h4>
                                    <span>½ tbsp olive oil</span>
                                    <span>1 onion, peeled and finely chopped</span>
                                    <span>1 tsp mixed dried herbs</span>
                                    <span>1 egg, beaten</span>
                                    <span> 4 slices mature Cheddar (optional)</span>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between text-left py-xl-5 py-sm-4 py-2 px-xl-2 px-1">
                                <span class="d-flex flex-column title d-block"><a href="shop-detail.html">
                                        <h6>Beef Burger</h6>
                                    </a>
                                    <span class="price fwEbold text-bottom">66.00 $</span>
                                </span>
                                <div class="d-flex justify-content-between align-items-end">
    
                                    <span>
                                        <a href="javascript:void(0);" class="btn btnTheme text-white sm-round py-2 px-2 "><i
                                                class="icon-cart"></i></a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            

            </div>
        </section>


        <!-- contactListBlock -->
        <div
            class="contactListBlock container overflow-hidden pt-xl-8 pt-lg-10 pt-md-8 pt-4 pb-xl-12 pb-lg-10 pb-md-4 pb-1">
            <div class="row">
                <div class="col-12 col-sm-6 col-lg-3 mb-4 mb-lg-0">
                    <!-- contactListColumn -->
                    <div class="contactListColumn border overflow-hidden py-xl-5 py-md-3 py-2 px-xl-6 px-md-3 px-3 d-flex">
                        <span class="icon icon-van"></span>
                        <div class="alignLeft pl-2">
                            <strong class="headingV fwEbold d-block mb-1">Free shipping order</strong>
                            <p class="m-0">On orders over $100</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3 mb-4 mb-lg-0">
                    <!-- contactListColumn -->
                    <div class="contactListColumn border overflow-hidden py-xl-5 py-md-3 py-2 px-xl-6 px-md-3 px-3 d-flex">
                        <span class="icon icon-gift"></span>
                        <div class="alignLeft pl-2">
                            <strong class="headingV fwEbold d-block mb-1">Special gift card</strong>
                            <p class="m-0">The perfect gift idea</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3 mb-4 mb-lg-0">
                    <!-- contactListColumn -->
                    <div class="contactListColumn border overflow-hidden py-xl-5 py-md-3 py-2 px-xl-4 px-md-2 px-3 d-flex">
                        <span class="icon icon-recycle"></span>
                        <div class="alignLeft pl-2">
                            <strong class="headingV fwEbold d-block mb-1">Return &amp; exchange</strong>
                            <p class="m-0">Free return within 3 days</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3 mb-4 mb-lg-0">
                    <!-- contactListColumn -->
                    <div class="contactListColumn border overflow-hidden py-xl-5 py-md-3 py-2 px-xl-6 px-md-3 px-3 d-flex">
                        <span class="icon icon-call"></span>
                        <div class="alignLeft pl-2">
                            <strong class="headingV fwEbold d-block mb-1">Support 24 / 7</strong>
                            <p class="m-0">Customer support</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- productOfferSec -->
        <div class="productOfferSec container overflow-hidden py-xl-12 py-lg-10 py-md-8 py-5">
            <div class="row">
                <div class="col-12 col-sm-6 mb-sm-0 mb-2">
                    <a href="shop.html" class="w-100"><img src="http://placehold.it/570x350" alt="image description"
                            class="img-fluid"></a>
                </div>
                <div class="col-12 col-sm-6">
                    <a href="shop.html" class="w-100"><img src="http://placehold.it/570x350" alt="image description"
                            class="img-fluid"></a>
                </div>
            </div>
        </div>
        <!-- dealSecHolder -->
        <section class="dealSecHolder container-fluid overflow-hidden py-xl-12 py-lg-10 py-md-8 py-5">
            <!-- mainHeader -->
            <header class="col-12 mainHeader mb-7 text-center">
                <h1 class="headingIV playfair fwEblod mb-5">Daily Deal</h1>
                <span class="headerBorder d-block mb-md-5 mb-3"><img src="{{ asset('assets/images/hbdr.png') }}"
                        alt="Header Border" class="img-fluid img-bdr"></span>
                <p class="mb-6">There are many variations of passages of lorem ipsum available.</p>
                <div id="defaultCountdown" class="comming-timer"></div>
            </header>
            <!-- dealSlider -->
            <div class="dealSlider w-100 px-lg-10 px-md-5">
                <div>
                    <!-- featureCol -->
                    <div class="featureCol position-relative w-100 px-3 mb-sm-8 mb-6">
                        <div class="shadow p-3 mb-5 bg-body rounded">
                            <div class="imgHolder position-relative w-100 overflow-hidden">
                                <img src="http://placehold.it/320x355" alt="image description" class="img-fluid w-100">
                                <ul class="list-unstyled postHoverLinskList d-flex justify-content-center m-0">
                                    <li class="mr-2 overflow-hidden"><a href="javascript:void(0);"
                                            class="icon-heart d-block"></a></li>
                                    <li class="mr-2 overflow-hidden"><a href="javascript:void(0);"
                                            class="icon-cart d-block"></a></li>
                                    <li class="mr-2 overflow-hidden"><a href="javascript:void(0);"
                                            class="icon-eye d-block"></a></li>
                                    <li class="overflow-hidden"><a href="javascript:void(0);"
                                            class="icon-arrow d-block"></a></li>
                                </ul>
                            </div>
                            <div class="text-center py-5 px-2">
                                <span class="title d-block mb-2"><a href="shop-detail.html">Sint Incidunt
                                        Utlabore</a></span>
                                <span class="price d-block fwEbold"><del>75.00 $</del>60.50 $</span>
                                <span
                                    class="hotOffer fwEbold text-uppercase text-white position-absolute d-block">HOT</span>
                                <span
                                    class="hotOffer green fwEbold text-uppercase text-white position-absolute d-block">Sale</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <!-- featureCol -->
                    <div class="featureCol px-3 w-100 mb-sm-8 mb-6">
                        <div class="shadow p-3 mb-5 bg-body rounded">
                            <div class="imgHolder position-relative w-100 overflow-hidden">
                                <img src="http://placehold.it/320x355" alt="image description" class="img-fluid w-100">
                                <ul class="list-unstyled postHoverLinskList d-flex justify-content-center m-0">
                                    <li class="mr-2 overflow-hidden"><a href="javascript:void(0);"
                                            class="icon-heart d-block"></a></li>
                                    <li class="mr-2 overflow-hidden"><a href="javascript:void(0);"
                                            class="icon-cart d-block"></a></li>
                                    <li class="mr-2 overflow-hidden"><a href="javascript:void(0);"
                                            class="icon-eye d-block"></a></li>
                                    <li class="overflow-hidden"><a href="javascript:void(0);"
                                            class="icon-arrow d-block"></a></li>
                                </ul>
                            </div>
                            <div class="text-center py-5 px-2">
                                <span class="title d-block mb-2"><a href="shop-detail.html">Aliquam Quaerat
                                        Voluptem</a></span>
                                <span class="price d-block fwEbold">58.00 $</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <!-- featureCol -->
                    <div class="featureCol position-relative w-100 px-3 mb-sm-8 mb-6">
                        <div class="shadow p-3 mb-5 bg-body rounded">
                            <div class="imgHolder position-relative w-100 overflow-hidden">
                                <img src="http://placehold.it/320x355" alt="image description" class="img-fluid w-100">
                                <ul class="list-unstyled postHoverLinskList d-flex justify-content-center m-0">
                                    <li class="mr-2 overflow-hidden"><a href="javascript:void(0);"
                                            class="icon-heart d-block"></a></li>
                                    <li class="mr-2 overflow-hidden"><a href="javascript:void(0);"
                                            class="icon-cart d-block"></a></li>
                                    <li class="mr-2 overflow-hidden"><a href="javascript:void(0);"
                                            class="icon-eye d-block"></a></li>
                                    <li class="overflow-hidden"><a href="javascript:void(0);"
                                            class="icon-arrow d-block"></a></li>
                                </ul>
                            </div>
                            <div class="text-center py-5 px-2">
                                <span class="title d-block mb-2"><a href="shop-detail.html">Neque Porro
                                        Quisquam</a></span>
                                <span class="price d-block fwEbold"><del>60.00 $</del>48.00 $</span>
                                <span
                                    class="hotOffer green fwEbold text-uppercase text-white position-absolute d-block">Sale</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <!-- featureCol -->
                    <div class="featureCol px-3 w-100 mb-sm-8 mb-6">
                        <div class="shadow p-3 mb-5 bg-body rounded">
                            <div class="imgHolder position-relative w-100 overflow-hidden">
                                <img src="http://placehold.it/320x355" alt="image description" class="img-fluid w-100">
                                <ul class="list-unstyled postHoverLinskList d-flex justify-content-center m-0">
                                    <li class="mr-2 overflow-hidden"><a href="javascript:void(0);"
                                            class="icon-heart d-block"></a></li>
                                    <li class="mr-2 overflow-hidden"><a href="javascript:void(0);"
                                            class="icon-cart d-block"></a></li>
                                    <li class="mr-2 overflow-hidden"><a href="javascript:void(0);"
                                            class="icon-eye d-block"></a></li>
                                    <li class="overflow-hidden"><a href="javascript:void(0);"
                                            class="icon-arrow d-block"></a></li>
                                </ul>
                            </div>
                            <div class="text-center py-5 px-2">
                                <span class="title d-block mb-2"><a href="shop-detail.html">Sit voluptatem</a></span>
                                <span class="price d-block fwEbold">65.00 $</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <!-- featureCol -->
                    <div class="featureCol position-relative w-100 px-3 mb-sm-8 mb-6">
                        <div class="shadow p-3 mb-5 bg-body rounded">
                            <div class="imgHolder position-relative w-100 overflow-hidden">
                                <img src="http://placehold.it/320x355" alt="image description" class="img-fluid w-100">
                                <ul class="list-unstyled postHoverLinskList d-flex justify-content-center m-0">
                                    <li class="mr-2 overflow-hidden"><a href="javascript:void(0);"
                                            class="icon-heart d-block"></a></li>
                                    <li class="mr-2 overflow-hidden"><a href="javascript:void(0);"
                                            class="icon-cart d-block"></a></li>
                                    <li class="mr-2 overflow-hidden"><a href="javascript:void(0);"
                                            class="icon-eye d-block"></a></li>
                                    <li class="overflow-hidden"><a href="javascript:void(0);"
                                            class="icon-arrow d-block"></a></li>
                                </ul>
                            </div>
                            <div class="text-center py-5 px-2">
                                <span class="title d-block mb-2"><a href="shop-detail.html">Aliquam Quaerat
                                        Voluptatem</a></span>
                                <span class="price d-block fwEbold">80.00 $</span>
                                <span
                                    class="hotOffer fwEbold text-uppercase text-white position-absolute d-block">HOT</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <!-- featureCol -->
                    <div class="featureCol px-3 w-100 mb-sm-8 mb-6">
                        <div class="shadow p-3 mb-5 bg-body rounded">
                            <div class="imgHolder position-relative w-100 overflow-hidden">
                                <img src="http://placehold.it/320x355" alt="image description" class="img-fluid w-100">
                                <ul class="list-unstyled postHoverLinskList d-flex justify-content-center m-0">
                                    <li class="mr-2 overflow-hidden"><a href="javascript:void(0);"
                                            class="icon-heart d-block"></a></li>
                                    <li class="mr-2 overflow-hidden"><a href="javascript:void(0);"
                                            class="icon-cart d-block"></a></li>
                                    <li class="mr-2 overflow-hidden"><a href="javascript:void(0);"
                                            class="icon-eye d-block"></a></li>
                                    <li class="overflow-hidden"><a href="javascript:void(0);"
                                            class="icon-arrow d-block"></a></li>
                                </ul>
                            </div>
                            <div class="text-center py-5 px-2">
                                <span class="title d-block mb-2"><a href="shop-detail.html">Sit voluptatem</a></span>
                                <span class="price d-block fwEbold">65.00 $</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <!-- featureCol -->
                    <div class="featureCol w-100 px-3 mb-sm-8 mb-6">
                        <div class="shadow p-3 mb-5 bg-body rounded">
                            <div class="imgHolder position-relative w-100 overflow-hidden">
                                <img src="http://placehold.it/320x355" alt="image description" class="img-fluid w-100">
                                <ul class="list-unstyled postHoverLinskList d-flex justify-content-center m-0">
                                    <li class="mr-2 overflow-hidden"><a href="javascript:void(0);"
                                            class="icon-heart d-block"></a></li>
                                    <li class="mr-2 overflow-hidden"><a href="javascript:void(0);"
                                            class="icon-cart d-block"></a></li>
                                    <li class="mr-2 overflow-hidden"><a href="javascript:void(0);"
                                            class="icon-eye d-block"></a></li>
                                    <li class="overflow-hidden"><a href="javascript:void(0);"
                                            class="icon-arrow d-block"></a></li>
                                </ul>
                            </div>
                            <div class="text-center py-5 px-2">
                                <span class="title d-block mb-2"><a href="shop-detail.html">Sit voluptatem</a></span>
                                <span class="price d-block fwEbold">65.00 $</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- partnerSec -->
        <div class="partnerSec container overflow-hidden pt-xl-12 pb-xl-23 pt-lg-10 pt-md-8 pt-5 pb-lg-20 pb-md-16 pb-10">
            <div class="row">
                <div class="col-12">
                    <!-- partnerSlider -->
                    <div class="partnerSlider d-flex flex-wrap">
                        <div>
                            <div class="logoColumn d-flex align-items-center justify-content-center">
                                <a href="javascript:void(0);"><img src="http://placehold.it/105x59" alt="Partner Logo"
                                        class="img-fluid"></a>
                            </div>
                        </div>
                        <div>
                            <div class="logoColumn d-flex align-items-center justify-content-center">
                                <a href="javascript:void(0);"><img src="http://placehold.it/105x59" alt="Partner Logo"
                                        class="img-fluid"></a>
                            </div>
                        </div>
                        <div>
                            <div class="logoColumn d-flex align-items-center justify-content-center">
                                <a href="javascript:void(0);"><img src="http://placehold.it/105x59" alt="Partner Logo"
                                        class="img-fluid"></a>
                            </div>
                        </div>
                        <div>
                            <div class="logoColumn d-flex align-items-center justify-content-center">
                                <a href="javascript:void(0);"><img src="http://placehold.it/105x59" alt="Partner Logo"
                                        class="img-fluid"></a>
                            </div>
                        </div>
                        <div>
                            <div class="logoColumn d-flex align-items-center justify-content-center">
                                <a href="javascript:void(0);"><img src="http://placehold.it/105x59" alt="Partner Logo"
                                        class="img-fluid"></a>
                            </div>
                        </div>
                        <div>
                            <div class="logoColumn d-flex align-items-center justify-content-center">
                                <a href="javascript:void(0);"><img src="http://placehold.it/105x59" alt="Partner Logo"
                                        class="img-fluid"></a>
                            </div>
                        </div>
                        <div>
                            <div class="logoColumn d-flex align-items-center justify-content-center">
                                <a href="javascript:void(0);"><img src="http://placehold.it/105x59" alt="Partner Logo"
                                        class="img-fluid"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid px-xl-20 px-lg-14">
            <!-- subscribeSecBlock -->
            <section class="subscribeSecBlock bgCover col-12 pt-xl-24 pb-xl-12 pt-lg-20 pt-md-16 pt-10 pb-md-8 pb-5"
                style="background-image: url(http://placehold.it/1720x465)">
                <header class="col-12 mainHeader mb-sm-9 mb-6 text-center">
                    <h1 class="headingIV playfair fwEblod mb-4">Subscribe Our Newsletter</h1>
                    <span class="headerBorder d-block mb-md-5 mb-3"><img src="{{ asset('assets/images/hbdr.png') }}"
                            alt="Header Border" class="img-fluid img-bdr"></span>
                    <p class="mb-sm-6 mb-3">Enter Your email address to join our mailing list and keep yourself update</p>
                </header>
                <form class="emailForm1 mx-auto overflow-hidden d-flex flex-wrap">
                    <input type="email" class="form-control px-4 border-0" placeholder="Enter your mail...">
                    <button type="submit" class="btn btnTheme btnShop fwEbold text-white py-3 px-4">Explore Food <i
                            class="fas fa-arrow-right ml-2"></i></button>
                </form>
            </section>
        </div>
        <!-- footerHolder -->
        <aside
            class="footerHolder container-fluid overflow-hidden px-xl-20 px-lg-14 pt-xl-12 pb-xl-8 pt-lg-12 pt-md-8 pt-10 pb-lg-8">
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
                        <li class="mr-xl-6 mr-sm-4 mr-2"><a href="javascript:void(0);" class="fab fa-twitter"></a></li>
                        <li class="mr-xl-6 mr-sm-4 mr-2"><a href="javascript:void(0);" class="fab fa-pinterest"></a></li>
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
    </main>
@endsection
@section('script')
    <script>
       
        function leftScroll() {
            const left = document.querySelector(".ppDishes");
            left.scrollBy(-200, 0);
        }

        function rightScroll() {
            const right = document.querySelector(".ppDishes");
            right.scrollBy(200, 0);
        }

        //       function sDesert() {
        //     var x = document.getElementById('dessert');
        //     if (x.style.display == 'none') {
        //         x.style.display = 'block';
        //     } else {
        //         x.style.display = 'none';
        //     }
        // }
        // function myFunc(drinks) {
        //     var x = document.getElementById('pizza');

        //     if (x.style.display == 'none') {
        //         x.style.display = 'block';
        //     } else {
        //         x.style.display = 'none';
        //     }
        // }

		let currentDiv = null;
        function showDiv(divId) {
            // Hide the previously shown div (if any)
            if (currentDiv) {
                currentDiv.style.display = "none";
            }

            // Show the selected div
            let divToShow = document.getElementById(divId);
            divToShow.style.display = "block";

            // Update the currentDiv to the newly shown div
            currentDiv = divToShow;
        }

        // Initially show Div 1
        showDiv('desert');
    </script>
@endsection
