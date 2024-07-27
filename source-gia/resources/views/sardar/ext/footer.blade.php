
@section('toast')
  @include('adm.widget.toast')
@endsection
@if(session('LoggedUser'))
<style type="text/css">
  .product-video-div .onscreen-popup-title-link{
    background: white;
  }
  .product-video-div .active a{
    color: black !important;
  }
  .product_internal_title,.footer-partners-div .crud {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    padding: 4px 10px
    border: none;
    cursor: pointer;
    text-align: center;
    z-index: 99999999;
    background: white;
  }
</style>
@endif
<!-- kiis -->
<section class="kiis">
  <div class="container">
    <div class="wrap_kiis">
      <div class="kiss_wrap">
        <div class="big_text mid_text">
          <a href="{{url('/videos')}}" >PRODUCT VIDEOS </a>
        </div>
        <div class="kiis_blk">
          @foreach($videos as $video)
          <?php 
          preg_match('/src="([^"]+)"/', $video->youtube_embed, $match);
          $url = array_slice(explode('/', $match[1]), -1)[0];
          $tumbnail = 'https://img.youtube.com/vi/'.$url.'/hqdefault.jpg';
          ?>
          <div href="#" class="kiis_item product-video-div">
            <section
              class="video"
              style="background-image: url('{{$tumbnail}}')"
            >
              <a data-fancybox href="{{ $match[1] }}">
                <img src="{{url('sardar')}}/images/video2.png" />
                  <div class="onscreen_video_popup_block" @if(session('LoggedUser'))
                  data-link="{{route('video.edit', $video->id)}}"
                  data-delete-link="{{route('admin.index')}}/video/delete/{{ $video->id}}"
                @endif></div>
              </a>
            </section>
          </div>
          @endforeach
        </div>
        <a href="{{url('/videos')}}" class="read_all explore_all"><p>VIEW ALL</p></a>
      </div>
      <div class="kiss_wrap">
        <div class="big_text mid_text">
          <a href="{{ url('partenrs') }}">OUR PARTNERS</a>
        </div>
        <div class="kiis_blk footer-partners-div">
          @foreach($footerOurPartners as $partenr)
          <a href="{{url('partners')}}/{{$partenr->slug}}" class="kiis_item">
            <img src="{{url('web')}}/media/md/{{$partenr->image}}" />
            <div class="crud" @if(session('LoggedUser'))
                data-create="{{route('partners.create')}}"
                data-link="{{route('partners.edit', $partenr->id)}}"
                data-delete-link="{{route('admin.index')}}/partners/delete/{{ $partenr->id}}"
              @endif></div>
          </a>
          @endforeach
        </div>
        <a href="{{ url('partenrs') }}" class="read_all explore_all"><p>VIEW ALL</p></a>
      </div>
      <div class="kiss_wrap">
        <div class="big_text mid_text">
          <a href="{{ url('products') }}">LATEST PROJECT</a>
        </div>
        <div class="kiis_blk">
          @foreach(getMainCategories() as $key => $mainCategoryAll)
          @foreach(getSubCategories($mainCategoryAll->id) as $key => $topInflatableLp)
          <?php $imageName = getSubCategoryImages($topInflatableLp->id, 2, 'DESC')[0]['image']; ?>
          <a href="{{$topInflatableLp->slug}}" class="kiis_item">
            <img src="{{url('web')}}/media/md/{{$imageName}}" />
            <div class="product_internal_title" @if(session('LoggedUser'))
                data-create-link="{{route('admin.category.create')}}?type=main_category&onscreenCms=true&id={{$topInflatableLp->id}}"
                data-link="{{route('admin.category.edit', $topInflatableLp->id)}}?type=main_category&onscreenCms=true&id={{$topInflatableLp->id}}"
                data-delete-link="{{route('admin.index')}}/category/delete/{{ $topInflatableLp->id}}"
              @endif></div>
          </a>
           @endforeach
          @endforeach
        </div>
        <a href="{{ url('products') }}" class="read_all explore_all"><p>VIEW ALL</p></a>
      </div>
    </div>
  </div>
</section>

