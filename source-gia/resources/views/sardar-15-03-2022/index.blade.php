@extends('sardar.layout.front-index')
@section('title','')

@section('custom-js')
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
  <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->

<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> -->
    <style>
.loader img{
    width:0px;
}
        </style>
    <script>

  setTimeout(() => {
	
    $(".gsc-search-button .gsc-search-button-v2").addClass( "btn find-btn");
    $(".gsc-search-button .gsc-search-button-v2").text('Find');
  
  }, 10000);
  
$(window).scroll(function () {
  var menu_height = $(".top_header").height();
var logo_g = $(".logo-g").height();
var collection_slider = $(".collection-slider").height();

if($(window).width() <= 767) {
  if($(window).scrollTop() > $(".top_header").height()) {
    $(".navbar-design").addClass('sticky');
    $(".logo-g").show();
    $(".top_header").hide();
    $("body").addClass('sticky-menu-body');
    
    $("body").css({
      'position': 'relative',
      'top': 0,
      });


      $(".breadcrumb-left").css({
      'position': 'fixed',
      'left': '0px',
      });

      $(".border_breadcrumb").css({
        'margin': 38,
        'left': '0px'
        });

      
    }
    else{
    $(".top_header").show();
      $(".navbar-design").removeClass('sticky');
      $("body").removeClass('sticky-menu-body');
      $("body").css({
      'position': 'relative',
      'top': 0,
      });
      $(".breadcrumb-left").css({
      'position': 'relative',
      'top': 0,
      });

  }
}
else{
  if($(window).scrollTop() > 140) {
    $(".navbar-design").addClass('sticky');
    
    
    $(".logo-g").show();
    $(".top_header").hide();
    $("body").addClass('sticky-menu-body');

    $("body").css({
      'position': 'relative',
      'top': 0,
      });

      
      $('.onscreen-header').css({
            'position': 'fixed',
            'top': $('#navbarNav').height(),
            'z-index': 4
        });

      if($(window).width() > 988){

        $(".border_breadcrumb").css({
          'margin': '0px auto',
          'left': '0px'
          });

      $(".breadcrumb-left").css({
        'position': 'fixed',
        'top': $(".navbar").height(),
        'left': '0px'
        });

        $('.onscreen-header').css({
            'position': 'fixed',
            'top': $('#navbarNav').height(),
            'z-index': 4
        });
        

      }
      else if($(window).width() > 790){
        $(".border_breadcrumb").css({
          'left': '0px',
          });

      $(".breadcrumb-left").css({
        'position': 'fixed',
        'top': $(".navbar").height() - 1,
        'left': '0px'
        });


        $('.onscreen-header').css({
            'position': 'fixed',
            'top': $('#navbarNav').height(),
            'z-index': 4
        });

      }
      else
      {
      $(".border_breadcrumb").css({
        'left': '0px',
        'display' : 'none'
        });
        
      $(".breadcrumb-left").css({
        'position': 'fixed',
        'left': '0px',
        'display' : 'none'
        });
      }
    }
    else{
    $(".top_header").show();
      $(".navbar-design").removeClass('sticky');
      $("body").removeClass('sticky-menu-body');
      $("body").css({
      'position': 'relative',
      'top': 0,
      });
      $(".breadcrumb-left").css({
      'position': 'relative',
      'top': 0,
      });

      $(".border_breadcrumb").css({
      'margin': '17px auto',
      });

      $('.onscreen-header').css({
            'position': 'fixed',
            'top': '',
        });
  }
}

});

        $('#myCarousel').on('slide.bs.carousel', function() {
        })
        $(".home").addClass("active");

    </script>
@include('sardar.widget.enquire-now2')


@endsection
@section('content')

