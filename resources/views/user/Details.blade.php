@extends('user.Layout.app')

@section('content')
    <section class="mt-25 yumzy-df">
        <div class="container">
            <div class="item-details">
                <div class="row mb-4">
                    <div class="col-lg-5 col-md-5 col-12">
                        <div class="item-img-cover">
                            <div class="item-img show">
                                <img data-enlargable="" src="{{ $product->Poster }}" alt="item-image" id="show-img"
                                    class="img-enlargable">
                            </div>
                        </div>
                        <div class="row gx-0 justify-content-center" dir="ltr">
                            <div class="small-img">
                                <img src="https://single-restaurant.infotechgravity.com/storage/app/public/web-assets/images/nexticon.png"
                                    class="icon-left" alt="" id="prev-img">
                                <div class="small-container">
                                    <div id="small-img-roll">
                                        <img src="https://single-restaurant.infotechgravity.com/storage/app/public/admin-assets/images/item/item-64b150efc0e6b.jpeg"
                                            class="show-small-img" style="border: 1px solid rgb(149, 27, 37); padding: 2px;"
                                            alt="now">
                                        <img src="https://single-restaurant.infotechgravity.com/storage/app/public/admin-assets/images/item/item-64b150fbdfcc9.jpeg"
                                            class="show-small-img" style="border: none; padding: 0px;">
                                    </div>
                                </div>
                                <img src="https://single-restaurant.infotechgravity.com/storage/app/public/web-assets/images/nexticon.png"
                                    class="icon-right" alt="" id="next-img">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7 col-12">
                        <div class="item-content">
                            <div class="row pb-3 mb-3 border-bottom d-flex flex-column">
                                <div class="col-md-12 item-detail-wrapper" id="style-3">
                                    <div class="item-title"><span>
                                            <h2>{{ $product->Title }}</h2>
                                        </span></div>
                                    <div class="item-short-des">
                                        <p>{{ $product->Short_Description }}</p>
                                    </div>
                                    <div class="text-left text-black">
                                        <p class="rating">
                                            <i class="fas fa-star" aria-hidden="true"></i>
                                            <i class="fas fa-star" aria-hidden="true"></i>
                                            <i class="fas fa-star" aria-hidden="true"></i>
                                            <i class="fas fa-star" aria-hidden="true"></i>
                                            <i class="fas fa-star" aria-hidden="true"></i>
                                            <span>(1)</span>
                                        </p>
                                    </div>
                                    <div class="item-price"><span>66.69$</span></div>
                                </div>
                            </div>
                            <div class="row border-bottom">
                                <div class="col-md-6 item-detail-wrapper" id="style-3">
                                    <div>
                                        <h5>Select size</h5>
                                    </div>
                                    <div class="d-flex flex-column mb-3">
                                        <label>
                                            <input type="radio" class="option-input radio" name="example" checked />
                                            Radio option 1
                                        </label>
                                        <label>
                                            <input type="radio" class="option-input radio" name="example" />
                                            Radio option 2
                                        </label>
                                        <label>
                                            <input type="radio" class="option-input radio" name="example" />
                                            Radio option 3
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3 pb-3 mb-3 border-bottom">
                                <div class="col-md-6 item-detail-wrapper" id="style-3">
                                    <div class="item-variation-list">
                                        <h5 class="dark_color">Add-ons</h5>
                                        <div class="form-check ">
                                            <input class="form-check-input cursor-pointer addons-checkbox " type="checkbox"
                                                value="6'" data-addons-id="6" data-addons-price="10"
                                                data-addons-name="Extra patty" onclick="getaddons(this)" id="addons6">
                                            <label class="form-check-label cursor-pointer me-3" for="addons6">Extra patty
                                                : <span class="text-muted">10.00$</span></label><br>

                                            <input class="form-check-input cursor-pointer addons-checkbox " type="checkbox"
                                                value="6'" data-addons-id="6" data-addons-price="10"
                                                data-addons-name="Extra cheese slice" onclick="getaddons(this)"
                                                id="addons6">
                                            <label class="form-check-label cursor-pointer me-3" for="addons6">Extra
                                                cheese
                                                slice
                                                : <span class="text-muted">5.00$</span></label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row align-items-center justify-content-left">
                                <div>
                                    <a href="{{ route('addcart', $product->id) }}"
                                        class="btn btnTheme btnShop fwEbold text-white md-round py-md-2 px-md-4 py-1 px-3 mr-2">Add
                                        to cart<i class="fas fa-cart-plus ml-2"></i></a>
                                </div>
                                <div>
                                    <a href="{{ route('addfav', $product->id) }}"
                                        class="btn btnTheme text-white sm-round py-2 px-2 favorite-button"
                                        data-product-id="{{ $product->id }}"
                                        data-is-favorited="{{ $isfav ? 'true' : 'false' }}">
                                        <i class="{{ $isfav ? 'fas fa-heart' : 'icon-heart' }}"></i> Add to
                                        Favorites
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item-des">
                <div class="col-12 wow fadeInUp" data-wow-duration="1s"
                    style="visibility: visible; animation-duration: 1s; animation-name: fadeInUp;">
                    <div class="tf__menu_description_area mt_100 xs_mt_70">
                        <ul class="nav nav-pills border-bottom mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button
                                    class="active btn btnTheme btnShop fwEbold text-white py-md-3 px-md-4 py-3 px-3 mr-2"
                                    id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home"
                                    type="button" role="tab" aria-controls="pills-home"
                                    aria-selected="true">Description</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class=" btn btnTheme btnShop fwEbold text-white py-md-3 px-md-4 py-3 px-3 mr-2"
                                    id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact"
                                    type="button" role="tab" aria-controls="pills-contact" aria-selected="false"
                                    tabindex="-1">Reviews</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade active show" id="pills-home" role="tabpanel"
                                aria-labelledby="pills-home-tab" tabindex="0">
                                <div class="menu_det_description">{{ $product->Description }}
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                                aria-labelledby="pills-contact-tab" tabindex="0">
                                <div class="tf__review_area">
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <h4>1 Reviews</h4>
                                            <div class="tf__comment pt-0 mt_20">
                                                <div class="tf__single_comment m-0 border-0">
                                                    <img src="https://foodhat.technosoftintegration.com/uploads/custom-images/-2023-07-29-07-43-13-9048.jpg"
                                                        alt="review" class="img-fluid">

                                                    <div class="tf__single_comm_text">
                                                        <h3>John Doe <span>06 Mar 2023 </span></h3>
                                                        <span class="rating">
                                                            <i class="fas fa-star" aria-hidden="true"></i>
                                                            <i class="fas fa-star" aria-hidden="true"></i>
                                                            <i class="fas fa-star" aria-hidden="true"></i>
                                                            <i class="fas fa-star" aria-hidden="true"></i>
                                                            <i class="fas fa-star" aria-hidden="true"></i>
                                                        </span>
                                                        <p>Vim et alterum ornatus vivendum, ut mea solum repudiare. His
                                                            etiam delenit tibique no, ad harum omnes scribentur qui, ne wisi
                                                            detracto his.</p>
                                                    </div>
                                                </div>

                                                <div class="tf__pagination mt_30">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <nav aria-label="...">
                                                                <ul class="pagination">





                                                                </ul>
                                                            </nav>
                                                        </div>
                                                    </div>


                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-lg-4">
                                            <div class="tf__post_review">
                                                <h4>Write a Review</h4>
                                                <form id="review_form">
                                                    <input type="hidden" name="_token"
                                                        value="3g42DiuqLYGCr0rjrVoy21qlWR0zeU4CAruSxZYN">
                                                    <p class="rating">
                                                        <span>Rating : </span>
                                                        <i data-rating="1" class="fas fa-star product_rat"
                                                            onclick="productReview(1)" aria-hidden="true"></i>
                                                        <i data-rating="2" class="fas fa-star product_rat"
                                                            onclick="productReview(2)" aria-hidden="true"></i>
                                                        <i data-rating="3" class="fas fa-star product_rat"
                                                            onclick="productReview(3)" aria-hidden="true"></i>
                                                        <i data-rating="4" class="fas fa-star product_rat"
                                                            onclick="productReview(4)" aria-hidden="true"></i>
                                                        <i data-rating="5" class="fas fa-star product_rat"
                                                            onclick="productReview(5)" aria-hidden="true"></i>
                                                    </p>

                                                    <div class="row">
                                                        <input type="hidden" name="product_id" value="1">

                                                        <input type="hidden" name="rating" value="5"
                                                            id="product_rating">

                                                        <div class="col-xl-12">
                                                            <textarea name="review" rows="3" placeholder="Write Your Review"></textarea>
                                                        </div>


                                                        <div class="col-12">
                                                            <a href="https://foodhat.technosoftintegration.com/login"
                                                                class="common_btn" type="button">Please Login First</a>

                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('script')
<script>
    $(document).ready(function() {
        $(".favorite-button").click(function(e) {
            e.preventDefault();

            var button = $(this);
            var productId = button.data("product-id");
            var isFavorited = button.data("is-favorited") === "true";

            $.ajax({
                type: "POST", // You can use POST or GET as needed
                url: "/product/{id}",
                data: {
                    product_id: productId,
                    is_favorited: !isFavorited // Toggle the favorited status
                },
                success: function(response) {
                    if (response.isFavorited) {
                        button.data("is-favorited", "true");
                        button.find("i").removeClass("icon-heart").addClass("fas fa-heart");
                        button.text("Remove from Favorites");
                    } else {
                        button.data("is-favorited", "false");
                        button.find("i").removeClass("fas fa-heart").addClass("icon-heart");
                        button.text("Add to Favorites");
                    }
                }
            });
        });
    });
</script>
@endsection