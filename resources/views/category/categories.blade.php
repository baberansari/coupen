@extends('layouts.site.site')
@section('content')

<div class="top-area">
    <div class="grid_frame">
        <div class="container_grid clearfix">
            <div class="grid_12">
                <h2 class="page-title" style="    text-align: center;">Categories</h2>
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
                        <div class="block-content list-brand clearfix">

                            @foreach ($categories as  $category)
                            <div class="brand-item grid_3">
                                <div class="brand-content">
                                    <div class="brand-logo">
                                        <div class="wrap-img-logo"  style="display: flex; flex-direction: column; align-items: center; text-align: center;">
                                            <span class="ver_hold"></span>
                                            <span class="table-cell" style="color: #000;">
                                            <a href="{{ route('store-by-category',$category->slug) }}" class="ver_container"><img style="width: 84px;" src="{{ asset($category->image) }}" alt="$BRAND_TITLE"></a>
                                           <br>{{ $category->name }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div><!--end: .mod-list-store -->


            </div>
        </div>
    </div>
</div>
@endsection
