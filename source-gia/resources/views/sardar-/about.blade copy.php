@extends('sardar.layout.front-index')
@section('title','About Us')

@section('custom-js')
<script>
	

	$(document).ready(function () {
  $( ".lazyload" ).css('overflow', 'auto');
  $( ".loader" ).hide();
});


function goBack() {
  window.history.back();
}
$(window).scroll(function () {
	    var menu_height = $("#head").height();
    // alert(menu_height);

    if($(window).scrollTop() > 0) {
      $("#head").addClass('sticky');
      $("body").addClass('sticky-menu-body');
      $("body").css({
        'position': 'relative',
        'top': menu_height,
        });
      
    } else {
      $("#head").removeClass('sticky');
      $("body").removeClass('sticky-menu-body');

      $("body").css({
        'position': 'relative',
        'top': 0,
        });
    }
  });

	$(".about").addClass( "active");
</script>

@include('sardar.widget.enquire-now2')

@endsection
@section('content')
	<section class="collection-slider bg-white">
		<div class="container-fluid">
			<div class="col-12">

				<div class="header-t mb-3">
					<h1 class="text-red">About Us</h1>
				</div>	

				<div class="w-100 py-4 px-3 TopContent">
					<p class="mb-2">{!! html_entity_decode($pageData->description) !!}</p>					
				</div>	
			</div>	
		</div>	
	</section>


	<section class="bg-white MyBreadcrumb">
		<div class="row m-0 px-2">
			<div class="col-sm-12 col-12 breadcrumb-left">
				<nav aria-label="breadcrumb " class="pl-2 border_breadcrumb" style="width: 62%;margin: 0 auto;">

				  <ol class="breadcrumb m-0 p-0">
				  <li class="breadcrumb-item"><a href="{{url('')}}">Home</a></li>
					@if(getReffrel())
				    	<li class="breadcrumb-item"><a href="{{getReffrel()['url']}}">{{getReffrel()['name']}}</a></li>
					@endif
                    
				    <li class="breadcrumb-item active" aria-current="page">About Us</li>

				  </ol>
				<div>
					<a class="btn btn-dark btn-sm btn-rounded" onclick="goBack()"> ❮ Back</a>
				</div>
						</nav>
					</div>	
					
				</div>		
	</section>


	<section class="collection-slider bg-white">
		<div class="container-fluid">
			<div class="col-12">


			<div class="header-t">
					<h1><a>ALL INFLATABLES</a></h1>
					<p>Home to a huge collection of in-stock and custom</p>
				</div>
                
                <!-- ALL INFLATABLES 1 -->
                <div class="inflatables_slider big_slide mb-3">
                    @foreach($topInflatables1 as $topInflatable1)
                        <div class="inflatables item-block">
                        <a href="{{url('')}}/{{$topInflatable1->slug}}">
                        
                            <div class="top-buttons infa_bg">

                                <img  style="max-width: 18px;margin-right: 10px;"
                                src="{{ url('sardar') }}/img/active-link-icon.png">

                            {{$topInflatable1->name}}</div></a>
                            <a href="{{url('')}}/{{$topInflatable1->slug}}">

                            <div class="img_thumbnail m-auto slideshow">
                                    @foreach(getSubCategories($topInflatable1->id) as $subCategories1)
                                        @if(isset(getSubCategoryImages($subCategories1->id, 2, 'DESC')[0]))
                                            @foreach(getSubCategoryImages($subCategories1->id, 2, 'DESC') as $i => $media)
                                                <img class="img-fluid slideshow_img" src="{{url('web')}}/media/md/{{$media['image']}}">
                                            @endforeach
                                        @else
                                        @endif
                                    @endforeach
                            </div>
                            </a>
                            
                            <div class="bottom_links d-flex justify-content-between">
                                <div class="bottom_links1">
                                    <a href="{{url('')}}/{{$topInflatable1->slug}}">
                                    <i class="fa fa-eye" aria-hidden="true"></i> &nbsp;
                                    <!-- <img class="eye-icon" src="{{url('sardar')}}/images/view_icon.png"
                                            class="img-fluid">  -->
                                            View All </a>
                                </div>
                               
                                <div class="bottom_links1">
                                    <a class="open-modal" id="{{$topInflatable1->id}}"
									data-title="{{$topInflatable1->name}}" 
									data-image="{{url('web')}}/media/md/{{$topInflatable1->image}}" 
									data-page-url="{{url('')}}/{{$topInflatable1->slug}}" 
									data-product-url="{{url('')}}/{{$topInflatable1->slug}}" 
                                            data-target="#exampleModal"
                                            data-toggle="modal" 
                                            
                                    > 
                                    <i class="fa fa-envelope-o" aria-hidden="true"></i>&nbsp;
                                    <!-- <img class="eye-icon"
                                            src="{{url('sardar')}}/images/email_icon.png" class="img-fluid">  -->
                                            Enquire Now</a>
                                </div>

                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- ALL INFLATABLES 2 -->
                <div class="inflatables_slider big_slide mb-3">
                    @foreach($topInflatables2 as $topInflatables22)
                        <?php
                            $subCat2s = DB::table('categories')->where('parent_id', $topInflatables22->id)->get();
                            // dd($subCat2s)
                        ?>
                        @if($subCat2s)
                        <div class="inflatables item-block">
                        <a href="{{url('')}}/{{$topInflatables22->slug}}">
                        
                            <div class="top-buttons infa_bg">

                                <img style="max-width: 18px;margin-right: 10px;"
                                src="{{ url('sardar') }}/img/active-link-icon.png">

                            {{$topInflatables22->name}}</div></a>
                            <a href="{{url('')}}/{{$topInflatables22->slug}}">
                            <div class="img_thumbnail m-auto slideshow">


                            @foreach(getSubCategories($topInflatables22->id) as $subCategories2)
                                @if(isset(getSubCategoryImages($subCategories2->id, 2, 'DESC')[0]))
                                    @foreach(getSubCategoryImages($subCategories2->id, 2, 'DESC') as $i => $media)
                                        <img class="img-fluid slideshow_img" src="{{url('web')}}/media/md/{{$media['image']}}">
                                    @endforeach
                                @else
                                @endif
                            @endforeach

                            </div>
                            </a>
                            <div class="bottom_links d-flex justify-content-between">
                                <div class="bottom_links1">
                                    <a href="{{url('')}}/{{$topInflatables22->slug}}">
                                    <i class="fa fa-eye" aria-hidden="true"></i> &nbsp;
                                    <!-- <img class="eye-icon" src="{{url('sardar')}}/images/view_icon.png"
                                            class="img-fluid">  -->
                                            View All </a>
                                </div>
                               
                                <div class="bottom_links1">
                                    <a class="open-modal" id="{{$topInflatables22->id}}"
									data-title="{{$topInflatables22->name}}" 
									data-image="{{url('web')}}/media/md/{{$topInflatables22->image}}" 
									data-page-url="{{url('')}}/{{$topInflatables22->slug}}" 
									data-product-url="{{url('')}}/{{$topInflatables22->slug}}" 
                                    
                                            data-target="#exampleModal"
                                            data-toggle="modal" 
                                            
                                    
                                    > 
                                    <i class="fa fa-envelope-o" aria-hidden="true"></i>&nbsp;
                                    <!-- <img class="eye-icon"
                                            src="{{url('sardar')}}/images/email_icon.png" class="img-fluid">  -->
                                            Enquire Now</a>
                                </div>

                            </div>
                        </div>
                        @endif
                    @endforeach
                </div>



                <!-- ALL INFLATABLES 3 -->
                <div class="inflatables_slider big_slide mb-3">
                    @foreach($topInflatables3 as $topInflatable33)
                        <div class="inflatables item-block">
                        <a href="{{url('')}}/{{$topInflatable33->slug}}">
                        
                            <div class="top-buttons infa_bg">

                                <img style="max-width: 18px;margin-right: 10px;"
                                src="{{ url('sardar') }}/img/active-link-icon.png">

                            {{$topInflatable33->name}}</div></a>
                            <a href="{{url('')}}/{{$topInflatable33->slug}}">
                            <div class="img_thumbnail m-auto slideshow">
                                
                            @foreach(getSubCategories($topInflatable33->id) as $subCategories3)
                                @if(isset(getSubCategoryImages($subCategories3->id, 2, 'DESC')[0]))
                                    @foreach(getSubCategoryImages($subCategories3->id, 2, 'DESC') as $i => $media)
                                        <img class="img-fluid slideshow_img" src="{{url('web')}}/media/md/{{$media['image']}}">
                                    @endforeach
                                @else
                                @endif
                            @endforeach


                            </div>
                            </a>
                            <div class="bottom_links d-flex justify-content-between">
                                <div class="bottom_links1">
                                    <a href="{{url('')}}/{{$topInflatable33->slug}}">
                                    <i class="fa fa-eye" aria-hidden="true"></i> &nbsp;
                                    <!-- <img class="eye-icon" src="{{url('sardar')}}/images/view_icon.png"
                                            class="img-fluid">  -->
                                            View All </a>
                                </div>
                               
                                <div class="bottom_links1">
                                    <a class="open-modal" id="{{$topInflatable33->id}}"
									data-title="{{$topInflatable33->name}}" 
									data-image="{{url('web')}}/media/md/{{$topInflatable33->image}}" 
									data-page-url="{{url('')}}/{{$topInflatable33->slug}}" 
									data-product-url="{{url('')}}/{{$topInflatable33->slug}}" 
                                    
                                            data-target="#exampleModal"
                                            data-toggle="modal" 
                                            
                                    
                                    > 
                                    <i class="fa fa-envelope-o" aria-hidden="true"></i>&nbsp;
                                    <!-- <img class="eye-icon"
                                            src="{{url('sardar')}}/images/email_icon.png" class="img-fluid">  -->
                                            Enquire Now</a>
                                </div>

                            </div>
                        </div>
                    @endforeach
                </div>




                <!-- ALL INFLATABLES 4 -->
                <div class="inflatables_slider big_slide mb-3">
                    @foreach($topInflatables4 as $topInflatable44)
                        <div class="inflatables item-block">
                        <a href="{{url('')}}/{{$topInflatable44->slug}}">
                        
                            <div class="top-buttons infa_bg">

                                <img style="max-width: 18px;margin-right: 10px;"
                                src="{{ url('sardar') }}/img/active-link-icon.png">

                            {{$topInflatable44->name}}</div></a>
                            <a href="{{url('')}}/{{$topInflatable44->slug}}">
                            <div class="img_thumbnail m-auto slideshow">
                            

                            @foreach(getSubCategories($topInflatable44->id) as $subCategories4)
                                @if(isset(getSubCategoryImages($subCategories4->id, 2, 'DESC')[0]))
                                    @foreach(getSubCategoryImages($subCategories4->id, 2, 'DESC') as $i => $media)
                                        <img class="img-fluid slideshow_img" src="{{url('web')}}/media/md/{{$media['image']}}">
                                    @endforeach
                                @else
                                @endif
                            @endforeach

                            </div>
                            </a>
                            <div class="bottom_links d-flex justify-content-between">
                                <div class="bottom_links1">
                                    <a href="{{url('')}}/{{$topInflatable44->slug}}">
                                    <i class="fa fa-eye" aria-hidden="true"></i> &nbsp;
                                    <!-- <img class="eye-icon" src="{{url('sardar')}}/images/view_icon.png"
                                            class="img-fluid">  -->
                                            View All </a>
                                </div>
                               
                                <div class="bottom_links1">
                                    <a class="open-modal" id="{{$topInflatable44->id}}"
									data-title="{{$topInflatable44->name}}" 
									data-image="{{url('web')}}/media/md/{{$topInflatable44->image}}" 
									data-page-url="{{url('')}}/{{$topInflatable44->slug}}" 
									data-product-url="{{url('')}}/{{$topInflatable44->slug}}" 
                                    
                                            data-target="#exampleModal"
                                            data-toggle="modal" 
                                            
                                    
                                    > 
                                    <i class="fa fa-envelope-o" aria-hidden="true"></i>&nbsp;
                                    <!-- <img class="eye-icon"
                                            src="{{url('sardar')}}/images/email_icon.png" class="img-fluid">  -->
                                            Enquire Now</a>
                                </div>

                            </div>
                        </div>
                    @endforeach
                </div>



			</div>	
		</div>	
	</section>

@endsection