<!-- map section -->
<section class="map_sec">
  <div class="container">
    <div class="map_blk">
      <div class="map_item">
        <div class="full_map">
          <!-- <iframe width="1920"height="472"frameborder="0"scrolling="no"marginheight="0"marginwidth="0"src="https://www.google.com/maps/place/Giant+Inflatables+Asia/@22.2862297,73.128362,20.38z/data=!4m5!3m4!1s0x0:0x911551eaf654eefb!8m2!3d22.2861971!4d73.1283451"></iframe> -->
          
          <a href="https://www.google.com/maps/place/27+Woodlands+Dr,+Braeside+VIC+3195,+Australia/@-37.989998,145.117691,13z/data=!4m5!3m4!1s0x6ad66cddb5a512c1:0xaf6e978c76351aff!8m2!3d-37.989998!4d145.117691" target="_blank">
						<img src="{{asset('sardar')}}/img/gii-map.jpg" >
					</a>
        </div>
      </div>
      <div class="map_item">
        <img src="{{url('sardar')}}/images/logo.png" alt="call" class="img1300" />
        <p>
          <i class="fa fa-phone"></i
          ><a href="tel:{{getSocialMedia()->phone}}" class="call">{{getSocialMedia()->phone}}</a>
        </p>
        <p>
          <i class="fa fa-envelope-o"></i
          ><a href="mailto: {{getSocialMedia()->email}}" class="mail"
            >{{getSocialMedia()->email}}</a
          >
        </p>
        <p>
          <i class="fa fa-map-marker"></i><a href="#">{{getSocialMedia()->address}}</a>
        </p>
        <div class="social_icon">
        	@if(isset(getSocialMedia()->facebook))
          <a href="{{getSocialMedia()->facebook}}"> <img src="{{url('sardar')}}/images/bluefb.png" alt="facebook" /></a>
          @endif
          @if(isset(getSocialMedia()->twitter))
          <a href="{{getSocialMedia()->twitter}}"><img src="{{url('sardar')}}/images/bluetwiter.png" alt="twitter" /></a>
          @endif
          @if(isset(getSocialMedia()->youtube))
          <a href="{{getSocialMedia()->youtube}}"><img src="{{url('sardar')}}/images/blueyoutube.png" alt="youtube" /></a>
          @endif
          @if(isset(getSocialMedia()->linkedin))
          <a href="{{getSocialMedia()->linkedin}}"> <img src="{{url('sardar')}}/images/bluein.png" alt="linkedin" /></a>
          @endif
        </div>
        <span class="map_span">
          <a href="{{route('sitemap')}}">Sitemap</a> &nbsp;|&nbsp;
          <a href="#">Privacy Policy</a>
        </span>
      </div>
      <div class="map_item">
        @include('sardar.widget.contact-form1')
      </div>
    </div>
  </div>
</section>

<section class="nav_1300">
  <div class="header_nav">
    <div class="container">
      <div class="navbar main_div">
        <ul>
          <li class="menu_crud" @if(session('LoggedUser'))
            data-link="{{route('admin.home.editor')}}"
            @endif><a href="{{url('')}}" class="home nav-item">HOME</a>
        </li>
          <li class="menu_crud" @if(session('LoggedUser'))
            data-link="{{route('admin.product-page.editor')}}"
            @endif>
            <a href="{{url('products')}}" class="our_product_menu nav-item">OUR PRODUCTS </a>
          </li>
          <li class="menu_crud" @if(session('LoggedUser'))
            data-link="{{route('admin.about-page.editor')}}"
            @endif>
            <a class="item nav-item" href="{{url('about')}}">ABOUT</a>
          </li>
          <li class="menu_crud" @if(session('LoggedUser'))
            data-link="{{route('admin.casestudies-page.editor')}}"
            @endif><a href="{{url('case-studies')}}" class="nav-item case_studies_menu">CASE STUDIES</a></li>
          <li class="menu_crud nav-item" @if(session('LoggedUser'))
                data-link="{{route('admin.testimonial-page.editor')}}"
            @endif>
            <a href="{{url('testimonials')}}" class="item nav-item testimonials_menu"
            >TESTIMONIALS</a>
          </li>
          <li class="menu_crud" @if(session('LoggedUser'))
            data-link="{{route('admin.home.editor')}}"
            @endif><a class="nav-item" href="{{url('updates')}}">Updates</a></li>
          <li class="menu_crud " @if(session('LoggedUser'))
                data-link="{{route('admin.contact-page.editor')}}"
            @endif>
            <a href="{{url('contact-us')}}" class="item nav-item">CONTACT US</a></li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- footer -->
