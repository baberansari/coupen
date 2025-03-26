@extends('layouts.site.site')

@section('content')
<style>
  .gray .coupon-item .coupon-content, .gray .coupons-code-item {

            border-color: #04BFBF  !important;
    }
</style>
<div class="top-area">
    <div class="grid_frame">
        <div class="container_grid clearfix">
            <div class="grid_12">
                <h2 class="page-title">{{ $category->name }} Recent Offers &amp; Deals</h2>
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
                        <span class="lbl-tab active">Store ({{ $stores->count() }})</span>

                    </span>
                </h3>
            </div>
            <div class="block-content list-coupon clearfix">
                <div class="tab-content">
                    <div class="tab-content-item clearfix active">
                        @foreach ($stores as $store)
                        <div class="coupon-item grid_3">
                            <div class="coupon-content">
                                <div class="img-thumb-center">
                                    <div class="wrap-img-thumb">
                                        <span class="ver_hold"></span>
                                        <a href="#" class="ver_container"><img src="{{ asset($store->store_logo) }}"
                                            alt="{{ asset($store->store_logo) }}"></a>
                                    </div>
                                </div>
                                {{-- <div class="coupon-price">$2.00 Off</div> --}}
                                <div class="coupon-brand">{{  $store->store_name }}</div>
                                <div class="coupon-desc">{!!  $store->store_description !!} </div>
                                {{-- <div class="time-left">9 days 4 hours left</div> --}}
                                <br>
                                <a class="btn-discard" href="{{ route('store',$store->store_slug) }}">View Coup</a>
                            </div>
                            <i class="stick-lbl hot-sale"></i>
                        </div><!--end: .coupon-item -->
                        @endforeach
                        {{-- <div class="grid_12">
                            <div class="pagination">
                                <a class="txt-nav" href="#">Newer <span>post</span></a>
                                <a class="page-num active" href="#">1</a>
                                <a class="page-num" href="#">2</a>
                                <a class="page-num" href="#">3</a>
                                <a class="page-num" href="#">4</a>
                                <a class="page-num" href="#">5</a>
                                <a class="txt-nav" href="#">Older <span>post</span></a>
                            </div>
                        </div> --}}
                    </div><!--end: tab coupon-->
                </div>
            </div>
        </div><!--end block: Tab Coupons-->
    </div>
</div>
@endsection
