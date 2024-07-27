// window.addEventListener('beforeunload', function(event) {
//   parent.console.info('I am the 2nd one.');
//   alert('aaaa');
//   return false;
// });
// window.addEventListener('unload', function(event) {
//   console.log('I am the 4th and last one…');
// });
// console.log('I am the 4th and last one…');

// window.onbeforeunload = function (event) {
//   var message = 'Sure you want to leave?';
//   if (typeof event == 'undefined') {
//     event = window.event;
//   }
//   if (event) {
//     event.returnValue = message;
//   }
//   return message;
// }

// $(window).bind('beforeunload', function(e) {
//   // Your code and validation
//   if (confirm) {
//       return "Are you sure?";
//   }
// });


$(document).ready(function(){
  var screen = $(window).width();
  var popupWinWidth = 990;
  var left = (screen - popupWinWidth) / 2;
  
  // var top = (screen.height - popupWinHeight) / 4;
    
  // var myWindow = window.open(pageURL, pageTitle, 
  //         'resizable=yes, width=' + popupWinWidth
  //         + ', height=' + popupWinHeight + ', top='
  //         + top + ', left=' + left);
var currentWindow;

  $('.navbar-brand, .logo-g').each(function(){
    $(this).append(`<a href="`+$(this).attr('data-link')+'?onscreenCms=true'+
    `"class='onscreen-logo' onclick="currentWindow = window.open('`+$(this).attr('data-link')+'?onscreenCms=true'+
    `', 'toolbar=no, location=no','left=`+left+`,width=`+popupWinWidth+`,height=860'); return false;"> 
    <i class='fa fa-edit'></i></a>`);
  });


// if(currentWindow){
//   currentWindow.close()
//   alert(currentWindow);

// }


$('.logo-g, .home, .product, .about, .testimonial, .video, .blog, .contact').each(function(){
  $(this).append(`<a href="`+$(this).attr('data-link')+'?onscreenCms=true'+`"class='onscreen-menu' onclick="window.open('`+$(this).attr('data-link')+'?onscreenCms=true'+`', 'toolbar=no, location=no','left=`+left+`,width=`+popupWinWidth+`,height=860'); return false;"> <i class='fa fa-edit'></i></a>`);
});

$('.content_banners').each(function(){
  $(this).append(`<a class="onscreen-banner-slider" href="`+$('.route-slider-index').text()+`"class='onscreen-menu' onclick="window.open('`+$('.route-slider-index').text()+`', 'toolbar=no, location=no','left=`+left+`,width=`+popupWinWidth+`,height=860'); return false;"> <i class='fa fa-edit'></i></a>`);
});

$('.product_title_main').each(function(){
  $(this).append(`<div class="onscreen-product-title"><a href="`+$('.route-category-create').text()+`"onclick="window.open('`+$('.route-category-create').text()+`', 'toolbar=no, location=no','left=`+left+`,width=`+popupWinWidth+`,height=860'); return false;"> <i class='fa fa-plus'></i></a><a href="`+$(this).attr('data-link')+'?onscreenCms=true'+`"onclick="window.open('`+$(this).attr('data-link')+'&onscreenCms=true'+`', 'toolbar=no, location=no','left=`+left+`,width=`+popupWinWidth+`,height=860'); return false;"> <i class='fa fa-edit'></i></a><a href="`+$('.route-category-list').text()+`"onclick="window.open('`+$('.route-category-list').text()+`', 'toolbar=no, location=no','left=`+left+`,width=`+popupWinWidth+`,height=860'); return false;"> <i class='fas fa-trash-alt'></i></a>`);
});

$('.onscreen_media_testimonial_title').each(function(){
  $(this).prepend(`<div class="row onscreen-media-title-link"><a href="`+$('.route-testimonial-create').text()+`"onclick="window.open('`+$('.route-testimonial-create').text()+`', 'toolbar=no, location=no','left=`+left+`,width=`+popupWinWidth+`,height=860'); return false;"> <i class='fa fa-plus'></i></a><a href="`+$(this).attr('data-link')+'&onscreenCms=true'+`"onclick="window.open('`+$(this).attr('data-link')+'?onscreenCms=true'+`', 'toolbar=no, location=no','left=`+left+`,width=`+popupWinWidth+`,height=860'); return false;"> <i class='fa fa-edit'></i></a><a href="`+$(this).attr('data-link')+'?onscreenCms=true'+`"onclick="window.open('`+$(this).attr('data-link')+'?onscreenCms=true'+`', 'toolbar=no, location=no','left=`+left+`,width=`+popupWinWidth+`,height=860'); return false;"> <i class='fas fa-trash-alt'></i></a>`);
});

$('.onscreen_media_video_title').each(function(){
  $(this).prepend(`<div class="row onscreen-media-video-link"><a href="`+$('.route-video-create').text()+`"onclick="window.open('`+$('.route-video-create').text()+`', 'toolbar=no, location=no','left=`+left+`,width=`+popupWinWidth+`,height=860'); return false;"> <i class='fa fa-plus'></i></a><a href="`+$(this).attr('data-link')+'?onscreenCms=true'+`"onclick="window.open('`+$(this).attr('data-link')+'?onscreenCms=true'+`', 'toolbar=no, location=no','left=`+left+`,width=`+popupWinWidth+`,height=860'); return false;"> <i class='fa fa-edit'></i></a><a href="`+$(this).attr('data-link')+'?onscreenCms=true'+`"onclick="window.open('`+$(this).attr('data-link')+'?onscreenCms=true'+`', 'toolbar=no, location=no','left=`+left+`,width=`+popupWinWidth+`,height=860'); return false;"> <i class='fas fa-trash-alt'></i></a>`);
});


$('.onscreen_media_blog_title').each(function(){
  $(this).prepend(`<div class="row onscreen-media-blog-link"><a href="`+$('.route-blog-create').text()+`"onclick="window.open('`+$('.route-blog-create').text()+`', 'toolbar=no, location=no','left=`+left+`,width=`+popupWinWidth+`,height=860'); return false;"> <i class='fa fa-plus'></i></a><a href="`+$(this).attr('data-link')+'?onscreenCms=true'+`"onclick="window.open('`+$(this).attr('data-link')+'?onscreenCms=true'+`', 'toolbar=no, location=no','left=`+left+`,width=`+popupWinWidth+`,height=860'); return false;"> <i class='fa fa-edit'></i></a><a href="`+$(this).attr('data-link')+'?onscreenCms=true'+`"onclick="window.open('`+$(this).attr('data-link')+'?onscreenCms=true'+`', 'toolbar=no, location=no','left=`+left+`,width=`+popupWinWidth+`,height=860'); return false;"> <i class='fas fa-trash-alt'></i></a>`);
});


$('.onscreen_media_testimonial_item').each(function(){
  $(this).prepend(`<div class="row onscreen-media-testimonial-item-link"><a href="`+$('.route-testimonial-create').text()+`"onclick="window.open('`+$('.route-testimonial-create').text()+`', 'toolbar=no, location=no','left=`+left+`,width=`+popupWinWidth+`,height=860'); return false;"> <i class='fa fa-plus'></i></a><a href="`+$(this).attr('data-link')+'?onscreenCms=true'+`"onclick="window.open('`+$(this).attr('data-link')+'?onscreenCms=true'+`', 'toolbar=no, location=no','left=`+left+`,width=`+popupWinWidth+`,height=860'); return false;"> <i class='fa fa-edit'></i></a><a href="`+$(this).attr('data-link')+'?onscreenCms=true'+`"onclick="window.open('`+$('.route-testimonial-index').text()+`', 'toolbar=no, location=no','left=`+left+`,width=`+popupWinWidth+`,height=860'); return false;"> <i class='fas fa-trash-alt'></i></a>`);
});


$('.onscreen_media_video_item').each(function(){
  $(this).prepend(`<div class="row onscreen-media-video-item-link"><a href="`+$('.route-video-create').text()+`"onclick="window.open('`+$('.route-video-create').text()+`', 'toolbar=no, location=no','left=`+left+`,width=`+popupWinWidth+`,height=860'); return false;"> <i class='fa fa-plus'></i></a><a href="`+$(this).attr('data-link')+'?onscreenCms=true'+`"onclick="window.open('`+$(this).attr('data-link')+'?onscreenCms=true'+`', 'toolbar=no, location=no','left=`+left+`,width=`+popupWinWidth+`,height=860'); return false;"> <i class='fa fa-edit'></i></a><a href="`+$('route-video-index').text()+`"onclick="window.open('`+$('.route-video-index').text()+`', 'toolbar=no, location=no','left=`+left+`,width=`+popupWinWidth+`,height=860'); return false;"> <i class='fas fa-trash-alt'></i></a>`);
});

$('.onscreen_media_blog_item').each(function(){
  $(this).prepend(`<div class="row onscreen-media-blog-item-link"><a href="`+$('.route-blog-create').text()+`"onclick="window.open('`+$('.route-blog-create').text()+`', 'toolbar=no, location=no','left=`+left+`,width=`+popupWinWidth+`,height=860'); return false;"> <i class='fa fa-plus'></i></a><a href="`+$(this).attr('data-link')+'?onscreenCms=true'+`"onclick="window.open('`+$(this).attr('data-link')+'?onscreenCms=true'+`', 'toolbar=no, location=no','left=`+left+`,width=`+popupWinWidth+`,height=860'); return false;"> <i class='fa fa-edit'></i></a><a href="`+$('route-blog-index').text()+`"onclick="window.open('`+$('.route-blog-index').text()+`', 'toolbar=no, location=no','left=`+left+`,width=`+popupWinWidth+`,height=860'); return false;"> <i class='fas fa-trash-alt'></i></a>`);
});

$('.onscreen_explore_now_main_category').each(function(){
  $(this).prepend(`<div class="row onscreen-explorenow-maincategory-link"><a href="`+$('.route-category-create').text()+`"onclick="window.open('`+$('.route-category-create').text()+`', 'toolbar=no, location=no','left=`+left+`,width=`+popupWinWidth+`,height=860'); return false;"> <i class='fa fa-plus'></i></a><a href="`+$(this).attr('data-link')+'&onscreenCms=true'+`"onclick="window.open('`+$(this).attr('data-link')+'&onscreenCms=true'+`', 'toolbar=no, location=no','left=`+left+`,width=`+popupWinWidth+`,height=860'); return false;"> <i class='fa fa-edit'></i></a><a href="`+$('route-category-list').text()+`"onclick="window.open('`+$('.route-category-list').text()+`', 'toolbar=no, location=no','left=`+left+`,width=`+popupWinWidth+`,height=860'); return false;"> <i class='fas fa-trash-alt'></i></a>`);
});


$('.onscreen_explore_now_sub_category').each(function(){
  $(this).prepend(`<div class="row onscreen-explorenow-subcategory-link"><a href="`+$('.route-category-create').text()+`"onclick="window.open('`+$('.route-category-create').text()+`', 'toolbar=no, location=no','left=`+left+`,width=`+popupWinWidth+`,height=860'); return false;"> <i class='fa fa-plus'></i></a><a href="`+$(this).attr('data-link')+'&onscreenCms=true'+`"onclick="window.open('`+$(this).attr('data-link')+'&onscreenCms=true'+`', 'toolbar=no, location=no','left=`+left+`,width=`+popupWinWidth+`,height=860'); return false;"> <i class='fa fa-edit'></i></a><a href="`+$('route-category-list').text()+`"onclick="window.open('`+$('.route-category-list').text()+`', 'toolbar=no, location=no','left=`+left+`,width=`+popupWinWidth+`,height=860'); return false;"> <i class='fas fa-trash-alt'></i></a>`);
});


$('.facebooks_post_block, .google_map_block').each(function(){
  $(this).append(`<a href="`+$(this).attr('data-link')+'?onscreenCms=true'+`"class='onscreen-connect-block' onclick="window.open('`+$(this).attr('data-link')+'?onscreenCms=true'+`', 'toolbar=no, location=no','left=`+left+`,width=`+popupWinWidth+`,height=860'); return false;"> <i class='fa fa-edit'></i></a>`);
});


$('.footer_logo_block').each(function(){
  $(this).after(`<a href="`+$(this).attr('data-link')+'?onscreenCms=true'+`"class='onscreen-connect-logo-block' onclick="window.open('`+$(this).attr('data-link')+'?onscreenCms=true'+`', 'toolbar=no, location=no','left=`+left+`,width=`+popupWinWidth+`,height=860'); return false;"> <i class='fa fa-edit'></i></a>`);
});


$('.social_footer').each(function(){
  $(this).after(`<a href="`+$(this).attr('data-link')+'?onscreenCms=true'+`"class='onscreen-social-logo-block' onclick="window.open('`+$(this).attr('data-link')+'?onscreenCms=true'+`', 'toolbar=no, location=no','left=`+left+`,width=`+popupWinWidth+`,height=860'); return false;"> <i class='fa fa-edit'></i></a>`);
});

$('.footer_page_link_information').each(function(){
  $(this).after(`<a href="`+$(this).attr('data-link')+'?onscreenCms=true'+`"class='footer-page-link-information' onclick="window.open('`+$(this).attr('data-link')+'?onscreenCms=true'+`', 'toolbar=no, location=no','left=`+left+`,width=`+popupWinWidth+`,height=860'); return false;"> <i class='fa fa-edit'></i></a>`);
});

$('.footer_page_blog_information').each(function(){
  $(this).after(`<a href="`+$(this).attr('data-link')+'?onscreenCms=true'+`"class='footer-page-link-blog' onclick="window.open('`+$(this).attr('data-link')+'?onscreenCms=true'+`', 'toolbar=no, location=no','left=`+left+`,width=`+popupWinWidth+`,height=860'); return false;"> <i class='fa fa-edit'></i></a>`);
});

$('.TopContent, .FieldsTexts').each(function(){
  $(this).before(`<a href="`+$(this).attr('data-link')+'?onscreenCms=true'+`"class='top-content-pages' onclick="window.open('`+$(this).attr('data-link')+'?onscreenCms=true'+`', 'toolbar=no, location=no','left=`+left+`,width=`+popupWinWidth+`,height=860'); return false;"> <i class='fa fa-edit'></i></a>`);
});

$('.onscreen_product_internal_title').each(function(){
  $(this).append(`<a class="onscreen-title-link" href="`+$(this).attr('data-link')+'&onscreenCms=true'+`"class='top-content-pages' onclick="window.open('`+$(this).attr('data-link')+'&onscreenCms=true'+`', 'toolbar=no, location=no','left=`+left+`,width=`+popupWinWidth+`,height=860'); return false;"> <i class='fa fa-edit'></i></a>`);
});


$('.onscreen_popup_block').each(function(){
  $(this).before(`<div class="row onscreen-popup-title-link"><a href="`+$('.route-testimonial-create').text()+`"onclick="window.open('`+$('.route-testimonial-create').text()+`', 'toolbar=no, location=no','left=`+left+`,width=`+popupWinWidth+`,height=860'); return false;"> <i class='fa fa-plus'></i></a><a href="`+$(this).attr('data-link')+'?onscreenCms=true'+`"onclick="window.open('`+$(this).attr('data-link')+'?onscreenCms=true'+`', 'toolbar=no, location=no','left=`+left+`,width=`+popupWinWidth+`,height=860'); return false;"> <i class='fa fa-edit'></i></a><a href="`+$('route-testimonial-index').text()+`"onclick="window.open('`+$('.route-testimonial-index').text()+`', 'toolbar=no, location=no','left=`+left+`,width=`+popupWinWidth+`,height=860'); return false;"> <i class='fas fa-trash-alt'></i></a>`);
});

$('.onscreen_video_popup_block').each(function(){
  $(this).before(`<div class="row onscreen-popup-title-link"><a href="`+$('.route-video-create').text()+`"onclick="window.open('`+$('.route-video-create').text()+`', 'toolbar=no, location=no','left=`+left+`,width=`+popupWinWidth+`,height=860'); return false;"> <i class='fa fa-plus'></i></a><a href="`+$(this).attr('data-link')+'?onscreenCms=true'+`"onclick="window.open('`+$(this).attr('data-link')+'?onscreenCms=true'+`', 'toolbar=no, location=no','left=`+left+`,width=`+popupWinWidth+`,height=860'); return false;"> <i class='fa fa-edit'></i></a><a href="`+$('route-video-index').text()+`"onclick="window.open('`+$('.route-video-index').text()+`', 'toolbar=no, location=no','left=`+left+`,width=`+popupWinWidth+`,height=860'); return false;"> <i class='fas fa-trash-alt'></i></a>`);
});


$('.onscreen_page_blog_block').each(function(){
  $(this).before(`<div class="row onscreen-popup-title-link"><a href="`+$('.route-blog-create').text()+`"onclick="window.open('`+$('.route-blog-create').text()+`', 'toolbar=no, location=no','left=`+left+`,width=`+popupWinWidth+`,height=860'); return false;"> <i class='fa fa-plus'></i></a><a href="`+$(this).attr('data-link')+'?onscreenCms=true'+`"onclick="window.open('`+$(this).attr('data-link')+'?onscreenCms=true'+`', 'toolbar=no, location=no','left=`+left+`,width=`+popupWinWidth+`,height=860'); return false;"> <i class='fa fa-edit'></i></a><a href="`+$('route-blog-index').text()+`"onclick="window.open('`+$('.route-blog-index').text()+`', 'toolbar=no, location=no','left=`+left+`,width=`+popupWinWidth+`,height=860'); return false;"> <i class='fas fa-trash-alt'></i></a>`);
});

$('.onscreen_blog_detail_page').each(function(){
  $(this).before(`<div class="row onscreen-popup-title-link"><a href="`+$('.route-blog-create').text()+`"onclick="window.open('`+$('.route-blog-create').text()+`', 'toolbar=no, location=no','left=`+left+`,width=`+popupWinWidth+`,height=860'); return false;"> <i class='fa fa-plus'></i></a><a href="`+$(this).attr('data-link')+'?onscreenCms=true'+`"onclick="window.open('`+$(this).attr('data-link')+'?onscreenCms=true'+`', 'toolbar=no, location=no','left=`+left+`,width=`+popupWinWidth+`,height=860'); return false;"> <i class='fa fa-edit'></i></a><a href="`+$('route-blog-index').text()+`"onclick="window.open('`+$('.route-blog-index').text()+`', 'toolbar=no, location=no','left=`+left+`,width=`+popupWinWidth+`,height=860'); return false;"> <i class='fas fa-trash-alt'></i></a>`);
});





$('.product_internal_title').each(function(){
  $(this).prepend(`<div class="row onscreen-product-internal-title-link"><a href="`+$('.route-sub-category-create').text()+`"onclick="window.open('`+$('.route-sub-category-create').text()+`', 'toolbar=no, location=no','left=`+left+`,width=`+popupWinWidth+`,height=860'); return false;"> <i class='fa fa-plus'></i></a><a href="`+$(this).attr('data-link')+'&onscreenCms=true'+`"onclick="window.open('`+$(this).attr('data-link')+'&onscreenCms=true'+`', 'toolbar=no, location=no','left=`+left+`,width=`+popupWinWidth+`,height=860'); return false;"> <i class='fa fa-edit'></i></a><a href="`+$('route-sub-category-list').text()+`"onclick="window.open('`+$('.route-sub-category-list').text()+`', 'toolbar=no, location=no','left=`+left+`,width=`+popupWinWidth+`,height=860'); return false;"> <i class='fas fa-trash-alt'></i></a>`);
});

$('.onscreen_left_sidebar_list').each(function(){
  $(this).prepend(`<div class="row onscreen-left-sidebar-list-link"><a href="`+$('.route-sub-category-create').text()+`"onclick="window.open('`+$('.route-sub-category-create').text()+`', 'toolbar=no, location=no','left=`+left+`,width=`+popupWinWidth+`,height=860'); return false;"> <i class='fa fa-plus'></i></a><a href="`+$(this).attr('data-link')+'?onscreenCms=true'+`"onclick="window.open('`+$(this).attr('data-link')+'&onscreenCms=true'+`', 'toolbar=no, location=no','left=`+left+`,width=`+popupWinWidth+`,height=860'); return false;"> <i class='fa fa-edit'></i></a><a href="`+$('route-sub-category-list').text()+`"onclick="window.open('`+$('.route-sub-category-list').text()+`', 'toolbar=no, location=no','left=`+left+`,width=`+popupWinWidth+`,height=860'); return false;"> <i class='fas fa-trash-alt'></i></a>`);
});

$('.onscreen_product_main_category_title').each(function(){
  $(this).prepend(`<div class="row onscreen-product-maincategory-title-link"><a href="`+$('.route-category-create').text()+`"onclick="window.open('`+$('.route-category-create').text()+`', 'toolbar=no, location=no','left=`+left+`,width=`+popupWinWidth+`,height=860'); return false;"> <i class='fa fa-plus'></i></a><a href="`+$(this).attr('data-link')+'&onscreenCms=true'+`"onclick="window.open('`+$(this).attr('data-link')+'&onscreenCms=true'+`', 'toolbar=no, location=no','left=`+left+`,width=`+popupWinWidth+`,height=860'); return false;"> <i class='fa fa-edit'></i></a><a href="`+$('route-category-list').text()+`"onclick="window.open('`+$('.route-category-list').text()+`', 'toolbar=no, location=no','left=`+left+`,width=`+popupWinWidth+`,height=860'); return false;"> <i class='fas fa-trash-alt'></i></a>`);
});


$('.onscreen_product_main_category_title2').each(function(){
  $(this).prepend(`<div class="row onscreen-product-maincategory-title-link2"><a href="`+$('.route-category-create').text()+`"onclick="window.open('`+$('.route-category-create').text()+`', 'toolbar=no, location=no','left=`+left+`,width=`+popupWinWidth+`,height=860'); return false;"> <i class='fa fa-plus'></i></a><a href="`+$(this).attr('data-link')+'&onscreenCms=true'+`"onclick="window.open('`+$(this).attr('data-link')+'&onscreenCms=true'+`', 'toolbar=no, location=no','left=`+left+`,width=`+popupWinWidth+`,height=860'); return false;"> <i class='fa fa-edit'></i></a><a href="`+$('route-category-list').text()+`"onclick="window.open('`+$('.route-category-list').text()+`', 'toolbar=no, location=no','left=`+left+`,width=`+popupWinWidth+`,height=860'); return false;"> <i class='fas fa-trash-alt'></i></a>`);
});


$('.my_slider_thumb').each(function(){
  $(this).append(`<div class="row onscreen-product-detail-slider-thumb"><a href="`+$(this).attr('data-link')+'&onscreenCms=true'+`"onclick="window.open('`+$(this).attr('data-link')+'&onscreenCms=true'+`', 'toolbar=no, location=no','left=`+left+`,width=`+popupWinWidth+`,height=860'); return false;"> <i class='fa fa-plus'></i></a><a href="`+$(this).attr('data-link')+'&onscreenCms=true'+`"onclick="window.open('`+$(this).attr('data-link')+'&onscreenCms=true'+`', 'toolbar=no, location=no','left=`+left+`,width=`+popupWinWidth+`,height=860'); return false;"> <i class='fa fa-edit'></i></a><a href="`+$('.route-category-list').text()+`"onclick="window.open('`+$(this).attr('data-link')+'&onscreenCms=true'+`', 'toolbar=no, location=no','left=`+left+`,width=`+popupWinWidth+`,height=860'); return false;"> <i class='fas fa-trash-alt'></i></a>`);
});





$('.onscreen-product-image').each(function(){
  $(this).append(`<div class="row onscreen-product-image-slider"><a href="`+$(this).attr('data-link')+'&onscreenCms=true'+`"onclick="window.open('`+$(this).attr('data-link')+'&onscreenCms=true'+`', 'toolbar=no, location=no','left=`+left+`,width=`+popupWinWidth+`,height=860'); return false;"> <i class='fa fa-plus'></i></a><a href="`+$(this).attr('data-link')+'&onscreenCms=true'+`"onclick="window.open('`+$(this).attr('data-link')+'&onscreenCms=true'+`', 'toolbar=no, location=no','left=`+left+`,width=`+popupWinWidth+`,height=860'); return false;"> <i class='fa fa-edit'></i></a><a href="`+$('.route-category-list').text()+`"onclick="window.open('`+$(this).attr('data-link')+'&onscreenCms=true'+`', 'toolbar=no, location=no','left=`+left+`,width=`+popupWinWidth+`,height=860'); return false;"> <i class='fas fa-trash-alt'></i></a>`);
});

$('.onscreen_top_inflatable').each(function(){
  $(this).append("<a href="+$(this).attr('data-link')+'?onscreenCms=true'+" class='onscreen-edit2'><i class='fa fa-edit'></i></a>");
});

$('.about_part, .our_clients').each(function(){
  $(this).append(`<a class='onscreen-block' href="`+$(this).attr('data-link')+'?onscreenCms=true'+`"onclick="window.open('`+$(this).attr('data-link')+'?onscreenCms=true'+`', 'toolbar=no, location=no','left=`+left+`,width=`+popupWinWidth+`,height=860'); return false;"> <i class='fa fa-edit'></i></a>`);
});


    $('.testOnload').append("<a href="+$('.testOnload').attr('data-link')+'?onscreenCms=true'+" class='onscreen-logo'><i class='fa fa-edit'></i></a>");



  $('.navbar-brand, .logo-g, .home, .product, .about').each(function(){
    // $(this).child("data-link").hide();
  
  });
  
});