@extends('sardar.layout.front-index')
@section('title','Testimonials')
<style>
.modal-header {
    border: 0px !important;
    padding-bottom: 0px !important;
}
.modal-body {
    padding-top: 0px !important;
}

</style>

@section('custom-js')
<script>
	
$(document).ready(function () {
  $( ".lazyload" ).css('overflow', 'auto');
  $( ".loader" ).hide();
});



function goBack() {
  window.history.back();
}

$( document ).ready(function() {

  $(".open-modal").click(function(){
	  
    var data_image = $(this).attr('data-img');
    var data_type = $(this).attr('data-type');
    var data_title = $(this).attr('data-title');
    var data_clientName = $(this).attr('data-clientName');
    var data_short_description = $(this).attr('data-short_description');
    var data_full_description = $(this).attr('data-full_description');
    
		$('.card-img-top').attr('src',data_image);
		$('.card-title').html(data_title);
		$('.card-client').html(data_clientName);
		$('.short-description').html(data_short_description);
		$('.full-description').html(data_full_description);

		$('body').css({'padding': '0px'});

	if(data_type == 'video'){
		$('.video_block_popup').show();
		$('.card-img-top').hide();
		$('.video_block_popup').append(data_image);
	}else{
		$('.video_block_popup').hide();
		$('.card-img-top').show();
		$('.card-img-top').attr('src',data_image);
	}
	}); 


	$(".open-modal2").click(function(){
	  
		$('.lazyload').css('padding-right', 0);
	  var data_image = $(this).attr('data-img');
	  var data_type = $(this).attr('data-type');
	  var data_title = $(this).attr('data-title');
	  var data_clientName = $(this).attr('data-clientName');
	  var data_short_description = $(this).attr('data-short_description');
	  var data_full_description = $(this).attr('data-full_description');
	  
		  $('.card-img-top').attr('src',data_image);
		  $('.card-title').html(data_title);
		  $('.card-client').html(data_clientName);
		  $('.short-description').html(data_short_description);
		  $('.full-description').html(data_full_description);
  
  
	  if(data_type == 'video'){
		  $('.video_block_popup').show();
		  $('.card-img-top').hide();
		  $('.video_block_popup').html(data_image);
	  }else{
		  $('.video_block_popup').hide();
		  $('.card-img-top').show();
		  $('.card-img-top').attr('src',data_image);
	  }
	  
		  
	  }); 
});
	$(".testimonial").addClass( "active");

</script>
@include('sardar.widget.testimonial-popup')
@endsection
@section('content')

<section class="Top_Details bg-white pt-3 mt-3">
		<div class="container-fluid top-description pt-4">
			<div class="col-12 custom-mt-2 pt-2">
				<div class="header-t mb-3" style="margin-top: 50px;">
					<h1 class="text-red">TESTIMONIALS</h1>
				</div>	
				<div class="w-100 py-4 px-3 TopContent"
					@if(session('LoggedUser'))
						data-link="{{route('admin.testimonial-page.editor')}}"
					@endif
				>
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
				    <li class="breadcrumb-item active" aria-current="page">testimonials</li>

				  </ol>
				<div>
					<a class="btn btn-dark btn-sm btn-rounded" onclick="goBack()"> ❮ Back</a>
				</div>
						</nav>
					</div>	
					
				</div>		
	</section>

	<section class="Blogs_Box media_world bg-white">
		<div class="container-fluid">
			<div class="col-12">
				<div class="notinflatables_slider my_testimonial  row mb-4">
					@foreach($testimonials as $testimonial)
						<div class="col-lg-4 col-sm-6 p-2">
						<div class="inflatables">
						<a 
								data-target="#exampleModal2"
								data-toggle="modal" class="open-modal2 onscreen_popup_block"
								@if(session('LoggedUser'))
									data-link="{{route('testimonials.edit', $testimonial->id)}}"
									data-delete-link="{{route('admin.index')}}/testimonial/delete/{{ $testimonial->id}}"
								@endif

									href="#" id="{{$testimonial->id}}"
									data-clientName="{{$testimonial->client_name}}" 
									data-title="{{$testimonial->title}}" 
									data-short_description="{{$testimonial->short_description}}" 
									data-type= '<?php if($testimonial->youtube_embed){echo 'video';}else{echo 'image';}?>'
									data-full_description = "{{$testimonial->full_description}}"
									<?php

									if($testimonial->youtube_embed){
										?>
										data-img = "{{$testimonial->youtube_embed}}"
										<?php
									}
									else{
										?>
										data-img = "{{url('web')}}/media/lg/{{$testimonial->image}}"
									<?php
									}									
									?>
									>
							<h3  class="InfaTitles" style="min-height: 76px;">{{$testimonial->client_name}}</h3>

							<div class="img_thumbnail testimonial_block m-auto" style="padding:2px;">
								<img style="background:none;padding: 6px;border-radius: 14px;"
								 src="{{url('web')}}/media/lg/{{$testimonial->image}}">
							</div>
							</a>

							
							<div class="mediaWordFooter">
								<p>{{$testimonial->short_description}}</p>
							</div>	
							<div class="col-12 mb-4 text-right mediaWorldFooter">	
								<a href="#" 
								data-target="#exampleModal2"
								data-toggle="modal" class="open-modal2 red_btn"
									id="{{$testimonial->id}}"
									data-clientName="{{$testimonial->client_name}}" 
									data-title="{{$testimonial->title}}" 
									data-short_description="{{$testimonial->short_description}}" 
									data-type= '<?php if($testimonial->youtube_embed){echo 'video';}else{echo 'image';}?>'
									data-full_description = "{{$testimonial->full_description}}"
									<?php

									if($testimonial->youtube_embed){
										?>
										data-img = "{{$testimonial->youtube_embed}}"
										<?php
									}
									else{
										?>
										data-img = "{{url('web')}}/media/lg/{{$testimonial->image}}"
									<?php
									}									
									?>
									
								data-target="#exampleModal2"
								data-toggle="modal" 
								class="red_btn open-modal">READ NOW</a>
							</div>	

						</div>
						</div>

					@endforeach
					<!-- <div class="col-lg-4 col-sm-6 p-2 ">
						<div class="inflatables video-modal">
							<h3 class="InfaTitles">{{$testimonial->client_name}}</h3>
							<div class="img_thumbnail m-auto">
								<img src="{{url('web')}}/media/lg/{{$testimonial->image}}">
							</div>
							<div class="mediaWordFooter">
								<p>{{$testimonial->short_description}}</p>
							</div>	
							<div class="col-12 mb-4 text-right">	
								<a href="#" 
									data-clientName="{{$testimonial->client_name}}" 
									data-title="{{$testimonial->title}}" 
									data-short_description="{{$testimonial->short_description}}" 
									data-img = "{{url('web')}}/media/lg/{{$testimonial->image}}"
									data-full_description = "{{$testimonial->full_description}}"
								data-target="#exampleModal"  data-toggle="modal" class="red_btn open-modal">READ NOW</a>
							</div>	
						</div>
						</div> -->

				</div>	

			</div>	
		</div>	
	</section>

@endsection