<footer class="footer" style="background-color: #eeeeee;">
  <div class="container">
    <div class="footer_blk">
      <div class="footer_item footer_width">
        <h2 class="social_footer" @if(session('LoggedUser'))
                  data-link="{{route('admin.setting.social-media')}}"
                @endif>Contact Us</h2>
        <img src="{{ url('sardar') }}/images/logo.png" alt="Logo" class="img1300" />

        <p class="width_p">
          At Giant Inflatables Industrial we aim to replace the conventional
          with the extraordinary. Taking what industries have used for years
          and revolutionizing it into a product of efficiency, portability
          and productivity.
        </p>
        <p>
          <i class="fa fa-phone"></i
          ><a href="tel:{{getSocialMedia()->phone}}" class="call">{{getSocialMedia()->phone}}</a>
        </p>
        <p>
          <i class="fa fa-envelope-o"></i
          ><a
            href="mailto:{{getSocialMedia()->email}}"
            class="mail"
            >{{getSocialMedia()->email}}</a
          >
        </p>
        <p>
          <i class="fa fa-map-marker"></i
          ><a href="#">{{getSocialMedia()->address}}</a>
        </p>
      </div>
      <div class="footer_item">
        <h2 class="footer_page_link_information" @if(session('LoggedUser'))
                  data-link="{{route('admin.pageLink.create')}}"
                @endif>Company Links </h2>
        <ul class="footerLinks" >
          @foreach(getFooterLinks()['pageLinks'] as $pageLink)
                  <li>
                    <div class="triangle triangle-1"></div>
                    <a href="{{$pageLink->url}}"
                    
                  >
                    @if($pageLink->name)
                      {{$pageLink->name}}
                    @endif</a></li>
                @endforeach
        </ul>
      </div>
      <div class="footer_item">
        <h2>Products</h2>
        <ul class="footerLinks">
          @if(count(getFooterLinks()['categoryLinks']) == 0)
            @foreach(getMainCategories(0, 8) as $footerCategory)
                <li>
                  <div class="triangle triangle-1"></div>
                  <a href="{{url('')}}/{{$footerCategory->slug}}">{{$footerCategory->name}}</a>
                </li>
              @endforeach

            @else
              @foreach(getFooterLinks()['categoryLinks'] as $categoryLink)
                @if(isset($categoryLink->slug))
                  <li>
                  <div class="triangle triangle-1"></div>
                  <a href="{{url('')}}/{{$categoryLink->slug}}">
                    @if(isset($categoryLink->display_name))
                        {{$categoryLink->display_name}}
                    @else
                      {{$categoryLink->name}}
                    @endif</a>
                  </li>
                @endif
              @endforeach
            @endif
        </ul>
      </div>
      <div class="footer_item">
        <h2>Updates</h2>
        <ul class="footerLinks">
          @foreach(getFooterLinks()['blogLinks'] as $blogLink)
                  
                  @if(isset($blogLink->slug))
                  <li>
                    <div class="triangle triangle-1"></div>
                  <a href="{{url('updates')}}/{{$blogLink->slug}}">
                  
                    @if(isset($blogLink->display_name))
                        {{$blogLink->display_name}}
                      @else
                      {{$blogLink->title}}
                      @endif</a>
                      </li>
                    @endif
                  @endforeach
        </ul>
      </div>
      <div class="footer_item">
        <h2>Case Study</h2>
        <ul class="footerLinks">
          @foreach($footerCaseStudies as $caseStudiesLink)
                
          @if(isset($caseStudiesLink))
            <li>
              <div class="triangle triangle-1"></div>
            <a href="{{url('case-studies')}}/{{$caseStudiesLink->slug}}">
              {{$caseStudiesLink->title}}</a>
              </li>
            @endif
          
          @endforeach
        </ul>
      </div>
    </div>
  </div>
</footer>

