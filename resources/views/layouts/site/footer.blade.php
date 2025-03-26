@php
$setting = settings();
 @endphp
<footer class="mod-footer">
    <div class="footer-top">
        <div class="grid_frame">
            <div class="container_grid clearfix">
                <div class="grid_3">
                    <div class="company-info">
                        <img src="{{ asset($setting->settings_footer_logo) }}" alt="CouponDay">
                        <p class="rs">Discountvaults is your trusted partner in saving money both online and in-store at your favorite brands. Whether you're seeking a coupon code, a discount, or a free shipping offer, we are committed to continuously verifying and updating the best deals to ensure you never miss an opportunity to save.</p>
                        <p class="rs">
                            1200 Balh Blah Avenue <br>
                            Hanoi, Vietnam 12137
                        </p>
                    </div>
                </div>
                <div class="grid_3">
                    <div class="block social-link">
                        <h3 class="title-block">Follow us</h3>
                        <div class="block-content">
                            <ul class="rs">
                                <li>
                                    <i class="fa fa-facebook-square fa-2x"></i>
                                    <a href="#" target="_blank">Our Facebook page</a>
                                </li>
                                <li>
                                    <i class="fa fa-twitter-square fa-2x"></i>
                                    <a href="#" target="_blank">Follow our Tweets</a>
                                </li>
                                <li>
                                    <i class="fa fa-pinterest-square fa-2x"></i>
                                    <a href="#" target="_blank">Follow our Pin board</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div><!--end: Follow us -->
                <div class="grid_3">
                    <div class="block intro-video">
                        <h3 class="title-block">Intro Video</h3>
                        <div class="block-content">
                            <div class="wrap-video" id="sys_wrap_video">
                                <div class="lightbox-video">
                                        <a class="html5lightbox" href="http://player.vimeo.com/video/36932496" title=""><i class="btn-play"></i><img src="images/video-img.png" alt=""></a>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div><!--end: Intro Video -->
                <div class="grid_3">
                    <div class="block blog-recent">
                        <h3 class="title-block">Latest blog</h3>
                        <div class="block-content">
                            <div class="entry-item flex">
                                <a class="thumb-left" href="#">
                                    <img src="images/ex/04-15.jpg" alt="$TITLE">
                                </a>
                                <div class="flex-body"><a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing eli</a></div>
                            </div>
                            <div class="entry-item flex">
                                <a class="thumb-left" href="#">
                                    <img src="images/ex/04-16.jpg" alt="$TITLE">
                                </a>
                                <div class="flex-body"><a href="#">Ut wisi enim ad minim veniam, quis nostrud</a></div>
                            </div>
                        </div>
                    </div>
                </div><!--end: blog-recent -->
            </div>
        </div>
    </div><!--end: .foot-top-->
    <div class="foot-copyright">
        <div class="grid_frame">
            <div class="container_grid clearfix">
                <div class="left-link">
                    <a href="#">Home</a>
                    <a href="{{ route('termcondition') }}">Term of conditions</a>
                    <a href="{{ route('privacy') }}">Privacy</a>
                    <a href="{{ route('accessibillity') }}">Accessibillity</a>
                    <a href="#">Contact</a>
                </div>
                <div class="copyright">
                   <a href="templateshub.net">Templates Hub</a>
                </div>
            </div>
        </div>
    </div>
</footer>
