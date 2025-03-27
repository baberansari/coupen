@extends('layouts.site.site')
@section('content')
    {{--  Slider  --}}

    <div class="top-area">
        <div class="mod-head-slide">
            <div class="grid_frame">
                <div class="wrap-slide">

                    <div id="sys_head_slide" class="head-slide flexslider">
                        <div class="flex-viewport" style="overflow: hidden; position: relative;">
                            {{-- <ul class="slides"
                                style="width: 1000%; transition-duration: 0s; transform: translate3d(-1068px, 0px, 0px);">
                                     @foreach (geTopTrendingStore() as $store)

                                    <li class="clone" aria-hidden="true"
                                        style="width: 1068px; float: left; display: block;">
                                        <img src="https://discountvaults.com/{{ $store->store_logo }}" alt="" draggable="false">
                                    </li>
                                @endforeach
                            </ul> --}}
                            <ul class="slides">
                                <li>
                                    <img src="{{ asset('site/images/ex/01_banner.jpg')}}" alt=""/>
                                </li>
                                <li>
                                    <img src="{{ asset('site/images/ex/02_banner.jpg')}}" alt=""/>
                                </li>
                                <li>
                                    <img src="{{ asset('site/images/ex/03_banner.jpg')}}" alt=""/>
                                </li>
                            </ul>
                        </div>
                        <ol class="flex-control-nav flex-control-paging">

                        </ol>
                        <ul class="flex-direction-nav">
                            <li><a class="flex-prev" href="#">Previous</a></li>
                            <li><a class="flex-next" href="#">Next</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- End slider --}}
    {{-- Filter --}}
    {{-- <div id="sys_mod_filter" class="mod-filter fix-top">
        <div class="grid_frame">
            <div class="container_grid clearfix">
                <div class="grid_12">
                    <div class="lbl-search">
                        <input class="txt-search" id="sys_txt_search" type="search" placeholder="Search">
                        <input type="submit" class="btn-search" value="">
                    </div>
                    <div class="select-cate">
                        <div id="sys_selected_val" class="show-val">
                            <span data-cate-id="0">All type</span>
                            <i class="pick-down"></i>
                        </div>
                        <div id="sys_list_dd_cate" class="dropdown-cate">
                            <div class="first-lbl">All Categories</div>
                            <div class="wrap-list-cate clearfix">
                                <a href="#" data-cate-id="1">Baby &amp; Toddler</a>
                                <a href="#" data-cate-id="2">Automotive </a>
                                <a href="#" data-cate-id="3">Beverages</a>
                                <a href="#" data-cate-id="4">Books &amp; Magazines</a>
                                <a href="#" data-cate-id="5">Foods </a>
                                <a href="#" data-cate-id="6">Health Care</a>
                                <a href="#" data-cate-id="7">Home Entertainment</a>
                                <a href="#" data-cate-id="8">Personal Care </a>
                                <a href="#" data-cate-id="9">Pet Care </a>
                                <a href="#" data-cate-id="10">Professional Services </a>
                                <a href="#" data-cate-id="11">Toys and Games</a>
                                <a href="#" data-cate-id="12">Coupon Codes</a>
                                <a href="#" data-cate-id="13">Recipes</a>
                                <a href="#" data-cate-id="14">Household </a>
                            </div>
                        </div>
                    </div><!--end: .select-cate -->
                    <div class="range-days-left">
                        <span class="lbl-day">Days left</span>
                        <span id="sys_min_day" class="min-day">1</span>
                        <div id="sys_filter_days_left"
                            class="filter-days noUi-target noUi-ltr noUi-horizontal noUi-background">
                            <div class="noUi-base">
                                <div class="noUi-origin noUi-connect" data-style="left" style="left: 0%;">
                                    <div class="noUi-handle noUi-handle-lower"></div>
                                </div>
                                <div class="noUi-origin noUi-background" data-style="left" style="left: 49.6855%;">
                                    <div class="noUi-handle noUi-handle-upper"></div>
                                </div>
                            </div>
                        </div>
                        <span id="sys_max_day" class="max-day">80</span>
                    </div><!--end: .range-days-left -->
                    <input id="sys_apply_filter" class="btn btn-red type-1 btn-apply-filter" type="button"
                        value="Apply Filter">
                </div>
            </div>
        </div>
    </div> --}}
    {{-- <div id="sys_tmp_height_filter" style="height: 80px;"></div> --}}
    {{-- Filter  --}}

    {{-- Grid Fram  --}}

    <div class="grid_frame page-content">
        <div class="container_grid">
            <div class="mod-grp-coupon block clearfix">
                <div class="grid_12">
                    <h3 class="title-block has-link">
                        Trending Coupons
                        <a href="#" class="link-right">See all <i class="pick-right"></i></a>
                    </h3>
                </div>
                <div class="block-content list-coupon clearfix">
                    @foreach (geTopTrendingCoupen() as $coupen)

                    <div class="coupon-item grid_3">
                        <div class="coupon-content">
                            <div class="img-thumb-center">
                                <div class="wrap-img-thumb">
                                    <span class="ver_hold"></span>
                                    <a href="#" class="ver_container"><img src="{{ asset($coupen->store->store_logo) }}"
                                            alt="$COUPON_TITLE"></a>
                                </div>
                            </div>
                            {{-- <div class="coupon-price">{{ $coupen->store->discount_title }} Off</div> --}}
                            <div class="coupon-brand">{{ $coupen->store->store_name }}</div>
                            <div class="coupon-desc">{{ $coupen->offer_title }} </div>
                            <div class="time-left">{{ $coupen->offer_expiry_date }}</div>
                            <a class="btn btn-blue btn-take-coupon"
                            type="button"  onclick="getCode('{{ $coupen->id }}',this)" data-offer_id="{{ $coupen->id  }}"
                                    href="javascript:;" class="offer_anchor" data-offer_affiliate_url="{{ $coupen->store->store_affiliate_url}}"

                            >Take Coupon</a>
                        </div>
                        <i class="stick-lbl hot-sale"></i>
                    </div><!--end: .coupon-item -->

                    @endforeach
                </div>
            </div><!--end block: New Coupons-->
            <div class="mod-grp-coupon block clearfix">
                <div class="grid_12">
                    <h3 class="title-block has-link">
                        Trending Store
                        <a href="#" class="link-right">See all <i class="pick-right"></i></a>
                    </h3>
                </div>
                <div class="block-content list-coupon clearfix">

                    @foreach (geTopTrendingStore() as $store)


                    <div class="coupon-item grid_3">
                        <div class="coupon-content">
                            <div class="img-thumb-center">
                                <div class="wrap-img-thumb">
                                    <span class="ver_hold"></span>
                                    <a href="#" class="ver_container"><img src="{{asset($store->store_logo)}}"
                                            alt="$COUPON_TITLE"></a>
                                </div>
                            </div>
                            {{-- <div class="coupon-price">$12.00 Off</div> --}}
                            <div class="coupon-brand">{{ $store->store_name }}</div>
                            <div class="coupon-desc"> {!! $store->store_description  !!}</div>

                            <a class="btn btn-blue btn-take-coupon" href="{{ route('store',$store->store_slug) }}">VIEW STORE</a>
                        </div>
                        <i class="stick-lbl hot-sale"></i>
                    </div><!--end: .coupon-item -->
                    @endforeach
                </div>
                <a class="grid_6 btn btn-orange btn-load-more" href="#">Load more coupon</a>
            </div><!--end block: Featured Coupons-->
            <div class="mod-email-newsletter clearfix">
                <div class="grid_12">
                    <div class="wrap-form clearfix">
                        <div class="left-lbl">
                            <div class="big-lbl">newsletter</div>
                            <div class="sml-lbl">Don't miss a chance!</div>
                        </div>
                        <div class="wrap-email">
                            <label for="sys_email_newsletter">
                                <input type="email" id="sys_email_newsletter" placeholder="Enter your email here">
                            </label>
                        </div>
                        <button class="btn btn-orange btn-submit-email" type="submit">SUBSCRIBE NOW</button>
                    </div>
                </div>
            </div><!--end: .mod-email-newsletter-->
            <div class="mod-brands block clearfix">
                <div class="grid_12">
                    <h3 class="title-block has-link">
                        POPULAR CATEGORIES
                        <a href="{{ route('categories') }}" class="link-right">See all <i class="pick-right"></i></a>
                    </h3>
                </div>
                <div class="block-content list-brand clearfix">
                    @foreach (getTrendingCategory() as $category)


                    <div class="brand-item grid_4">
                        <div class="brand-content">
                            <div class="brand-logo">
                                <div class="wrap-img-logo">
                                    <span class="ver_hold"></span>
                                    <a href="{{ route('store-by-category',$category->slug) }}" class="ver_container"><img src="{{asset($category->image)}}"
                                            alt="$BRAND_TITLE"></a>
                                            {{ $category->name }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end: .brand-item -->

                    @endforeach
                </div>
            </div><!--end: .mod-brand -->





    <section class="container mod-brands block clearfix ko-faq-section">
        <div class="ko-container">
            <h2>Frequently asked questions</h2>
            <p>Question you might ask about our services.</p>
            <div class="ko-faq-accordion">

                    <div class="ko-accordion-item">
                        <div class="ko-accordion-item-header">How can Discountvaults help me save money while shopping online?</div>
                        <div class="ko-accordion-item-body">
                            <p class="ko-accordion-item-body-content">At Discountvaults, you will find tons of coupons, deals, promotions, and sales offers of your desired brand which you can use at Checkout while shopping online. These codes will help you save money.</p>
                        </div>
                    </div>
                    <div class="ko-accordion-item">
                        <div class="ko-accordion-item-header">How many brands does Discountvaults have discount codes & coupon codes for?</div>
                        <div class="ko-accordion-item-body">
                            <p class="ko-accordion-item-body-content">Discountvaults has discount codes & coupon codes for almost 2000+ stores, and brands. Our team of experienced Deal Hunters is constantly looking for latested deals, discounts, and coupon codes for our prestige users so that they can save money while shopping online or in-store.</p>
                        </div>
                    </div>
                    <div class="ko-accordion-item">
                        <div class="ko-accordion-item-header">Does Discountvaults provide cashback offers?</div>
                        <div class="ko-accordion-item-body">
                            <p class="ko-accordion-item-body-content">Right now, we are not offering any Cashback for online purchaes.</p>
                        </div>
                    </div>
                    <div class="ko-accordion-item">
                        <div class="ko-accordion-item-header">Does Discountvaults have a browser extension?</div>
                        <div class="ko-accordion-item-body">
                            <p class="ko-accordion-item-body-content">Right now, Discountvaults have no browser extension but our team of professionals are working on it.</p>
                        </div>
                    </div>

                    <div class="ko-accordion-item">
                        <div class="ko-accordion-item-header">Does Discountvaults have an Mobile Application?</div>
                        <div class="ko-accordion-item-body">
                            <p class="ko-accordion-item-body-content">Right now, Discountvaults have no Mobile Application.</p>
                        </div>
                    </div>
            </div>
        </div>
    </section>
        </div>
    </div>
@endsection
