@extends('layouts.site.site')
@section('content')

<div class="top-area">
    <div class="grid_frame">
        <div class="container_grid clearfix">
            <div class="grid_12">
                <h2 class="page-title">Categories</h2>
            </div>
        </div>
    </div>
</div>
<div class="grid_frame page-content">
    <div class="container_grid">
        <div class="layout-2cols pt-hight clearfix">

            <div class="grid_12 sidebar">

                <div class="mod-list-store block">

                    <div class="block-content">
                        <div class="wrap-list-store clearfix">
                            @foreach ($categories as  $category)
                            <a class="brand-logo" href="{{ route('store-by-category',$category->slug) }}">
                                <span class="wrap-logo">
                                    <span class="center-img">
                                        <span class="ver_hold"></span>
                                        <span class="ver_container"><img src="{{ asset($category->image) }}" alt="$BRAND_NAME"></span>
                                  {{ $category->name }}
                                    </span>
                                </span>
                            </a>
                            @endforeach

                        </div>
                    </div>
                </div><!--end: .mod-list-store -->


            </div>
        </div>
    </div>
</div>
@endsection
