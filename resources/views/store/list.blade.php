@extends('layouts.site.site')
@section('content')
<style>
    .gray .coupon-item:hover .coupon-content, .gray .coupons-code-item
    {
            border-color: #04BFBF;
    }
</style>
<div class="grid_frame page-content">
    <div class="container_grid">
        <div class="layout-2cols clearfix">
            <div class="grid_8 content">
                <div class="mod-coupons-code">
                    <div class="wrap-list data-table">
                        {{-- <div class="coupons-code-item right-action flex">
                            <div class="brand-logo thumb-left">
                                <div class="wrap-logo">
                                    <div class="center-img">
                                        <span class="ver_hold"></span>
                                        <a href="#" class="ver_container"><img src="images/ex/04-06.jpg" alt="$BRAND_NAME"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="right-content flex-body">
                                <p class="rs save-price"><a href="#">Save 20%-50% Off All Vitamin World Brand Items</a></p>
                                <p class="rs coupon-desc">Must book by 11:59PM CT on 11/17/13. Travel completed by 3/30/14.</p>
                                <div class="bottom-action">
                                    <div class="left-vote">
                                        <span class="lbl-work">100% work</span>
                                        <span>
                                            <span class="lbl-vote">12 <i class="icon iAddVote"></i></span>
                                            <span class="lbl-vote">2 <i class="icon iSubVote"></i></span>
                                        </span>
                                    </div>
                                    <a class="btn btn-blue btn-view-coupon" href="#">VIEW <span>COUPON</span> CODE</a>
                                </div>
                            </div>
                        </div><!--end: .coupons-code-item --> --}}

                    </div>
                    <div id="pagination-links" class="table-pagination pagination">
                    </div>
                </div><!--end: .mod-coupons-code -->
            </div>
            <div class="grid_4 sidebar">
                <div class="mod-search block">
                    <h3 class="title-block">{{ $store->store_name }}</h3>
                    <div class="block-content">
                        <div class="store-img">
                            <img style="width:225p×;height:225px;" src="{{ asset($store->store_logo) }}" alt="{{ asset($store->store_logo) }}">
                        </div>
                        {{-- <label class="lbl-wrap" for="sys_search_coupon_code">
                            <input class="keyword-search" id="sys_search_coupon_code" type="search" placeholder="Search">
                            <input type="submit" class="btn-search" value="">
                        </label> --}}
                    </div>
                </div><!--end: .mod-search -->

                <div class="mod-popular-tag block">
                    <h3 class="title-block">Search By Type</h3>
                    <div class="block-content">
                        <label>
                            <input name="offer_type" type="radio" class="slectOne" id="all"
                                data-id="all" checked="">
                            <span  class="btn btn-gray type-tag">All Offers</span>
                        </label>
                        <label>
                            <input name="offer_type" type="radio" class="slectOne" data-id="code">
                            <span  class="btn btn-gray type-tag">Coupons</span>
                        </label>
                        <label>
                            <input name="offer_type" type="radio" class="slectOne" data-id="deal">
                            <span  class="btn btn-gray type-tag">Deals</span>
                        </label>
                    </div>
                </div>
                <div class="mod-list-store block">
                    <h3 class="title-block">Related  store</h3>
                    <div class="block-content">
                        <div class="wrap-list-store clearfix">
                            @foreach (getRelatedStoregs($slug) as $related)
                            <a class="brand-logo" href="{{ route('store',$related->store_slug) }}">
                                <span class="wrap-logo">
                                    <span class="center-img">
                                        <span class="ver_hold"></span>
                                        <span class="ver_container"><img src=" {{asset($related->store_logo)}}" alt="$BRAND_NAME">
                                        {{ $related->store_name }}
                                        </span>
                                    </span>
                                </span>
                            </a>
                            @endforeach

                        </div>
                    </div>
                </div><!--end: .mod-list-store -->
                <div class="mod-simple-coupon block">
                    <h3 class="title-block">Latest coupon</h3>
                    <div class="block-content">
                        <div class="coupons-code-item simple flex">
                            <div class="brand-logo thumb-left">
                                <div class="wrap-logo">
                                    <div class="center-img">
                                        <span class="ver_hold"></span>
                                        <a href="#" class="ver_container"><img src="images/ex/04-13.jpg" alt="$BRAND_NAME"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="right-content flex-body">
                                <p class="rs save-price"><a href="#">Save 10% Off a New Hotel Booking at Participating Price Match Guarantee Hotels</a></p>
                            </div>
                        </div><!--end: .coupons-code-item -->

                    </div>
                </div><!--end: .mod-simple-coupon -->
                <div class="mod-ads"><a href="#"><img src="images/ex/04-17.jpg" alt="$NAME"></a></div>

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
                        <div class="ko-accordion-item-header">{!! $faq->question  !!}?</div>
                        <div class="ko-accordion-item-body">
                            <p class="ko-accordion-item-body-content">{!! $faq->answer  !!}</p>
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
                           <div class="coupons-code-item right-action flex">
                            <div class="brand-logo thumb-left">
                                <div class="wrap-logo">
                                    <div class="center-img">
                                        <span class="ver_hold"></span>
                                        <a href="#" class="ver_container">  ${item.offer_free_shipping ?
                                        '<img src="{{ asset("site/images/8552007.png") }}" alt="$BRAND_NAME">' :
                                        `<h4>${item.offer_discount_number}%</h4>`
                                    }</a>
                                    </div>
                                </div>
                            </div>
                            <div class="right-content flex-body">
                                <p class="rs save-price"><a href="#">${item.offer_title}</a></p>
                                <p class="rs coupon-desc">

                                    ${item.offer_verified ?
                                        `<div class="verified">
                                            <span>Verified <i class="far fa-check-circle"
                                                style="background: #ffffff00; color: #18f351; font-size: 15px;">
                                            </i></span>
                                        </div>` : ''
                                    }
                                        ${item.offer_type}
                                    </p>
                                <div class="bottom-action">
                                    <div class="left-vote">
                                        <span class="lbl-work">${item.offer_type}</span>
                                        <span>
                                            <span class="lbl-vote">12 <i class="icon iAddVote"></i></span>
                                            <span class="lbl-vote">2 <i class="icon iSubVote"></i></span>
                                        </span>
                                    </div>
                                    <a type="button" class="btn btn-blue btn-view-coupon offer_anchor" onclick="getCode('${item.id}',this)" data-offer_id="${item.id}"
                                     data-offer_affiliate_url="${item.offer_affiliate_url}">VIEW <span>COUPON</span> CODE</a>
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