<div data-ride="carousel">
  </div>
    <div id="myCarousel" class="carousel slide carousel-fade" data-interval="3000" data-ride="carousel" data-pause="false">
        <ol class="carousel-indicators">
            @foreach ($sliders as $key => $slider)
                <li data-target="#myCarousel" data-slide-to="{{ $key }}" class="@if ($key==0) active @endif"></li>
            @endforeach
        </ol>

        <div class="carousel-inner" role="listbox">
            @foreach ($sliders as $key => $slider)

                <div class="carousel-item @if ($key==0) active @endif">
                    <div class="view">
                        <img class="absolute_img d-block w-100" src="{{ url('web') }}/media/lg/{{ $slider->image }}"
                            alt="{{$slider->description}}">
                        <div class="mask rgba-black-light"></div>
                    </div>
                    <div class="carousel-caption content_banners">
                        <h3 class="h3-responsive">{{ $slider->title }}</h3>
                     <a href="{{ $slider->url }}" class="view_now">View Now </a>
                    </div>
                </div>
            @endforeach

            @if($sliders->count() > 1)
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>

            @endif
        </div>
        <!-- <img src="{{url('')}}/sardar/img/bottom-border.png" alt=""> -->
      
    </div>


    @if (isset($sliders->youtube_embed))
        {!! html_entity_decode($sliders->youtube_embed) !!}
    @endif
   

    <section class="collection-slider bg-white">
        <div class="container-fluid">
            <div class="col-12">

            <div class="header-t">
					<h1><a  class="text-red" href="{{route('products')}}">TOP INFLATABLES</a></h1>
					<p>Home to a huge collection of in-stock and custom</p>		
				</div>
                
        <!-- top inflatables from widget folder -->
            @include('sardar.widget.top-inflatables')
            </div>
            
        </div>
    </section>


    <section class="about_giant pb-5">
        <div class="container-fluid">
            <div class="col-12">

                <div class="header-t mb-3">
                    <h1><a href="{{url('about')}}">About Giant Inflatable</a></h1>
                </div>

                <div class="many_partition">
                    <div class="about_part bg-white col-md-7 col-sm-12"
                    
					@if(session('LoggedUser'))
						data-link="{{route('admin.home.editor')}}"
					@endif
                    

                    >
                        <div class="ab_logo text-center">
                            <img src="{{url('sardar')}}/img/{{getWebsiteOptions()['website_logo']->option_value}}"
                                 class="img-fluid">
                        </div>
                        <div class="text-left">
                            <p><span class="GreaT"> Greetings ! </span></p>
                            {!! html_entity_decode($homeAbout->description, ENT_QUOTES, 'UTF-8') !!}
                        </div>
                        <div class="home-readmore">
                            <a href="{{$homeAbout->url}}" class="red_btn d-inline-block">Read More</a>
                        </div>
                    </div>

                    <div class="our_clients bg-white col-md-2 col-sm-12 p-0"
					@if(session('LoggedUser'))
						data-link="{{route('client.index')}}"
					@endif
                    >
                        <h2 class="mb-0 pb-0">our clients</h2>

         <div class="client-diplay">

        <div class="col-sm-12">

            @include('sardar.widget.client-slider2')

{{-- 
            <div id="carousel-pager" class="carousel slide " data-ride="carousel" data-interval="1000">
                <div class="carousel-inner vertical">

                <div class="jcarousel-wrapper">
                <div class="jcarousel">
                    <ul>

                @foreach($clients as $key => $client)
                @if($key < 2)
                <li><img src="{{ url('web') }}/media/lg/{{ $client->logo }}" width="200" height="200" alt=""></li>
                
                @endif

                @endforeach
                
                      
                    </ul>
                </div> 
            </div>



                </div>
                
                <!-- <a class="left carousel-control" href="#carousel-pager" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-up" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-pager" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a> -->
                
            </div>

            --}}
        </div>


            </div>
                    </div>

                    @include('sardar.widget.contact-form1')

                </div>

            </div>
        </div>
    </section>


  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script>
    // var count = 1;
    // setInterval(function() {
    // //   alert(count ++ );

    //     $('body').fadeOut();
    //     // count = $(".slideshow img:nth-child("+count+")").fadeOut(1000).next();

    //     // $(".slideshow img:nth-child("+count+")").fadeOut(1000).end();
    // }, 3000);


</script>

@endsection
