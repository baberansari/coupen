@extends('layouts.site.site')
@section('content')
    <!-- Header Section Start -->
    <section class="banner-sec">
        <div class="container">
            <div class="contentbox">
                <div class="head_madad">
                    <span class="ali_madad">Ya Ali. AS Madad</span>
                </div>
                <h1 style="font-size:22px;">All Your voucher codes in one place</h1>
                <span>best destination for vouchers and discounts</span>
                <div class="searchbar searchbox" id="searchbox">
                    <div class="searchbar-main">
                        <input type="search" placeholder="what are you looking for?" />
                        <i class="fa fa-search"></i>
                    </div>
                    <input type="hidden" name="search-filter" value="All category" id="search-filter">
                    <div>
                        <ul style="display:none;" class="list-unstyled search-results results">
                        </ul>
                    </div>
                </div>
                <ul class="category-links list-unstyled d-flex align-items-center justify-content-center">
                    <li><a href="groupon-ae-discount-code.html">Groupon AE</a></li>
                    <li><a href="lookfantastic-discount-code.html">Lookfantastic</a></li>
                    <li><a href="mobiles-and-sim-deals.html">Carphone Warehouse</a></li>
                    <li><a href="pretty-little-things-discount-code.html">Pretty Little Things (UK)</a></li>
                </ul>
            </div>
            <div class="category-tiles cat-banner-tiles">




                <div id="bokeh-background"></div>
                <div class="slider-container">
                    <div class="slider-wrapper">
                        <div class="slider">
                            @foreach ($stores3->chunk(3) as $chunk)
                                <div class="slide-group active">
                                    @foreach ($chunk as $store_value)
                                        <div class="card" data-tilt>
                                            <img src="{{ asset($store_value->store_logo) }}"
                                                alt="{{ $store_value->store_name }}">
                                            <h3>{{ $store_value->store_name }}</h3>
                                            <p>{{ $store_value->store_name }}</p>
                                           <a  href="{{ route('store',$store_value->store_slug) }}"> <button class="card-button"><i class="fa fa-arrow-right"></i></button></a>
                                        </div>
                                    @endforeach
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <button class="nav-btn prev-btn">
                        <i class="fas fa-chevron-left"></i>
                    </button>
                    <button class="nav-btn next-btn">
                        <i class="fas fa-chevron-right"></i>
                    </button>

                    <div class="slider-dots"></div>
                </div>
                {{-- <div class="row">
                    @foreach ($stores3 as $store_value)
                    <div class="col-lg-4 col-md-4 col-9">
                        <a data-offer_id="5521" href="javascript:;" class="offer_anchor d-block mainbox">
                            <div class="imgbox">
                                <img class="w-100" src="{{ asset($store_value->store_logo) }}" alt="Category Image" />
                            </div>
                            <div class="contentbox">
                                <div class="brand-logo">
                                    <img class="w-100" src="{{ asset($store_value->store_logo) }}"
                                        alt="Brand Logo" />
                                </div>
                                <p class="descrpt">
                                   {{$store_value->store_name}} </p>
                            </div>
                        </a>
                    </div>
                    @endforeach

                </div> --}}
            </div>
            {{-- <a class="banner-bottom-link" style="color: white;">When you buy through links on RetailEscaper we may
                earn a commission.
            </a> --}}
        </div>
    </section>

    <!-- Banner Section End -->

    <!-- Top Coupon Section Start -->

    <section class="top-coupon-sec product-tiles">
        <div class="container">
            <div class="sec-title">
                <h3>Trending Coupon</h3>
                <a href="#">View all</a>
            </div>
            <div class="row">

                @foreach (geTopTrendingCoupen() as $coupen)
                <div class="col-lg-3 col-md-4">
                    <a onclick="getCode('{{$coupen->id}}',this)" data-offer_id="{{$coupen->id}}" href="javascript:;" class="offer_anchor" data-offer_affiliate_url="{{$coupen->store->store_affiliate_url}}">
                        <div class="mainbox">
                            <div class="imgbox">
                                <img class="w-100" src="{{ asset($coupen->store->store_logo) }}"
                                    alt="{{ asset($coupen->store->store_logo) }}" />
                            </div>
                            <div class="contentbox">
                                <span>{{ $coupen->store->store_name }}</span>
                                <p>{{ $coupen->offer_exclusive?'Exclusive :':'' }}  {{ $coupen->offer_title }}</p>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach



            </div>
        </div>
    </section>

    <!-- Top Coupon Section End -->

    <!-- Clothing And Accessories Section Start -->

    <section class="clothing-and-accessories-sec product-tiles">
        <div class="container">
            <div class="sec-title" style="padding-top:20px;">
                <h3>Top Trending Coupen</h3>
                <a href="categories.html">View all</a>
            </div>
            <div class="row">
                @foreach (geTopTrendingCoupen() as $coupen)
                <div class="col-lg-3 col-md-4">
                    <a onclick="getCode('{{$coupen->id}}',this)" data-offer_id="{{$coupen->id}}" href="javascript:;" class="offer_anchor" data-offer_affiliate_url="{{$coupen->offer_affiliate_url}}">
                        <div class="mainbox">
                            <div class="imgbox">
                                <img class="w-100" src="{{ asset($coupen->store->store_logo) }}"
                                    alt="{{ asset($coupen->store->store_logo) }}" />
                            </div>
                            <div class="contentbox">
                                <span>{{ $coupen->store->store_name }}</span>
                                <p>{{ $coupen->offer_exclusive??'Exclusive' }} : {{ $coupen->offer_title }}</p>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach

            </div>
        </div>
    </section>


    <!-- Start see on -->
    <section class="partner-sections pad-y hide_seen">
        <div class="container">
            <div class="main-heading text-center">
                <h2 class="secondary-text mb-3 fw-700">Category</h2>
            </div>
            <div class="wrap">
                <div class="slide-container">
                    <ul class="slides">
                        @foreach (getCategory() as $category)
                            <li>
                                <p class="card-2">
                                    <img class="img-fluid" style="    height: 170px;!important"
                                        src="{{ asset($category->image) }}" alt="brand-logo">
                                </p>
                                {{ $category->name }}
                            </li>
                        @endforeach
                        s
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!--  End  See on -->

    <!-- Never Miss Another Deal Section Start -->


    <!-- Never Miss Another Deal Section End--> <!-- Coupon Popup Start -->

    <div class="overlay"></div>
    <section id="coupon_modal" class="coupon-popup-sec">
        <div class="coupon-popup-main">
            <div class="container">
                <div class="contentbox">
                    <i class="close-btn fas fa-times"></i>
                    <div class="row">
                        <div class="titlebox margin_title col-md-3">
                            <img src="#" alt="Brand Image">
                        </div>
                        <div class="copy-code col-md-8" id="">
                            <h4 class="main_title">Extra 10% Off Sitewide + Free Shipping</h4>
                            <h4 class="no_code" style="display: none;">No coupon code required.</h4>
                            <div style="line: height 1.4em; margin:5px; margin-top:9px;">Join $100 Cashback offer by
                                signing up for the program <br> using this link button: <button
                                    class="cashback_btn btn_cashback" id="openCashbackModal">"Win $100
                                    Cashback"</button></div>

                            <div class="mycustom">

                                <input class="code-text" id="copyTarget" value="EMAILFF10" type="text"
                                    name="">
                                <div class="input-group-prepend">
                                    <a style="background-color: #FE9213; color: white;" href="javascript:;"
                                        id="copyButton" class="btn btn-primary btn-sm"><i
                                            class="far fa-clone fa-flip-vertical"></i></a>
                                </div>
                            </div>
                            <div class="flex">

                                <span>Copy and paste this code at <a data-offer_id="" href="javascript:;"
                                        class="offer_anchor mainbox store_link"></a></span>

                            </div>
                        </div>
                        <div class="col-md-1"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="popup-btn-box margin_top_b">
                                <div class="work-btn-box">
                                    <span>Did it work?</span>
                                    <div class="toggle-radio">
                                        <input type="radio" data-id="" class="rdo" name="rdo"
                                            id="yes" value="yes">
                                        <input type="radio" data-id="" class="rdo" name="rdo"
                                            id="no" value="no">
                                        <input type="hidden" value="" class="offer_id">
                                        <div class="switch">
                                            <label for="yes">Yes</label>
                                            <label for="no">No</label>
                                            <span></span>
                                        </div>
                                    </div>
                                </div>
                                <a class="continue-btn" style="background-color: #ff00008f;" href="javascript:;">Continue
                                    to Store</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Coupon Popup End -->
    <!-- Cashback Modal -->
    <div id="cashbackModal" class="modal">
        <div class="modal-content">
            <span class="closei" id="closeCashbackModal">&times;</span>
            <h2>Signup & Win $100 Cashback</h2>
            <form id="cashbackForm">
                <label for="name">Name</label>
                <input type="text" id="name_" name="name_">

                <label for="email">Email</label>
                <input type="email" id="email_" name="email_">

                <button type="submit" class="btn-primry"><span>Submit</span></button>
            </form>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            const slider = $(".slider");
            const slideGroups = $(".slide-group");
            const totalSlides = slideGroups.length;
            let currentSlide = 0;

            const dotsContainer = $(".slider-dots");
            for (let i = 0; i < totalSlides; i++) {
                dotsContainer.append(`<div class="dot ${i === 0 ? "active" : ""}"></div>`);
            }

            $(".next-btn").click(() => navigate(1));
            $(".prev-btn").click(() => navigate(-1));

            $(".dot").click(function() {
                const index = $(this).index();
                goToSlide(index);
            });

            function navigate(direction) {
                currentSlide = (currentSlide + direction + totalSlides) % totalSlides;
                goToSlide(currentSlide);
            }

            function goToSlide(index) {
                slider.css("transform", `translateX(-${index * 100}%)`);
                $(".dot").removeClass("active").eq(index).addClass("active");
                currentSlide = index;
            }

            $(".card").each(function() {
                const card = $(this);

                card.on("mousemove", function(e) {
                    const rect = this.getBoundingClientRect();
                    const x = e.clientX - rect.left;
                    const y = e.clientY - rect.top;

                    const centerX = rect.width / 2;
                    const centerY = rect.height / 2;

                    const rotateX = ((y - centerY) / centerY) * 15;
                    const rotateY = ((centerX - x) / centerX) * 15;

                    this.style.setProperty("--card-rotate-x", `${rotateX}deg`);
                    this.style.setProperty("--card-rotate-y", `${rotateY}deg`);
                });

                card.on("mouseleave", function() {
                    this.style.setProperty("--card-rotate-x", "0deg");
                    this.style.setProperty("--card-rotate-y", "0deg");
                });
            });

            let touchStartX = 0;
            let touchEndX = 0;

            slider.on("touchstart", function(e) {
                touchStartX = e.originalEvent.touches[0].clientX;
            });

            slider.on("touchend", function(e) {
                touchEndX = e.originalEvent.changedTouches[0].clientX;
                const diff = touchStartX - touchEndX;

                if (Math.abs(diff) > 50) {
                    navigate(diff > 0 ? 1 : -1);
                }
            });

            const $bokehBackground = $("#bokeh-background");
            const numBokeh = 25;
            const colors = [{
                    start: "rgba(255, 69, 0, .6)",
                    end: "rgba(255, 69, 0, 0.25)"
                },
                {
                    start: "rgba(255, 0, 0, .6)",
                    end: "rgba(255, 0, 0, 0.25)"
                },
                {
                    start: "rgba(255, 165, 0, .6)",
                    end: "rgba(255, 165, 0, 0.25)"
                },
                {
                    start: "rgba(255, 20, 147, .6)",
                    end: "rgba(255, 20, 147, 0.25)"
                },
                {
                    start: "rgba(238, 130, 238, .6)",
                    end: "rgba(238, 130, 238, 0.25)"
                },
                {
                    start: "rgba(148, 0, 211, .6)",
                    end: "rgba(148, 0, 211, 0.25)"
                }
            ];

            for (let i = 0; i < numBokeh; i++) {
                const $bokeh = $("<div>").addClass("bokeh");
                const size = Math.random() * 120 + 50;
                const left = Math.random() * 100;
                const top = Math.random() * 100;
                const color = colors[Math.floor(Math.random() * colors.length)];
                const background = `radial-gradient(circle, ${color.start} 0%, ${color.end} 100%)`;
                const animationDelay = `${Math.random() * 2}s`;
                const animationDuration = `${Math.random() * 10 + 10}s`;

                $bokeh.css({
                    width: `${size}px`,
                    height: `${size}px`,
                    left: `${left}%`,
                    top: `${top}%`,
                    background: background,
                    animationDelay: animationDelay,
                    animationDuration: animationDuration
                });

                $bokehBackground.append($bokeh);
            }
        });



        $(document).ready(function() {
            $slides = $('.slides');
            $slides.bind('contentchanged', function() {
                animate($slides);
            });
            animate($slides);
        });

        function animate($slides) {
            var slidesLength = $slides.find('li').length;
            if (slidesLength > 3) {
                $slides.find('li:nth-last-child(-n+3)').clone().prependTo($slides);
                $slides.addClass('animate');
                $slides.css('animation-duration', slidesLength * 2 + 's');
            }
        }
    </script>
@endsection
