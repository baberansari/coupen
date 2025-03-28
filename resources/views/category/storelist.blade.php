@extends('layouts.site.site')

@section('content')
<style>
    .gray .coupon-item .coupon-content,
    .gray .coupons-code-item {

        border-color: #04BFBF !important;
    }

    .star {
        font-size: 22px;
    }

    .star.half {
        color: #FFA43E
    }

    .star.full {
        color: #FFA43E
    }

    .star.empty {
        color: #fff
    }

    .gray .btn.btn-blue {
        border-radius: 25px;
    }
    .pagination svg{
        display: none
    }
    .mod-brand-detail-2 {
    padding-top: 30px;
    padding-bottom: 172px;
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
        <div class="mod-brand-detail-2 clearfix">
            <div class="grid_9 wrap-left-info">

                <div class="brand-info-right">
                    <p class="rs ta-c brand-logo"><img src="{{ asset($category->image) }}" alt="$BRAND_NAME"></p>

                    <div class="brand-desc">
                        <div class="title-desc">About {{ $category->name }} </div>
                        <p class="rs">
                            Above, you’ll find a selection of the top {{ $category->name }} coupons, deals, discounts, and
                            offers, as ranked by the valued users of Discountvaults.com. To access the coupon for your
                            preferred brand, simply click on the store image, and you’ll be redirected to the store’s
                            page, where you can explore the latest discounts and offers. These can be easily applied at
                            checkout when shopping with the selected brand.

                        </p>
                    </div>
                    <i class="stick-lbl trust-brand-y"></i>
                </div>
                <!--end: .brand-info-right -->
                <div class="mod-grp-coupon block clearfix">
                    <h3 class="title-block">{{ $category->count() }} {{ $category->name }} Store</h3>
                    <div class="block-content list-coupon clearfix">

                        @foreach ($stores as $store)
                        <div class="coupon-item">
                            <div class="coupon-content">
                                <div class="img-thumb-center">
                                    <div class="wrap-img-thumb" style="border: 2px solid #ffbe19;border-radius: 19px;">
                                        <span class="ver_hold"></span>
                                        <a href="#" class="ver_container"><img src="{{ asset($store->store_logo) }}"
                                                alt="{{ asset($store->store_logo) }}"></a>
                                    </div>
                                </div>
                                <div class="coupon-brand" style="text-align: center;">{{ $store->store_name }}</div>
                                <div class="coupon-desc" style="text-align: center;">{!! $store->store_description !!}

                                    <div class="rate-brand clearfix">
                                        <?php
                                            echo generateStars($store->store_rating);?>
                                    </div>
                                    {{ $store->store_rating }}
                                </div>

                                <a class="btn btn-blue btn-take-coupon"
                                    href="{{ route('store',$store->store_slug) }}">View Store</a>
                            </div>
                            <i class="stick-lbl hot-sale"></i>
                        </div>
                        <!--end: .coupon-item -->
                        @endforeach
                    </div>
                </div>
                <!--end block: group coupons-->

                <div class="pagination">
                    {{ $stores->links() }}
                </div>

            </div>
        </div>
        <!--end: .mod-brand-detail-2 -->
    </div>
</div>

@endsection
