<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
@php
$setting = settings();
 @endphp
<head>
    <title>{{ $setting->settings_site_title }}</title>

    {{ $setting->settings_head_script  }}
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset($setting->settings_favicon) }}">
    <link rel="stylesheet" href="{{ asset('site/css/font.css') }}">
    <link rel="stylesheet" href="{{ asset('site/css/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('site/css/normalize.css') }}">
    <!--css plugin-->
    <link rel="stylesheet" href="{{ asset('site/css/flexslider.css') }}">
    <link rel="stylesheet" href="{{ asset('site/css/jquery.nouislider.css') }}">
    <link rel="stylesheet" href="{{ asset('site/css/jquery.popupcommon.css') }}">

    <link rel="stylesheet" href="{{ asset('site/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('site/css/style-dark.css') }}">
    <link rel="stylesheet" href="{{ asset('site/css/style-gray.css') }}">
    <link rel="stylesheet" href="{{ asset('site/css/res-menu.css') }}">
    <link rel="stylesheet" href="{{ asset('site/css/responsive.css') }}">

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

        /* coupen  */


        /* Styling for the promo popup */
        .promo-popup {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            padding: 20px;
            position: relative;
            max-width: 500px;
            margin: 0 auto;
            text-align: center;
            font-family: Arial, sans-serif;
        }

        /* Close button */
        .close-btn {
            position: absolute;
            top: 10px;
            right: 10px;
            background: none;
            border: none;
            font-size: 20px;
            cursor: pointer;
            color: #333;
        }

        /* Heading */
        .promo-popup h3 {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 20px;
            color: #333;
        }

        /* Category section (TOYS and LEGO logo) */
        .category-section {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
        }

        .category-section p {
            font-size: 16px;
            font-weight: bold;
            margin-right: 10px;
            color: #333;
        }

        .lego-logo {
            width: 80px;
            height: auto;
        }


        /* Coupon section */
        .coupon-section {
            display: flex;
            /* align-items: center;
  justify-content: center; */
            margin-bottom: 10px;
        }

        .coupon-text {
            background-color: #fff;
            border: 2px solid #ff0000;
            padding: 5px 15px;
            font-size: 14px;
            font-weight: bold;
            color: #333;
            width: 100%;
            text-align: left;
        }

        .copy-btn {
            background-color: #ff8c00;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
            font-size: 16px;

        }

        /* Copy instruction */
        .copy-instruction {
            font-size: 12px;
            color: #666;
            margin-bottom: 20px;
        }

        /* Feedback section */
        .feedback-section {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
        }

        .feedback-section p {
            font-size: 14px;
            color: #333;
            margin-right: 10px;
        }

        .btn {
            padding: 5px 15px;
            border: none;
            border-radius: 5px;
            font-size: 14px;
            cursor: pointer;
        }

        .yes-btn {
            background-color: #00cc00;
            color: #fff;
            margin-right: 10px;
        }

        .no-btn {
            background-color: #fff;
            color: #333;
            border: 1px solid #ccc;
        }

        /* Continue button */
        .continue-btn {
            background-color: #ff4d4d;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            width: 100%;
            max-width: 300px;
        }

        /* Hover effects */
        .cashback-link:hover {
            background-color: #0056b3;
        }

        .copy-btn:hover {
            background-color: #e07b00;
        }

        .yes-btn:hover {
            background-color: #00b300;
        }

        .no-btn:hover {
            background-color: #f0f0f0;
        }

        .continue-btn:hover {
            background-color: #e04343;
        }

        .cust-switch {
            display: inline-block;
            position: relative;
            background-color: #0c5f72;
            padding: 3px;
            border-radius: 21px
        }

        .cust-switch input {
            position: absolute;
            left: 0;
            top: 0;
            height: 100%;
            width: 100%;
            opacity: 0;
            cursor: pointer;
        }

        .cust-switch-text {
            display: flex;
            gap: 3px;
        }

        .cust-switch-text>div {
            font-size: 16px;
            line-height: 29px;
            height: 26px;
            max-height: 26px;
            padding: 5px 20px;
            color: #fff;
            border-radius: 19px;
            transition: 150ms;
            background-color: transparent;
        }

        .cust-switch input:not(:checked)+.cust-switch-text>div:first-child,
        .cust-switch input:checked+.cust-switch-text>div:last-child {
            color: #000;
            background-color: #eee;
        }
    </style>
</head>

<body class="gray">

    <div class="container-page">
    <div class="mp-pusher" id="mp-pusher">
        @include('layouts.site.header')
        @yield('content')
        @include('layouts.site.footer')
    </div>
