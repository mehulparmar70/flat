<!DOCTYPE html>
<html>

<head>
</head>
<body>
<!-- header -->

<?php if(request()->route()->getName() == 'index'){ ?>
  <header class="header">
<?php } else{  ?>
  <header class="header header_position">
<?php } ?>
@if(session('LoggedUser'))
<style> 
    .onscreen-header{
        top: 24px;
    }
    .menu-wrapper{
        /*top: 40px !important;*/
        top: 63px !important;
    }
    .itemBlock {
    margin-top: 80px;
    }

    @media (min-width: 1600px){
        .itemBlock {
            margin-top: 118px;
        }
    }

    

</style>

<p class="route-category-list d-none">{{route('admin.category.list')}}?type=main_category&onscreenCms=true</p>
<p class="route-category-create d-none">{{route('admin.category.create')}}?type=main_category&onscreenCms=true</p>
<p class="route-sub-category-list d-none">{{route('admin.category.list')}}?type=sub_category&onscreenCms=true</p>
<p class="route-sub-category-create d-none">{{route('admin.category.create')}}?type=sub_category&onscreenCms=true</p>

<p class="route-testimonial-create d-none">{{route('testimonials.create')}}?onscreenCms=true</p>
<p class="route-testimonial-index d-none">{{route('testimonials.index')}}?onscreenCms=true</p>
<p class="route-video-create d-none">{{route('video.create')}}?onscreenCms=true</p>
<p class="route-video-index d-none">{{route('video.index')}}?onscreenCms=true</p>
<p class="route-blog-create d-none">{{route('blog.create')}}?onscreenCms=true</p>
<p class="route-blog-index d-none">{{route('blog.index')}}?onscreenCms=true</p>
<p class="route-slider-index d-none">{{route('slider.index')}}?onscreenCms=true</p>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
	
$(document).ready(function () {
	
	// $('.navbar-brand, .logo-g').each(function(){
    // $(this).append(`<a href="`+$(this).attr('data-link')+'?onscreenCms=true'+
    // `"class='onscreen-logo' onclick="currentWindow = window.open('`+$(this).attr('data-link')+'?onscreenCms=true'+
    // `', 'toolbar=no, location=no','left=`+left+`,width=`+popupWinWidth+`,height=860'); return false;"> 
    // <i class='far fa-edit'></i></a>`);
	// });
	
});

function getOnscreenUrl(url){

	var screen = $(window).width();
	var popupWinWidth = 990;
	var left = (screen - popupWinWidth) / 2;
	const currentWindow = window.open(url, 'toolbar=no, location=no','left='+left+',width='+popupWinWidth+',height=860');
	// return url;
	

}
</script>
<style type="text/css">
    .header .admin_header .header_top_blk p a {
        color: #050505;
    }
</style>

