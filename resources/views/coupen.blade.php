@extends('layouts.site.site')
@section('title', 'Coupen')
@section('content')

<div class="top-area">
    <div class="grid_frame">
        <div class="container_grid clearfix">
            <div class="grid_12">
                <h2 class="page-title">All Coupons</h2>
            </div>
        </div>
    </div>
</div>
<div class="grid_frame page-content">
    <div class="container_grid">
        <div class="my-coupon mod-grp-coupon block clearfix tabbable tab-style-2">
            <div class="grid_12">
                <h3 class="title-block">
                    <span class="wrap-tab clearfix">
                        <span class="lbl-tab active">COUPONS ({{ $offers->count() }})</span>
                        {{-- <span class="lbl-tab">COUPON CODES (8)</span>
                        <span class="lbl-tab">BRANDS (6)</span> --}}
                    </span>
                </h3>
            </div>
            <div class="block-content list-coupon clearfix">
                <div class="tab-content">
                    <div class="tab-content-item clearfix active">

                        @foreach ($offers as $coupen)
                            
                       
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
                                {{-- <div class="time-left">{{ $coupen->offer_expiry_date }}</div> --}}
                                <a class="btn btn-blue btn-take-coupon"
                                type="button"  onclick="getCode('{{ $coupen->id }}',this)" data-offer_id="{{ $coupen->id  }}"
                                        href="javascript:;" class="offer_anchor" data-offer_affiliate_url="{{ $coupen->offer_affiliate_url}}"
    
                                >Take Coupon</a>
                            </div>
                            <i class="stick-lbl trust-brand-y"></i>
                        </div><!--end: .coupon-item -->
                        @endforeach
                        <div class="grid_12">
                            <div class="pagination">
                             {{ $offers->links() }}
                            </div>
                        </div>
                    </div><!--end: tab coupon-->
                 
                </div>
            </div>
        </div><!--end block: Tab Coupons-->
    </div>
</div>
@endsection