</div>
    <section id="coupon_modal" class="coupon-popup-sec ">
        <div class="coupon-popup-main">
            <div class="container">
                <div class="contentbox">
                    {{-- <button type="button" onclick="closed()"><i   class="icon iClose close-popop"></i></button> --}}
                    <div class="layout-2cols clearfix">
                        <button class="close-btn" type="button" onclick="closed()">&times;</button>
                        <div class="grid_3 titlebox">
                            <img style="width: 100%;height: 169px;"
                                src="http://coupen.test/site/images/ex/01_banner.jpg" alt="LEGO Logo" class="lego-logo">
                        </div>

                        <div class="grid_9">
                            <h1 style="text-align:left;font-weight: bold;" class="main_title">Christmas gifts: Up To 15% Off Selected</h1>

                            <div class="coupon-section">
                                <input class="code-text" id="copyTarget" style="display: none" value="EMAILFF10" type="text"
                                    name="">
                                <span class="coupon-text code-text">CODE ALREADY APPLIED</span>
                                <button class="copy-btn" id="copyButton">&#128203;</button>
                            </div>
                            <p class="copy-instruction" style="text-align: left;">
                                Copy and paste this code at <a class="store_link" href=""></a></p>
                            <div style="display: flex;justify-content: space-between;">
                                <div>
                                    Did Code Work ?
                                    <input type="hidden" name="" id="coupen_id">
                                    <div class="cust-switch">
                                        <input type="checkbox" id="switchToggle">
                                        <div class="cust-switch-text">
                                            <div>Yes</div>
                                            <div>No</div>
                                        </div>
                                    </div>
                                </div>
                                <button class="continue-btn">CONTINUE TO STORE</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        </div>
    </section>

    <script type="text/javascript" src="{{ asset('site/js/jquery-1.10.2.js') }}"></script>
    <script type="text/javascript" src="{{ asset('site/js/jquery.flexslider-min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('site/js/jquery.nouislider.js') }}"></script>
    <script type="text/javascript" src="{{ asset('site/js/jquery.popupcommon.js') }}"></script>
    <script type="text/javascript" src="{{ asset('site/js/html5lightbox.js') }}"></script>
    <script type="text/javascript" src="{{ asset('site/js/modernizr.custom.js') }}"></script>
    <script type="text/javascript" src="{{ asset('site/js/classie.js') }}"></script>
    <script type="text/javascript" src="{{ asset('site/js/mlpushmenu.js') }}"></script>
    <script type="text/javascript" src="{{ asset('site/js/script.js') }}"></script>
    <script>

$(document).ready(function(){
    $("#switchToggle").on("change", function() {
        var value = $(this).is(":checked") ? 1 : 0; // Yes = 1, No = 0
        var id =  $('#coupen_id').val();
        jQuery.getJSON('https://api64.ipify.org?format=json', function(data) {
            var userIp = data.ip; // G
        $.ajax({
            url: "{{ route('usage') }}", // Replace with your actual URL
            type: "get",
            data: { switchValue: value ,userIp:userIp,id:id},
            success: function(response) {
                console.log("Switch updated:", response);
            },
            error: function(xhr, status, error) {
                console.log("Error:", error);
            }
        });
    })
    });
});
        function closed() {
            $('#coupon_modal .no_code').css('display', 'none');
            $('#coupon_modal').removeClass('active');

        }

        function getCode(id, elemet) {

            var offer_affiliate_url = $(elemet).attr("data-offer_affiliate_url");
            var offer_id = $(elemet).attr("data-offer_id");
            popup_open(offer_id);
            setTimeout(function() {
                window.open(offer_affiliate_url, '_blank', 'noopener,noreferrer');
            }, 3000);
        }

        function popup_open(offer_id) {
            var base_url = 'https://discountvaults.com/'
            var id = offer_id;
            jQuery.getJSON('https://api64.ipify.org?format=json', function(data) {
                var userIp = data.ip; // G
                jQuery.ajax({
                    url: "{{ route('getCode') }}",
                    method: 'get',
                    data: {
                        id: id,
                        userIp: userIp
                    },
                    success: function(response) {
                        jQuery('#coupon_modal .titlebox img').attr('src', base_url + response.data.store
                            .store_logo);
                        jQuery('#coupon_modal .main_title').html(response.data.offer_title);
                        if (response.data.offer_type == 'deal') {
                            jQuery('#coupon_modal .code-text').html('NO CODE REQUIRED');
                            jQuery('#coupon_modal .code-text').val('NO CODE REQUIRED');
                            jQuery('#coupon_modal .no_code').css('display', 'block');
                        } else {
                            jQuery('#coupon_modal .code-text').val(response.data.offer_code);
                        }
                        jQuery('#coupen_id').val(response.data.id);

                        jQuery('#coupon_modal .store_link').attr('href', response.data.store
                            .offer_affiliate_url);
                        jQuery('#coupon_modal .continue-btn').attr('href', response.data.store
                            .offer_affiliate_url);
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
        $(document).ready(function() {

            $(document).on('click', '#copyButton', function() {
                $(this).html('<i class="far fa-check-circle" style="color: #ffffff;"></i>');
            });

        });

        $(document).on('click', '#copyButton', function() {

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
</body>

</html>
