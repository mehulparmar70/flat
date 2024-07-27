<div class="mb-6">
    <div class="sidebar-menu col-sm-12 col-md-3 p-0">
        
            <div class="" style="z-index:100;">
                <div class="search-bar text-center">
                    <i class="fa fa-times btn-sidebar" aria-hidden="true"></i>
                </div>	
            </div>

        <div id="logo mt-0">
            <a href="{{url('')}}" class="standard-logo"
            data-dark-logo="{{url('sardar')}}/img/{{getWebsiteOptions()['website_logo']->option_value}}" 
            data-mobile-logo="{{url('sardar')}}/img/{{getWebsiteOptions()['website_logo']->option_value}}" 
            >
            <img src="{{url('sardar')}}/img/{{getWebsiteOptions()['website_logo']->option_value}}"
                style="width: 100%;text-align: center;padding: 4px 27px;margin: 0 auto;"
                class="col-sm-6 col-md-12 mb-2 d-flex"
            ></a>
        </div>

        <nav class="primary-menu on-click sidebar-blo">
            <ul class="sidebar-ul">
		      <li class="menu-item home">
		        <a class="menu-link" href="{{url('')}}">Home <span class="sr-only">(current)</span></a>
		      </li>

		      <li class="menu-item product">
		        <a class="menu-link" href="{{url('products')}}">our products</a>
		      
                <ul class="subMenuBlock">
                @foreach(getMainCategories(0, 16) as $key => $mainCategory)
                    <li class="menu-item product">
                        <a class="menu-link" href="{{url('')}}/{{$mainCategory->slug}}">

                        @foreach(getSubCategories($mainCategory->id, 2) as $subCategories1)
                                        @if(isset(getSubCategoryImages($subCategories1->id, 1, 'DESC')[0]))
                                            @foreach(getSubCategoryImages($subCategories1->id, 1, 'DESC') as $i => $media)
                                                <div class="mega_menu_image onscreen-product-image" 
                                                 
                                                    >
                                                    
                                                    <img class="img-fluid slideshow_img blur_original" src="{{url('web')}}/media/md/{{$media['image']}}">
                                                </div>
                                                @break
                                            @endforeach
                                        @else
                                        @endif
                                        @break
                                    @endforeach
                        <p>{{$mainCategory->name}}</p></a>
                    </li>
                @endforeach
                
                </ul>
            </li>



                <li class="menu-item about">
                <a class="menu-link" href="{{url('about')}}">About</a>
                </li>

                <li class="menu-item testimonial">
                <a class="menu-link" href="{{url('testimonials')}}">Testimonials</a>
                </li>

		      <li class="menu-item video">
		        <a class="menu-link" href="{{url('videos')}}">Videos</a>
		      </li>

		      <li class="menu-item blog">
		        <a class="menu-link" href="{{url('blogs')}}">Blog</a>
		      </li>

		      <li class="menu-item contact">
		        <a class="menu-link" href="{{url('contact-us')}}">Contact Us</a>
		      </li>

			  <div class="two_controls btn-open-form">    
			      <li class="nav-item eneveloper_menu no-effect">
			        <a class="nav-link open-modal" ><img src="{{url('sardar')}}/img/envlp.png" class="img-fluid">Send Us Your Enquiry</a>
			      </li>
			  </div> 
            </ul>
        </nav>

    </div>
    
</div>