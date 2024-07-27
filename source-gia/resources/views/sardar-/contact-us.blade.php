@extends('sardar.layout.front-contact')
@section('title','Contact Us')

@section('custom-js')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<script>
	$(".contact").addClass( "active");
</script>
@endsection
@section('content')

	
	<section class="Top_Details bg-white pt-5">
		<div class="container-fluid">
			<div class="col-12  custom-mt-1">
				<div class="header-t mb-3">
					<h1 class="text-red">CONTACT US</h1>
				</div>	

			</div>		
		</div>	
	</section>


	<section class="Top_Details bg-white pt-3">
		<div class="container-fluid top-description pt-4">
			<div class="col-12">
				<div class="w-100 py-4 px-3 TopContent"
					@if(session('LoggedUser'))
						data-link="{{route('admin.contact-page.editor')}}"
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
					
				    <li class="breadcrumb-item active" aria-current="page">Contact Us</li>

				  </ol>
				<div>
					<a class="btn btn-dark btn-sm btn-rounded" onclick="goBack()"> ❮ Back</a>
				</div>
						</nav>
					</div>	
					
				</div>		
	</section>


@endsection