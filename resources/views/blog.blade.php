@extends('layouts.site.site')
@section('title', 'Blog')
@section('content')
<div class="top-area">
    <div class="grid_frame">
        <div class="container_grid clearfix">
            <div class="grid_12">
                <h2 class="page-title">Blog</h2>
            </div>
        </div>
    </div>
</div>
<div class="grid_frame page-content">
    <div class="container_grid">
        <div class="layout-2cols pt-hight clearfix">
            <div class="grid_8 content">
                <div class="mod-list-article">
                    <div class="list-article">
                        @foreach ($blogs as $blog)


                        <div class="article-item">
                            <a href="javascript;"><img class="feature-img" src="{{ asset($blog->image) }}" alt="{{ $blog->title }}"></a>
                            <div class="flex">
                                <div class="thumb-left wrap-date-post">
                                    <div class="date">
                                        <span class="day">{{ $blog->created_at->format('d') }}</span>
                                        <span class="my">{{ $blog->created_at->format('M / Y') }}</span>
                                    </div>
                                    {{-- <a class="btn-more" href="blog-detail.html">Read more</a> --}}
                                </div>
                                <div class="flex-body">
                                    <p class="art-title rs"><a href="blog-detail.html">{{ $blog->title }}</a></p>
                                    <p class="rs art-desc">{!! $blog->description !!}</p>
                                </div>
                            </div>
                        </div><!--end: article-item -->
                        @endforeach
                    </div>

                    <div class="pagination">
                        {{ $blogs->links() }}
                    </div>
                </div><!--end: .mod-list-article -->
            </div>
            <div class="grid_4 sidebar">
                <div class="mod-list-store block">
                    <h3 class="title-block">Popular Stores</h3>
                    <div class="block-content">
                        <div class="wrap-list-store clearfix">

                            @foreach (getPopulorStore() as $related)
                            <a class="brand-logo" href="{{ route('store',$related->store_slug) }}">
                                <span class="wrap-logo">
                                    <span class="center-img">
                                        <span class="ver_hold"></span>
                                        <span class="ver_container"><img src=" {{asset($related->store_logo)}}" alt="$BRAND_NAME">
                                        {{ $related->store_name }}
                                        </span>
                                    </span>
                                </span>
                            </a>
                            @endforeach

                        </div>
                    </div>
                </div><!--end: .mod-list-store -->
                <div class="mod-simple-coupon block">
                    <h3 class="title-block">Latest Coupens</h3>
                    <div class="block-content">
                        @foreach (getLetestCoup() as $coupen)
                        <div class="coupons-code-item simple flex">
                            <div class="brand-logo thumb-left">
                                <div class="wrap-logo">
                                    <div class="center-img">
                                        <span class="ver_hold"></span>
                                        <a href="{{ route('store', $coupen->store->store_slug) }}" class="ver_container"><img src="{{  asset( $coupen->store->store_logo) }}" alt="{{  $coupen->store->store_name }}"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="right-content flex-body">
                                <p class="rs save-price"><a href="{{ route('coupen') }}">{{ $coupen->offer_title }}</a></p>
                            </div>
                        </div><!--end: .coupons-code-item -->
                        @endforeach
                    </div>
                </div><!--end: .mod-simple-coupon -->

            </div>
        </div>
    </div>
</div>
@endsection
