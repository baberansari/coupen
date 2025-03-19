@extends('layouts.site.site')

@section('content')
    <section class="banner-sec all-cat-banner  sec-padding">
        <div class="container">
            <div class="contentbox">
                <h1 style="font-size:22px;">All Categories</h1>
                <span>variety of coupon in different categoriess</span>
            </div>
            <div class="all-cats-main">
                <div class="row">
                    @foreach ($categories as  $category)

                    <div class="col-lg-2 col-md-4 col-sm-4 col-6">
                        <a href="{{ route('store-by-category',$category->slug) }}">{{  $category->name }}</a>
                    </div>
                    @endforeach


                </div>
            </div>
        </div>
    </section>
@endsection
