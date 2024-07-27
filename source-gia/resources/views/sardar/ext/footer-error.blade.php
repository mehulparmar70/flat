
@section('toast')
  @include('adm.widget.toast')
@endsection

	<section class="experts" style="background: #f2f2f2;">
		<div class="container-fluid">
			<div class="col-12">
				<div class="header-t py-4">
					<h1><a href="{{url('contact')}}">Connect With Us</a></h1>
				</div>	
			</div>	
		</div>
	</section>

	<section class="about_giant pb-5 bg-white wiThmap">
		<div class="container-fluid">
			<div class="col-12">
				<div class="many_partition">
					<div class="facebooks_posts">
						{{-- html_entity_decode(getSocialMedia()->facebook_embed) --}}
						
						@if(isset(getSocialMedia()->facebook))
						<a href="{{getSocialMedia()->facebook}}" class="facebooks_post_block"

						@if(session('LoggedUser'))
							data-link="{{route('admin.setting.social-media')}}"
						@endif
						>
						<img src="{{url('sardar')}}/images/facebook-page.png" 
							style="width:100%;margin-bottom: 10px;max-width: ;max-height: 449px;padding-right: 11px;"></a>
						@endif
						
					</div>
					
					<div class="map_part google_map_block" style="max-width:100%"
						@if(session('LoggedUser'))
							data-link="{{route('admin.setting.social-media')}}"
						@endif
					>
							{!! html_entity_decode(getSocialMedia()->map_embed) !!}
					</div>

					@include('sardar.widget.contact-form1')


					<div class=" bg-white connect_with">
						<div class="ab_logo text-center">	
							<a href="">
								<img src="{{url('sardar')}}/img/{{getWebsiteOptions()['website_logo']->option_value}}" 
								class="img-fluid footer_logo_block"
								
									@if(session('LoggedUser'))
										data-link="{{route('admin.setting.seo-manage')}}"
									@endif
								>
							</a>	
						</div>
						<div class="social_footer text-center d-block"
						
						@if(session('LoggedUser'))
							data-link="{{route('admin.setting.social-media')}}"
						@endif
						>	
							<ul>
								@if(isset(getSocialMedia()->youtube))
									<li><a href="{{getSocialMedia()->youtube}}"><img src="{{url('sardar')}}/images/youtube.png"></a></li>
								@endif

								@if(isset(getSocialMedia()->twitter))
									<li><a href="{{getSocialMedia()->twitter}}"><img src="{{url('sardar')}}/images/twitter.png"></a></li>
								@endif

								@if(isset(getSocialMedia()->facebook))
									<li><a href="{{getSocialMedia()->facebook}}"><img src="{{url('sardar')}}/images/facebook.png"></a></li>
								@endif

								@if(isset(getSocialMedia()->instagram))
									<li><a href="{{getSocialMedia()->instagram}}"><img src="{{url('sardar')}}/images/instagram.png"></a></li>
								@endif

								@if(isset(getSocialMedia()->linkedin))
									<li><a href="{{getSocialMedia()->linkedin}}"><img src="{{url('sardar')}}/images/linkedin.png"></a></li>
								@endif

								@if(isset(getSocialMedia()->skype))
									<li><a href="{{getSocialMedia()->skype}}"><img src="{{url('sardar')}}/images/skype.png"></a></li>
								@endif
								
								
							</ul>

							<address>{{getSocialMedia()->address}}</address>
						</div>	
					</div>	
					
				</div>	

			</div>	
		</div>	
	</section>

	<section class="about_giant py-4">
		<div class="container-fluid">
			<div class="col-12 p-0 px-lg-3">

				<div class="bootomExploreNowslider">
					<div class="bootomexplore-slide">
						<div class="bootomex_inner">
							<div class="bootomhead-slide footer_page_link_information"

								@if(session('LoggedUser'))
									data-link="{{route('admin.pageLink.create')}}"
								@endif

							>Information</div>
							
							<ul class="d-block pl-3">

								@foreach(getFooterLinks()['pageLinks'] as $pageLink)
									<li><a href="{{$pageLink->url}}"
										
									>
										@if($pageLink->name)
											{{$pageLink->name}}
										@endif</a></li>
								@endforeach

							
								<li><a href="{{route('sitemap')}}">Sitemap</a></li>
							</ul>
						</div>						
					</div>
					<div class="bootomexplore-slide">
						<div class="bootomex_inner">
							<div class="bootomhead-slide footer_page_link_information"
							
							@if(session('LoggedUser'))
								data-link="{{route('admin.commonLink.create','category')}}"
							@endif

							
							>Categories</div>
							<ul class="d-block pl-3 p-xl-0">
							
							@if(count(getFooterLinks()['categoryLinks']) == 0)
								
							@foreach(getMainCategories(0, 8) as $footerCategory)
									<li>
										<a href="{{url('')}}/{{$footerCategory->slug}}">{{$footerCategory->name}}</a>
									</li>
								@endforeach

							@else
								@foreach(getFooterLinks()['categoryLinks'] as $categoryLink)
									@if(isset($categoryLink->slug))
										<li>
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
					</div>
					
					<div class="bootomexplore-slide">
						<div class="bootomex_inner">
							<div class="bootomhead-slide footer_page_link_information" 
								@if(session('LoggedUser'))
									data-link="{{route('admin.commonLink.create','product')}}"
								@endif
							>Products</div>
							<ul class="d-block pl-3 p-xl-0">

							@foreach(getMainCategories(0, 8) as $footerCategory)
								@foreach(getSubCategories($footerCategory->id ,1) as $footerSubCategory)
									<li>
										<a href="{{url('')}}/{{$footerSubCategory->slug}}">
										
										
										{{$footerSubCategory->name}}</a>
									</li>
								@endforeach
							@endforeach
							</ul>
						</div>						
					</div>

					<div class="bootomexplore-slide">
						<div class="bootomex_inner">
							<div class="bootomhead-slide footer_page_blog_information" 
								@if(session('LoggedUser'))
									data-link="{{route('admin.commonLink.create','blog')}}"
								@endif
								>Blog</div>
							<div class="blog-text">
							<ul class="d-block pl-3 p-xl-0">	
							@foreach(getFooterLinks()['blogLinks'] as $blogLink)
									
									@if(isset($blogLink->slug))
									<li>
									<a href="{{url('blog')}}/{{$blogLink->slug}}">
									
										@if(isset($blogLink->display_name))
												{{$blogLink->display_name}}
											@else
											{{$blogLink->name}}
											@endif</a>
										</li>
									@endif
								
									@endforeach

								</ul>
							</div>	
						</div>						
					</div>
					<div class="bootomexplore-slide">
						<div class="bootomex_inner">
							<div class="bootomhead-slide footer_page_link_information" 
								@if(session('LoggedUser'))
									data-link="{{route('admin.commonLink.create','testimonial')}}"
								@endif
								>Testimonials</div>
							<ul class="d-block pl-3 p-xl-0">
							
							@foreach(getFooterLinks()['testimonialLinks'] as $testimonialLink)
								
								
								@if(isset($testimonialLink))
									<li>
									<a href="{{url('testimonials')}}?testimonial={{$testimonialLink->item_id}}">
										@if(isset($testimonialLink->display_name))
												{{$testimonialLink->display_name}}
											@else
											{{$testimonialLink->name}}
											@endif</a>
										</li>
									@endif
								
								@endforeach

							</ul>
						</div>						
					</div>
					
				</div>


			</div>	
		</div>	
	</section>

	<footer class="bg-white" 
	style="background: url({{url('sardar')}}/images/footer-bg.gif);">
		<div class="container-fluid" 
		style="background: url({{url('sardar')}}/images/footer-bg.gif);">	
			<div class="site-footer">	
				<ul>
							
					<li class="text-center"  style="color: #bbb6b6 !important;">
						<p class="text-dark" style="color: #bbb6b6 !important;">This website is powered by:</p> <a href="https://www.thestudio5.com.au/" title="The Studio5 Australia"><img src="{{url('sardar')}}/images/studio5-logo2.png" style="height: 85px;margin-top: 25px;" alt="The Studio5 Australia" class="img-fluid"></a></li>	
					<li class="text-center"><p style="color: #bbb6b6 !important;">This Website is protected <a href="https://www.dmca.com/Protection/Status.aspx?ID=a4028ee2-959b-4c8a-a700-d63422de49a8&amp;refurl=https://www.giantinflatables.in//" title="DMCA.com Protection Status" class="dmca-badge"> <img src="https://images.dmca.com/Badges/dmca_protected_16_120.png?ID=a4028ee2-959b-4c8a-a700-d63422de49a8" alt="DMCA.com Protection Status" class="img-fluid ml-3" width="100"></a></p>
					<br><a href="{{url('')}}"
						 style="color: #bbb6b6 !important;"><span>@ Giant Inflatables.</span>. All Rights Reserved.</a></li>
					<li class="text-center"><p  style="color: #bbb6b6 !important;">SEO-SEM-SMM-PPC By:</p> <a href="https://searchmediabroker.com/" title="Search Media Broker"><img src="{{url('sardar')}}/images/SMB_LOGO_FINAL_WHITE.png" alt="Search Media Broker" class="img-fluid" style="height:120px;"></a></li>
				</ul>
				  <script src="https://images.dmca.com/Badges/DMCABadgeHelper.min.js"> </script>
			</div>	
		</div>	
	</footer>

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