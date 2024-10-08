
	<section class="about_giant pb-5 bg-white wiThmap">
		<div class="container-fluid">
			<div class="col-12">

				<div class="header-t mb-3">
					<h1>Connect With Us</h1>
				</div>	

				<div class="many_partition">
					<div class="facebooks_posts">
					
						{{--!! html_entity_decode(getSocialMedia()->facebook_embed) !!--}}
						
						
						@if(isset(getSocialMedia()->facebook))
						<a href="{{getSocialMedia()->facebook}}" class="facebooks_post_block"

							@if(session('LoggedUser'))
								data-link="{{route('admin.setting.social-media')}}"
							@endif
							>
						<img src="{{url('sardar')}}/images/facebook-page.png" 
							style="width:100%; max-width:300px;"></a>
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
							<a href="#;">
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

	<section class="experts" style="background: #f2f2f2;">
		<div class="container-fluid">
			<div class="col-12">
				<div class="header-t py-4">
					<h1>Giant Inflatable Media World</h1>
				</div>	
			</div>	
		</div>
	</section>



	<section class="media_world bg-white">
		<div class="container-fluid">
			<div class="col-12">
				
				<div class="notinflatables_slider footer_slider">
					<div class="inflatables my_footer_slider">
						<a href="{{url('testimonials')}}">

						<div class="top-buttons infa_bg title_bg_lg footer_title d-flex align-items-center onscreen_media_testimonial_title"
						
						@if(session('LoggedUser'))
							data-link="{{route('testimonials.index')}}"
						@endif

						> 
							<img src="{{url('sardar')}}/img/whats-new.png" class="d-inline-block mr-3"
							 style="width: 48px;height: auto !important;">
							<span class="align-middle" style="position: relative;">Client's Speak</span></div></a>
						
						@if($footerTestimonial)
							<div class="body_media">
								<div class="Innerinflatables_slider mb-3">
									@foreach(getDataObjects('testimonials', 3 ,'ASC') as $footerTestimonial)
										<div class="inflatables">
											<a class="footer_slider_link" href="{{url('testimonials')}}?testimonial={{$footerTestimonial->id}}">
											<div class="img_thumbnail footer_image m-auto onscreen_media_testimonial_item"
											
											@if(session('LoggedUser'))
												data-link="{{route('testimonials.edit', $footerTestimonial->id)}}"
											@endif

											style="background:none;">

												
											
												<img class="img-fluid" src="{{url('web')}}/media/md/{{$footerTestimonial->image}}">
											</div>
											</a>
											<div class="Innerinflatables_slider mb-3">
												<div class="mediaWordFooter">
													<div class="descr">	
														<a href="{{url('testimonials')}}?testimonial={{$footerTestimonial->id}}">
															{!! html_entity_decode($footerTestimonial->title) !!}	
														</a>
													</div>
													<div class="col-12 text-center">	
														<a href="{{url('testimonials')}}?testimonial={{$footerTestimonial->id}}" class="d-inline-block red_btn">SEE ALL</a>
													</div>	
												</div>		
											</div>		
										</div>
									@endforeach
								</div>
							</div>
						@endif	

					</div>

					<div class="inflatables my_footer_slider">
							<a href="{{url('videos')}}">
						<div class="top-buttons mb-1 infa_bg title_bg_lg footer_title d-flex align-items-center onscreen_media_video_title"
								
						@if(session('LoggedUser'))
							data-link="{{route('video.index')}}"
						@endif
						>

							<img src="{{url('sardar')}}/img/see-us-on-youtube.png" class="d-inline-block mr-3"
							 style="width: 48px;height: auto !important;">
							
							
							 
							<span class="align-middle" style="position: relative;">Giant Infatable in Action</span></div></a>
						
						@if($footerVideo)
						<div class="body_media mb-4">
							
						<div class="Innerinflatables_slider mb-3">

									@foreach(getDataObjects('videos', 2 ,'ASC') as $footerVideo)
										<div class="inflatables">
											<a class=""
											 href="{{url('testimonials')}}?testimonial={{$footerVideo->id}}">
											<div class="img_thumbnail footer_image m-auto video_thumbnail onscreen_media_video_item"
											@if(session('LoggedUser'))
													data-link="{{route('video.edit', $footerVideo->id)}}"
												@endif
													
											style="background:none;">
											
												{!! html_entity_decode($footerVideo->youtube_embed) !!}	
											</div>
											</a>
											<div class="Innerinflatables_slider mb-3">
												<div class="mediaWordFooter">
													<div class="descr">	
													<a href="{{url('testimonials')}}?video={{$footerVideo->id}}">
														{!! html_entity_decode($footerVideo->title) !!}	
													</a>

													</div>
													<div class="col-12 text-center">	
														<a href="{{url('testimonials')}}?video={{$footerVideo->id}}" class="d-inline-block red_btn">SEE ALL</a>
													</div>	
												</div>		
											</div>		
										</div>
									@endforeach
									
									
								</div>
						</div>	
						@endif	

					</div>
					<div class="inflatables my_footer_slider">
						<a href="{{url('blog')}}">
						<div class="top-buttons mb-1 infa_bg title_bg_lg footer_title d-flex align-items-center onscreen_media_blog_title"
						@if(session('LoggedUser'))
							data-link="{{route('blog.index')}}"
						@endif
