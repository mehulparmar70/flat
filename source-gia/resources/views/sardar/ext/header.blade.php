@if(session('LoggedUser'))

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

<script>
	
$(document).ready(function () {
	
});

function getOnscreenUrl(url){

	var screen = $(window).width();
	var popupWinWidth = 990;
	var left = (screen - popupWinWidth) / 2;
	const currentWindow = window.open(url, 'toolbar=no, location=no','left='+left+',width='+popupWinWidth+',height=860');

}

</script>

	<div class="onscreen-header" style="position:fixed; z-index: 4;">
		<ul class="float-left">
			<li class="onscreen-bg1">
				<a href="{{route('admin.index')}}" target="_blank"><i class="fas fa-home"></i>  Go To Admin</a>
			</li>

			<div class="dropdown">
				<a class="dropbtn">Add New</a>
					<div class="dropdown-content">
					

						<a href=""
						 onclick="getOnscreenUrl('{{route('admin.index')}}/category/create?type=main_category&onscreenCms=true'); return false;"
						 >Main Category</a>

						<a href=""
							onclick="getOnscreenUrl('{{route('admin.index')}}/category/create?type=sub_category&onscreenCms=true'); return false;"
						>Sub Category</a>
						<a href=""
							onclick="getOnscreenUrl('{{route('admin.index')}}/photo?page=list&onscreenCms=true'); return false;"
						>Manage Photos</a>

						<a href=""
							onclick="getOnscreenUrl('{{route('admin.index')}}/video/create?onscreenCms=true'); return false;"
						>Video</a>
						<a href=""
							onclick="getOnscreenUrl('{{route('admin.index')}}/testimonials/create?onscreenCms=true'); return false;"
						>Testimonial</a>

						<a href="{{route('admin.index')}}/blog/create?onscreenCms=true"
							onclick="getOnscreenUrl('{{route('admin.index')}}/blog/create?onscreenCms=true'); return false;"
						>Blog</a>
					</div>
			</div>

			<div class="dropdown">
				<a class="dropbtn">Manage Contents</a>
					<div class="dropdown-content">
						<a href=""
							onclick="getOnscreenUrl('{{route('admin.index')}}/category?type=main_category&onscreenCms=true'); return false;"
						>Main Category</a>
						<a href=""
							onclick="getOnscreenUrl('{{route('admin.index')}}/category?type=sub_category&onscreenCms=true'); return false;"
						>Sub Category</a>
						<a href=""
							onclick="getOnscreenUrl('{{route('admin.index')}}/photo?page=list&onscreenCms=true'); return false;"
						>Manage Photos</a>
						<a href=""
							onclick="getOnscreenUrl('{{route('admin.index')}}/video?onscreenCms=true'); return false;"
						>Video</a>
						<a href=""
							onclick="getOnscreenUrl('{{route('admin.index')}}/testimonials?onscreenCms=true'); return false;"
						>Testimonial</a>
						<a href=""
							onclick="getOnscreenUrl('{{route('admin.index')}}/blog?onscreenCms=true'); return false;"
						>Blog</a>
					</div>
			</div>

			<div class="dropdown">
				<a class="dropbtn">Global Setting</a>
					<div class="dropdown-content">
						<a href=""
							onclick="getOnscreenUrl('{{route('admin.index')}}/settings/seo-manage?onscreenCms=true'); return false;"
						>Logo Manage</a>
						<a href=""
							onclick="getOnscreenUrl('{{route('admin.index')}}/settings/social-media?onscreenCms=true'); return false;"
						>Social Media</a>
						<a href=""
							onclick="getOnscreenUrl('{{route('admin.index')}}/custom-code/js?onscreenCms=true'); return false;"
						>Header Footer</a>
					</div>
			</div>

		</ul>
		
		<ul class="float-right">
			<li>
				<a href="">{{session('LoggedUser')->name}}</a>
			</li>

			<li class="onscreen-bg2">
				<a href="{{route('admin.auth.logoutOnscreen')}}"><i class="nav-icon fa fa-lock "></i> &nbsp;Logout</a>
			</li>
		</ul>
	</div>
@else

@endif

<header id="head"> 
<div id="mySidenav" class="sidenav">
  <ul class="navbar-nav" 
			>
			 <li class="logo-g" 
			 style="
						margin: 10px 0 0px;
						min-width: 100px;
						text-align: center;
						position: relative;
						padding: 0 10px;
					"
			 >
  <a 
  style="float: left;" 
  href="javascript:void(0)" class="closeNavbtn">&times;</a>

		        <a class="nav-link p-0" style="padding: 4px;" href="{{url('')}}">
					<img style="max-width: 31px;margin-right: 0px;" 
						src="{{url('sardar')}}/img/active-link-icon.png">
				</a>
		      </li>

		      <li class="nav-item home">
		        <a class="nav-link" href="{{url('')}}">Home <span class="sr-only">(current)</span></a>
		      </li>

		      <li class="nav-item product">
		        <a class="nav-link" href="{{url('products')}}">our products</a>
		      </li>
		      <li class="nav-item about">
		        <a class="nav-link" href="{{url('about')}}">about</a>
		      </li>
		      <li class="nav-item testimonial">
		        <a class="nav-link" href="{{url('testimonials')}}">testimonials</a>
		      </li>
		      <li class="nav-item video">
		        <a class="nav-link" href="{{url('videos')}}">videos</a>
		      </li>
		      <li class="nav-item blog">
		        <a class="nav-link" href="{{url('blog')}}">blog</a>
		      </li>
		      <li class="nav-item contact">
		        <a class="nav-link" href="{{url('contact-us')}}">contact us</a>
		      </li>
			  <div class="two_controls">    
			      <li class="nav-item eneveloper_menu no-effect">
			        <a class="nav-link"><img src="{{url('sardar')}}/img/envlp.png" class="img-fluid"> </a>
			      </li>

			      <li class="nav-item no-effect  nav-form-btn">
			        <a class="nav-link"> Send Us Your Enquiry </a>
			      </li>
			  </div>    
		    </ul>
