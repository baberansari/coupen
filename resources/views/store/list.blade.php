@extends('layouts.site.site')

@section('content')
    <style>
        ol {
            margin-left: 21px;
        }

        .coupons-tiles .coupon-content span {
            font-size: 14px;
            text-transform: uppercase;
            color: var(--primary-color);
            font-weight: bold;
        }

        .store-sidebar h3 {
            font-size: 17px;
        }

        .store-sidebar .hints-tips ul {
            font-weight: 400;
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
    </style>
    <section class="store-sec sec-padding" style="height: auto !important;">
        <div class="container" style="height: auto !important;">
            <div class="row" style="height: auto !important;">
                <div class="col-lg-3" style="height: auto !important; min-height: 0px !important;">
                    <div class="main-sidebar" style="height: auto !important;">
                        <a class="store-img" href="{{ route('store',$store->store_slug) }}">
                            <img class="w-100" src="{{ asset($store->store_logo) }}"
                                alt="{{ $store->store_name }} coupons and coupon codes">
                        </a>
                        <span class="store-short-desc"><a class="show-more" href="javascript:;" style="display: none;">Show more</a></span>
                        <div class="store-sidebar" style="height: auto !important;">
                            <div class="available-offers">
                                <p>Coupon Type</p>
                                <div class="available-options">
                                    <label>
                                        <input name="offer_type" type="radio" class="slectOne" id="all"
                                            data-id="all" checked="">
                                        <span>All Offers</span>
                                    </label>
                                    <label>
                                        <input name="offer_type" type="radio" class="slectOne" data-id="code">
                                        <span>Coupons</span>
                                    </label>
                                    <label>
                                        <input name="offer_type" type="radio" class="slectOne" data-id="deal">
                                        <span>Deals</span>
                                    </label>
                                </div>
                            </div>
                            {{-- Realted  Store  --}}
                            <div class="today-top-offers related-stores">
                                <h4>Related stores</h4>
                                <ul>
                                    @foreach (getRelatedStoregs($slug) as $related)
                                    <li>
                                        <a href="{{ route('store',$related->store_slug) }}" target="_blank">
                                         {{$related->store_name}} </a>
                                    </li>
                                    @endforeach

                                </ul>
                            </div>
                                {{-- ENd Related STore  --}}
                            <div class="social-media-store-kit">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 main-contentbar">
                    <div class="tile-mainbox">
                        <div class="store-img">
                            <img src="{{ asset($store->store_logo) }}" alt="{{ asset($store->store_logo) }}">
                        </div>
                        <div class="sec-title">
                            <span class="ali_madad">Ya Ali. AS Madad</span>
                            <h1>{{ $store->store_name }}</h1>
                            <h2 class="store_tit"><img class="reload_image" src="{{ asset('assets/admin/images/updatee.svg')}}" alt=""> 6 coupon
                                codes updated on 21 March, 2025</h2>
                            <ul class="list-unstyled d-flex">
                                <li>Delivery</li>
                                <li>Free Shipping</li>
                            </ul>
                        </div>
                    </div>
                    <div class="desktop-coupon-tiles">
                        <div id="data-table" style="display:block;"  class="coupons-tiles all  data-table">
                        </div>
                    </div>




                    <div class="store-tabbing mobile-tabbing">
                        <div class="tabs">
                          <ul>
                            <li data-tab="all" class="active">All Offers</li>
                            <li data-tab="code">Coupons</li>
                            <li data-tab="deal">Deals</li>
                          </ul>
                        </div>
                        <span class="store-short-desc"
                          >When you buy through links on Retailescaper we may earn a
                          commission. <a href="#">Learn More</a></span
                        >
                        <div class="tabbing-content">
                          <div class="tab-content active">
                            <div class="coupons-tiles data-table">
                            </div>
                          </div>

                        </div>
                      </div>
                </div>
            </div>
            <div class="row">
                <div class="offset-lg-3 col-lg-9 ">
                    <div id="pagination-links" class="table-pagination">

                    </div>
                </div>
            </div>
        </div>
    </section>

{{--  Faq Section  --}}

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
          {{-- <div class="ko-ask-qus">
            <h3>Still have questions?</h3>
            <p>Can't find the answer you're looking for? Please Ask the question.</p>
            <form action="#">
              <div class="ko-form-cotrl">
                <input type="text" class="ko-faq-input-field" placeholder="Ask the question" />
              </div>
              <button class="ko-btn" type="submit">Ask Now</button>
            </form>
          </div> --}}
        </div>
      </section>

@endif
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
                            <div class="coupon-tile">
                                <div class="discount-percentage">
                                    ${item.offer_free_shipping ?
                                        '<h4><i class="fas fa-shipping-fast" style="font-size:50px"></i></h4>' :
                                        `<h4>${item.offer_discount_number}%</h4>`
                                    }
                                </div>
                                <div class="coupon-content">
                                    <span>${item.offer_type}</span>
                                    <h3>${item.offer_title}</h3>
                                    <p>${item.offer_discount_number}</p>
                                    ${item.offer_verified ?
                                        `<div class="verified">
                                            <span>Verified <i class="far fa-check-circle"
                                                style="background: #ffffff00; color: #18f351; font-size: 15px;">
                                            </i></span>
                                        </div>` : ''
                                    }
                                </div>
                                <div class="getcodebtn">
                                    <a onclick="getCode('${item.id}',this)" rel="nofollow noopener sponsored" data-offer_id="${item.id}"
                                        href="javascript:;" class="offer_anchor" data-offer_affiliate_url="${item.store.store_affiliate_url}">
                                        Get Code
                                    </a>
                                    <span>${item.offer_code || 'N/A'}</span>
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
                      ${prevPageUrl ? '<button id="prev-btn">Previous</button>' : '<button id="prev-btn">Previous</button>'}
                      ${nextPageUrl ? '<button id="next-btn">Next</button>' : '<button id="next-btn">Next</button>'}
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
