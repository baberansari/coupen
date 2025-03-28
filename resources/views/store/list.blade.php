@extends('layouts.site.site')
@section('content')
<header>
    <!-- Font Awesome CDN -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

</header>
<style>
    .gray .coupon-item:hover .coupon-content,
    .gray .coupons-code-item {
        border-color: #04BFBF;
        border-radius: 21px;

    }

    .sec-title {
        display: flex;
        flex-direction: column;
        margin-bottom: 20px;
    }

    span.ali_madad {
        background-color: cornflowerblue;
        width: 120px;
        padding: 7px;
        color: aliceblue;
        font-size: 12px;
        border-radius: 10px;
        margin: 5px;
        padding-left: 11px;
    }

    .sec-title h1 {
        font-weight: 600 !important;
        font-size: 32px !important;
        color: #414141;
    }

    .store-sec .sec-title ul {
        margin-top: 15px;
        flex-flow: wrap;

    }

    .list-unstyled {
        padding-left: 0;
        list-style: none;
        display: flex !important;
    }

    .store-sec .sec-title ul li {
        padding-right: 20px;
        font-weight: 700;
        color: var(--gray-color);
    }

    .store-sec .sec-title ul li {
        font-weight: 400 !important;
    }

    .reload_image {
        width: 14px;
        height: 14px;
        margin-left: -10px;
        margin-right: 5px;
        margin-top: -2px;
    }

    .store-sec .sec-title ul li::before {
        content: "\f00c";
        font-family: 'font Awesome 5 free';
        font-weight: 700;
        font-size: 12px;
        margin-right: 10px;
    }

    .store_tit {
        font-size: small;
        padding-left: 12px;
    }

    span.badge {
        background-color: #FFA43E;
        padding: 6px;
        color: aliceblue;
        border-radius: 10px;

    }

    .rate-brand {
        padding: 10px;
        text-align: center;
    }
    .star{
        font-size: 22px;
    }
    .star.half
    {
        color: #FFA43E
    }
    .star.full
    {
        color: #FFA43E
    }
    .star.empty
    {
        color: #fff
    }
    .gray .btn.btn-blue {
    border-radius: 25px;
    }
    .gray .container-page {
        background: none !important;
    }
    @media screen and (max-device-width: 767px), screen and (max-width: 767px) {
        .grid_3 .mod-simple-coupon {
                display: none;
            }
            .grid_9 .mod-coupons-code .wrap-list
            {

            height: 321px;
            overflow: hidden;
            overflow-y: auto;

            }
            .grid_9 .mod-coupons-code .wrap-list .coupons-code-item
            {

            text-align: center

            }
    .brand-desc{
        display: none
    }
    .grid_3 {
        width: 100%;
    }
    .brand-logo img{
        width: 48% !important;
    }
}
</style>
<div class="grid_frame page-content">
    <div class="container_grid">
        <div class="layout-2cols clearfix">

            <div class="grid_3">
                <div class="brand-info-right">
                    <p class="rs ta-c brand-logo"><img style="border: 1px solid;border-radius: 100%;width: 75%;"
                            src="{{ asset($store->store_logo) }}" alt="$BRAND_NAME"></p>
                    <div class="rate-brand clearfix">
                        <?php
                            echo generateStars($store->store_rating);?>  {{ $store->store_rating }}
                    </div>
                    <div class="mod-simple-coupon block">
                        <h3 class="title-block">Top Coupon</h3>
                        <div class="block-content">
                            @foreach (getLetestCoup2($store->id) as $offer)
                            <div class="coupons-code-item simple flex" style="    border: 1px solid #04BFBF;">
                                <div class="brand-logo thumb-left">
                                    <div class="wrap-logo">
                                        <div class="center-img">
                                            <span class="ver_hold"></span>

                                            <a  href="{{ route('store',$offer->store->store_slug) }}" class="ver_container">
                                                <img src="{{ asset($offer->store->store_logo) }}"
                                                    alt="$BRAND_NAME"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="right-content flex-body">
                                    <p class="rs save-price">

                                        <a style="color: #000;"  href="{{ route('store',$offer->store->store_slug) }}">{{ $offer->offer_title }}
                                            </a>
                                        </p>
                                        <span class="badge " style="border-radius: 4px;    padding: 2px;">
                                            {{ $offer->offer_type }}
                                        </span>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="brand-desc">

                        <div class="title-desc" style="    font-size: 24px;
                        color: #000;">Why Discountvaults?</div>
                        <br>
                        <p class="rs" style="    color: #000;">
                            Discountvaults.com is supported by a dedicated team of Deal Hunters who actively source and
                            verify the best promo codes and deals for {{ $store->store_name }}. Our experts work
                            diligently to save you both time and money while shopping. By continuously researching the
                            market in real-time, we ensure you receive the most current and reliable savings
                            information, highlighting the best stores to shop and the most valuable products to
                            purchase. We also thoroughly review the fine print, so you can be confident that every promo
                            code is valid and applicable to your purchase. No matter where you shop, you can trust
                            Discountvaults to provide verified coupons, promo codes, sales, and deals. Our team last
                            verified {{ $store->store_name }} offers on {{ date('D-m-Y') }}.
                        </p>
                    </div>

                </div>
            </div>
            <div class="grid_9 content">

                <div class="mod-simple-coupon block">
                    <div class="block-content">
                        <div class="coupons-code-item simple flex">
                            <div class="right-content flex-body">
                                <div class="sec-title">
                                  {{-- /  <span class="ali_madad">Ya Ali. AS Madad</span> --}}
                                    <h1>{{ $store->store_name }}</h1>
                                    <h2 class="store_tit"><img class="reload_image"
                                            src="https://retailescaper.com/uploads/page/updatee.svg" alt=""> 5 coupon
                                        codes updated on 26 March, 2025</h2>

                                        <div class="block-content">
                                            <label>
                                                <input name="offer_type" type="radio" class="slectOne" id="all" data-id="all" checked="">
                                                <span class="btn btn-gray type-tag">All Offers</span>
                                            </label>
                                            <label>
                                                <input name="offer_type" type="radio" class="slectOne" data-id="code">
                                                <span class="btn btn-gray type-tag">Coupons</span>
                                            </label>
                                            <label>
                                                <input name="offer_type" type="radio" class="slectOne" data-id="deal">
                                                <span class="btn btn-gray type-tag">Deals</span>
                                            </label>
                                        </div>
                                    {{-- <ul class="list-unstyled d-flex">
                                        <li>Delivery</li>
                                        <li>Free Shipping</li>
                                    </ul> --}}
                                </div>
                            </div>
                        </div>
                        <!--end: .coupons-code-item -->

                    </div>
                </div>
                <div class="mod-coupons-code">
                    <div class="wrap-list data-table">



                    </div>
                    <div id="pagination-links" class="table-pagination pagination">
                    </div>
                </div>
                <!--end: .mod-coupons-code -->
            </div>

        </div>
        <div class="layout-2cols clearfix">
            @if(!empty($store->faqs) && count($store->faqs)>0)
            <section class="container ko-faq-section">
                <div class="ko-container">
                    <h2>Frequently asked questions</h2>
                    <p>Question you might ask about our services.</p>
                    <div class="ko-faq-accordion">
                        @foreach ($store->faqs as $faq)
                        <div class="ko-accordion-item">
                            <div class="ko-accordion-item-header">{!! $faq->question !!}?</div>
                            <div class="ko-accordion-item-body">
                                <p class="ko-accordion-item-body-content">{!! $faq->answer !!}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>

                </div>
            </section>
            @endif
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.js"></script>
<script>
    $(document).ready(function() {
      let nextPageUrl = '';
      let prevPageUrl = '';
      var slug = "{{ $slug }}";

      function fetchData(url = '/store/'+slug, type) {

          var loader = `<tr><td colspan="7">
            <div class="spinner-border text-danger" role="status">
            <span class="visually-hidden"></span>
            </div></td></tr>`;
            $('.data-table').html(loader);
          var type = type;
          $.ajax({
              url: url,
              method: 'GET',
              data: { type: type,slug:slug },
              success: function(response) {

                  if(response.data.length == 0)
                  {
                    let tableRows = `<tr >
                      <td colspan="7">No Data Found</td>
                      </tr>`
                      $('.data-table').html(tableRows);
                  }else{

                console.log(response.data);

                let tableRows = response.data.map(item => `

                <div class="coupons-code-item full flex">
                            <div class="brand-logo thumb-left">
                                <div class="wrap-logo">
                                    <div class="center-img">
                                        <span class="ver_hold"></span>
                                        ${item.offer_free_shipping ?
                                        '<img src="{{ asset("site/images/images.png") }}" alt="$BRAND_NAME">' :
                                        `<h4 style="    font-size: 35px;
    color: #04BFBF;
    line-height: 1;">${item.offer_discount_number}</h4>`
                                    }
                                    </div>
                                </div>
                            </div>
                            <div class="right-content flex-body">
                                <p class="rs save-price">
                                   </br></br>
                                    <a href="javascript;">${item.offer_title}</a>
                                <p class="rs coupon-desc"> ${item.offer_verified ?
                                        `<div class="verified">
                                            <span>Verified <i class="far fa-check-circle"
                                                style="background: #ffffff00; color: #18f351; font-size: 15px;">
                                            </i></span>
                                        </div>` : ''
                                    }</p>
                                <div class="bottom-action">
                                    <div class="left-vote">
                                        <span class="lbl-work">${item.used_percentage}% work</span>
                                        <span class="badge " style="text-transform: capitalize;">
                                        ${item.offer_type}
                                        </span>
                                    </div>
                                    <a type="button" class="btn btn-blue btn-view-coupon offer_anchor" onclick="getCode('${item.id}',this)" data-offer_id="${item.id}"
                                     data-offer_affiliate_url="${item.store.store_affiliate_url}">Activate ${item.offer_type}</a>

                                </div>
                            </div>
                        </div>
                        `).join('');

                        $('.data-table').html(tableRows);

                }

                  // Update pagination controls
                  nextPageUrl = response.next_page_url;
                  prevPageUrl = response.prev_page_url;
                  let currentPage = response.current_page;
                  let lastPage = response.last_page;
                  $('#pagination-links').html(`
                   <div class="page-no">Page ${currentPage} of ${lastPage}</div>
                   <div class="pagination-btns">
                      ${prevPageUrl ? ' <a class="page-nav" id="prev-btn"><i class="icon iPrev"></i></a>' : '<a class="page-nav" id="prev-btn"><i class="icon iPrev"></i></a>'}
                      ${nextPageUrl ? ' <a class="page-nav"id="next-btn"><i class="icon iNext"></i></a>' : '<a class="page-nav"id="next-btn"><i class="icon iNext"></i></a>'}
                  </div>
                      `);
              }
          });
      }

      // Initial load
      fetchData();

      // Handle Previous button click
      $(document).on('click', '#prev-btn', function() {
          if (prevPageUrl) {
              fetchData(prevPageUrl, $('.search').val());
          }
      });

      // Handle Next button click
      $(document).on('click', '#next-btn', function() {
          if (nextPageUrl) {
              fetchData(nextPageUrl, $('.search').val());
          }
      });
      $('.slectOne').on('change', function () {
        let type = $('input[name="offer_type"]:checked').data('id');
        fetchData('/store/'+slug, type);
    });

    $('ul li').on('click', function () {
    let type = $(this).data('tab'); // Get data-tab value
    $('ul li').removeClass('active'); // Remove active class from all
    $(this).addClass('active'); // Add active class to clicked item

    // Update the radio button selection based on clicked <li>
    $('input[name="offer_type"][data-id="' + type + '"]').prop('checked', true).trigger('change');
    });
      // Handle search input
      $('.search').on('input', function() {
          fetchData('/store/'+slug, $(this).val());
      });
  });

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
@endsection