<div class="header_bottom">
    <div class="header_nav">
        <div class="container">
          <div class="navbar">
            <ul>
              
                <li><a href="{{route('admin.index')}}" target="_blank" ><i class="fa fa-home "></i>  Go To Admin</a></li>
                <li>
                    <a href="#">Add New</a>
                    <ul>
                        <li><a href=""onclick="getOnscreenUrl('{{route('admin.index')}}/category/create?type=main_category&onscreenCms=true'); return false;">Page</a></li> 
                        <li><a href=""onclick="getOnscreenUrl('{{route('admin.index')}}/category/create?type=main_category&onscreenCms=true'); return false;">Main Category</a></li> 
                        <li><a href=""onclick="getOnscreenUrl('{{route('admin.index')}}/category/create?type=sub_category&onscreenCms=true'); return false;">Sub Category</a></li> 
                        <li><a href=""onclick="getOnscreenUrl('{{route('admin.index')}}/photo?page=list&onscreenCms=true'); return false;">Manage Photos</a></li> 
                        <li><a href=""onclick="getOnscreenUrl('{{route('admin.index')}}/video/create?onscreenCms=true'); return false;">Video</a></li> 
                        <li><a href=""onclick="getOnscreenUrl('{{route('admin.index')}}/testimonials/create?onscreenCms=true'); return false;">Testimonial</a></li> 
                        <li><a href="{{route('admin.index')}}/blog/create?onscreenCms=true"onclick="getOnscreenUrl('{{route('admin.index')}}/blog/create?onscreenCms=true'); return false;">Blog</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">Manage Contents</a>
                    <ul>
                        <li><a href=""
                            onclick="getOnscreenUrl('{{route('admin.index')}}/category?type=main_category&onscreenCms=true'); return false;"
                        >Main Category</a></li>
                        <li><a href=""
                            onclick="getOnscreenUrl('{{route('admin.index')}}/category?type=sub_category&onscreenCms=true'); return false;"
                        >Sub Category</a></li>
                        <li><a href=""
                            onclick="getOnscreenUrl('{{route('admin.index')}}/photo?page=list&onscreenCms=true'); return false;"
                        >Manage Photos</a></li>
                        <li><a href=""
                            onclick="getOnscreenUrl('{{route('admin.index')}}/video?onscreenCms=true'); return false;"
                        >Video</a></li>
                        <li><a href=""
                            onclick="getOnscreenUrl('{{route('admin.index')}}/testimonials?onscreenCms=true'); return false;"
                        >Testimonial</a></li>
                        <li><a href=""
                            onclick="getOnscreenUrl('{{route('admin.index')}}/blog?onscreenCms=true'); return false;"
                        >Blog</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">Global Setting</a>
                    <ul>
                        <li><a href=""
                            onclick="getOnscreenUrl('{{route('admin.index')}}/slider?onscreenCms=true'); return false;"
                        >Slider / Banner</a></li>

                        <li><a href=""
                            onclick="getOnscreenUrl('{{route('admin.index')}}/settings/seo-manage?onscreenCms=true'); return false;"
                        >Logo Manage</a></li>

                        <li><a href=""
                            onclick="getOnscreenUrl('{{route('admin.index')}}/settings/social-media?onscreenCms=true'); return false;"
                        >Social Media</a></li>
                        <li><a href=""
                            onclick="getOnscreenUrl('{{route('admin.index')}}/custom-code/js?onscreenCms=true'); return false;"
                        >Header Footer</a></li>
                    </ul>
                </li>
                <li>
                    <a href="">{{session('LoggedUser')->name}}</a>
                </li>

                <li class="onscreen-bg2">
                    <a href="{{route('admin.auth.logoutOnscreen')}}"><i class="nav-icon fa fa-lock "></i> &nbsp;Logout</a>
                </li>
            </ul>
          </div>
        </div>
      </div>
