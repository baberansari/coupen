@extends('layouts.site.site')
@section('content')


    <div class="mobile-header">
        <div class="container">
            <div class="mainbox">
                <div class="logo">
                    <a href="index.html">
                        <img class="w-100" src="uploads/settings/retailescaper.svg" alt="Header Logo" />
                    </a>
                </div>
                <div class="searchbar searchbox" id="searchbox_nav">
                    <input type="search" placeholder="what are you looking for?" />
                    <i class="fa fa-search"></i>
                    <div>
                        <ul style="border-top-left-radius: 25px;border-top-right-radius: 25px; top: 101%; display:none;"
                            class="list-unstyled search-results results results_nav">

                        </ul>

                    </div>
                </div>
                <div class="mobile-nav-btn">
                    <i class="fa fa-bars"></i>
                </div>
            </div>
        </div>
    </div>

    <div class="mobile-nav-main">
        <div class="mobile-nav">
            <i class="fa fa-times close_btn"></i>
            <a href="#" class="logo">
                <img class="w-100" src="uploads/settings/rs21.png" alt="Logo" />
            </a>
            <h6>Browse By Category</h6>
            <ul class="list-unstyled">
                <li>
                    <a href="category/sportswear.html"><img src="uploads/category/Sportswear.png" alt="Sportswear" />
                        <span>Sportswear</span></a>
                </li>
                <li>
                    <a href="category/home-%26-garden.html"><img src="uploads/category/Home-And-Garden.png"
                            alt="Home & Garden" /> <span>Home & Garden</span></a>
                </li>
                <li>
                    <a href="category/clothing.html"><img src="uploads/category/clothing3.png" alt="Clothing" />
                        <span>Clothing</span></a>
                </li>
                <li>
                    <a href="category/travel-%26-tickets.html"><img src="uploads/category/Travel-and-ticket.png"
                            alt="Travel & Tickets" /> <span>Travel & Tickets</span></a>
                </li>
                <li>
                    <a href="category/health-%26-beauty.html"><img src="uploads/category/Health-And-Beauty.png"
                            alt="Health & Beauty" /> <span>Health & Beauty</span></a>
                </li>
                <li>
                    <a href="category/computer-accessories.html"><img src="uploads/category/Computer-Accessories.png"
                            alt="Computer Accessories" /> <span>Computer Accessories</span></a>
                </li>
                <li>
                    <a href="category/e-commerce.html"><img src="uploads/category/Ecommerce.png" alt="E-commerce" />
                        <span>E-commerce</span></a>
                </li>
                <li>
                    <a href="category/department-store.html"><img src="uploads/category/Department-store.png"
                            alt="Department Store" /> <span>Department Store</span></a>
                </li>
                <li>
                    <a href="category/home-and-rooms.html"><img src="uploads/category/Home-And-Accomodation.png"
                            alt="Home & Rooms" /> <span>Home & Rooms</span></a>
                </li>
                <li>
                    <a href="category/gifts.html"><img src="uploads/category/Gift.png" alt="Gifts" />
                        <span>Gifts</span></a>
                </li>
            </ul>
        </div>
    </div>

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
                <div class="row">
                    @foreach ($stores3 as $store_value)
                    <div class="col-lg-4 col-md-4 col-9">
                        <a data-offer_id="5521" href="javascript:;" class="offer_anchor d-block mainbox">
                            <div class="imgbox">
                                <img class="w-100" src="uploads/store/carphone_fi.png" alt="Category Image" />
                            </div>
                            <div class="contentbox">
                                <div class="brand-logo">
                                    <img class="w-100" src="uploads/store/Carphone_warehouse.png"
                                        alt="Brand Logo" />
                                </div>
                                <p class="descrpt">
                                   {{$store_value->store_name}} </p>
                            </div>
                        </a>
                    </div>
                    @endforeach

                </div>
            </div>
            <a class="banner-bottom-link" style="color: white;">When you buy through links on RetailEscaper we may
                earn a commission.
            </a>
        </div>
    </section>

    <!-- Banner Section End -->

    <!-- Top Coupon Section Start -->

    <section class="top-coupon-sec product-tiles">
        <div class="container">
            <div class="sec-title">
                <h3>Top Coupon</h3>
                <a href="#">View all</a>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-4">
                    <a data-offer_id="3949" href="javascript:;" class="offer_anchor">
                        <div class="mainbox">
                            <div class="imgbox">
                                <img class="w-100" src="uploads/store/newchic-discount-code.png"
                                    alt="https://retailescaper.com/uploads/store/newchic-discount-code.png" />
                            </div>
                            <div class="contentbox">
                                <span>exclusive code</span>
                                <p>Exclusive : 22% OFF on orders over $110</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-4">
                    <a data-offer_id="7155" href="javascript:;" class="offer_anchor">
                        <div class="mainbox">
                            <div class="imgbox">
                                <img class="w-100" src="uploads/store/vevor_coupon_code.png"
                                    alt="https://retailescaper.com/uploads/store/vevor_coupon_code.png" />
                            </div>
                            <div class="contentbox">
                                <span>exclusive code</span>
                                <p>Exclusive: 5% Off on orders of $189 or more</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-4">
                    <a data-offer_id="8470" href="javascript:;" class="offer_anchor">
                        <div class="mainbox">
                            <div class="imgbox">
                                <img class="w-100" src="uploads/store/aeropostale1.png"
                                    alt="https://retailescaper.com/uploads/store/aeropostale1.png" />
                            </div>
                            <div class="contentbox">
                                <span>exclusive code</span>
                                <p>60% Off Sitewide</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-4">
                    <a data-offer_id="7720" href="javascript:;" class="offer_anchor">
                        <div class="mainbox">
                            <div class="imgbox">
                                <img class="w-100" src="uploads/store/baltiniresized.png"
                                    alt="https://retailescaper.com/uploads/store/baltiniresized.png" />
                            </div>
                            <div class="contentbox">
                                <span>exclusive code</span>
                                <p>15% Off All Orders</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-4">
                    <a data-offer_id="9784" href="javascript:;" class="offer_anchor">
                        <div class="mainbox">
                            <div class="imgbox">
                                <img class="w-100" src="uploads/store/aerosoles.png"
                                    alt="https://retailescaper.com/uploads/store/aerosoles.png" />
                            </div>
                            <div class="contentbox">
                                <span>exclusive code</span>
                                <p>25% Off Sitewide</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-4">
                    <a data-offer_id="15931" href="javascript:;" class="offer_anchor">
                        <div class="mainbox">
                            <div class="imgbox">
                                <img class="w-100" src="uploads/store/lego-coupon-code-logo2.png"
                                    alt="https://retailescaper.com/uploads/store/lego-coupon-code-logo2.png" />
                            </div>
                            <div class="contentbox">
                                <span>exclusive code</span>
                                <p>Christmas gifts: Up To 15% Off Selected Toys</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-4">
                    <a data-offer_id="6465" href="javascript:;" class="offer_anchor">
                        <div class="mainbox">
                            <div class="imgbox">
                                <img class="w-100" src="uploads/store/Monica_Vinader.png"
                                    alt="https://retailescaper.com/uploads/store/Monica_Vinader.png" />
                            </div>
                            <div class="contentbox">
                                <span>exclusive code</span>
                                <p>30% Off on Everything with Monica Vinader Coupon Code</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-4">
                    <a data-offer_id="1101" href="javascript:;" class="offer_anchor">
                        <div class="mainbox">
                            <div class="imgbox">
                                <img class="w-100" src="uploads/store/shein-discount-code.png"
                                    alt="https://retailescaper.com/uploads/store/shein-discount-code.png" />
                            </div>
                            <div class="contentbox">
                                <span>exclusive code</span>
                                <p>SHEIN 25% Off Coupon Code</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-4">
                    <a data-offer_id="9304" href="javascript:;" class="offer_anchor">
                        <div class="mainbox">
                            <div class="imgbox">
                                <img class="w-100" src="uploads/store/Pretty_logo.png"
                                    alt="https://retailescaper.com/uploads/store/Pretty_logo.png" />
                            </div>
                            <div class="contentbox">
                                <span>exclusive code</span>
                                <p>25% Off Everything</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-4">
                    <a data-offer_id="9859" href="javascript:;" class="offer_anchor">
                        <div class="mainbox">
                            <div class="imgbox">
                                <img class="w-100" src="uploads/store/the_deal_outlet_discount_code.png"
                                    alt="https://retailescaper.com/uploads/store/the_deal_outlet_discount_code.png" />
                            </div>
                            <div class="contentbox">
                                <span>exclusive code</span>
                                <p>Exlclusive: 20% Off Site-wide</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-4">
                    <a data-offer_id="17073" href="javascript:;" class="offer_anchor">
                        <div class="mainbox">
                            <div class="imgbox">
                                <img class="w-100" src="uploads/store/yosuda.png"
                                    alt="https://retailescaper.com/uploads/store/yosuda.png" />
                            </div>
                            <div class="contentbox">
                                <span>exclusive code</span>
                                <p>Black Friday Cyber Monday: Up To 35% Off</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-4">
                    <a data-offer_id="297" href="javascript:;" class="offer_anchor">
                        <div class="mainbox">
                            <div class="imgbox">
                                <img class="w-100" src="uploads/store/jacamo-discount-code.png"
                                    alt="https://retailescaper.com/uploads/store/jacamo-discount-code.png" />
                            </div>
                            <div class="contentbox">
                                <span>exclusive code</span>
                                <p>20% Off On All Orders</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-4">
                    <a data-offer_id="10644" href="javascript:;" class="offer_anchor">
                        <div class="mainbox">
                            <div class="imgbox">
                                <img class="w-100" src="uploads/store/mallet.png"
                                    alt="https://retailescaper.com/uploads/store/mallet.png" />
                            </div>
                            <div class="contentbox">
                                <span>exclusive code</span>
                                <p>15% Off Sitewide</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-4">
                    <a data-offer_id="10290" href="javascript:;" class="offer_anchor">
                        <div class="mainbox">
                            <div class="imgbox">
                                <img class="w-100" src="uploads/store/charles--colvard-coupon-co.png"
                                    alt="https://retailescaper.com/uploads/store/charles--colvard-coupon-co.png" />
                            </div>
                            <div class="contentbox">
                                <span>exclusive code</span>
                                <p>10% Off On Your First Order</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-4">
                    <a data-offer_id="12504" href="javascript:;" class="offer_anchor">
                        <div class="mainbox">
                            <div class="imgbox">
                                <img class="w-100" src="uploads/store/samsung.png"
                                    alt="https://retailescaper.com/uploads/store/samsung.png" />
                            </div>
                            <div class="contentbox">
                                <span>exclusive code</span>
                                <p>Black Friday Sale: Get Up To 40% Off</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-4">
                    <a data-offer_id="8720" href="javascript:;" class="offer_anchor">
                        <div class="mainbox">
                            <div class="imgbox">
                                <img class="w-100" src="uploads/store/hushpuppies.png"
                                    alt="https://retailescaper.com/uploads/store/hushpuppies.png" />
                            </div>
                            <div class="contentbox">
                                <span>exclusive code</span>
                                <p>50% Off On Sale Items </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-4">
                    <a data-offer_id="290" href="javascript:;" class="offer_anchor">
                        <div class="mainbox">
                            <div class="imgbox">
                                <img class="w-100" src="uploads/store/the-body-shop.png"
                                    alt="https://retailescaper.com/uploads/store/the-body-shop.png" />
                            </div>
                            <div class="contentbox">
                                <span>exclusive code</span>
                                <p>Up To 50% Off On Selected Items</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-4">
                    <a data-offer_id="10534" href="javascript:;" class="offer_anchor">
                        <div class="mainbox">
                            <div class="imgbox">
                                <img class="w-100" src="uploads/store/moosejaw-coupon-code-logo.png"
                                    alt="https://retailescaper.com/uploads/store/moosejaw-coupon-code-logo.png" />
                            </div>
                            <div class="contentbox">
                                <span>exclusive code</span>
                                <p>Snow Sale Up To 50% Off</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-4">
                    <a data-offer_id="10031" href="javascript:;" class="offer_anchor">
                        <div class="mainbox">
                            <div class="imgbox">
                                <img class="w-100" src="uploads/store/vertagear-coupon-code-logo.png"
                                    alt="https://retailescaper.com/uploads/store/vertagear-coupon-code-logo.png" />
                            </div>
                            <div class="contentbox">
                                <span>exclusive code</span>
                                <p>Save Up To $50 on Selected Items</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-4">
                    <a data-offer_id="10597" href="javascript:;" class="offer_anchor">
                        <div class="mainbox">
                            <div class="imgbox">
                                <img class="w-100" src="uploads/store/carls-golfland.png"
                                    alt="https://retailescaper.com/uploads/store/carls-golfland.png" />
                            </div>
                            <div class="contentbox">
                                <span>exclusive code</span>
                                <p>Up To 50% Off Selected Items</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-4">
                    <a data-offer_id="10378" href="javascript:;" class="offer_anchor">
                        <div class="mainbox">
                            <div class="imgbox">
                                <img class="w-100" src="uploads/store/roborock-coupon-code-logo.png"
                                    alt="https://retailescaper.com/uploads/store/roborock-coupon-code-logo.png" />
                            </div>
                            <div class="contentbox">
                                <span>exclusive code</span>
                                <p>Sale: Get Up To 50% Off</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-4">
                    <a data-offer_id="16810" href="javascript:;" class="offer_anchor">
                        <div class="mainbox">
                            <div class="imgbox">
                                <img class="w-100" src="uploads/store/tj_hughes_discount_code.png"
                                    alt="https://retailescaper.com/uploads/store/tj_hughes_discount_code.png" />
                            </div>
                            <div class="contentbox">
                                <span>exclusive code</span>
                                <p>20% Off On Electric Heaters</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-4">
                    <a data-offer_id="10288" href="javascript:;" class="offer_anchor">
                        <div class="mainbox">
                            <div class="imgbox">
                                <img class="w-100" src="uploads/store/aeropostale1.png"
                                    alt="https://retailescaper.com/uploads/store/aeropostale1.png" />
                            </div>
                            <div class="contentbox">
                                <span>exclusive code</span>
                                <p>Buy 1 At Original Price, Get 1 Of Equal Or Lesser Value Free</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-4">
                    <a data-offer_id="13404" href="javascript:;" class="offer_anchor">
                        <div class="mainbox">
                            <div class="imgbox">
                                <img class="w-100" src="uploads/store/aspiga0000.png"
                                    alt="https://retailescaper.com/uploads/store/aspiga0000.png" />
                            </div>
                            <div class="contentbox">
                                <span>exclusive code</span>
                                <p>Summer Sale: Get Up To 50% Off</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Top Coupon Section End -->

    <!-- Clothing And Accessories Section Start -->

    <section class="clothing-and-accessories-sec product-tiles">
        <div class="container">
            <div class="sec-title" style="padding-top:20px;">
                <h3>Clothing & Acessories</h3>
                <a href="categories.html">View all</a>
            </div>
            <div class="row">

                <div class="col-lg-3 col-md-4">
                    <a data-offer_id="1061" href="javascript:;" class="offer_anchor">
                        <div class="mainbox">
                            <div class="imgbox">
                                <img class="w-100" src="uploads/store/jaggad-discount-code.png"
                                    alt="https://retailescaper.com/uploads/store/jaggad-discount-code.png" />
                            </div>
                            <div class="contentbox">
                                <span>exclusive code</span>
                                <p>20% Off sitewide with Jaggad Promo Code</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-4">
                    <a data-offer_id="1839" href="javascript:;" class="offer_anchor">
                        <div class="mainbox">
                            <div class="imgbox">
                                <img class="w-100" src="uploads/store/ickle-bubble-discount-code.png"
                                    alt="https://retailescaper.com/uploads/store/ickle-bubble-discount-code.png" />
                            </div>
                            <div class="contentbox">
                                <span>exclusive code</span>
                                <p>15% Off sitewide with Ickle Bubba Discount Code</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-4">
                    <a data-offer_id="350" href="javascript:;" class="offer_anchor">
                        <div class="mainbox">
                            <div class="imgbox">
                                <img class="w-100" src="uploads/store/boden-discount-code.png"
                                    alt="https://retailescaper.com/uploads/store/boden-discount-code.png" />
                            </div>
                            <div class="contentbox">
                                <span>exclusive code</span>
                                <p>20% Off On All Orders</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-4">
                    <a data-offer_id="10278" href="javascript:;" class="offer_anchor">
                        <div class="mainbox">
                            <div class="imgbox">
                                <img class="w-100" src="uploads/store/the0000.png"
                                    alt="https://retailescaper.com/uploads/store/the0000.png" />
                            </div>
                            <div class="contentbox">
                                <span>exclusive code</span>
                                <p>Extra 20% Off Everything</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Clothing And Accessories Section End -->


    <!-- Jewellery And Watches Section Start -->

    <section class="jewelry-watch-sec product-tiles">
        <div class="container">
            <div class="sec-title">
                <h3>Travel & Tickets</h3>
                <a href="categories.html">View all</a>
            </div>
            <div class="row">

                <div class="col-lg-3 col-md-4">
                    <a data-offer_id="257" href="javascript:;" class="offer_anchor">
                        <div class="mainbox">
                            <div class="imgbox">
                                <img class="w-100" src="uploads/store/agoda-discount-code.png"
                                    alt="https://retailescaper.com/uploads/store/agoda-discount-code.png" />
                            </div>
                            <div class="contentbox">
                                <span>exclusive code</span>
                                <p>28% Off Sitewide Hotel + Flight Packages</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-4">
                    <a data-offer_id="1185" href="javascript:;" class="offer_anchor">
                        <div class="mainbox">
                            <div class="imgbox">
                                <img class="w-100" src="uploads/store/qatar_airways_discount_code.png"
                                    alt="https://retailescaper.com/uploads/store/qatar_airways_discount_code.png" />
                            </div>
                            <div class="contentbox">
                                <span>exclusive code</span>
                                <p>20% Off On All Bookings</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-4">
                    <a data-offer_id="3891" href="javascript:;" class="offer_anchor">
                        <div class="mainbox">
                            <div class="imgbox">
                                <img class="w-100" src="uploads/store/emirates-discount-code1.png"
                                    alt="https://retailescaper.com/uploads/store/emirates-discount-code1.png" />
                            </div>
                            <div class="contentbox">
                                <span>exclusive code</span>
                                <p>10% Off Economy Flights</p>
                            </div>
                        </div>
                    </a>
                </div>


            </div>
        </div>
    </section>

    <!-- Jewellery And Watches Section End -->

    <!-- Top Stores And Top Category Section Start -->

    <section class="top-store-category-sec">
        <div class="container">
            <div id="accordion" class="accordion-container">
                <div class="content-entry">
                    <div class="accordion-title">
                        <h4>Top Stores</h4>
                    </div>
                    <div class="accordion-content">
                        <div class="product-tiles">
                            <div class="row">
                                <div class="col-lg-3 col-md-4">
                                    <a class="gray_link" href="1001-optical-discount-codes.html">


                                        <div class="contentbox">
                                            <p><span>1001 Optical</span>
                                            <p>
                                        </div>

                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4">
                                    <a class="gray_link" href="365-tickets-discount-codes.html">


                                        <div class="contentbox">
                                            <p><span>365 Tickets</span>
                                            <p>
                                        </div>

                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4">
                                    <a class="gray_link" href="adairs-coupon-code.html">


                                        <div class="contentbox">
                                            <p><span>Adairs</span>
                                            <p>
                                        </div>

                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4">
                                    <a class="gray_link" href="appliances-direct-discount-code.html">


                                        <div class="contentbox">
                                            <p><span>Appliances Direct UK</span>
                                            <p>
                                        </div>

                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4">
                                    <a class="gray_link" href="banggood-coupon.html">


                                        <div class="contentbox">
                                            <p><span>Banggood</span>
                                            <p>
                                        </div>

                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4">
                                    <a class="gray_link" href="barkshop-discount-code.html">


                                        <div class="contentbox">
                                            <p><span>BarkShop </span>
                                            <p>
                                        </div>

                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4">
                                    <a class="gray_link" href="bloomchic-coupon-code.html">


                                        <div class="contentbox">
                                            <p><span>Bloomchic</span>
                                            <p>
                                        </div>

                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4">
                                    <a class="gray_link" href="chegg-coupons.html">


                                        <div class="contentbox">
                                            <p><span>Chegg</span>
                                            <p>
                                        </div>

                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4">
                                    <a class="gray_link" href="clarks-discount-codes.html">


                                        <div class="contentbox">
                                            <p><span>Clarks</span>
                                            <p>
                                        </div>

                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4">
                                    <a class="gray_link" href="clarks-discount-code.html">


                                        <div class="contentbox">
                                            <p><span>Clarks UK</span>
                                            <p>
                                        </div>

                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4">
                                    <a class="gray_link" href="fc-moto-discount-code.html">


                                        <div class="contentbox">
                                            <p><span>FC Moto</span>
                                            <p>
                                        </div>

                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4">
                                    <a class="gray_link" href="gldn-coupon-codes.html">


                                        <div class="contentbox">
                                            <p><span>GLDN</span>
                                            <p>
                                        </div>

                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4">
                                    <a class="gray_link" href="hughes-discount-code.html">


                                        <div class="contentbox">
                                            <p><span>Hughes</span>
                                            <p>
                                        </div>

                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4">
                                    <a class="gray_link" href="lebara-discount-code.html">


                                        <div class="contentbox">
                                            <p><span>Lebara UK</span>
                                            <p>
                                        </div>

                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4">
                                    <a class="gray_link" href="lovehoney-coupon-code.html">


                                        <div class="contentbox">
                                            <p><span>Love Honey</span>
                                            <p>
                                        </div>

                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4">
                                    <a class="gray_link" href="mallet-discount-code.html">


                                        <div class="contentbox">
                                            <p><span>Mallet</span>
                                            <p>
                                        </div>

                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4">
                                    <a class="gray_link" href="marks-and-spencer-discount-code.html">


                                        <div class="contentbox">
                                            <p><span>Marks And Spencer</span>
                                            <p>
                                        </div>

                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4">
                                    <a class="gray_link" href="matboard-and-more-coupon-code.html">


                                        <div class="contentbox">
                                            <p><span>Matboard and More</span>
                                            <p>
                                        </div>

                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4">
                                    <a class="gray_link" href="millets-discount-code.html">


                                        <div class="contentbox">
                                            <p><span>Millets</span>
                                            <p>
                                        </div>

                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4">
                                    <a class="gray_link" href="myheritage-coupon-codes.html">


                                        <div class="contentbox">
                                            <p><span>MyHeritage</span>
                                            <p>
                                        </div>

                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4">
                                    <a class="gray_link" href="oaks-hotels-coupon-codes.html">


                                        <div class="contentbox">
                                            <p><span>Oaks Hotels</span>
                                            <p>
                                        </div>

                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4">
                                    <a class="gray_link" href="oneplus-in-discount-code.html">


                                        <div class="contentbox">
                                            <p><span>Oneplus (IN)</span>
                                            <p>
                                        </div>

                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4">
                                    <a class="gray_link" href="patpat-coupon-codes.html">


                                        <div class="contentbox">
                                            <p><span>PatPat</span>
                                            <p>
                                        </div>

                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4">
                                    <a class="gray_link" href="pretty-little-things-discount-code.html">


                                        <div class="contentbox">
                                            <p><span>Pretty Little Things (UK)</span>
                                            <p>
                                        </div>

                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4">
                                    <a class="gray_link" href="robert-dyas-discount-code.html">


                                        <div class="contentbox">
                                            <p><span>Robert Dyas</span>
                                            <p>
                                        </div>

                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4">
                                    <a class="gray_link" href="rug-source-coupon-code.html">


                                        <div class="contentbox">
                                            <p><span>Rug Source</span>
                                            <p>
                                        </div>

                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4">
                                    <a class="gray_link" href="schutz-shoes-coupon-codes.html">


                                        <div class="contentbox">
                                            <p><span>Schutz Shoes</span>
                                            <p>
                                        </div>

                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4">
                                    <a class="gray_link" href="seedsman-coupon-code.html">


                                        <div class="contentbox">
                                            <p><span>Seedsman</span>
                                            <p>
                                        </div>

                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4">
                                    <a class="gray_link" href="shein-25-off-coupon-codes.html">


                                        <div class="contentbox">
                                            <p><span>SHEIN</span>
                                            <p>
                                        </div>

                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4">
                                    <a class="gray_link" href="shop-lc-coupon-code.html">


                                        <div class="contentbox">
                                            <p><span>Shop LC</span>
                                            <p>
                                        </div>

                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4">
                                    <a class="gray_link" href="smoke-cartel-coupon-code.html">


                                        <div class="contentbox">
                                            <p><span>Smoke Cartel</span>
                                            <p>
                                        </div>

                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4">
                                    <a class="gray_link" href="tog24-discount-code.html">


                                        <div class="contentbox">
                                            <p><span>Tog24 </span>
                                            <p>
                                        </div>

                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4">
                                    <a class="gray_link" href="vegas-discount-code.html">


                                        <div class="contentbox">
                                            <p><span>Vegas</span>
                                            <p>
                                        </div>

                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4">
                                    <a class="gray_link" href="wood-finishes-direct-voucher-codes.html">


                                        <div class="contentbox">
                                            <p><span>Wood Finishes Direct</span>
                                            <p>
                                        </div>

                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-entry">
                    <div class="accordion-title">
                        <h4>Top Categories</h4>
                    </div>
                    <div class="accordion-content">
                        <div class="product-tiles">
                            <div class="row">

                                <div class="col-lg-3 col-md-4">
                                    <a class="gray_link" href="category/art-%26-crafts.html">
                                        <div class="contentbox">
                                            <p><span>Art & Crafts</span>
                                            <p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4">
                                    <a class="gray_link" href="category/automotive.html">
                                        <div class="contentbox">
                                            <p><span>Automotive</span>
                                            <p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4">
                                    <a class="gray_link" href="category/books.html">
                                        <div class="contentbox">
                                            <p><span>Books</span>
                                            <p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4">
                                    <a class="gray_link" href="category/clothing.html">
                                        <div class="contentbox">
                                            <p><span>Clothing</span>
                                            <p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4">
                                    <a class="gray_link" href="category/computer-accessories.html">
                                        <div class="contentbox">
                                            <p><span>Computer Accessories</span>
                                            <p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4">
                                    <a class="gray_link" href="category/computers-%26-software.html">
                                        <div class="contentbox">
                                            <p><span>Computers & Software</span>
                                            <p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4">
                                    <a class="gray_link" href="category/consumer-electronics.html">
                                        <div class="contentbox">
                                            <p><span>Consumer Electronics</span>
                                            <p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4">
                                    <a class="gray_link" href="category/cosmetics.html">
                                        <div class="contentbox">
                                            <p><span>Cosmetics</span>
                                            <p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4">
                                    <a class="gray_link" href="category/delivery.html">
                                        <div class="contentbox">
                                            <p><span>Delivery</span>
                                            <p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4">
                                    <a class="gray_link" href="category/department-store.html">
                                        <div class="contentbox">
                                            <p><span>Department Store</span>
                                            <p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4">
                                    <a class="gray_link" href="category/e-commerce.html">
                                        <div class="contentbox">
                                            <p><span>E-commerce</span>
                                            <p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4">
                                    <a class="gray_link" href="category/entertainment.html">
                                        <div class="contentbox">
                                            <p><span>Entertainment</span>
                                            <p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4">
                                    <a class="gray_link" href="category/fashion.html">
                                        <div class="contentbox">
                                            <p><span>Fashion</span>
                                            <p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4">
                                    <a class="gray_link" href="category/food-%26-beverage.html">
                                        <div class="contentbox">
                                            <p><span>Food & Beverage</span>
                                            <p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4">
                                    <a class="gray_link" href="category/footwear.html">
                                        <div class="contentbox">
                                            <p><span>Footwear</span>
                                            <p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4">
                                    <a class="gray_link" href="category/freebies.html">
                                        <div class="contentbox">
                                            <p><span>Freebies</span>
                                            <p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4">
                                    <a class="gray_link" href="category/furniture-%26-decor.html">
                                        <div class="contentbox">
                                            <p><span>Furniture & Decor</span>
                                            <p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4">
                                    <a class="gray_link" href="category/games.html">
                                        <div class="contentbox">
                                            <p><span>Games</span>
                                            <p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4">
                                    <a class="gray_link" href="category/gifts.html">
                                        <div class="contentbox">
                                            <p><span>Gifts</span>
                                            <p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4">
                                    <a class="gray_link" href="category/gifts-%26-flowers.html">
                                        <div class="contentbox">
                                            <p><span>Gifts & Flowers</span>
                                            <p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4">
                                    <a class="gray_link" href="category/grocery-%26-food.html">
                                        <div class="contentbox">
                                            <p><span>Grocery & Food</span>
                                            <p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4">
                                    <a class="gray_link" href="category/health-%26-beauty.html">
                                        <div class="contentbox">
                                            <p><span>Health & Beauty</span>
                                            <p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4">
                                    <a class="gray_link" href="category/home-%26-garden.html">
                                        <div class="contentbox">
                                            <p><span>Home & Garden</span>
                                            <p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4">
                                    <a class="gray_link" href="category/home-and-rooms.html">
                                        <div class="contentbox">
                                            <p><span>Home & Rooms</span>
                                            <p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4">
                                    <a class="gray_link" href="category/home-accessories.html">
                                        <div class="contentbox">
                                            <p><span>Home Accessories</span>
                                            <p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4">
                                    <a class="gray_link" href="category/kids-%26-baby.html">
                                        <div class="contentbox">
                                            <p><span>Kids & Baby</span>
                                            <p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4">
                                    <a class="gray_link" href="category/kitchen-%26-dining.html">
                                        <div class="contentbox">
                                            <p><span>Kitchen & Dining</span>
                                            <p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4">
                                    <a class="gray_link" href="category/laptop.html">
                                        <div class="contentbox">
                                            <p><span>Laptop</span>
                                            <p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4">
                                    <a class="gray_link" href="category/men.html">
                                        <div class="contentbox">
                                            <p><span>Men</span>
                                            <p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4">
                                    <a class="gray_link" href="category/motorcycle-accessories.html">
                                        <div class="contentbox">
                                            <p><span>Motorcycle Accessories</span>
                                            <p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4">
                                    <a class="gray_link" href="category/news.html">
                                        <div class="contentbox">
                                            <p><span>News</span>
                                            <p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4">
                                    <a class="gray_link" href="category/office-%26-school.html">
                                        <div class="contentbox">
                                            <p><span>Office & School</span>
                                            <p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4">
                                    <a class="gray_link" href="category/outdoor-equipments.html">
                                        <div class="contentbox">
                                            <p><span>Outdoor Equipment</span>
                                            <p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4">
                                    <a class="gray_link" href="category/pets.html">
                                        <div class="contentbox">
                                            <p><span>Pets</span>
                                            <p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4">
                                    <a class="gray_link" href="category/photography.html">
                                        <div class="contentbox">
                                            <p><span>Photography</span>
                                            <p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4">
                                    <a class="gray_link" href="category/sports-%26-outdoor.html">
                                        <div class="contentbox">
                                            <p><span>Sports & Outdoor</span>
                                            <p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4">
                                    <a class="gray_link" href="category/sportswear.html">
                                        <div class="contentbox">
                                            <p><span>Sportswear</span>
                                            <p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4">
                                    <a class="gray_link" href="category/tax-%26-finance.html">
                                        <div class="contentbox">
                                            <p><span>Tax & Finance</span>
                                            <p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4">
                                    <a class="gray_link" href="category/textile-and-interior-design.html">
                                        <div class="contentbox">
                                            <p><span>Textile and Interior Design</span>
                                            <p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4">
                                    <a class="gray_link" href="category/travel-%26-tickets.html">
                                        <div class="contentbox">
                                            <p><span>Travel & Tickets</span>
                                            <p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4">
                                    <a class="gray_link" href="category/tv.html">
                                        <div class="contentbox">
                                            <p><span>TV</span>
                                            <p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4">
                                    <a class="gray_link" href="category/web-hosting.html">
                                        <div class="contentbox">
                                            <p><span>Web Hosting</span>
                                            <p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4">
                                    <a class="gray_link" href="category/women.html">
                                        <div class="contentbox">
                                            <p><span>Women</span>
                                            <p>
                                        </div>
                                    </a>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Start see on -->
    <section class="partner-sections pad-y hide_seen">
        <div class="container">
            <div class="main-heading text-center">
                <h2 class="secondary-text mb-3 fw-700">As Seen on</h2>
            </div>
            <div class="row g-2 g-sm-3">

                <div class="col-6 col-sm-4 col-md-3 col-xl-2">
                    <p class="card-2">
                        <img class="img-fluid" src="{{ asset('assetsite/images/entrep.png') }}" alt="brand-logos">
                    </p>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-xl-2">
                    <p class="card-2">
                        <img class="img-fluid" src="{{ asset('assetsite/images/fotolog.png') }}" alt="brand-logo">
                    </p>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-xl-2">
                    <p class="card-2">
                        <img class="img-fluid" src="{{ asset('assetsite/images/feastmagazine.png') }}"
                            alt="brand-logo">
                    </p>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-xl-2">
                    <p class="card-2">
                        <img class="img-fluid" src="{{ asset('assetsite/images/hmluxury.png') }}" alt="brand-logo">
                    </p>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-xl-2">
                    <p class="card-2">
                        <img class="img-fluid" src="{{ asset('assetsite/images/ileel.png') }}" alt="brand-logo">
                    </p>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-xl-2">
                    <p class="card-2">
                        <img class="img-fluid" src="{{ asset('assetsite/images/karenkoupon.png') }}"
                            alt="brand-logo">
                    </p>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-xl-2">
                    <p class="card-2">
                        <img class="img-fluid" src="{{ asset('assetsite/images/trustpilot.png') }}"
                            alt="brand-logo">
                    </p>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-xl-2">
                    <p class="card-2">
                        <img class="img-fluid" src="{{ asset('assetsite/images/scubby.png') }}" alt="brand-logo">
                    </p>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-xl-2">
                    <p class="card-2">
                        <img class="img-fluid" src="{{ asset('assetsite/images/spacecoast.png') }}"
                            alt="brand-logo">
                    </p>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-xl-2">
                    <p class="card-2">
                        <img class="img-fluid" src="{{ asset('assetsite/images/thebargaining.png') }}"
                            alt="brand-logo">
                    </p>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-xl-2">
                    <p class="card-2">
                        <img class="img-fluid" src="{{ asset('assetsite/images/tracxn.png') }}" alt="brand-logo">
                    </p>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-xl-2">
                    <p class="card-2">
                        <img class="img-fluid" src="{{ asset('assetsite/images/cb.png') }}" alt="brand-logo">
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!--  End  See on -->

    <!-- Never Miss Another Deal Section Start -->

    <section class="never-miss-deals-sec">
        <div class="container">
            <div class="mainbox">
                <h3>Never miss another deal</h3>
                <p>Be the first to get notified as soon as we update a new offer or discount.</p>
                <div class="subscribe-us">
                    <form>
                        <input type="email" placeholder="Enter your email address">
                        <input type="submit" class="btn-primry" value="Subscribe">
                    </form>
                </div>
            </div>
        </div>
    </section>

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
                                <a class="continue-btn" style="background-color: #ff00008f;"
                                    href="javascript:;">Continue to Store</a>
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

@endsection
