<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <title>Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="{{ asset('site/css/font.css')}}">
    <link rel="stylesheet" href="{{ asset('site/css/font-awesome.css')}}">
    <link rel="stylesheet" href="{{ asset('site/css/normalize.css')}}">
    <!--css plugin-->
    <link rel="stylesheet" href="{{ asset('site/css/flexslider.css')}}">
    <link rel="stylesheet" href="{{ asset('site/css/jquery.nouislider.css')}}">
    <link rel="stylesheet" href="{{ asset('site/css/jquery.popupcommon.css')}}">

    <link rel="stylesheet" href="{{ asset('site/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('site/css/style-dark.css')}}">
    <link rel="stylesheet" href="{{ asset('site/css/style-gray.css')}}">
    <link rel="stylesheet" href="{{ asset('site/css/res-menu.css')}}">
    <link rel="stylesheet" href="{{ asset('site/css/responsive.css')}}">

    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Armata">
    <style type="text/css">
        #html5-text {
            color: #333;
            font-size: 13px;
            font-weight: 700;
            overflow: hidden;
        }

        .html5-error {
            text-align: center;
            color: #ff0000;
            font-size: 14px;
        }
    </style>
</head>

<body class="gray">
    <div class="mp-pusher" id="mp-pusher">
        @include('layouts.site.header')
        @yield('content')
        @include('layouts.site.footer')
    </div>

    <section id="coupon_modal" class="coupon-popup-sec ">
        <div class="coupon-popup-main">
            <div class="container">
                <div class="contentbox">
                    <button type="button" onclick="closed()"><i   class="icon iClose close-popop"></i></button>

                    <div class="container_grid">
                        <div class="layout-2cols clearfix">
                            <div class="grid_3 content titlebox margin_title">
                                <img src="https://retailescaper.com/uploads/store/climbing-247-discount-code.png" alt="Brand Image">
                            </div>
                             <div class="copy-code grid_8">
                                <h4 class="main_title">15% rabatt på alla beställningar</h4>
                                <h4 class="no_code" style="display: none;">No coupon code required.</h4>
                                   <div class="description" style="line: height 1.4em; margin:5px; margin-top:9px;">
                                       Join $100 Cashback offer by signing up for the program <br> using this link button:
                                   </div>

                                <div class="mycustom">

                                    <input class="code-text" id="copyTarget" value="EMAILFF10" type="text" name="">
                                    <div class="input-group-prepend">
                                       <a style="background-color: #FE9213; color: white;" href="javascript:;" id="copyButton" class="btn btn-primary btn-sm"><i class="far fa-clone fa-flip-vertical"></i></a>
                                    </div>
                                </div>
                                <div class="flex">

                                <span>Copy and paste this code at  <a data-offer_id="3152" href="javascript:;" class="offer_anchor mainbox store_link">Climbing247</a></span>

                                </div>
                             </div>
                             <div class="grid_1">

                             </div>
                        </div>
                    </div>
                    <div class="container_grid">
                        <div class="layout-2cols clearfix">
                            <div class="grid_12">
                                <div class="popup-btn-box margin_top_b">
                                    <div class="work-btn-box">
                                        <span>Did it work?</span>
                                        <div class="toggle-radio">
                                          <input type="radio" data-id="" class="rdo" name="rdo" id="yes" value="yes">
                                          <input type="radio" data-id="" class="rdo" name="rdo" id="no" value="no">
                                          <input type="hidden" value="3152" class="offer_id">
                                          <div class="switch">
                                            <label for="yes">Yes</label>
                                            <label for="no">No</label>
                                            <span></span>
                                          </div>
                                        </div>
                                    </div>
                                    <a class="continue-btn" style="background-color: #ff00008f;" href="javascript:;">Continue to Store</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script type="text/javascript" src="{{ asset('site/js/jquery-1.10.2.js')}}"></script>
    <script type="text/javascript" src="{{ asset('site/js/jquery.flexslider-min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('site/js/jquery.nouislider.js')}}"></script>
    <script type="text/javascript" src="{{ asset('site/js/jquery.popupcommon.js')}}"></script>
    <script type="text/javascript" src="{{ asset('site/js/html5lightbox.js')}}"></script>
    <script type="text/javascript" src="{{ asset('site/js/modernizr.custom.js')}}"></script>
    <script type="text/javascript" src="{{ asset('site/js/classie.js')}}"></script>
    <script type="text/javascript" src="{{ asset('site/js/mlpushmenu.js')}}"></script>
    <script type="text/javascript" src="{{ asset('site/js/script.js')}}"></script>
    <script>
        function closed()
        {
            $('#coupon_modal .no_code').css('display','none');
            $('#coupon_modal').removeClass('active');

        }
        function getCode(id,elemet)
        {

            var offer_affiliate_url = $(elemet).attr("data-offer_affiliate_url");
            var offer_id = $(elemet).attr("data-offer_id");
            popup_open(offer_id);
            setTimeout(function() {
            window.open(offer_affiliate_url, '_blank', 'noopener,noreferrer');
        }, 3000);
        }
    function popup_open(offer_id) {
        var base_url = 'https://discountvaults.com/'
        var id  = offer_id;
        jQuery.getJSON('https://api64.ipify.org?format=json', function(data) {
            var userIp = data.ip; // G
            jQuery.ajax({
                url: "{{ route('getCode') }}",
                method: 'get',
                data: {
                    id: id,userIp:userIp
                },
                success: function(response) {
                        jQuery('#coupon_modal .titlebox img').attr('src', base_url + response.data.store.store_logo);
                        jQuery('#coupon_modal .main_title').html(response.data.offer_title);
                        if (response.data.offer_type == 'deal') {
                            jQuery('#coupon_modal .code-text').val('NO CODE REQUIRED');
                            jQuery('#coupon_modal .no_code').css('display','block');
                        } else {
                            jQuery('#coupon_modal .code-text').val(response.data.offer_code);
                        }
                        jQuery('#coupon_modal .store_link').attr('href', response.data.offer_affiliate_url);
                        jQuery('#coupon_modal .continue-btn').attr('href', response.data.offer_affiliate_url);
                        jQuery('#coupon_modal .store_link').html(response.data.store.store_name);
                        jQuery('#coupon_modal .coupon-popup-detail .description').html(response
                            .data.offer_description);
                        jQuery('#coupon_modal .description').html(response
                            .data.offer_description);
                        jQuery('#coupon_modal .used').text(response.data.offer_views);

                        jQuery('#coupon_modal').addClass('active');



                    }
            });
        });
        }
        $(document).ready(function() {

            $(".store_list a:not([data-category='A'])").hide();

        });

    </script>
        <script>
            const accordionItemh = document.querySelectorAll(".ko-accordion-item-header");
            accordionItemh.forEach((accordionItemh) => {
                accordionItemh.addEventListener("click", (event) => {
                    accordionItemh.classList.toggle("active");
                    const accordionItemBody = accordionItemh.nextElementSibling;
                    if (accordionItemh.classList.contains("active")) {
                        accordionItemBody.style.maxHeight = accordionItemBody.scrollHeight + "px";
                    } else {
                        accordionItemBody.style.maxHeight = 0;
                    }
                });
            });
        </script>