</div>
@endif
  <div class="header_top">
    <div class="container">
      <div class="header_top_blk">
        <p>
          <img src="{{url('sardar')}}/images/call.png" alt="call" /><a href="tel:1300 463 528"
            >1300 463 528</a
          >
        </p>
        <p class="mobile_none">
          <img src="{{url('sardar')}}/images/location.png" alt="location" /><a href="#"
            >27 Woodlands Dr, Braeside VIC 3195, Australia</a
          >
        </p>
        <p class="mobile_none">
          <img src="{{url('sardar')}}/images/mail.png" alt="mail" /><a
            href="mailto: industrial@giantinflatablesindustrial.com.au"
            >industrial@giantinflatablesindustrial.com.au</a
          >
        </p>
        <p>
          <a href="#" class="mobile_none">Let's Connect</a>
          <span class="social-icon"
            ><img src="{{url('sardar')}}/images/youtube.png" alt="youtube" /><img
              src="{{url('sardar')}}/images/pip.png"
              alt="pip" /><img src="{{url('sardar')}}/images/twitter.png" alt="twitter" /><img
              src="{{url('sardar')}}/images/fb.png"
              alt="b"
          /></span>
        </p>
      </div>
    </div>
  </div>
  <div class="back-img">
    <div class="header_bottom">
      <div class="header_bottom_blk">
        <div class="container">
          <div class="logo">
            <a href="{{url('')}}"><img src="{{url('sardar')}}/images/logo.png" alt="logo" /></a>
          </div>

          <div class="search">
            <form method="POST" action="{{url('search')}}">
              @csrf
              <input type="text" name="search" placeholder="I am looking for.. Type here" value="<?php echo isset($searchTitle)?$searchTitle:''; ?>" required />
              <!-- <img src="{{url('sardar')}}/images/search.png" alt="search" /> -->
              <input type="submit" name="Submit" value="" >
            </form>
          </div>
          <div class="solution">
            <h2>Innovative Industrial Inflatable Solutions</h2>
            <div class="solution-blk main_div">
              <ul>
                <li class="our_clients" @if(session('LoggedUser'))
            data-link="{{route('admin.client-page.editor')}}"
          @endif><a href="{{ url('client') }}" class="nav-item">clients</a></li>
                <li class="menu_crud"
                @if(session('LoggedUser'))
                    data-link="{{route('admin.awards-page.editor')}}"
                @endif><a href="{{ url('awards') }}" class="nav-item">awards</a></li>
                <li class="menu_crud"
                @if(session('LoggedUser'))
                    data-link="{{route('admin.video-page.editor')}}"
                @endif><div ></div><a href="{{ url('videos') }}" class="nav-item">videos</a></li>
                <li class="menu_crud"
                @if(session('LoggedUser'))
                    data-link="{{route('admin.newsletter-page.editor')}}"
                @endif><a href="{{ url('news-letters') }}" class="nav-item newsletter">newsletters</a></li>
                <li class="menu_crud"
                @if(session('LoggedUser'))
                    data-link="{{route('admin.partners-page.editor')}}"
                @endif><a href="{{ url('partenrs') }}" class="nav-item partenrs">Partners</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="header_nav">
        <div class="container">
          <div class="header_menu">
            <p class="menu_button">
              <img src="{{url('sardar')}}/images/menu1.png" alt="menu" />MENU
            </p>
            <div class="menu_item_img">
              <a href="{{url('')}}" class="item nav-item" @if(session('LoggedUser'))
                data-link="{{route('admin.home.editor')}}"
            @endif><i class="fa fa-home home_menu_active" aria-hidden="true"><div class="border"></div><span class="tooltiptext">Home</span></i></a>
              <a href="{{url('custom-industrial-inflatable-products')}}" class="nav-item"><i class="fa fa-product-hunt product_menu_active" aria-hidden="true"><div class="border"></div> <span class="tooltiptext">Our Products </span></i > </a>
              <a href="{{url('about')}}" class="nav-item"><i class="fa fa-info-circle" aria-hidden="true"><div class="border"></div> <span class="tooltiptext">About</span></i ></a> 
              <a href="{{url('case-studies')}}" class="nav-item">
                <i class="fa fa-book case_studies_menu_active" aria-hidden="true"><div class="border"></div><span class="tooltiptext">Case Studies</span></i>
              </a>
              <a href="{{url('testimonials')}}" class="nav-item">
              <i class="fa fa-quote-left testimonials_menu_active"
                ><div class="border"></div>
                <span class="tooltiptext">Testimonials</span></i
              >
              </a>
              <a href="{{url('updates')}}" class="nav-item">
              <i class="fa fa-refresh updates_menu_active" aria-hidden="true"
                ><div class="border"></div>
                <span class="tooltiptext">Updates</span></i
              >
              </a>
              <a href="{{url('contact-us')}}" class="nav-item">
              <i class="fa fa-address-book" aria-hidden="true"
                ><div class="border"></div>
                <span class="tooltiptext">Contact Us</span></i
              >
              </a>
              <i class="fa fa-envelope-o"
                ><div class="border"></div>
                <span class="tooltiptext">Discuss with us</span></i
              >
              @include('sardar.widget.contact-form1')
              <img
                src="{{url('sardar')}}/images/graylogo.png"
                alt="graylogo"
                class="graylogo"
              />
            </div>
          </div>
          <div class="navbar main_div">
            <ul>
              <li class="menu_crud" @if(session('LoggedUser'))
                data-link="{{route('admin.home.editor')}}"
                @endif><a href="{{url('')}}" class="home nav-item">HOME</a>
            </li>
              <li class="menu_crud" @if(session('LoggedUser'))
                data-link="{{route('admin.product-page.editor')}}"
                @endif>
                <a href="{{url('custom-industrial-inflatable-products')}}" class="our_product_menu nav-item">OUR PRODUCTS </a>
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
                data-link="{{route('admin.blog-page.editor')}}"
                @endif><a class="updates_menu nav-item" href="{{url('updates')}}">Updates</a></li>
              <li class="menu_crud " @if(session('LoggedUser'))
                    data-link="{{route('admin.contact-page.editor')}}"
                @endif>
                <a href="{{url('contact-us')}}" class="item nav-item">CONTACT US</a></li>
            </ul>
          </div>
          <!-- <div class="btn_form">
            <a href="#" class="discuss">
              <img src="{{url('sardar')}}/images/mail1.png" alt="mail" />Discuss with us
            </a>
            @include('sardar.widget.contact-form1')
          </div> -->
          <div class="btn_form">
                <a class="discuss">
                  <img src="{{url('sardar')}}/images/mail1.png" alt="mail" />Discuss with us
                </a>
                <form action="{{route('send-contact')}}" method="post">
                  @csrf
                  <input type="hidden" name="token_response" class="token_response">
                  <div class="form_wrap">
                    <div class="form_item">
                      <img src="{{ url('sardar') }}/images/home.png" /><input
                        type="text"
                        name="name"
                        placeholder="Name" required=""
                      />
                    </div>
                    <div class="form_item">
                      <img src="{{ url('sardar') }}/images/phone1.png" /><input
                        type="number"
                        name="Phone Number"
                        placeholder="Phone Number"
                      />
                    </div>
                    <div class="form_item">
                      <img src="{{ url('sardar') }}/images/email2.png" /><input
                        type="email"
                        name="Email"
                        placeholder="Email"
                      />
                    </div>
                    <div class="form_item">
                      <img src="{{ url('sardar') }}/images/map.png" /><input
                        type="text"
                        name="Select Country"
                        placeholder="Select Country"
                      />
                    </div>
                    <div class="form_item">
                      <img src="{{ url('sardar') }}/images/chat.png" / style=" margin-top: -30px;">
                      <textarea
                        name="Share Your Inflatables Requirement"
                        placeholder="Share Your Inflatables Requirement"
                      ></textarea>
                    </div>
                    <div class="form_item">
                      <div class="g-recaptcha" data-sitekey="6Leh9bkUAAAAAKVlEaSgl7pW4Sn0fom2KGGIB5m_"></div>
                    </div>
                    <p class="blue_text">
                      We do not Sell or Rent your information.
                      {{ Session::get('success')}}
                    </p>
                    <div class="discuss">
                      <input type="submit" value="submit" />
                    </div>
                  </div>
                </form>
              </div>
        </div>
      </div>
    </div>
  </div>
