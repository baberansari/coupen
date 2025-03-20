 <!-- Header Section Start -->
@php
$categories =  getCategory();
$setting = settings();
 @endphp
 <header style="padding-top: 10px; padding-bottom: 10px;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-2 col-md-2">
                <a href="/" class="logo">
                    <img class="w-100" style="width: 160px !important; height: 80px !important;" src="{{ asset($setting->settings_logo) }}" alt="Header Logo" />
                </a>
            </div>
            <div class="col-lg-6">
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="navigations">
                    <ul class="d-flex list-unstyled align-items-center menus">
                        <li class="has-child browse-btn">
                            <a rel="index nofollow" href="javascript:;">Categories</a>
                        </li>
                    </ul>
                    <div class="other-navigations">
                        <ul class="list-unstyled d-flex align-items-center">
                            <li><a href="#" class="btn-primry add_to_chrome">Add To Chrome</a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
        <ul class="d-flex sub-menu browse-sub-menu list-unstyled" style="justify-content: space-around;align-items: flex-end;">
            @foreach ($categories as $category)
                <li>
                    <a rel="index nofollow" href="{{ route('store-by-category',$category->slug) }}">
                        <img style="width: 67px;"  src="{{ asset($category->image) }}" alt="Sportswear" />
                        <span>{{ $category->name }}</span>
                    </a>
                </li>
            @endforeach

            <li>
                <a href="{{ route('categories') }}">
                    <img   src="{{ asset('assetsite/new/images/category/More.png') }}" alt="Holiday" />
                    <span>More</span>
                </a>
            </li>
        </ul>
    </div>
</header>
<div class="mobile-header">
    <div class="container">
        <div class="mainbox">
            <div class="logo">
                <a href="index.html">
                    <img class="w-100" src="{{ asset($setting->settings_logo) }}" alt="Header Logo" />
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
            <img class="w-100" src="{{ asset($setting->settings_logo) }}" alt="Logo" />
        </a>
        <h6>Browse By Category</h6>
        <ul class="list-unstyled">
            @foreach ($categories as $category)
            <li>
                <a rel="index nofollow" href="{{ route('store-by-category',$category->slug) }}">
                    <img  src="{{ asset($category->image) }}" alt="Sportswear" />
                    <span>{{ $category->name }}</span>
                </a>
            </li>
        @endforeach

        </ul>
    </div>
</div>