>
						
						<img src="{{url('sardar')}}/img/announcement.png" class="d-inline-block mr-3"
							 style="width: 68px;height: auto !important;">

							<span class="align-middle" style="position: relative;">In News</span></div></a>
						
						@if($footerVideo)
						<div class="body_media mb-4">	
							
							<div class="Innerinflatables_slider mb-3">
									@foreach(getDataObjects('blogs', 3 ,'ASC') as $footerBlog)
										<div class="inflatables">
											<a class="footer_slider_link" href="{{url('blog')}}/{{$footerBlog->slug}}">
											
											<div class="img_thumbnail footer_image m-auto onscreen_media_blog_item" 
											
											@if(session('LoggedUser'))
													data-link="{{route('blog.edit', $footerBlog->id)}}"
												@endif
											
											style="background:none;">
												<img class="img-fluid" src="{{url('web')}}/media/md/{{$footerBlog->image}}">
											</div>

											</a>
											<div class="Innerinflatables_slider mb-3">
												<div class="mediaWordFooter">
													<div class="descr">	

													<a href="{{url('blog')}}/{{$footerBlog->slug}}">
														{!! html_entity_decode($footerBlog->title) !!}	
													</a>

													</div>
													<div class="col-12 text-center">	
														<a href="{{url('blog')}}/{{$footerBlog->slug}}" class="d-inline-block red_btn">SEE ALL</a>
													</div>	
												</div>		
											</div>		
										</div>
									@endforeach
								</div>

						</div>	
						@endif	
						
					</div>

				</div>	

			</div>	
		</div>	
	</section>

	<section class="about_giant pb-4">
		<div class="container-fluid">
			<div class="col-12 p-0">

				<div class="header-t mb-3" >
					<h1><a href="{{url('products')}}">Explore Now</a></h1>
				</div>	

				<div class="px-5 ExploreNowslider" style="background: white;">
					@foreach(getMainCategories() as $getMainCategory)
						<div class="explore-slide">
							<div class="ex_inner">
								<a href="{{url('')}}/{{$getMainCategory->slug}}">
								<div class="head-slide explore-now-title onscreen_explore_now_main_category"
								
								@if(session('LoggedUser'))
									data-link="{{route('admin.category.edit', $getMainCategory->id)}}?type=main_category"
								@endif
								>
								                        
								<img style="max-width: 18px;margin-right: 10px;height: 22px;float: left;"
                            class="noHvr" src="{{ url('sardar') }}/img/active-link-icon.png">
								
									{{$getMainCategory->name}}</div></a>
						
								<ul class="d-block">
								
								@foreach(getSubCategories($getMainCategory->id, 5) as $getSubCategory)
									<li> <a href="{{url('')}}/{{$getSubCategory->slug}}"  class="onscreen_explore_now_sub_category"
									
									@if(session('LoggedUser'))
											data-link="{{route('admin.category.edit', $getSubCategory->id)}}?type=sub_category&id={{$getMainCategory->id}}"
										@endif
										>
										<img src="{{url('sardar')}}/images/plus-icon.png" width="15" 
										class="d-inline-block mr-2"> {{$getSubCategory->name}}
										</a></li>
								@endforeach
								<li style="padding-left: 27px;"> <a href="{{url('')}}/{{$getMainCategory->slug}}"> & More
										</a></li>
								

								</ul>
								<a href="{{url('')}}/{{$getMainCategory->slug}}" class="red_btn mt-0">View All</a>
							</div>				
						</div>
					@endforeach


					</div>


			</div>	
		</div>	
	</section>

	<section class="experts" style="background: #f2f2f2;">
		<div class="container-fluid">
			<div class="col-12">
				<div class="header-t py-4">
					<h1><a href="{{url('contact')}}">Speak with one of our experts</a></h1>
				</div>	
			</div>	
		</div>
	</section>


	<section class="experts bg-white py-4">
		<div class="container-fluid">
			<div class="col-12">
				<ul>
					<li><a href="mailto:{{getSocialMedia()->email}}"> <div class="bXs"><img src="{{url('sardar')}}/images/email_red_icon.png"></div>
						<span>{{getSocialMedia()->email}}</span></a></li>
					<li><a href="{{route('contact')}}"> <div class="bXs"><img src="{{url('sardar')}}/images/chat_red_icon.png"> </div>
						<span>Contact Us </span> </a></li>
					<li><a href="tel:{{getSocialMedia()->phone}}"> <div class="bXs"><img src="{{url('sardar')}}/images/phone_red_icon.png"></div>
					 <span>{{getSocialMedia()->phone}} </span> </a></li>
				</ul>
			</div>	
		</div>	
	</section>
	


	<section class="about_giant py-4">
		<div class="container-fluid">
			<div class="col-12 p-0 px-lg-3">

				<div class="bootomExploreNowslider">
					<div class="bootomexplore-slide">
						<div class="bootomex_inner">
							<div class="bootomhead-slide  footer_page_link_information"

						@if(session('LoggedUser'))
							data-link="{{route('admin.pageLink.create')}}"
						@endif

						>Information</div>

							<ul class="d-block pl-3">

							
								@foreach(getFooterLinks()['pageLinks'] as $pageLink)
									<li><a href="{{$pageLink->url}}">
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
							<?php
								if(isset($blogLink->name)){
									$productName = $blogLink->name;
								}
								else{
									if(isset(getTableData('blogs', $blogLink->item_id)->name)){
										$productName = getTableData('blogs', $blogLink->item_id)->name;
									}else{
										$productName = getTableData('blogs', $blogLink->item_id)->title;
									}				
								}
							?>
									<li><a href="{{url('blog')}}/{{getTableData('blogs', $blogLink->item_id)->slug}}">{{$productName}}</a></li>
								@endforeach

								</ul>
							</div>	
						</div>						
					</div>

					<div class="bootomexplore-slide">
						<div class="bootomex_inner">
							<div class="bootomhead-slide  footer_page_link_information" 
								@if(session('LoggedUser'))
									data-link="{{route('admin.commonLink.create','testimonial')}}"
								@endif
								>Testimonials</div>
							<ul class="d-block pl-3 p-xl-0">
							
							@foreach(getFooterLinks()['testimonialLinks'] as $testimonialLink)
							<?php
								if(isset($testimonialLink->name)){
									$testimonialName = $testimonialLink->name;
								}
								else{
									if(isset(getTableData('testimonials', $testimonialLink->item_id)->name)){
										$testimonialName = getTableData('testimonials', $testimonialLink->item_id)->name;
									}else{
										$testimonialName = getTableData('testimonials', $testimonialLink->item_id)->title;
									}				
								}
							?>
									<li><a href="{{url('testimonials')}}?testimonial={{getTableData('testimonials', $testimonialLink->item_id)->id}}">{{$testimonialName}}</a></li>
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
						<p class="text-dark" style="color: #bbb6b6 !important;">This website is powered by:</p> <a href="https://www.thestudio5.com.au/" title="The Studio5 Australia"><img src="https://www.skyviewaerialphotography.com.au/images/studio5-logo2.png" style="height: 85px;margin-top: 25px;" alt="The Studio5 Australia" class="img-fluid"></a></li>	
					<li class="text-center"><p style="color: #bbb6b6 !important;">This Website is protected <a href="https://www.dmca.com/Protection/Status.aspx?ID=a4028ee2-959b-4c8a-a700-d63422de49a8&amp;refurl=https://www.skyviewaerialphotography.com.au/" title="DMCA.com Protection Status" class="dmca-badge"> <img src="https://images.dmca.com/Badges/dmca_protected_16_120.png?ID=a4028ee2-959b-4c8a-a700-d63422de49a8" alt="DMCA.com Protection Status" class="img-fluid ml-3" width="100"></a></p>
					<br><a href="{{url('')}}"
						 style="color: #bbb6b6 !important;"><span>@ Giant Inflatables.</span>. All Rights Reserved.</a></li>
					<li class="text-left"><p  style="color: #bbb6b6 !important;">SEO-SEM-SMM-PPC By:</p> <a href="https://searchmediabroker.com/" title="Search Media Broker"><img src="https://www.skyviewaerialphotography.com.au/images/smb-logo.png" alt="Search Media Broker" class="img-fluid" style="height:120px;"></a></li>
				</ul>
				  <script src="https://images.dmca.com/Badges/DMCABadgeHelper.min.js"> </script>
			</div>	
		</div>	
	</footer>


	<img src="{{url('sardar')}}/img/border/100X40.png" style="display:none;" />
	<img src="{{url('sardar')}}/img/border/160X40.png" style="display:none;" />
	<img src="{{url('sardar')}}/img/border/140X40.png" style="display:none;" />


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

<!-- 
	<footer class="bg-white">
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
					
					<li><a href="https://searchmediabroker.com/">
					<p class="text-dark">SEO-SEM-SMM-PPC By:</p>
						<img src="{{url('sardar')}}/images/smb-logo.png" width="200" class="img-fluid"></a>
					</li>		
					
				</ul>
				
			</div>	
			<p class="text-center">This Website is protected <img src="{{url('sardar')}}/images/dmca.png" width="100" 
			class="img-fluid ml-3"></p>
				
			<p class="text-center"><a href="#;" class="text-center">@ Giant Inflatables. All rights reserved. </a></p>

		</div>	
	</footer> -->
	