</header>
<input sdf type='hidden' name="isCMS" id='isCMS'>

<style>
/* Modal styles */
.modal {
    display: none; 
    position: relative; 
    z-index: 10000 !important; 
    left: 20;
    top: 20;
    right:20;
    bottom:20;
    width: 100% !important; 
    height: 100% !important; 
    overflow: auto !important; 
    background-color: rgb(0,0,0); 
    background-color: rgba(0,0,0,0.4); 

    align-items: center !important;
    justify-content: center !important;
}

.modal-content {
    background-color: #fefefe;
    margin: 1% auto; 
    padding: 20px;
    border: 1px solid #888;
    overflow-y: auto !important ; /* Add vertical scroll */
    max-width: 80% !important;
    max-height: 80% !important; 
    position: relative !important;
}
#ajaxModal form
{
  width: 100%;
}

.close {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
}
</style>

<div id="ajaxModal" class="modal" style="display:none;">
    <div class="modal-content">
        <span class="close">&times;</span>
        <div id="modalBodyContent"></div>
    </div>
</div>
    </div>
    <!-- <script src="{{url('vertical-menu')}}/js/vm.js" type="text/javascript"></script>
    <script src="{{url('vertical-menu')}}/js/vertical-menu.js"></script> -->
</body>

</html>
