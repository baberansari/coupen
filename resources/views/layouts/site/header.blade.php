 <!-- Header Section Start -->
@php
$categories =  getCategory();
$setting = settings();
 @endphp
<header class="mod-header">
    <div class="grid_frame">
        <div class="container_grid clearfix">
            <div class="grid_12">
                <div class="header-content clearfix">
                    <h1 id="logo" class="rs">
                        <a href="/">
                            <img style="width: 38px;" src="{{ asset($setting->settings_logo)}}" alt="$SITE_NAME">
                        </a>
                    </h1>
                    {{-- <a id="sys_head_login" class="btn btn-green type-login btn-login" href="#">Login</a> --}}
                    <nav class="main-nav">
                        <ul id="main-menu" class="nav nav-horizontal clearfix">
                            <li class="active">
                                <a href="/">Home</a>
                            </li>
                            <li>
                                <a href="{{ route('coupen') }}">Coupons</a>
                            </li>
                            <li class="has-sub">
                                <a href="#">Categories</a>
                                <ul class="sub-menu">
                                    @foreach (getTrendingCategory() as $category)
                                    <li><a href="{{ route('store-by-category',$category->slug) }}">{{ $category->name }}</a></li>
                                    @endforeach
                                    <li><a href="{{ route('categories') }}">more</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ route('blog') }}">Blog</a></li>
                        </ul>
                        <a id="sys_btn_toogle_menu" class="btn-toogle-res-menu" href="#alternate-menu"></a>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    {{-- Modal  --}}
    <div id="sys_pop_login" class="pop-login">
        <div class="viewport-pop">
            <div class="transport-viewer clearfix">
                <div class="mod-register">
                    <h3 class="rs title-mod">Hello pretty! Welcome to Couponday.com</h3>
                    <div class="wrap-form-reg clearfix">
                        <form action="#">
                            <div class="left-form">
                                <label class="wrap-txt" for="sys_email">
                                    <input class="input-txt" id="sys_email" type="email" placeholder="you@mail.com">
                                </label>
                            </div>
                            <div class="right-create-acc">
                                <img class="account" src="images/reg-account.png" alt="Couponday.com">
                                <p class="lbl-dung-lo rs">Not a member? Don’t worry</p>
                                <a id="sys_link_reg_panel" href="register.html" class="btn-flat yellow btn-submit-reg">Create an account</a>
                                <div id="sys_warning_sms" class="warning-sms" data-warning-txt="No spam guarantee,No disturb,Promotion News" style="display: block;">No disturb</div>
                            </div>
                        </form>
                        <i class="line-sep"></i>
                    </div>
                </div><!--end: Login panel -->
                <div class="mod-register">
                </div><!--end: Register panel -->
            </div>

            <i id="sys_close_login_popup" class="icon iClose close-popop"></i>
        </div>
    </div>
    {{--  ENd Model --}}
</header>
<nav id="mp-menu" class="mp-menu alternate-menu mp-overlap right-side">
    <div class="mp-level" data-level="1">
        <h2>Menu</h2>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="{{ route('coupen') }}">Coupons</a></li>
            <li class="has-sub">
                <a href="coupon-code.html">Categories</a>
                <div class="mp-level" data-level="2">
                    <h2>Categories</h2>
                    <a class="mp-back" href="#">back</a>
                    <ul>
                        @foreach (getTrendingCategory() as $category)
                        <li><a href="{{ route('store-by-category',$category->slug) }}">{{ $category->name }}</a></li>
                        @endforeach
                        <li><a href="{{ route('categories') }}">more</a></li>
                    </ul>
                </div>
            </li>
            <li><a href="{{ route('blog') }}">Blog</a></li>

        </ul>
    </div>
</nav>
