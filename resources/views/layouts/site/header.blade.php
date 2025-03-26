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
                            {{-- <li class="has-sub">
                                <a href="coupon-code.html">Coupons Code</a>
                                <ul class="sub-menu">
                                    <li><a href="coupon-code.html">Coupons Code 1</a></li>
                                    <li><a href="coupon-code-2.html">Coupons Code 2</a></li>
                                </ul>
                            </li> --}}
                            <li class="has-sub">
                                <a href="javascript;">Categories</a>
                                <ul class="sub-menu">
                                    @foreach (getTrendingCategory() as $category)
                                    <li><a href="{{ route('store-by-category',$category->slug) }}">{{ $category->name }}</a></li>
                                    @endforeach
                                    <li><a href="{{ route('categories') }}">more</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ route('blog') }}">Blog</a></li>
                            {{-- <li>
                                <a href="my-coupon.html">Stores</a>
                                <i class="icon iPickRed lbl-count"><span>12</span></i>
                            </li> --}}
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

{{--
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
                                <label class="wrap-txt" for="sys_pass">
                                    <input class="input-txt" id="sys_pass" type="password" placeholder="password please!">
                                </label>
                                <label class="wrap-check" for="sys_chk_news">
                                    <input id="sys_chk_news" class="input-chk" type="checkbox"> Remember me
                                    <i class="icon iUncheck"></i>
                                    <a class="lost-pass" href="#">Forgot password ?</a>
                                </label>
                                <div class="wrap-login-btn">
                                    <button class="btn-flat gr btn-submit-reg" type="submit">Login</button>
                                    <div class="sep-connect">
                                        <span>Or</span>
                                    </div>
                                    <div class="grp-connect">
                                        <a class="btn-flat fb" href="#">Facebook</a>
                                        <a class="btn-flat gg" href="#">Google</a>
                                    </div>
                                </div>
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
                    <h3 class="rs title-mod">Hello pretty! Welcome to Couponday.com</h3>
                    <div class="desc-reg">Sign up for free and get exclusive access to members-only savings, rewards and special promotions from Coupons.com. Enter in an email and a password or sign up with Facebook.</div>
                    <div class="wrap-form-reg clearfix">
                        <form action="#">
                            <div class="left-form">
                                <label class="wrap-txt" for="sys_email_reg">
                                    <input class="input-txt" id="sys_email_reg" type="email" placeholder="you@mail.com">
                                </label>
                                <label class="wrap-txt" for="sys_pass_reg">
                                    <input class="input-txt" id="sys_pass_reg" type="password" placeholder="password please!">
                                </label>
                                <label class="wrap-check" for="sys_chk_news_reg">
                                    <input id="sys_chk_news_reg" class="input-chk" type="checkbox"> Send me the weekly Couponday.com’s offers.
                                    <i class="icon iUncheck"></i>
                                </label>
                                <label class="wrap-check" for="sys_chk_agree">
                                    <input id="sys_chk_agree" class="input-chk" type="checkbox"> I agree to the <a href="#">Terms of Use</a> and <a href="#">Privacy Policy</a>.
                                    <i class="icon iUncheck"></i>
                                </label>
                            </div>
                            <div class="right-connect">
                                <button class="btn-flat yellow btn-submit-reg" type="submit">Create an account</button>
                                <div class="sep-connect">
                                    <span>Or</span>
                                </div>
                                <div class="grp-connect">
                                    <p class="rs">Sign up using your account on:</p>
                                    <a class="btn-flat fb" href="#">Facebook</a>
                                    <a class="btn-flat gg" href="#">Google</a>
                                </div>
                            </div>
                        </form>
                    </div>
                    <p class="rs wrap-link-back">
                        <a id="sys_link_login_panel" href="login.html" class="link-back">
                            <i class="pick-r"></i>
                            Back to login
                        </a>
                    </p>
                </div><!--end: Register panel -->
            </div>
            <div id="sys_paging_state" class="paging-state">
                <i class="active"></i>
                <i></i>
            </div>
            <i id="sys_close_login_popup" class="icon iClose close-popop"></i>
        </div>
    </div> --}}
</header>