</body>

</html>

{{-- <section id="coupon_modal" class="coupon-popup-sec ">
                <div class="coupon-popup-main">
                    <div class="container">
                        <div class="contentbox">
                            <i class="close-btn fas fa-times"></i>
                            <div class="row">
                                <div class="titlebox margin_title col-md-3">
                                    <img src="https://retailescaper.com/uploads/store/climbing-247-discount-code.png" alt="Brand Image">
                                </div>
                                <div class="copy-code col-md-8" id="">
                                     <h4 class="main_title">15% rabatt på alla beställningar</h4>
                                     <h4 class="no_code" style="display: none;">No coupon code required.</h4>
                                        <div class="description" style="line: height 1.4em; margin:5px; margin-top:9px;">
                                            Join $100 Cashback offer by signing up for the program <br> using this link button:
                                        </div>

                                     <div class="mycustom">

                                         <input class="code-text" id="copyTarget" value="EMAILFF10" type="text" name="">
                                         <div class="input-group-prepend">
                                            <a style="background-color: #FE9213; color: white;" href="javascript:;" id="copyButton" class="btn btn-primary btn-sm"><i class="far fa-clone fa-flip-vertical"></i></a>
                                         </div>
                                     </div>
                                     <div class="flex">

                                     <span>Copy and paste this code at  <a data-offer_id="3152" href="javascript:;" class="offer_anchor mainbox store_link">Climbing247</a></span>

                                     </div>
                                </div>
                                <div class="col-md-1"></div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="popup-btn-box margin_top_b">
                                        <div class="work-btn-box">
                                            <span>Did it work?</span>
                                            <div class="toggle-radio">
                                              <input type="radio" data-id="" class="rdo" name="rdo" id="yes" value="yes">
                                              <input type="radio" data-id="" class="rdo" name="rdo" id="no" value="no">
                                              <input type="hidden" value="3152" class="offer_id">
                                              <div class="switch">
                                                <label for="yes">Yes</label>
                                                <label for="no">No</label>
                                                <span></span>
                                              </div>
                                            </div>
                                        </div>
                                        <a class="continue-btn" style="background-color: #ff00008f;" href="javascript:;">Continue to Store</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> --}}

