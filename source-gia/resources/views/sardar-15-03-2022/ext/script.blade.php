
<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<script src="{{url('sardar')}}/js/popper.min.js"></script>
<script src="{{url('sardar')}}/js/bootstrap.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
<script src="{{url('sardar')}}/js/custom.js"></script>
<script type="text/javascript" src="{{url('sardar')}}/js/slick.min.js"></script>
<script src="{{url('lightjs')}}/js/lightgallery.min.js"></script>
<script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=6142d467a2a5620019d2708a&product=sop' async='async'></script>

@if(session('LoggedUser'))
  <script src="{{url('sardar')}}/js/onscreen-cms.js" rel="stylesheet"></script>
@endif


  <script type="text/javascript">
  	$('.inflatables_slider').slick({
      arrows: true,
      infinite: true,
      speed:300,
      autoplay: true,
      slidesToShow:3,
      slidesToScroll:1,
      centerPadding: '50px',
      centerMode: false,
      responsive: [
       
        {
          breakpoint:1200,
          settings: {
            slidesToShow:2
          }
        },
        {
          breakpoint: 767,
          settings: {
            arrows: true,
            centerPadding: '40px',
            slidesToShow: 1
          }
        }
      ]
    });  

    $('.ExploreNowslider').slick({
      arrows: true,
      infinite: true,
      speed:300,
      autoplay: true,
      slidesToShow:5,
      slidesToScroll:1,
      centerPadding: '20px',
      centerMode: false,
      responsive: [
       
        {
          breakpoint:1200,
          settings: {
            slidesToShow:3
          }
        },
        {
          breakpoint:1000,
          settings: {
            slidesToShow:2
          }
        },
        {
          breakpoint:767,
          settings: {
            arrows: true,
            centerPadding: '40px',
            slidesToShow: 1
          }
        }
      ]
    });  




    $('.inflatables_slider_block').slick({
      arrows: true,
      infinite: true,
      speed:300,
      autoplay: true,
      slidesToShow:3,
      centerPadding: '20px',
      centerMode: false,
      responsive: [
       
        {
          breakpoint:1200,
          settings: {
            slidesToShow:3
          }
        },
        {
          breakpoint:1000,
          settings: {
            slidesToShow:2
          }
        },
        {
          breakpoint:767,
          settings: {
            arrows: true,
            centerPadding: '40px',
            slidesToShow: 1
          }
        }
      ]
    });  


    // $('body').hide();

  </script>
   
<script>
  

$(".contact-submission").submit(function(e) {
e.preventDefault(); // prevent actual form submit
// alert('clicked');
var form = $(this);
var url = form.attr('action'); //get submit url [replace url here if desired]


// $("#modalForm").trigger("reset");


$.ajax({
     type: "POST",
     url: url,
     data: form.serialize(), // serializes form input
     success: function(data){
      console.log(data);
        // $('input[type=text], input[type=number], input[type=email], select, textarea').val('');

      
      if(data.status== 'success'){
        alert('Thank you for showing interest in our work and sending us the quote request. We will get back to you within 24 hours.');
        // $('#enquiry_form_modal').modal('show')

        // $('input[type=text], input[type=number], input[type=email], select, textarea').val('');
      }else{
        alert('Something went wrong! Please refresh page and try it again...');
        
        // $('input[type=text], input[type=number], input[type=email], select, textarea').val('');
        // $('.top-form').hide();
        
        // $('#contactFailModal').modal('show')
      }

     }
});
});

$(document).mouseup(function (e) {
if ($(e.target).closest(".top-form").length === 0) {
      $(".top-form").hide();
}

});

$('.navbar-toggler').click(function (e) { 
  // alert('menu');
  $('.top-form').hide();
  $('#navbarNav').toggle();

  // alert($('.navbar-toggler').height());
});

$('.two_controls').click(function (e) { 

  $('#navbarNav').toggle();
});

$('#open_btn').click(function (e) { 
  e.preventDefault();
  // alert('opem');
  $('.navbar-toggler').hide();
  $('.enquiry_form_modal').show();
});



</script>

<?php

$footerCode = DB::table('custom_codes')->where('type', 'footer-code')->first();
echo $footerCode->description;

?>