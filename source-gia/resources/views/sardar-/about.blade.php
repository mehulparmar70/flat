@extends('sardar.layout.front-index')
@section('title','About Us')

@section('custom-js')
<script>
	

// 	$(document).ready(function () {
//   $( ".lazyload" ).css('overflow', 'auto');
//   $( ".loader" ).hide();
// });


  
function goBack() {
  window.history.back();
}


	$(".about").addClass( "active");
</script>

@include('sardar.widget.enquire-now2')

@endsection
@section('content')


	<section class="collection-slider bg-white">
		<div class="container-fluid top-description pt-1">
			<div class="col-12  custom-mt-2">

				<div class="header-t mb-3">
					<h1 class="text-red">About Us</h1>
				</div>	

				<div class="w-100 py-4 px-3 TopContent" 
					
					@if(session('LoggedUser'))
						data-link="{{route('admin.about-page.editor')}}"
					@endif
				>
					<p class="mb-2">{!! html_entity_decode($pageData->description) !!}</p>					
				</div>	
			</div>	
		</div>	
	</section>

	<section class="bg-white MyBreadcrumb">
		<div class="row m-0 px-2">
			<div class="px-2 col-sm-12 col-12 breadcrumb-left">
				<nav aria-label="breadcrumb " class="border_breadcrumb">

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
                
        <!-- ALL INFLATABLES from widget folder -->
        @include('sardar.widget.top-inflatables')



			</div>	
		</div>	
	</section>

@endsection