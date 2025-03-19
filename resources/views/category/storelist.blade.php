@extends('layouts.site.site')
@section('content')
    <div class="mainbb">
        <section class="top-store-category-sec sec-padding">
            <div class="container">
                <div class="content-entry">
                    <div class="accordion-title">
                        <h1>{{ $category->name }} Recent Offers &amp; Deals</h1>
                    </div>
                    <div class="product-tiles">
                        <div class="row baby">
                            <div class="col-lg-4 col-md-3 swingup">
                                <a href="https://retailescaper.com/zaful-discount-code">
                                    <div class="mainbox">
                                        <div class="imgbox">
                                            <img class="w-100"
                                                src="https://retailescaper.com/uploads/store/zaful-discount-code.png"
                                                alt="https://retailescaper.com/uploads/store/zaful-discount-code.png">
                                        </div>
                                        <div class="contentbox">
                                            <span></span>
                                            <p></p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-4 col-md-3 swingup">
                                <a href="https://retailescaper.com/zalora-hk">
                                    <div class="mainbox">
                                        <div class="imgbox">
                                            <img class="w-100"
                                                src="https://retailescaper.com/uploads/store/zalora-discount-code1.png"
                                                alt="https://retailescaper.com/uploads/store/zalora-discount-code1.png">
                                        </div>
                                        <div class="contentbox">
                                            <span></span>
                                            <p></p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-4 col-md-3 swingup">
                                <a href="https://retailescaper.com/zalora-my">
                                    <div class="mainbox">
                                        <div class="imgbox">
                                            <img class="w-100" src="https://retailescaper.com/uploads/store/zalora1.png"
                                                alt="https://retailescaper.com/uploads/store/zalora1.png">
                                        </div>
                                        <div class="contentbox">
                                            <span></span>
                                            <p></p>
                                        </div>
                                    </div>
                                </a>
                            </div>


                        </div>

                        <aside class="sidebarc">
                            <div>
                                <h4>About {{ $category->name }} Codes &amp; Deals</h4>
                                Get All the Latest &amp; Verified {{ $category->name }}  Deals &amp; Discount from Retailescaper.com |
                                Verified Deals for 2021
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
