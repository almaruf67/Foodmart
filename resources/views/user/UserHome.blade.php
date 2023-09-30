@extends('user/Layout.app')

@section('content')
    <!-- main -->
    <main style="background-color: #FFFCF7" class="pt-20">
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
                                        <div>
                                            <a href="shop.html"
                                                class="btn btnTheme btnShop fwEbold text-white md-round py-md-3 px-md-4 py-2 px-3 mr-2">Explore
                                                Food <i class="fas fa-arrow-right ml-2"></i></a>
                                            <a style="min-width: 50px;" href="tel:+8801792950000"
                                                class="btn btnTheme btnShop fwEbold text-white md-round py-md-3 px-md-4 py-2 px-3"><i
                                                    class="fas fa-phone"></i></a>
                                        </div>

                                    </div>
                                </div>
                                <div style="padding-left: 50px;" class="imgHolder pt-15">
                                    <img style="width: 68%;" src="{{ asset('assets/images/burger4.png') }}"
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
                                        <div>
                                            <a href="shop.html"
                                                class="btn btnTheme btnShop fwEbold text-white md-round py-md-3 px-md-4 py-2 px-3 mr-2">Explore
                                                Food <i class="fas fa-arrow-right ml-2"></i></a>
                                            <a style="min-width: 50px;" href="tel:+8801792950000"
                                                class="btn btnTheme btnShop fwEbold text-white md-round py-md-3 px-md-4 py-2 px-3"><i
                                                    class="fas fa-phone"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div style="padding-left: 50px;" class="imgHolder pt-15">
                                    <img style="width: 68%;" src="{{ asset('assets/images/pizza.png') }}"
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
                                        <div>
                                            <a href="shop.html"
                                                class="btn btnTheme btnShop fwEbold text-white md-round py-md-3 px-md-4 py-2 px-3 mr-2">Explore
                                                Food <i class="fas fa-arrow-right ml-2"></i></a>
                                            <a style="min-width: 50px;" href="tel:+8801792950000"
                                                class="btn btnTheme btnShop fwEbold text-white md-round py-md-3 px-md-4 py-2 px-3"><i
                                                    class="fas fa-phone"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div style="padding-left: 50px;" class="imgHolder pt-15">
                                    <img style="width: 68%;" src="{{ asset('assets/images/platter2.png') }}"
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
        <section class="PopulerSec container pt-xl-12 pt-lg-10 pt-md-80 pt-5 pb-xl-10 pb-lg-4 pb-md-2 px-xl-14 px-lg-7">
            <!-- mainHeader -->

            <header class="col-12 mainHeader mb-7 text-center">
                <h1 class="headingIV playfair fwEblod mb-4">Popular Menu</h1>
                <span class="headerBorder d-block mb-md-5 mb-3"><img src="{{ asset('assets/images/hbdr.png') }}"
                        alt="Header Border" class="img-fluid img-bdr"></span>
            </header>

            <button class="left" onclick="leftScroll()"><i class="fas fa-chevron-left"></i></button>
            <div class="ppDishes row row-cols-2 row-cols-sm-2 row-cols-md-3 row-cols-xl-4 row-cols-xxl-5 ">

                <!-- PopularCol1 -->
                @foreach ($categorizedData as $category)
                    {{-- {{ dd($category['products']) }} --}}
                    @if ($category['products'])
                        @foreach ($category['products'] as $items)
                            <div class="featureCol px-3 mb-6">
                                <div class="pp shadow p-3 mb-5 bg-body rounded">
                                    <div class="bb position-relative">
                                        <div class="imgHolder position-relative w-100 overflow-hidden"
                                            style=" border-radius: 10px;">
                                            <img src="{{ $items['Poster'] }}" alt="image description"
                                                class="img-fluid w-100">
                                        </div>
                                        <div class="overlay text-left overflow-hidden">
                                            <h4> {{ $items['Short_Description'] }} </h4>
                                        </div>
                                    </div>

                                    <div class="text-left text-black pt-3 px-xl-2 px-1">
                                        <p class="rating">
                                            <i class="fas fa-star" aria-hidden="true"></i>
                                            <i class="fas fa-star" aria-hidden="true"></i>
                                            <i class="fas fa-star" aria-hidden="true"></i>
                                            <i class="fas fa-star" aria-hidden="true"></i>
                                            <i class="fas fa-star" aria-hidden="true"></i>
                                            <span>(1)</span>
                                        </p>
                                    </div>

                                    <div
                                        class="d-flex justify-content-between text-left pb-xl-3 py-sm-2 pb-2 px-xl-2 px-1">

                                        <span class="d-flex flex-column title d-block"><a href="shop-detail.html">
                                                <h6>{{ $items['Title'] }}</h6>
                                            </a>
                                            <span class="price fwEbold text-bottom">{{ $items['Price'] }}</span>
                                        </span>
                                        <div class="d-flex justify-content-between align-items-end">

                                            <span class="mr-2">
                                                <a href="javascript:void(0);"
                                                    class="btn btnTheme text-white sm-round py-2 px-2" id="addToFavorites"
                                                    data-product-id="{{ $items['id'] }}">
                                                    <i class="icon-heart"></i>
                                                </a>
                                            </span>
                                            <span>
                                                <a href="javascript:void(0);"
                                                    class="btn btnTheme text-white sm-round py-2 px-2 "><i
                                                        class="icon-cart"></i></a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                @endforeach

                <button class="right" onclick="rightScroll()"><i class="fas fa-chevron-right"></i></button>
        </section>


        {{-- Reservation Start --}}

        <section class="introBlock position-relative">
            <div class="bgCover" style="background-image: url({{ asset('assets/images/bg44.png') }});">
                <div id="booking"
                    class="section container d-flex justify-content-end pt-xl-22 pt-lg-20 pt-md-16 pt-10 pb-xl-12 pb-md-7 pb-2">

                    <div class="section-center">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="booking-form">
                                    <form>
                                        <div class="form-header">
                                            <h2>Make your reservation</h2>
                                        </div>
                                        <div class="form-group">
                                            <span class="form-label">Name</span>
                                            <input class="form-control" type="text" placeholder="Enter your name">
                                        </div>
                                        <div class="form-group">
                                            <span class="form-label">Email</span>
                                            <input class="form-control" type="email" placeholder="Enter your email">
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <span class="form-label">Select Time</span>
                                                    <input class="form-control" type="time" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <span class="form-label">Select Date</span>
                                                    <input class="form-control" type="date" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <span class="form-label">Phone</span>
                                                    <input class="form-control" type="tel"
                                                        placeholder="Enter your phone number">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <span class="form-label">Person</span>
                                                    <input class="form-control" type="text"
                                                        placeholder="Enter person count">
                                                </div>
                                            </div>

                                        </div>

                                        <div class="form-btn d-flex justify-content-end">
                                            <button
                                                class="btn btnTheme btnShop fwEbold text-white round py-md-3 px-md-4 py-2 px-3">Book
                                                Now</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <!-- Button trigger modal -->

        <!-- chooseUs-sec -->
        <section
            class="chooseUs-sec container-fluid d-flex justify-content-center pt-xl-22 pt-lg-20 pt-md-16 pt-10 pb-xl-12 pb-md-7 pb-2">
            <div class="row container py-3">
                <div class="col-12 col-lg-6 mb-lg-0 mb-4">
                    <img src="{{ asset('assets/images/chef.jpg') }}" alt="image description" class="img-fluid">
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
                    @foreach ($categorizedData as $category)
                        <div class="btn btnTheme btnShop fwEbold text-white round m-3 py-md-3 px-md-4 py-2 px-3"
                            onclick="showDiv('{{ $category['category_name'] }}')">{{ $category['category_name'] }}</div>
                    @endforeach
                </div>

            </header>

            <!-- Dessert -->
            @foreach ($categorizedData as $category)
                <div id="{{ $category['category_name'] }}"
                    style='display:none'>
                    {{-- <div id="{{ $category['category_name'] }}" style="display:none;"> --}}
                    <div class="col-12 p-0  d-flex justify-content-center  flex-wrap">
                        <!-- featureCol1 -->
                        <div class="featureCol px-3 mb-6">
                            @foreach ($category['products'] as $item)
                                <div class="pp shadow p-3 mb-5 bg-body rounded">
                                    <div class="bb position-relative">
                                        <div class="imgHolder position-relative w-100 overflow-hidden">
                                            <img src="{{ $item['Poster'] }}" alt="image description"
                                                class="img-fluid w-100">
                                        </div>
                                        <div class="overlay text-left overflow-hidden">
                                            <h4>{{ $item['Short_Description'] }}</h4>
                                        </div>
                                        <div class="text-left text-black pt-3 px-xl-2 px-1">
                                            <p class="rating">
                                                <i class="fas fa-star" aria-hidden="true"></i>
                                                <i class="fas fa-star" aria-hidden="true"></i>
                                                <i class="fas fa-star" aria-hidden="true"></i>
                                                <i class="fas fa-star" aria-hidden="true"></i>
                                                <i class="fas fa-star" aria-hidden="true"></i>
                                                <span>(1)</span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between text-left py-xl-2 py-sm-1  px-xl-2 px-1">
                                        <span class="d-flex flex-column title d-block"><a href="shop-detail.html">
                                                <h6>{{ $item['Title'] }}</h6>
                                            </a>
                                            <span class="price fwEbold text-bottom">{{ $item['Price'] }}</span>
                                        </span>
                                        <div class="d-flex justify-content-between align-items-end">
                                            <span class="mr-2">
                                                <a href="javascript:void(0);"
                                                    class="btn btnTheme text-white sm-round py-2 px-2 "><i
                                                        class="icon-heart"></i></a>
                                            </span>
                                            <span>
                                                <a href="javascript:void(0);"
                                                    class="btn btnTheme text-white sm-round py-2 px-2 "><i
                                                        class="icon-cart"></i></a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endforeach

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
        <!-- customerReviewSec -->
        <section
            class="partnerSec container overflow-hidden pt-xl-12 pb-xl-23 pt-lg-10 pt-md-8 pt-5 pb-lg-20 pb-md-16 pb-10">
            <div class="row">
                <div class="col-12">
                    <!-- partnerSlider -->
                    <div class="partnerSlider d-flex flex-wrap">
                        <div class="col-md-10 mb-5 mb-md-0 d-flex align-items-center">
                            <div style="border: none;" class="card testimonial-card shadow mb-5 rounded">
                                <div class="card-up rounded" style="background-color: #FFB648;"></div>
                                <div class="avatar mx-auto bg-white">
                                    <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(1).webp"
                                        class="rounded-circle img-fluid" />
                                </div>
                                <div class="card-body bg-white">
                                    <h4 class="mb-4">Maria Smantha</h4>
                                    <hr />
                                    <p class="dark-grey-text mt-4">
                                        <i class="fas fa-quote-left pe-2"></i>Lorem ipsum dolor sit amet eos adipisci,
                                        consectetur adipisicing elit.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-10 mb-5 mb-md-0 d-flex align-items-stretch">
                            <div style="border: none;" class="card testimonial-card shadow mb-5 rounded">
                                <div class="card-up rounded" style="background-color: #FFB648;"></div>
                                <div class="avatar mx-auto bg-white">
                                    <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(2).webp"
                                        class="rounded-circle img-fluid" />
                                </div>
                                <div class="card-body bg-white">
                                    <h4 class="mb-4">Lisa Cudrow</h4>
                                    <hr />
                                    <p class="dark-grey-text mt-4">
                                        <i class="fas fa-quote-left pe-2"></i>Neque cupiditate assumenda in maiores
                                        repudi mollitia architecto.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-10 mb-0 d-flex align-items-stretch">
                            <div style="border: none;" class="card testimonial-card shadow mb-5 rounded">
                                <div class="card-up rounded" style="background-color: #FFB648;"></div>
                                <div class="avatar mx-auto bg-white">
                                    <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(9).webp"
                                        class="rounded-circle img-fluid" />
                                </div>
                                <div class="card-body bg-white">
                                    <h4 class="mb-4">John Smith</h4>
                                    <hr />
                                    <p class="dark-grey-text mt-4">
                                        <i class="fas fa-quote-left pe-2"></i>Delectus impedit saepe officiis ab
                                        aliquam repellat rem unde ducimus.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-10 mb-5 mb-md-0 d-flex align-items-stretch">
                            <div style="border: none;" class="card testimonial-card shadow mb-5 rounded">
                                <div class="card-up rounded" style="background-color: #FFB648;"></div>
                                <div class="avatar mx-auto bg-white">
                                    <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(2).webp"
                                        class="rounded-circle img-fluid" />
                                </div>
                                <div class="card-body bg-white">
                                    <h4 class="mb-4">Lisa Cudrow</h4>
                                    <hr />
                                    <p class="dark-grey-text mt-4">
                                        <i class="fas fa-quote-left pe-2"></i>Neque cupiditate assumenda in maiores
                                        repudi mollitia architecto.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-10 mb-0 d-flex align-items-stretch">
                            <div style="border: none;" class="card testimonial-card shadow mb-5 rounded">
                                <div class="card-up rounded" style="background-color: #FFB648;"></div>
                                <div class="avatar mx-auto bg-white">
                                    <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(9).webp"
                                        class="rounded-circle img-fluid" />
                                </div>
                                <div class="card-body bg-white">
                                    <h4 class="mb-4">John Smith</h4>
                                    <hr />
                                    <p class="dark-grey-text mt-4">
                                        <i class="fas fa-quote-left pe-2"></i>Delectus impedit saepe officiis ab
                                        aliquam repellat rem unde ducimus.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <!-- BlogSecHolder -->
        <section class="dealSecHolder container-fluid overflow-hidden py-xl-12 py-lg-10 py-md-8 py-5">
            <!-- mainHeader -->
            <header class="col-12 mainHeader mb-7 text-center">
                <h1 class="headingIV playfair fwEblod mb-5">News & Blog</h1>
                <span class="headerBorder d-block mb-md-5 mb-3"><img src="{{ asset('assets/images/hbdr.png') }}"
                        alt="Header Border" class="img-fluid img-bdr"></span>
                {{-- <div id="defaultCountdown" class="comming-timer"></div> --}}
            </header>
            <!-- dealSlider -->
            <div class="dealSlider w-100 px-lg-10 px-md-5">
                <!-- BlogCol1 -->
                <div>
                    <div class="blogCol px-3 mb-sm-8 mb-6">
                        <div class="pp shadow p-3 mb-5 bg-body rounded">
                            <div class="bb">
                                <div class="imgHolder w-100 overflow-hidden">
                                    <img src="{{ asset('assets/images/blog1.jpg') }}" alt="image description"
                                        class="img-fluid w-100">
                                </div>
                            </div>
                            <div class="blogger d-flex text-left py-xl-2 py-sm-1 py-2 px-xl-2 px-1">
                                <div class="imgHolder overflow-hidden">
                                    <img src="{{ asset('assets/images/chef1.jpg') }}" alt="image description"
                                        class="img-fluid w-100">
                                </div>
                                <div class="d-flex pl-5 align-items-center">
                                    <span class="d-flex flex-column title d-block">
                                        <p class="fwEbold">Nico Ni</h5>
                                        <p style="color: #FF6A3D">23 Jan 2023</p>
                                    </span>
                                </div>
                                <div class="d-flex align-items-center">

                                    <span>
                                        <a href="javascript:void(0);" class="py-2 px-2 "><i class="far fa-comments"
                                                style="color: #FF6A3D"></i></a>
                                    </span>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between text-left py-xl-2 py-sm-1 py-2 px-xl-2 px-1">
                                <span class="d-flex flex-column title d-block"><a href="javascript:void(0);">
                                        <h6>The Secret Menu Gem</h6>
                                    </a>
                                    <p class="title overflow-hidden">Some of the best items at Yumzy can't be found on the
                                        regular menu. Ask for their secret menu,...<a href="javascript:void(0);"
                                            class="btnMore"><i>Learn More</i></a></p>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- BlogCol2 -->
                <div>
                    <div class="blogCol px-3 mb-sm-8 mb-6">
                        <div class="pp shadow p-3 mb-5 bg-body rounded">
                            <div class="bb">
                                <div class="imgHolder w-100 overflow-hidden">
                                    <img src="{{ asset('assets/images/blog2.jpeg') }}" alt="image description"
                                        class="img-fluid w-100">
                                </div>
                            </div>
                            <div class="blogger d-flex text-left py-xl-2 py-sm-1 py-2 px-xl-2 px-1">
                                <div class="imgHolder overflow-hidden">
                                    <img src="{{ asset('assets/images/chef1.jpg') }}" alt="image description"
                                        class="img-fluid w-100">
                                </div>
                                <div class="d-flex pl-5 align-items-center">
                                    <span class="d-flex flex-column title d-block">
                                        <p class="fwEbold">Nico Ni</h5>
                                        <p style="color: #FF6A3D">23 Jan 2023</p>
                                    </span>
                                </div>
                                <div class="d-flex align-items-center">

                                    <span>
                                        <a href="javascript:void(0);" class="py-2 px-2 "><i class="far fa-comments"
                                                style="color: #FF6A3D"></i></a>
                                    </span>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between text-left py-xl-2 py-sm-1 py-2 px-xl-2 px-1">
                                <span class="d-flex flex-column title d-block"><a href="javascript:void(0);">
                                        <h6>The Secret Menu Gem</h6>
                                    </a>
                                    <p class="title overflow-hidden">Some of the best items at Yumzy can't be found on the
                                        regular menu. Ask for their secret menu,...<a href="javascript:void(0);"
                                            class="btnMore"><i>Learn More</i></a></p>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- BlogCol3 -->
                <div>
                    <div class="blogCol px-3 mb-sm-8 mb-6">
                        <div class="pp shadow p-3 mb-5 bg-body rounded">
                            <div class="bb">
                                <div class="imgHolder w-100 overflow-hidden">
                                    <img src="{{ asset('assets/images/blog1.jpg') }}" alt="image description"
                                        class="img-fluid w-100">
                                </div>
                            </div>
                            <div class="blogger d-flex text-left py-xl-2 py-sm-1 py-2 px-xl-2 px-1">
                                <div class="imgHolder overflow-hidden">
                                    <img src="{{ asset('assets/images/chef1.jpg') }}" alt="image description"
                                        class="img-fluid w-100">
                                </div>
                                <div class="d-flex pl-5 align-items-center">
                                    <span class="d-flex flex-column title d-block">
                                        <p class="fwEbold">Nico Ni</h5>
                                        <p style="color: #FF6A3D">23 Jan 2023</p>
                                    </span>
                                </div>
                                <div class="d-flex align-items-center">

                                    <span>
                                        <a href="javascript:void(0);" class="py-2 px-2 "><i class="far fa-comments"
                                                style="color: #FF6A3D"></i></a>
                                    </span>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between text-left py-xl-2 py-sm-1 py-2 px-xl-2 px-1">
                                <span class="d-flex flex-column title d-block"><a href="javascript:void(0);">
                                        <h6>The Secret Menu Gem</h6>
                                    </a>
                                    <p class="title overflow-hidden">Some of the best items at Yumzy can't be found on the
                                        regular menu. Ask for their secret menu,...<a href="javascript:void(0);"
                                            class="btnMore"><i>Learn More</i></a></p>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- BlogCol4 -->
                <div>
                    <div class="blogCol px-3 mb-sm-8 mb-6">
                        <div class="pp shadow p-3 mb-5 bg-body rounded">
                            <div class="bb">
                                <div class="imgHolder w-100 overflow-hidden">
                                    <img src="{{ asset('assets/images/blog2.jpeg') }}" alt="image description"
                                        class="img-fluid w-100">
                                </div>
                            </div>
                            <div class="blogger d-flex text-left py-xl-2 py-sm-1 py-2 px-xl-2 px-1">
                                <div class="imgHolder overflow-hidden">
                                    <img src="{{ asset('assets/images/chef1.jpg') }}" alt="image description"
                                        class="img-fluid w-100">
                                </div>
                                <div class="d-flex pl-5 align-items-center">
                                    <span class="d-flex flex-column title d-block">
                                        <p class="fwEbold">Nico Ni</h5>
                                        <p style="color: #FF6A3D">23 Jan 2023</p>
                                    </span>
                                </div>
                                <div class="d-flex align-items-center">

                                    <span>
                                        <a href="javascript:void(0);" class="py-2 px-2 "><i class="far fa-comments"
                                                style="color: #FF6A3D"></i></a>
                                    </span>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between text-left py-xl-2 py-sm-1 py-2 px-xl-2 px-1">
                                <span class="d-flex flex-column title d-block"><a href="javascript:void(0);">
                                        <h6>The Secret Menu Gem</h6>
                                    </a>
                                    <p class="title overflow-hidden">Some of the best items at Yumzy can't be found on the
                                        regular menu. Ask for their secret menu,...<a href="javascript:void(0);"
                                            class="btnMore"><i>Learn More</i></a></p>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- BlogCol5 -->
                <div>

                    <div class="blogCol px-3 mb-sm-8 mb-6">
                        <div class="pp shadow p-3 mb-5 bg-body rounded">
                            <div class="bb">
                                <div class="imgHolder w-100 overflow-hidden">
                                    <img src="{{ asset('assets/images/blog1.jpg') }}" alt="image description"
                                        class="img-fluid w-100">
                                </div>
                            </div>
                            <div class="blogger d-flex text-left py-xl-2 py-sm-1 py-2 px-xl-2 px-1">
                                <div class="imgHolder overflow-hidden">
                                    <img src="{{ asset('assets/images/chef1.jpg') }}" alt="image description"
                                        class="img-fluid w-100">
                                </div>
                                <div class="d-flex pl-5 align-items-center">
                                    <span class="d-flex flex-column title d-block">
                                        <p class="fwEbold">Nico Ni</h5>
                                        <p style="color: #FF6A3D">23 Jan 2023</p>
                                    </span>
                                </div>
                                <div class="d-flex align-items-center">

                                    <span>
                                        <a href="javascript:void(0);" class="py-2 px-2 "><i class="far fa-comments"
                                                style="color: #FF6A3D"></i></a>
                                    </span>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between text-left py-xl-2 py-sm-1 py-2 px-xl-2 px-1">
                                <span class="d-flex flex-column title d-block"><a href="javascript:void(0);">
                                        <h6>The Secret Menu Gem</h6>
                                    </a>
                                    <p class="title overflow-hidden">Some of the best items at Yumzy can't be found on the
                                        regular menu. Ask for their secret menu,...<a href="javascript:void(0);"
                                            class="btnMore"><i>Learn More</i></a></p>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- BlogCol6 -->
                <div>
                    <div class="blogCol px-3 mb-sm-8 mb-6">
                        <div class="pp shadow p-3 mb-5 bg-body rounded">
                            <div class="bb">
                                <div class="imgHolder w-100 overflow-hidden">
                                    <img src="{{ asset('assets/images/blog2.jpeg') }}" alt="image description"
                                        class="img-fluid w-100">
                                </div>
                            </div>
                            <div class="blogger d-flex text-left py-xl-2 py-sm-1 py-2 px-xl-2 px-1">
                                <div class="imgHolder overflow-hidden">
                                    <img src="{{ asset('assets/images/chef1.jpg') }}" alt="image description"
                                        class="img-fluid w-100">
                                </div>
                                <div class="d-flex pl-5 align-items-center">
                                    <span class="d-flex flex-column title d-block">
                                        <p class="fwEbold">Nico Ni</h5>
                                        <p style="color: #FF6A3D">23 Jan 2023</p>
                                    </span>
                                </div>
                                <div class="d-flex align-items-center">

                                    <span>
                                        <a href="javascript:void(0);" class="py-2 px-2 "><i class="far fa-comments"
                                                style="color: #FF6A3D"></i></a>
                                    </span>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between text-left py-xl-2 py-sm-1 py-2 px-xl-2 px-1">
                                <span class="d-flex flex-column title d-block"><a href="javascript:void(0);">
                                        <h6>The Secret Menu Gem</h6>
                                    </a>
                                    <p class="title overflow-hidden">Some of the best items at Yumzy can't be found on the
                                        regular menu. Ask for their secret menu,...<a href="javascript:void(0);"
                                            class="btnMore"><i>Learn More</i></a></p>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- BlogCol7 -->
                <div>
                    <div class="blogCol px-3 mb-sm-8 mb-6">
                        <div class="pp shadow p-3 mb-5 bg-body rounded">
                            <div class="bb">
                                <div class="imgHolder w-100 overflow-hidden">
                                    <img src="{{ asset('assets/images/blog1.jpg') }}" alt="image description"
                                        class="img-fluid w-100">
                                </div>
                            </div>
                            <div class="blogger d-flex text-left py-xl-2 py-sm-1 py-2 px-xl-2 px-1">
                                <div class="imgHolder overflow-hidden">
                                    <img src="{{ asset('assets/images/chef1.jpg') }}" alt="image description"
                                        class="img-fluid w-100">
                                </div>
                                <div class="d-flex pl-5 align-items-center">
                                    <span class="d-flex flex-column title d-block">
                                        <p class="fwEbold">Nico Ni</h5>
                                        <p style="color: #FF6A3D">23 Jan 2023</p>
                                    </span>
                                </div>
                                <div class="d-flex align-items-center">

                                    <span>
                                        <a href="javascript:void(0);" class="py-2 px-2 "><i class="far fa-comments"
                                                style="color: #FF6A3D"></i></a>
                                    </span>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between text-left py-xl-2 py-sm-1 py-2 px-xl-2 px-1">
                                <span class="d-flex flex-column title d-block"><a href="javascript:void(0);">
                                        <h6>The Secret Menu Gem</h6>
                                    </a>
                                    <p class="title overflow-hidden">Some of the best items at Yumzy can't be found on the
                                        regular menu. Ask for their secret menu,...<a href="javascript:void(0);"
                                            class="btnMore"><i>Learn More</i></a></p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="introBlock position-relative">
            <div class="bgCover" style="background-image: url({{ asset('assets/images/bg55.jpg') }});">
                <div id="booking"
                    class="section container d-flex justify-content-center pt-xl-22 pt-lg-20 pt-md-16 pt-10 pb-xl-12 pb-md-7 pb-2">

                    <div class="section-center">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="booking-form">
                                    <form>
                                        <div class="form-header">
                                            <h2>Enter your thoughts</h2>
                                        </div>
                                        <div class="form-group">
                                            <span class="form-label">Name</span>
                                            <input class="form-control" type="text" placeholder="Enter your name">
                                        </div>
                                        <div class="form-group">
                                            <span class="form-label">Email</span>
                                            <input class="form-control" type="email" placeholder="Enter your email">
                                        </div>

                                        <div class="form-group">
                                            <span class="form-label">Comment</span>
                                            <input class="form-control input-lg" type="text"
                                                placeholder="Enter your thoughts">
                                        </div>

                                        <div class="form-btn d-flex justify-content-end">
                                            <button
                                                class="btn btnTheme btnShop fwEbold text-white round py-md-3 px-md-4 py-2 px-3">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>




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
        let currentDiv = null;

        function showDiv(divId) {
            // Hide the previously shown div (if any)
            if (currentDiv) {
                currentDiv.style.display = "none";
            }

            // Show the selected div
            let divToShow = document.getElementById(divId);
            divToShow.style.display = "block";
            currentDiv = divToShow;
        }

        // Initially show Div 1
        showDiv('{{ $categorizedData->first()['category_name'] }}');
    </script>
    <script>
        $(document).ready(function() {
            $('#addToFavorites').click(function(e) {
                e.preventDefault();

                // Get the product ID from the data attribute
                var productId = $(this).data('product-id');

                // Send an AJAX POST request to the controller
                $.ajax({
                    url: '/addToFavorites', // Change this to the actual route URL
                    method: 'POST',
                    
                    data: {
                        _token: '{{ csrf_token() }}',
                        product_id: productId
                    },
                    success: function(response) {
                        if (response.success) {
                            alert('Product added to favorites successfully!');
                        } else {
                            alert('Failed to add product to favorites.');
                        }
                    },
                    error: function() {
                        alert('An error occurred while processing your request.');
                    }
                });
            });
        });
    </script>
@endsection
