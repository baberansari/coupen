<div class="deznav">
    <div class="deznav-scroll ps ps--active-y">
        <ul class="metismenu" id="menu">
            <li><a href="{{route('home')}}" class="ai-icon" aria-expanded="false">
                    <i class="flaticon-381-networking"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
            </li>
           <li>
                <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-controls-3"></i>
                    <span class="nav-text">Settings</span>
                </a>
                <ul aria-expanded="false" class="mm-collapse">
                    <li><a href="{{ route('setting.create') }}">General</a></li>
                    {{-- <li><a href="https://retailescaper.com/admin/social">Social</a></li>

                    <li><a href="https://retailescaper.com/admin/master_admin">Users</a></li> --}}
                </ul>
            </li>
      <li>
                <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-layer-1"></i>
                    <span class="nav-text">SEO</span>
                </a>
                <ul aria-expanded="false" class="mm-collapse">
                    <li><a href="{{ route('seo.index') }}">SEO</a></li>

                </ul>
            </li>
              <li>
                <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-internet"></i>
                    <span class="nav-text">Faq</span>
                </a>
                <ul aria-expanded="false" class="mm-collapse">
                    <li><a href="{{ route('faqs.index') }}">List</a></li>
                    <!-- <li><a href="https://retailescaper.com/admin/header_top_navbar">Offers avail Reports</a></li> -->
                </ul>
            </li>
            <li>
                <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-heart"></i>
                    <span class="nav-text">Blog</span>
                </a>
                <ul aria-expanded="false" class="mm-collapse">
                    <li><a href="{{ route('blogs.index') }}">Blogs</a></li>
                </ul>
            </li>
            <li>
                <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-heart"></i>
                    <span class="nav-text">Offers</span>
                </a>
                <ul aria-expanded="false" class="mm-collapse">
                    <li><a href="{{ route('category.index') }}">Category</a></li>
                    <li><a href="{{route('stores.index')}}">Store</a></li>
                    <li><a href="{{ route('offer.index') }}">Coupon</a></li>
                </ul>
            </li>
            {{-- <li><a href="https://retailescaper.com/admin/url_redirect" class="ai-icon" aria-expanded="false">
                    <i class="flaticon-381-settings-2"></i>
                    <span class="nav-text">URL Redirect</span>
                </a>
            </li> --}}
            {{-- <li><a href="https://retailescaper.com/admin/newsletter" class="ai-icon" aria-expanded="false">
                    <i class="flaticon-381-settings-2"></i>
                    <span class="nav-text">Newsletter</span>
                </a>
            </li> --}}
            <li><a href="https://retailescaper.com/admin/signup_inquiry" class="ai-icon"
                    aria-expanded="false">
                    <i class="flaticon-381-notepad"></i>
                    <span class="nav-text">Signup Inquiry <span class="badge">24</span></span>
                </a>
            </li>
        </ul>
        <div class="copyright">
            <p>Coupon Codes - Discountvaults <br>© 2025 All Rights Reserved</p>
            <p class="op5">Made with <span class="heart"></span> by MA-Ware &amp; Tech</p>
        </div>
        <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
            <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
        </div>
        <div class="ps__rail-y" style="top: 0px; height: 242px; right: 0px;">
            <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 82px;"></div>
        </div>
    </div>
</div>