</div>


		<div class="top_header">

 
		   
			<div class="left-aligns">  
			  <div class="logo">
			  	<a class="navbar-brand" href="{{url('')}}"
				 
					@if(session('LoggedUser'))
				  		data-link="{{route('admin.setting.seo-manage')}}"
				  	@endif
				  >
				  <img src="{{url('sardar')}}/img/{{getWebsiteOptions()['website_logo']->option_value}}"
				   class="img-fluid"> </a>
				   
			  </div>	
			  <div class="search-bar">
			  	<script async src="https://cse.google.com/cse.js?cx=005070036219886076141:hrykucbjc20"></script>
				<div class="gcse-search"></div>
			  </div>	
			</div>	

		  <div class="dreamandbuild">
		  	<h3>YOU <span>DREAM</span> IT... WE'LL <span>BUILD</span> IT</h3>
		  	<ul> 
		  		<li><a 
				  href="tel:{{getSocialMedia()->phone}}"> <i
				    style="" class="fa fa-mobile"></i> {{getSocialMedia()->phone}} </a> </li>
		  		<li><a 
				   href="mailto:{{getSocialMedia()->email}}"> <i class="far fa-envelope"></i>{{getSocialMedia()->email}}</a> </li>
		  	</ul>
		  </div>	
		</div>  
		<nav class="navbar navbar-expand-lg navbar-design p-lg-0 ">
		  <button class="navbar-toggler p-0" type="button" 
		  aria-expanded="false" aria-label="Toggle navigation">
		    	<i class="fas fa-bars"></i>
		  </button>

		  <div class="collapse navbar-collapse align-items-center" id="navbarNav">
		    <ul class="navbar-nav">
			 <li class="logo-g" 
			 	style="
						margin: 10px 0 0px;
						min-width: 100px;
						text-align: center;
						position: relative;
						padding: 0 10px;
						display: none;
					"
					@if(session('LoggedUser'))
				  		data-link="{{route('admin.setting.seo-manage')}}"
				  	@endif >
		        <a class="nav-link" href="{{url('')}}" style="padding: 4px !important;">
					<img style="max-width: 31px;margin-right: 0px;" 
						src="{{url('sardar')}}/img/active-link-icon.png"
						

						>
				</a>
		      </li>

		      <li class="nav-item home"
					@if(session('LoggedUser'))
						data-link="{{route('admin.home.editor')}}"
					@endif>
		        <a class="nav-link" href="{{url('')}}"
				
				>Home <span class="sr-only">(current)</span></a>
		      </li>

		      <li class="nav-item product"
					@if(session('LoggedUser'))
						data-link="{{route('admin.product-page.editor')}}"
					@endif
					>
		        <a class="nav-link" href="{{url('products')}}"
				
					

				>our products</a>
		      </li>
		      <li class="nav-item about"
			  
			  		@if(session('LoggedUser'))
						data-link="{{route('admin.about-page.editor')}}"
					@endif
			  >
		        <a class="nav-link" href="{{url('about')}}"

				>about</a>
		      </li>

		      <li class="nav-item testimonial"
					@if(session('LoggedUser'))
						data-link="{{route('admin.testimonial-page.editor')}}"
					@endif
					>
		        <a class="nav-link" href="{{url('testimonials')}}"
				>testimonials</a>
		      </li>

		      <li class="nav-item video"
					@if(session('LoggedUser'))
						data-link="{{route('admin.video-page.editor')}}"
					@endif
				>
		        <a class="nav-link" href="{{url('videos')}}"
				
				>videos</a>
		      </li>
		      <li class="nav-item blog" 
					@if(session('LoggedUser'))
						data-link="{{route('admin.blog-page.editor')}}"
					@endif
					>
		        <a class="nav-link" href="{{url('blog')}}">blog</a>
		      </li>
		      <li class="nav-item contact"
					@if(session('LoggedUser'))
						data-link="{{route('admin.contact-page.editor')}}"
					@endif
					>
		        <a class="nav-link" href="{{url('contact-us')}}"
				
				>contact us</a>
		      </li>
			  <div class="two_controls">    
			      <li class="nav-item eneveloper_menu no-effect">
			        <a class="nav-link"><img src="{{url('sardar')}}/img/envlp.png" class="img-fluid"> </a>
			      </li>

			      <li class="nav-item no-effect">
			        <a class="nav-link"> Send Us Your Enquiry </a>
			      </li>
			  </div>    
		    </ul>
		  </div>
		  
			<div class="top-form">
				@include('sardar.widget.contact-form-header')
			</div>	
		</nav>
	</header>
	