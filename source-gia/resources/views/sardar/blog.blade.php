@extends('sardar.layout.front-index')
@section('title','Blogs')

@section('custom-js')

<script>

$(document).ready(function () {
  $( ".lazyload" ).css('overflow', 'auto');
  $( ".loader" ).hide();
});
function goBack() {
  window.history.back();
}

  
	$(".blog").addClass( "active");
</script>
@endsection
@section('content')



	<section class="Top_Details bg-white pt-3 pt-5">
		<div class="container-fluid top-description pt-4">
			<div class="col-12 custom-mt-2 pt-2">
				<div class="header-t mb-3">
					<h1 class="text-red">INFLATABLES BLOGS</h1>
				</div>	

				<div class="w-100 py-4 px-3 TopContent"
				
				@if(session('LoggedUser'))
					data-link="{{route('admin.blog-page.editor')}}"
				@endif
				>
					<p class="mb-2">{!! html_entity_decode($pageData->description) !!}</p>					
				</div>	
			</div>		
		</div>	
	</section>

	<section class="bg-white MyBreadcrumb mt-3">
		<div class="row m-0 px-2">
			<div class="col-sm-12 col-12 breadcrumb-left">
				<nav aria-label="breadcrumb " class="pl-2 border_breadcrumb" style="width: 62%;margin: 0 auto;">

				  <ol class="breadcrumb m-0 p-0">
				  <li class="breadcrumb-item"><a href="{{url('')}}">Home</a></li>
					@if(getReffrel())
				    	<li class="breadcrumb-item"><a href="{{getReffrel()['url']}}">{{getReffrel()['name']}}</a></li>
					@endif
					
				    <li class="breadcrumb-item active" aria-current="page">Blogs</li>

				  </ol>
				<div>
					<a class="btn btn-dark btn-sm btn-rounded" onclick="goBack()"> ❮ Back</a>
				</div>
						</nav>
					</div>	
				</div>		
	</section>

	
	<section class="Blogs_Box media_world bg-white mt-2">
		<div class="container-fluid">
			<div class="col-12">


				<div class="notinflatables_slider my_blog row mb-0 ">
					@foreach($blogs as $blog)
						<div class="col-lg-4 col-sm-6 p-2"
							>
							<div class="inflatables
							onscreen_page_blog_block"
							@if(session('LoggedUser'))
								data-link="{{route('blog.edit', $blog->id)}}"
								data-delete-link="{{route('admin.index')}}/blog/delete/{{ $blog->id}}"
							@endif
							>
								<h3 class="InfaTitles mb-0">
								<a href="{{url('blog')}}/{{$blog->slug}}">{{addEllipsis($blog->title, 60, '...')}}</a></h3>
								<a href="{{url('blog')}}/{{$blog->slug}}">
									<div class="img_thumbnail blog_block m-auto"
										style="background-size: 58px;"
									>
										<img class="img-fluid p-0" 
										style="object-fit: cover;border-radius: 13px;"
										src="{{url('web')}}/media/md/{{$blog->image}}">

									</div>
								</a>

								<div class="mediaWordFooter">
									<p>{{$blog->short_description}}</p>
								</div>	
								<div class="col-12 mb-4 text-right">	
									<a href="{{url('blog')}}/{{$blog->slug}}" class="red_btn">READ NOW</a>
								</div>	
							</div>
						</div>
					@endforeach

				</div>	
			</div>	
		</div>	
	</section>

@endsection