<!-- Footer End -->
{{-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>



<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<script src="https://code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="{{ asset('assetsite/new/js/theme-lib.js') }}"></script>
<script src="{{ asset('assetsite/new/js/theme-fun.js') }}"></script>
<script src="{{ asset('assetsite/js/site.js') }}"></script>
 --}}


{{--
<script>
    $(document).ready(function() {
     if ($('.store-short-desc > p').length > 1) {
            $('.store-short-desc > p:gt(-3)').hide();
            $('.show-more').show();
        } else {
            $('.show-more').hide();
        }

        $('.show-more').on('click', function() {
            //toggle elements with class .ty-compact-list that their index is bigger than 2
            $('.store-short-desc > p:gt(-3)').toggle();
            //change text of show more element just for demonstration purposes to this demo
            $(this).text() === 'Show more' ? $(this).text('Show less') : $(this).text('Show more');
        });



    });

    $(document).ready(function() {

        $(document).on('click', '#copyButton', function () {
            $(this).html('<i class="far fa-check-circle" style="color: #ffffff;"></i>');
        });

    });

    $(document).on('click', '#copyButton', function () {
        copyToClipboard(document.getElementById("copyTarget"));
        $(this).html('<i class="far fa-clone fa-flip-vertical"></i>');

    });


    function copyToClipboard(elem) {
        // create hidden text element, if it doesn't already exist
        var targetId = "_hiddenCopyText_";
        var isInput = elem.tagName === "INPUT" || elem.tagName === "TEXTAREA";
        var origSelectionStart, origSelectionEnd;
        if (isInput) {
            // can just use the original source element for the selection and copy
            target = elem;
            origSelectionStart = elem.selectionStart;
            origSelectionEnd = elem.selectionEnd;
        } else {
            // must use a temporary form element for the selection and copy
            target = document.getElementById(targetId);
            if (!target) {
                var target = document.createElement("textarea");
                target.style.position = "absolute";
                target.style.left = "-9999px";
                target.style.top = "0";
                target.id = targetId;
                document.body.appendChild(target);
            }
            target.textContent = elem.textContent;
        }
        // select the content
        var currentFocus = document.activeElement;
        target.focus();
        target.setSelectionRange(0, target.value.length);

        // copy the selection
        var succeed;
        try {
            succeed = document.execCommand("copy");
        } catch (e) {
            succeed = false;
        }
        // restore original focus
        if (currentFocus && typeof currentFocus.focus === "function") {
            currentFocus.focus();
        }

        if (isInput) {
            // restore prior selection
            elem.setSelectionRange(origSelectionStart, origSelectionEnd);
        } else {
            // clear temporary content
            target.textContent = "";
        }
        return succeed;
    }
</script>

<script>
    function getCode(id,elemet)
    {

        var offer_affiliate_url = $(elemet).attr("data-offer_affiliate_url");
        var offer_id = $(elemet).attr("data-offer_id");
        window.open(offer_affiliate_url, '_blank', 'noopener,noreferrer');
        popup_open(offer_id);


    }
    function popup_open(offer_id) {
    var base_url = 'https://discountvaults.com/'
    var id  = offer_id;
    jQuery.getJSON('https://api64.ipify.org?format=json', function(data) {
        var userIp = data.ip; // G
        jQuery.ajax({
            url: "{{ route('getCode') }}",
            method: 'get',
            data: {
                id: id,userIp:userIp
            },
            success: function(response) {
                    jQuery('#coupon_modal .titlebox img').attr('src', base_url + response.data.store.store_logo);
                    jQuery('#coupon_modal .main_title').html(response.data.offer_title);
                    if (response.data.offer_type == 'deal') {
                        jQuery('#coupon_modal .code-text').val('NO CODE REQUIRED');
                        jQuery('#coupon_modal .no_code').css('display','block');
                    } else {
                        jQuery('#coupon_modal .code-text').val(response.data.offer_code);
                    }
                    jQuery('#coupon_modal .store_link').attr('href', response.data.offer_affiliate_url);
                    jQuery('#coupon_modal .continue-btn').attr('href', response.data.offer_affiliate_url);
                    jQuery('#coupon_modal .store_link').html(response.data.store.store_name);
                    jQuery('#coupon_modal .coupon-popup-detail .description').html(response
                        .data.offer_description);
                    jQuery('#coupon_modal .description').html(response
                        .data.offer_description);
                    jQuery('#coupon_modal .used').text(response.data.offer_views);

                    jQuery('#coupon_modal').addClass('active');



                }
        });
    });
    }
    $(document).ready(function() {

        $(".store_list a:not([data-category='A'])").hide();

    });

</script> --}}
