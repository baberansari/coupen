@extends('layouts.site.site')
@section('content')
<style>
    .baby{
    width: 100%;
    float: left;
    }
    
    .product-tiles .mainbox .contentbox{
    padding: 0px !important;
    border-top: 0px !important;
    }
    
    .swingup{
    margin-top: 8px !important;
    }
    
    .mainbb{
    width: 100%;
    float: left;
    }
    
    .sidebarc{
    width: 28%;
    margin-left: 5px;
    float: left;
    padding-left: 5px;
    }
    
    
    
     @media screen and (max-width: 800px) {
    .baby{
    width: 100%;
    float: left;
    }
    
    .mainbb{
    width: 100%;
    float: left;
    }
    
    .sidebarc{
    width: 100%;
    margin-left: 5px;
    
    float: right;
    }
    
    }
    </style>
    <div class="mainbb">
        <section class="top-store-category-sec sec-padding">
            <div class="container">
                <div class="content-entry">
                    <div class="accordion-title">
                        <h1>{{ $category->name }} Recent Offers &amp; Deals</h1>
                        @if(empty($stores) || count($stores) == 0)
                              <img style="width: 100%;" src="{{ asset('assets/admin/images/nofound.jpg') }}" alt="No Data Found" />
                        @endif
                    </div>
                    <div class="product-tiles">
                        <div class="row baby">
                            @foreach ($stores as $store)
                            <div class="col-lg-3 col-md-3 swingup">
                                <a href="{{ route('store',$store->store_slug) }}">
                                    <div class="mainbox">
                                        <div class="imgbox">
                                            <img class="w-100"
                                                src="{{ asset($store->store_logo) }}"
                                                alt="{{ asset($store->store_logo) }}">
                                        </div>
                                        <div class="contentbox">
                                            <span>{{ $store->store_name }}</span>
                                          
                                            <p>{{ $store->store_description }}</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            @endforeach
                        
                        </div>
                        @if(empty($stores) || count($stores) > 0)
                        {{-- <aside class="sidebarc">
                            <div>
                                <h4>About {{ $category->name }} Codes &amp; Deals</h4>
                                Get All the Latest &amp; Verified {{ $category->name }}  Deals &amp; Discount from discountvaults.com |
                                Verified Deals for 2021
                            </div>
                        </aside> --}}
                        @endif
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
