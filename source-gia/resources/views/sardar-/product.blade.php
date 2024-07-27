@extends('sardar.layout.front-index')
@section('title','Product Page')

@section('custom-js')
<script>


  
function goBack() {
  window.history.back();
}


$(document).ready(function () {
  $( ".lazyload" ).css('overflow', 'auto');
  $( ".loader" ).hide();
});

//         $( document ).ready(function() {
//   $(".open-modal").click(function(){
//     //   alert('test');
//     var data_image = $(this).attr('data-image');
//     var data_type = $(this).attr('data-type');
//     var data_title = $(this).attr('data-title');
//     var data_clientName = $(this).attr('data-clientName');
//     var data_short_description = $(this).attr('data-short_description');
//     var data_full_description = $(this).attr('data-full_description');
    
// 		$('.card-img').attr('src',data_image);
// 		$('.card-image-link').val(data_image);
        
// 		$('.card-title').val(data_title);
// 		$('.card-client').html(data_clientName);
// 		$('.short-description').html(data_short_description);
// 		$('.full-description').html(data_full_description);


		
// 	}); 
// });

	$(".product").addClass( "active");
</script>
@include('sardar.widget.enquire-now2')
@endsection
@section('content')



	<section class="collection-slider bg-white">
		<div class="container-fluid top-description pt-4">
			<div class="col-12  custom-mt-1">

				<div class="header-t mb-3"  style="margin-top:50px;">
					<h1 class="text-red">Giant Inflatable Products</h1>
				</div>	

				<div class="w-100 py-4 px-3 TopContent"
        

				@if(session('LoggedUser'))
					data-link="{{route('admin.product-page.editor')}}"
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


				<nav aria-label="breadcrumb " class="pl-2 border_breadcrumb" style="width: 62%;margin: 0 auto;">

				  <ol class="breadcrumb m-0 p-0">
				  <li class="breadcrumb-item"><a href="{{url('')}}">Home</a></li>
					@if(getReffrel())
				    	<li class="breadcrumb-item"><a href="{{getReffrel()['url']}}">{{getReffrel()['name']}}</a></li>
					@endif
                    
				    <li class="breadcrumb-item active" aria-current="page">Giant Inflatable Products</li>

				  </ol>
		<div>
			<a class="btn btn-dark btn-sm btn-rounded" onclic="goBack()"> ❮ Back</a>
		</div>
						</nav>
					</div>	
					
				</div>		
	</section>


	<section class="collection-slider bg-white" style="margin-top:50px;">
		<div class="container-fluid">


        <div class="header-t">
					<h1><a class="text-red">ALL INFLATABLES</a></h1>
					<p>Home to a huge collection of in-stock and custom</p>
				</div>
                

        <!-- ALL INFLATABLES from widget folder -->
        @include('sardar.widget.top-inflatables')


            </div>
            


		</div>		
</section>


@endsection