<footer class="footer_bottom">
  <div class="container">
    <div class="footer_bottom_item">
      <p>web & technology partner</p>
      <p>brand & marketing partner</p>
    </div>
    <div class="footer_bottom_item">
      <p><img src="{{url('sardar')}}/images/footer1.png" alt="Logo" /></p>
      <p>copyright © Giant Industrial Inflatables. All rights reserved.</p>
      <p><img src="{{url('sardar')}}/images/footer3.png" alt="Logo" /></p>
    </div>
    <div class="footer_bottom_item"></div>
  </div>
</footer>

<!-- top to bottom -->
<a id="button"></a>
<img src="{{url('sardar')}}/img/border/100X40.png" style="display:none;" />
<img src="{{url('sardar')}}/img/border/160X40.png" style="display:none;" />
<img src="{{url('sardar')}}/img/border/140X40.png" style="display:none;" />

<img src="{{url('sardar')}}/img/border/112X35_red.png" style="display:none;" />


<img src="{{url('sardar')}}/img/border/product_title_border/339X55_wh.jpg" style="display:none;" />
<img src="{{url('sardar')}}/img/border/product_title_border/339X55_bk.jpg" style="display:none;" />

<img src="{{url('sardar')}}/img/border/product_image_main/369X321.png" style="display:none;" />
<img src="{{url('sardar')}}/img/border/product_title_border/262X55_wh.jpg" style="display:none;" />

<img src="{{url('sardar')}}/img/border/product_title_border/262X55_bk.jpg" style="display:none;" />
<img src="{{url('sardar')}}/img/border/product_title_border/320X55_bk.jpg" style="display:none;" />
<img src="{{url('sardar')}}/img/border/product_title_border/426X55_bk.jpg" style="display:none;" />

<img src="{{url('sardar')}}/img/border/product_image_main/369X321.png" style="display:none;" />
<img src="{{url('sardar')}}/img/border/product_title_border/611X55_bk.jpg" style="display:none;" />
<img src="{{url('sardar')}}/img/border/112X35_bk.png" style="display:none;" />

	
	
	

	<!-- <footer class="bg-white">
		<div class="container-fluid">	
			<div class="site-footer mt-4">	
				<ul style="
					text-align: center;
					padding: 0px 20%;
				">

		<li><p class="text-dark">This website is Designed & Developed by</p> 
					<a href="https://thestudio5.com.au/">
					<img src="{{url('sardar')}}/images/studio5_logo.jpg"    width="220"
						class="img-fluid mt-4"></a></li>	
					<li>
						<p class="text-center">This Website is protected <img src="{{url('sardar')}}/images/dmca.png" width="100" 
						class="img-fluid ml-3"></p>				
						<p class="text-center"><a href="#;" class="text-center">@ Giant Inflatables. All rights reserved. </a></p>
					</li>
					
					<li><a href="https://searchmediabroker.com/">
					<p class="text-dark">SEO-SEM-SMM-PPC By:</p>
						<img src="{{url('sardar')}}/images/smb-logo.png" width="200" class="img-fluid"></a>
					</li>		
					
				</ul>
				
			</div>	
			
		</div>	
	</footer>
	 -->

<script>
    var btn = $("#button");

    $(window).scroll(function () {
      if ($(window).scrollTop() > 300) {
        btn.addClass("show");
      } else {
        btn.removeClass("show");
      }
    });

    btn.on("click", function (e) {
      e.preventDefault();
      $("html, body").animate({ scrollTop: 0 }, "300");
    });

    var baseUrl = {!! json_encode(url('/')) !!}
    // tab
    /*$.fn.responsiveTabs = function () {
      return this.each(function () {
        placeholder.html('');
        var el = $(this),
          tabs = el.find("dt"),
          content = el.find("dd"),
          placeholder = $(
            '<div class="responsive-tabs-placeholder"></div>'
          ).insertAfter(el);

        tabs.on("click", function () {
          var tab = $(this);

          tabs.not(tab).removeClass("active");
          tab.addClass("active");

          placeholder.html(tab.next().html());
        });

        tabs.filter(":first").trigger("click");
      });
    };
    $(".responsive-tabs").responsiveTabs();*/
</script>
