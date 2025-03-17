jQuery(document).ready(function(){
    var maxLength = 300;
    jQuery(".sidebar .store-detail-bar").each(function(){
        var myStr = jQuery(this).html();
        if(jQuery.trim(myStr).length > maxLength){
            var newStr = myStr.substring(0, maxLength);
            var removedStr = myStr.substring(maxLength, jQuery.trim(myStr).length);
            jQuery(this).empty().html(newStr);
            jQuery(this).append(' <a href="javascript:void(0);" class="read-more">[..Read more..].</a>');
            jQuery(this).append('<span class="more-text"><p class="light-text mb-0">' + removedStr + '</p></span>');
        }
    });
    jQuery(".read-more").click(function(){
        jQuery(this).siblings(".more-text").contents().unwrap();
        jQuery(this).remove();
    });
    
    jQuery(".jquery-submit").click(function(){
        jQuery(this).parents(".jquery-form").submit();
    });
    



    jQuery('.offer-btn').on('click',function(){
        var href = jQuery(this).attr("href");
        var affliate_url = jQuery(this).data("affliate-url");
        window.open(href, '_blank'); 
        location.replace(affliate_url);
    });
    
    jQuery('body').on('click','.offer_li a',function(){
        var href = jQuery(this).attr("href");
        var affliate_url = jQuery(this).data("affliate-url");
        window.open(href, '_blank'); 
        location.replace(affliate_url);
    });
    
    jQuery('.offers-nav .all').on('click',function(e){
        e.preventDefault();
        jQuery('.offers-nav .nav-link').removeClass('active');
        jQuery(this).addClass('active');
        jQuery('.deal-item').hide();
        jQuery('.deal-item').fadeIn();
    });
    
    jQuery('.offers-nav .codes').on('click',function(e){
        e.preventDefault();
        jQuery('.offers-nav .nav-link').removeClass('active');
        jQuery(this).addClass('active');
        jQuery('.deal-item').hide();
        jQuery('.deal-item.code ').fadeIn();
    });   
    
    jQuery('.offers-nav .deals').on('click',function(e){
        e.preventDefault();
        jQuery('.offers-nav .nav-link').removeClass('active');
        jQuery(this).addClass('active');
        jQuery('.deal-item').hide();
        jQuery('.deal-item.deal ').fadeIn();
    });
    
    jQuery('.offers-nav .about').on('click',function(e){
        e.preventDefault();
        jQuery('.offers-nav .nav-link').removeClass('active');
        jQuery(this).addClass('active');
        jQuery('.deal-item').hide();
        jQuery('.deal-item.about ').fadeIn();
    });

    $('input[name=rdo]').change(function(){
        var ans = $( 'input[name=rdo]:checked' ).val();
        var offer_id_1 = $( '.offer_id' ).val();
        console.log(ans+offer_id_1);
        
        jQuery.ajax({
            url:base_url+'set-offer-ans',
            type:"post",
            data: {offer_id:offer_id_1,offer_working:ans},
            success: function(response){
            }
        });
    });    
    
    var location_hash = window.location.hash;                                                                                                                    
    if(location_hash != ''){
        var offer_id = location_hash.replace("#offer_","");
        jQuery.ajax({
            url : base_url+'get-offer',
            method: 'post',
            data : {offer_id:offer_id},
            success : function(response){
                if(response != false){
                    
                    jQuery('#coupon_modal img').attr('src',base_url+'uploads/store/'+response.store_logo);
                    jQuery('#coupon_modal .main_title').html(response.offer_title);
                    jQuery('#coupon_modal .offer_id').val(response.offer_id);
                    if(response.offer_type == 'deal'){
                        jQuery('#coupon_modal .code-text').val('NO CODE REQUIRED');
                    }
                    else{
                        if(response.offer_code == "No code needed" || !response.offer_code || response.offer_code == "No Code Needed"){
                            jQuery('#coupon_modal .mycustom').hide();
                            jQuery('#coupon_modal .no_code').show();
                        }else{
                            jQuery('#coupon_modal .code-text').val(response.offer_code);
                        }
                    }
                    // if(response.offer_verified == '1'){
                    //   jQuery('.cupon-modal .success-list').append('<li class="list-inline-item success"><i class="fa fa-check"></i> Verified</li>'); 
                    // }
                    // if(response.offer_exclusive == '1'){
                    //   jQuery('.cupon-modal .success-list').append('<li class="list-inline-item success"><i class="fa fa-diamond"></i> Exclusive</li>'); 
                    // }

                    if(response.offer_verified == 1){
                        jQuery('#coupon_modal .views').html('<span>Verfied <i class="far fa-check-circle" style="background: #ffffff00;color: #18f351;font-size: 15px;"></i></span>');    
                    }
                    if(response.offer_exclusive == 1){
                        jQuery('#coupon_modal .added-by').html('<span>| Exclusive Offer</span>');
                    }

                    jQuery('#coupon_modal .store_link').attr('data-offer_id',response.offer_id);
                    jQuery('#coupon_modal .store_link').html(response.store_name);

                    var date = new Date(response.offer_expiry_date);
                    if(date >= 0){
                        jQuery('#coupon_modal .details').show();
                        var options = { month: 'short' , day: 'numeric' , year: 'numeric'  };
                        jQuery('#coupon_modal .details span').text("Expires "+date.toLocaleDateString("en-US", options));    
                    }
                    jQuery('#coupon_modal .used').text(response.offer_views);
                                                
                    jQuery('#coupon_modal').addClass('active');
                    jQuery('.overlay').css('transform', 'scale(1)');
                }
                else{
                    console.log('Something went wrong.');
                }
                
            },
            dataType:'JSON'
        });
    }


    jQuery(".close-btn").click(function() {
        jQuery('.overlay').css('transform', 'scale(0)');
    });

    jQuery(".continue-btn").click(function() {
        jQuery('.overlay').css('transform', 'scale(0)');
    });
    
    jQuery('.search-btn').on('click',function(){
        var query = $('#searchbox input').val();
        var filter = $('#search-filter').val();
        if(filter == 'All category'){
            location.replace(base_url+'search/'+query);
        }else{
            location.replace(base_url+'search/'+query+'/'+filter);
            //location.replace(base_url+'search/'+query);
        }
    });
    
    
    jQuery('.continue-btn').on('click',function(){
        jQuery('#coupon_modal').removeClass('active');
    });

    $('#searchbox input').on('keyup keypress', function(e) {
      var keyCode = e.keyCode || e.which;
      if (keyCode === 13) { 
        e.preventDefault();
        var query = jQuery(this).val();
        var filter = $('#search-filter').val();
        if(filter == 'All category'){
            window.location.href = base_url+'search/'+query;
        }else{
            location.replace(base_url+'search/'+query+'/'+filter);  
        }
      }
    });


    $('#searchbox_nav input').on('keyup keypress', function(e) {
      var keyCode = e.keyCode || e.which;
      if (keyCode === 13) { 
        e.preventDefault();
        var query = jQuery(this).val();
        var filter = $('#search-filter').val();
        if(filter == 'All category'){
            window.location.href = base_url+'search/'+query;
        }else{
            location.replace(base_url+'search/'+query+'/'+filter);  
        }
      }
    });    

    
    jQuery('#searchbox input').on('keyup keypress',function(){
        jQuery('#searchbox .results').hide();
        jQuery('#searchbox .results').html('');
        var query = jQuery(this).val();
        var html = '';
        if(query != '' && query.length > 1){
            jQuery.ajax({
                url: base_url+'search_query/',
                type:'post',
                data:{url:query},
                success:function(response){
                    console.log(query);
                    if(response != ''){
                        jQuery.each(response,function(k,v){
                            if(v.type == 'store'){
                                html +=        '<li><a href="'+base_url+v.data.store_slug+'">';
                                html +=             '<img src="'+base_url+'uploads/store/'+v.data.store_logo+'">';
                                html +=             '<span> '+v.data.store_name+' </span>';
                                html +=        '</a></li>';
                                                                
                                // html +=    '    <div class="column">';
                                // html +=    '        <div class="store-thumb">';
                                // html +=    '            <a href="'+base_url+v.data.store_slug+'"><img style="width:35%;" src="'+base_url+'uploads/store/'+v.data.store_logo+'"></a>';
                                // html +=    '        </div>';
                                // html +=    '        <div class="store-name"><a href="'+base_url+v.data.store_slug+'">'+v.data.store_name+'</a></div>';
                                // html +=    '    </div>';                              
                                                                                              
                                
  
                                
                                
                            }
                            // else if(v.type == 'offer'){
                            //     html +=    '<li class="offer_li">';
                            //     html +=        '<a href="'+base_url+v.data.store_slug+'#'+k+'" data-affliate-url="'+v.data.offer_affiliate_url+'">';
                            //     html +=            '<div class="deal-item bg-light">';
                            //     html +=                '<div class="media">';
                            //     html +=                    '<div class="img-content align-self-center">';
                            //     html +=                        '<img src="'+base_url+'uploads/store/'+v.data.store_logo+'">';
                            //     html +=                    '</div>';
                            //     html +=                    '<div class="media-body">';
                            //     html +=                        '<h5 class="mt-0">'+v.data.offer_title+'</h5>';
                            //     html +=                        '<ul class="list-inline">';
                            //     html +=                            '<ul class="success-list list-inline align-content-center">';
                                
                            //     if(v.data.offer_verified == '1'){
                            //     html +=                                '<li class="list-inline-item success"><i class="fa fa-check"></i> Verified</li>';
                            //     }
                                
                            //     if(v.data.offer_exclusive == '1'){
                            //     html +=                                '<li class="list-inline-item success"><i class="fa fa-diamond"></i> Exclusive</li>';
                            //     }
                                
                            //     html +=                            '</ul>';
                            //     html +=                        '</ul>';
                            //     html +=                    '</div>';
                            //     html +=                '</div>';
                            //     html +=            '</div>';
                            //     html +=        '</a>';
                            //     html +=    '</li>';
                            // }
                        });
                        
                        
                        jQuery('#searchbox .results').html(html);
                        
                        jQuery('#searchbox .results').show();
                    }
                },
                dataType:'json'
            });
        }
    });
    

    jQuery('#searchbox_nav input').on('keyup keypress',function(){
        jQuery('#searchbox_nav .results_nav').hide();
        jQuery('#searchbox_nav .results_nav').html('');
        var query = jQuery(this).val();
        var html = '';
        if(query != '' && query.length > 1){
            jQuery.ajax({
                url: base_url+'search_query/',
                data:{url:query},
                type:'post',
                success:function(response){
                    console.log(query);
                    if(response != ''){
                        jQuery.each(response,function(k,v){
                            if(v.type == 'store'){
                                html +=        '<li><a href="'+base_url+v.data.store_slug+'">';
                                html +=             '<img src="'+base_url+'uploads/store/'+v.data.store_logo+'">';
                                html +=             '<span> '+v.data.store_name+' </span>';
                                html +=        '</a></li>';
                                                                
                                // html +=    '    <div class="column">';
                                // html +=    '        <div class="store-thumb">';
                                // html +=    '            <a href="'+base_url+v.data.store_slug+'"><img style="width:35%;" src="'+base_url+'uploads/store/'+v.data.store_logo+'"></a>';
                                // html +=    '        </div>';
                                // html +=    '        <div class="store-name"><a href="'+base_url+v.data.store_slug+'">'+v.data.store_name+'</a></div>';
                                // html +=    '    </div>';                              
                                                                                              
                                
  
                                
                                
                            }
                            // else if(v.type == 'offer'){
                            //     html +=    '<li class="offer_li">';
                            //     html +=        '<a href="'+base_url+v.data.store_slug+'#'+k+'" data-affliate-url="'+v.data.offer_affiliate_url+'">';
                            //     html +=            '<div class="deal-item bg-light">';
                            //     html +=                '<div class="media">';
                            //     html +=                    '<div class="img-content align-self-center">';
                            //     html +=                        '<img src="'+base_url+'uploads/store/'+v.data.store_logo+'">';
                            //     html +=                    '</div>';
                            //     html +=                    '<div class="media-body">';
                            //     html +=                        '<h5 class="mt-0">'+v.data.offer_title+'</h5>';
                            //     html +=                        '<ul class="list-inline">';
                            //     html +=                            '<ul class="success-list list-inline align-content-center">';
                                
                            //     if(v.data.offer_verified == '1'){
                            //     html +=                                '<li class="list-inline-item success"><i class="fa fa-check"></i> Verified</li>';
                            //     }
                                
                            //     if(v.data.offer_exclusive == '1'){
                            //     html +=                                '<li class="list-inline-item success"><i class="fa fa-diamond"></i> Exclusive</li>';
                            //     }
                                
                            //     html +=                            '</ul>';
                            //     html +=                        '</ul>';
                            //     html +=                    '</div>';
                            //     html +=                '</div>';
                            //     html +=            '</div>';
                            //     html +=        '</a>';
                            //     html +=    '</li>';
                            // }
                        });
                        
                        
                        jQuery('#searchbox_nav .results_nav').html(html);
                        
                        jQuery('#searchbox_nav .results_nav').show();
                    }
                },
                dataType:'json'
            });
        }
    });


    jQuery('.search-mobile #search').on('keyup',function(){
        jQuery('.search-dropdown').html('');
        var query = jQuery(this).val();
        var html = '';
        if(query != ''){
            jQuery.ajax({
                url: base_url+'search_query/'+query,
                type:'get',
                success:function(response){
                    if(response != ''){
                        jQuery.each(response,function(k,v){
                            if(v.type == 'store'){
                                html +=    '<li>';
                                html +=        '<a href="'+base_url+v.data.store_slug+'">';
                                html +=            '<div class="deal-item bg-light">';
                                html +=                '<div class="media">';
                                html +=                    '<div class="img-content align-self-center">';
                                html +=                        '<img src="'+base_url+'uploads/store/'+v.data.store_logo+'">';
                                html +=                    '</div>';
                                html +=                    '<div class="media-body">';
                                html +=                        '<h5 class="mt-0">'+v.data.store_name+' - Store</h5>';
                                html +=                    '</div>';
                                html +=                '</div>';
                                html +=            '</div>';
                                html +=        '</a>';
                                html +=    '</li>';                           
                                
                            }
                            else if(v.type == 'offer'){
                                html +=    '<li class="offer_li">';
                                html +=        '<a href="'+base_url+v.data.store_slug+'#'+k+'" data-affliate-url="'+v.data.offer_affiliate_url+'">';
                                html +=            '<div class="deal-item bg-light">';
                                html +=                '<div class="media">';
                                html +=                    '<div class="img-content align-self-center">';
                                html +=                        '<img src="'+base_url+'uploads/store/'+v.data.store_logo+'">';
                                html +=                    '</div>';
                                html +=                    '<div class="media-body">';
                                html +=                        '<h5 class="mt-0">'+v.data.offer_title+'</h5>';
                                html +=                        '<ul class="list-inline">';
                                html +=                            '<ul class="success-list list-inline align-content-center">';
                                
                                if(v.data.offer_verified == '1'){
                                html +=                                '<li class="list-inline-item success"><i class="fa fa-check"></i> Verified</li>';
                                }
                                
                                if(v.data.offer_exclusive == '1'){
                                html +=                                '<li class="list-inline-item success"><i class="fa fa-diamond"></i> Exclusive</li>';
                                }
                                
                                html +=                            '</ul>';
                                html +=                        '</ul>';
                                html +=                    '</div>';
                                html +=                '</div>';
                                html +=            '</div>';
                                html +=        '</a>';
                                html +=    '</li>';
                            }
                        });
                        
                        
                        jQuery('.search-dropdown').html(html);
                    }
                },
                dataType:'json'
            });
        }
    });
    
    jQuery(".menu-showhide").unbind().on('click',function(e){
        jQuery(".main-nav").fadeToggle();
    });
        
    jQuery('.ajax-form').unbind().on('submit',function(e){
        e.preventDefault();
        
        var data = {
            'signup_inquiry_name' : jQuery('#signup_inquiry_name').val(),
            'signup_inquiry_email' : jQuery('#signup_inquiry_email').val(),
        }
        
        jQuery.ajax({
            url:base_url+'sign-up',
            type:"post",
            data: data,
            success: function(response){
                if(response == 'success'){
                    jQuery('#signup_inquiry_name').val('');
                    jQuery('#signup_inquiry_email').val('');
                    jQuery('.signup-form').hide();
                    jQuery('.signup-form-success').fadeIn();
                }
            }
        });
        
    });   
        
});